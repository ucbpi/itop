<?php


SetupWebPage::AddModule(
	__FILE__, // Path to the current file, all other file names are relative to the directory containing this file
	'itop-service-mgmt/1.0.0',
	array(
		// Identification
		//
		'label' => 'Service Management (services, SLAs, contracts)',

		// Setup
		//
		'dependencies' => array(
			'itop-config-mgmt/1.0.0',
		),
		'mandatory' => false,
		'visible' => true,

		// Components
		//
		'datamodel' => array(
			'model.itop-service-mgmt.php',
		),
		'dictionary' => array(
			'en.dict.itop-service-mgmt.php',
		),
		'data.struct' => array(
			//'data.struct.itop-service-mgmt.xml',
		),
		'data.sample' => array(
			'data.sample.service.xml',
			'data.sample.servicesubcategory.xml',
			'data.sample.sla.xml',
			'data.sample.slt.xml',
			'data.sample.slttosla.xml',
			'data.sample.customercontract.xml',
			'data.sample.contracttosla.xml',
		),
		
		// Documentation
		//
		'doc.manual_setup' => '', // No manual installation instructions
		'doc.more_information' => '/doc/xxx/yyy.htm',
	)
);

?>
