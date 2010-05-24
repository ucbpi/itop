<?php
// Copyright (C) 2010 Combodo SARL
//
//   This program is free software; you can redistribute it and/or modify
//   it under the terms of the GNU General Public License as published by
//   the Free Software Foundation; version 3 of the License.
//
//   This program is distributed in the hope that it will be useful,
//   but WITHOUT ANY WARRANTY; without even the implied warranty of
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//   GNU General Public License for more details.
//
//   You should have received a copy of the GNU General Public License
//   along with this program; if not, write to the Free Software
//   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

/**
 * Renders a graph as a png (directly in the HTTP response)
 *
 * @author      Erwan Taloc <erwan.taloc@combodo.com>
 * @author      Romain Quetiez <romain.quetiez@combodo.com>
 * @author      Denis Flaven <denis.flaven@combodo.com>
 * @license     http://www.opensource.org/licenses/gpl-3.0.html LGPL
 */

require_once('../application/application.inc.php');
require_once('../application/itopwebpage.class.inc.php');

require_once('../application/startup.inc.php');

/**
 * Helper to generate a Graphviz code for displaying the life cycle of a class
 * @param string $sClass The class to display
 * @return string The Graph description in Graphviz/Dot syntax   
 */
function GraphvizLifecycle($sClass)
{
	$sDotFileContent = "";
	$sStateAttCode = MetaModel::GetStateAttributeCode($sClass);
	if (empty($sStateAttCode))
	{
		//$oPage->p("no lifecycle for this class");
	}
	else
	{
		$aStates = MetaModel::EnumStates($sClass);
		$aStimuli = MetaModel::EnumStimuli($sClass);
		$sDotFileContent .= "digraph finite_state_machine {
	rankdir=LR;
	size=\"12,12\"
	node [ fontname=Verdana ];
	edge [ fontname=Verdana ];
";
		$aStatesLinks = array();
		foreach ($aStates as $sStateCode => $aStateDef)
		{
			$aStatesLinks[$sStateCode] = array('in' => 0, 'out' => 0);
		}
		
		foreach ($aStates as $sStateCode => $aStateDef)
		{
			$sStateLabel = MetaModel::GetStateLabel($sClass, $sStateCode);
			$sStateDescription = MetaModel::GetStateDescription($sClass, $sStateCode);
			foreach(MetaModel::EnumTransitions($sClass, $sStateCode) as $sStimulusCode => $aTransitionDef)
			{
				$aStatesLinks[$sStateCode]['out']++;
				$aStatesLinks[$aTransitionDef['target_state']]['in']++;
				$sStimulusLabel = $aStimuli[$sStimulusCode]->GetLabel();
				$sTargetStateLabel = MetaModel::GetStateLabel($sClass, $aTransitionDef['target_state']);
				$sDotFileContent .= "\t$sStateCode -> {$aTransitionDef['target_state']} [ label=\"$sStimulusLabel\"];\n";
			}
		}
		foreach($aStates as $sStateCode => $aStateDef)
		{
			$sStateLabel = str_replace(' ', '\n', MetaModel::GetStateLabel($sClass, $sStateCode));
			if ( ($aStatesLinks[$sStateCode]['in'] == 0) || ($aStatesLinks[$sStateCode]['out'] == 0))
			{
				$sDotFileContent .= "\t$sStateCode [ shape=doublecircle,label=\"$sStateLabel\"];\n";
			}
			else
			{
				$sDotFileContent .= "\t$sStateCode [ shape=circle,label=\"$sStateLabel\"];\n";
			}
		}
		$sDotFileContent .= "}\n";
	}
	return $sDotFileContent;
}

$sClass = utils::ReadParam('class', 'bizIncidentTicket');
$sDir = dirname(__FILE__);
$sImageFilePath = $sDir."/../images/lifecycle/".$sClass.".png";
if (file_exists("/iTop/Graphviz/bin/dot.exe"))
{
	// create the file with Graphviz
	$sDotDescription = GraphvizLifecycle($sClass);
	$sDotFilePath = $sDir."/tmp-lifecycle.dot";
	$rFile = fopen($sDotFilePath, "w");
	fwrite($rFile, $sDotDescription);
	fclose($rFile);
	exec("/iTop/Graphviz/bin/dot.exe -Tpng < $sDotFilePath > $sImageFilePath");
}

header('Content-type: image/png');
echo file_get_contents($sImageFilePath);
?>
