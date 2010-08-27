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
 * Class UIPasswordWidget
 * UI wdiget for displaying and editing one-way encrypted passwords
 *
 * @author      Erwan Taloc <erwan.taloc@combodo.com>
 * @author      Romain Quetiez <romain.quetiez@combodo.com>
 * @author      Denis Flaven <denis.flaven@combodo.com>
 * @license     http://www.opensource.org/licenses/gpl-3.0.html LGPL
 */

require_once('../application/webpage.class.inc.php');
require_once('../application/displayblock.class.inc.php');

class UIPasswordWidget 
{
	protected static $iWidgetIndex = 0;
	protected $sAttCode;
	protected $sNameSuffix;
	protected $iId;
	
	public function __construct($sAttCode, $iInputId, $sNameSuffix = '')
	{
		self::$iWidgetIndex++;
		$this->sAttCode = $sAttCode;
		$this->sNameSuffix = $sNameSuffix;
		$this->iId = $iInputId;
	}
	
	/**
	 * Get the HTML fragment corresponding to the linkset editing widget
	 * @param WebPage $oP The web page used for all the output
	 * @param Hash $aArgs Extra context arguments
	 * @return string The HTML fragment to be inserted into the page
	 */
	public function Display(WebPage $oPage, $aArgs = array())
	{
		$sCode = $this->sAttCode.$this->sNameSuffix;
		$iWidgetIndex = self::$iWidgetIndex;
		$sHtmlValue = '';
		$sHtmlValue = '<input type="password" name="attr_'.$sCode.'" id="'.$this->iId.'" value="*****"/>&nbsp;<span id="v_'.$this->iId.'"></span><br/>';
		$sHtmlValue .= '<input type="password" id="'.$this->iId.'_confirm" value="*****"/> '.Dict::S('UI:PasswordConfirm').' <input type="button" value="'.Dict::S('UI:Button:ResetPassword').'" onClick="ResetPwd(\''.$this->iId.'\');">';
		$sHtmlValue .= '<input type="hidden" id="'.$this->iId.'_changed" name="attr_'.$sCode.'_changed" value="0"/>';

		$oPage->add_ready_script("$('#$this->iId').bind('keyup change', function(evt) { return PasswordFieldChanged('$this->iId') } );"); // Bind to a custom event: validate
		$oPage->add_ready_script("$('#$this->iId').bind('keyup change', function(evt) { return PasswordFieldChanged('$this->iId') } );"); // Bind to a custom event: validate
		$oPage->add_ready_script("$('#$this->iId').bind('keyup change validate', function(evt, sFormId) { return ValidatePasswordField('$this->iId', sFormId) } );"); // Bind to a custom event: validate
		$oPage->add_ready_script("$('#{$this->iId}_confirm').bind('keyup change', function(evt, sFormId) { return ValidatePasswordField('$this->iId', sFormId) } );"); // Bind to a custom event: validate

		return $sHtmlValue;
	}
}
?>