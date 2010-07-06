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
 * Localized data
 *
 * @author      Erwan Taloc <erwan.taloc@combodo.com>
 * @author      Romain Quetiez <romain.quetiez@combodo.com>
 * @author      Denis Flaven <denis.flaven@combodo.com>
 * @license     http://www.opensource.org/licenses/gpl-3.0.html LGPL
 */

// Dictionnay conventions
// Class:<class_name>
// Class:<class_name>+
// Class:<class_name>/Attribute:<attribute_code>
// Class:<class_name>/Attribute:<attribute_code>+
// Class:<class_name>/Attribute:<attribute_code>/Value:<value>
// Class:<class_name>/Attribute:<attribute_code>/Value:<value>+
// Class:<class_name>/Stimulus:<stimulus_code>
// Class:<class_name>/Stimulus:<stimulus_code>+


Dict::Add('EN US', 'English', 'English', array(
'Menu:ServiceManagement' => 'Service Management',
'Menu:ServiceManagement+' => 'Service Management Overview',
'UI-ServiceManagementMenu-ContractsBySrvLevel' => 'Contracts by service level',
'UI-ServiceManagementMenu-ContractsByStatus' => 'Contracts by status',
'UI-ServiceManagementMenu-ContractsEndingIn30Days' => 'Contracts ending in less then 30 days',

'Menu:ServiceType' => 'Service Types',
'Menu:ServiceType+' => 'Service Types',
'Menu:ProviderContract' => 'Provider Contracts',
'Menu:ProviderContract+' => 'Provider Contracts',
'Menu:CustomerContract' => 'Customer Contracts',
'Menu:CustomerContract+' => 'Customer Contracts',
'Menu:ServiceSubcategory' => 'Service Subcategories',
'Menu:ServiceSubcategory+' => 'Service Subcategories',
'Menu:Service' => 'Services',
'Menu:Service+' => 'Services',
'Menu:SLA' => 'SLAs',
'Menu:SLA+' => 'Service Level Agreements',
'Menu:SLT' => 'SLTs',
'Menu:SLT+' => 'Service Level Targets',

));


/*
	'UI:ServiceManagementMenu' => 'Gestion des Services',
	'UI:ServiceManagementMenu+' => 'Gestion des Services',
	'UI:ServiceManagementMenu:Title' => 'Résumé des services & contrats',
	'UI-ServiceManagementMenu-ContractsBySrvLevel' => 'Contrats par niveau de service',
	'UI-ServiceManagementMenu-ContractsByStatus' => 'Contrats par état',
	'UI-ServiceManagementMenu-ContractsEndingIn30Days' => 'Contrats se terminant dans moins de 30 jours',
*/


//
// Class: Contract
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:Contract' => 'Contract',
	'Class:Contract+' => '',
	'Class:Contract/Attribute:name' => 'Name',
	'Class:Contract/Attribute:name+' => '',
	'Class:Contract/Attribute:description' => 'Description',
	'Class:Contract/Attribute:description+' => '',
	'Class:Contract/Attribute:start_date' => 'Start data',
	'Class:Contract/Attribute:start_date+' => '',
	'Class:Contract/Attribute:end_date' => 'End date',
	'Class:Contract/Attribute:end_date+' => '',
	'Class:Contract/Attribute:cost' => 'Cost',
	'Class:Contract/Attribute:cost+' => '',
	'Class:Contract/Attribute:cost_currency' => 'Cost Currency',
	'Class:Contract/Attribute:cost_currency+' => '',
	'Class:Contract/Attribute:cost_currency/Value:dollars' => 'Dollars',
	'Class:Contract/Attribute:cost_currency/Value:dollars+' => '',
	'Class:Contract/Attribute:cost_currency/Value:euros' => 'Euros',
	'Class:Contract/Attribute:cost_currency/Value:euros+' => '',
	'Class:Contract/Attribute:cost_unit' => 'Cost unit',
	'Class:Contract/Attribute:cost_unit+' => '',
	'Class:Contract/Attribute:billing_frequency' => 'Billing frequency',
	'Class:Contract/Attribute:billing_frequency+' => '',
	'Class:Contract/Attribute:contact_list' => 'Contacts',
	'Class:Contract/Attribute:contact_list+' => 'Contacts related to the contract',
	'Class:Contract/Attribute:document_list' => 'Documents',
	'Class:Contract/Attribute:document_list+' => 'Documents attached to the contract',
	'Class:Contract/Attribute:ci_list' => 'CIs',
	'Class:Contract/Attribute:ci_list+' => 'CI supported by the contract',
	'Class:Contract/Attribute:finalclass' => 'Type',
	'Class:Contract/Attribute:finalclass+' => '',
));

//
// Class: ProviderContract
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:ProviderContract' => 'Provider Contract',
	'Class:ProviderContract+' => '',
	'Class:ProviderContract/Attribute:provider_id' => 'Provider',
	'Class:ProviderContract/Attribute:provider_id+' => '',
	'Class:ProviderContract/Attribute:provider_name' => 'Provider name',
	'Class:ProviderContract/Attribute:provider_name+' => '',
	'Class:ProviderContract/Attribute:sla' => 'SLA',
	'Class:ProviderContract/Attribute:sla+' => 'Service Level Agreement',
	'Class:ProviderContract/Attribute:coverage' => 'Coverage',
	'Class:ProviderContract/Attribute:coverage+' => '',
	'Class:ProviderContract/Attribute:customer_list' => 'Customers',
	'Class:ProviderContract/Attribute:customer_list+' => 'Organizations for which this contract is delivering services',
));

//
// Class: CustomerContract
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:CustomerContract' => 'Customer Contract',
	'Class:CustomerContract+' => '',
	'Class:CustomerContract/Attribute:org_id' => 'Customer',
	'Class:CustomerContract/Attribute:org_id+' => '',
	'Class:CustomerContract/Attribute:org_name' => 'Customer name',
	'Class:CustomerContract/Attribute:org_name+' => '',
	'Class:CustomerContract/Attribute:support_team_id' => 'Support team',
	'Class:CustomerContract/Attribute:support_team_id+' => '',
	'Class:CustomerContract/Attribute:support_team_name' => 'Support team',
	'Class:CustomerContract/Attribute:support_team_name+' => '',
	'Class:CustomerContract/Attribute:provider_list' => 'Providers',
	'Class:CustomerContract/Attribute:provider_list+' => '',
	'Class:CustomerContract/Attribute:sla_list' => 'SLAs',
	'Class:CustomerContract/Attribute:sla_list+' => 'List of SLA related to the contract',
));

//
// Class: lnkProviderToCustomer
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:lnkProviderToCustomer' => 'Provider/Customer',
	'Class:lnkProviderToCustomer+' => '',
	'Class:lnkProviderToCustomer/Attribute:provider_id' => 'Provider',
	'Class:lnkProviderToCustomer/Attribute:provider_id+' => '',
	'Class:lnkProviderToCustomer/Attribute:provider_name' => 'Provider',
	'Class:lnkProviderToCustomer/Attribute:provider_name+' => '',
	'Class:lnkProviderToCustomer/Attribute:org_id' => 'Customer',
	'Class:lnkProviderToCustomer/Attribute:org_id+' => '',
	'Class:lnkProviderToCustomer/Attribute:org_name' => 'Customer',
	'Class:lnkProviderToCustomer/Attribute:org_name+' => '',
));

//
// Class: lnkContractToSLA
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:lnkContractToSLA' => 'Contract/SLA',
	'Class:lnkContractToSLA+' => '',
	'Class:lnkContractToSLA/Attribute:contract_id' => 'Contract',
	'Class:lnkContractToSLA/Attribute:contract_id+' => '',
	'Class:lnkContractToSLA/Attribute:contract_name' => 'Contract',
	'Class:lnkContractToSLA/Attribute:contract_name+' => '',
	'Class:lnkContractToSLA/Attribute:sla_id' => 'SLA',
	'Class:lnkContractToSLA/Attribute:sla_id+' => '',
	'Class:lnkContractToSLA/Attribute:sla_name' => 'SLA',
	'Class:lnkContractToSLA/Attribute:sla_name+' => '',
	'Class:lnkContractToSLA/Attribute:coverage' => 'Coverage',
	'Class:lnkContractToSLA/Attribute:coverage+' => '',
));

//
// Class: lnkContractToDoc
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:lnkContractToDoc' => 'Contract/Doc',
	'Class:lnkContractToDoc+' => '',
	'Class:lnkContractToDoc/Attribute:contract_id' => 'Contract',
	'Class:lnkContractToDoc/Attribute:contract_id+' => '',
	'Class:lnkContractToDoc/Attribute:contract_name' => 'Contract',
	'Class:lnkContractToDoc/Attribute:contract_name+' => '',
	'Class:lnkContractToDoc/Attribute:document_id' => 'Document',
	'Class:lnkContractToDoc/Attribute:document_id+' => '',
	'Class:lnkContractToDoc/Attribute:document_name' => 'Document',
	'Class:lnkContractToDoc/Attribute:document_name+' => '',
	'Class:lnkContractToDoc/Attribute:document_type' => 'Document type',
	'Class:lnkContractToDoc/Attribute:document_type+' => '',
	'Class:lnkContractToDoc/Attribute:document_status' => 'Document status',
	'Class:lnkContractToDoc/Attribute:document_status+' => '',
));

//
// Class: lnkContractToContact
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:lnkContractToContact' => 'Contract/Contact',
	'Class:lnkContractToContact+' => '',
	'Class:lnkContractToContact/Attribute:contract_id' => 'Contract',
	'Class:lnkContractToContact/Attribute:contract_id+' => '',
	'Class:lnkContractToContact/Attribute:contract_name' => 'Contract',
	'Class:lnkContractToContact/Attribute:contract_name+' => '',
	'Class:lnkContractToContact/Attribute:contact_id' => 'Contact',
	'Class:lnkContractToContact/Attribute:contact_id+' => '',
	'Class:lnkContractToContact/Attribute:contact_name' => 'Contact',
	'Class:lnkContractToContact/Attribute:contact_name+' => '',
	'Class:lnkContractToContact/Attribute:contact_email' => 'Contact email',
	'Class:lnkContractToContact/Attribute:contact_email+' => '',
	'Class:lnkContractToContact/Attribute:role' => 'Role',
	'Class:lnkContractToContact/Attribute:role+' => '',
));

//
// Class: lnkContractToCI
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:lnkContractToCI' => 'Contract/CI',
	'Class:lnkContractToCI+' => '',
	'Class:lnkContractToCI/Attribute:contract_id' => 'Contract',
	'Class:lnkContractToCI/Attribute:contract_id+' => '',
	'Class:lnkContractToCI/Attribute:contract_name' => 'Contract',
	'Class:lnkContractToCI/Attribute:contract_name+' => '',
	'Class:lnkContractToCI/Attribute:ci_id' => 'CI',
	'Class:lnkContractToCI/Attribute:ci_id+' => '',
	'Class:lnkContractToCI/Attribute:ci_name' => 'CI',
	'Class:lnkContractToCI/Attribute:ci_name+' => '',
	'Class:lnkContractToCI/Attribute:ci_status' => 'CI status',
	'Class:lnkContractToCI/Attribute:ci_status+' => '',
));

//
// Class: Service
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:Service' => 'Service',
	'Class:Service+' => '',
	'Class:Service/Attribute:name' => 'Name',
	'Class:Service/Attribute:name+' => '',
	'Class:Service/Attribute:description' => 'Description',
	'Class:Service/Attribute:description+' => '',
	'Class:Service/Attribute:type' => 'Type',
	'Class:Service/Attribute:type+' => '',
	'Class:Service/Attribute:type/Value:IncidentManagement' => 'Incident Management',
	'Class:Service/Attribute:type/Value:IncidentManagement+' => 'Incident Management',
	'Class:Service/Attribute:type/Value:RequestManagement' => 'Request Management',
	'Class:Service/Attribute:type/Value:RequestManagement+' => 'Request Management',
	'Class:Service/Attribute:status' => 'Status',
	'Class:Service/Attribute:status+' => '',
	'Class:Service/Attribute:status/Value:design' => 'Design',
	'Class:Service/Attribute:status/Value:design+' => '',
	'Class:Service/Attribute:status/Value:obsolete' => 'Obsolete',
	'Class:Service/Attribute:status/Value:obsolete+' => '',
	'Class:Service/Attribute:status/Value:production' => 'Production',
	'Class:Service/Attribute:status/Value:production+' => '',
	'Class:Service/Attribute:subcategory_list' => 'Service subcategories',
	'Class:Service/Attribute:subcategory_list+' => '',
	'Class:Service/Attribute:sla_list' => 'SLAs',
	'Class:Service/Attribute:sla_list+' => '',
	'Class:Service/Attribute:document_list' => 'Documents',
	'Class:Service/Attribute:document_list+' => 'Documents attached to the service',
	'Class:Service/Attribute:contact_list' => 'Contacts',
	'Class:Service/Attribute:contact_list+' => 'Contacts having a role for this service',
));

//
// Class: ServiceSubcategory
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:ServiceSubcategory' => 'Service Subcategory',
	'Class:ServiceSubcategory+' => '',
	'Class:ServiceSubcategory/Attribute:name' => 'Name',
	'Class:ServiceSubcategory/Attribute:name+' => '',
	'Class:ServiceSubcategory/Attribute:description' => 'Description',
	'Class:ServiceSubcategory/Attribute:description+' => '',
	'Class:ServiceSubcategory/Attribute:service_id' => 'Service',
	'Class:ServiceSubcategory/Attribute:service_id+' => '',
	'Class:ServiceSubcategory/Attribute:service_name' => 'Service',
	'Class:ServiceSubcategory/Attribute:service_name+' => '',
));

//
// Class: SLA
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:SLA' => 'SLA',
	'Class:SLA+' => '',
	'Class:SLA/Attribute:name' => 'Name',
	'Class:SLA/Attribute:name+' => '',
	'Class:SLA/Attribute:service_id' => 'Service',
	'Class:SLA/Attribute:service_id+' => '',
	'Class:SLA/Attribute:service_name' => 'Service',
	'Class:SLA/Attribute:service_name+' => '',
	'Class:SLA/Attribute:slt_list' => 'SLTs',
	'Class:SLA/Attribute:slt_list+' => 'List Service Level Thresholds',
));

//
// Class: SLT
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:SLT' => 'SLT',
	'Class:SLT+' => '',
	'Class:SLT/Attribute:name' => 'Name',
	'Class:SLT/Attribute:name+' => '',
	'Class:SLT/Attribute:metric' => 'Metric',
	'Class:SLT/Attribute:metric+' => '',
	'Class:SLT/Attribute:metric/Value:TTO' => 'TTO',
	'Class:SLT/Attribute:metric/Value:TTO+' => 'TTO',
	'Class:SLT/Attribute:metric/Value:TTR' => 'TTR',
	'Class:SLT/Attribute:metric/Value:TTR+' => 'TTR',
	'Class:SLT/Attribute:ticket_priority' => 'Ticket priority',
	'Class:SLT/Attribute:ticket_priority+' => '',
	'Class:SLT/Attribute:ticket_priority/Value:1' => '1',
	'Class:SLT/Attribute:ticket_priority/Value:1+' => '1',
	'Class:SLT/Attribute:ticket_priority/Value:2' => '2',
	'Class:SLT/Attribute:ticket_priority/Value:2+' => '2',
	'Class:SLT/Attribute:ticket_priority/Value:3' => '3',
	'Class:SLT/Attribute:ticket_priority/Value:3+' => '3',
	'Class:SLT/Attribute:value' => 'Value',
	'Class:SLT/Attribute:value+' => '',
	'Class:SLT/Attribute:value_unit' => 'Unit',
	'Class:SLT/Attribute:value_unit+' => '',
	'Class:SLT/Attribute:value_unit/Value:days' => 'days',
	'Class:SLT/Attribute:value_unit/Value:days+' => 'days',
	'Class:SLT/Attribute:value_unit/Value:hours' => 'hours',
	'Class:SLT/Attribute:value_unit/Value:hours+' => 'hours',
	'Class:SLT/Attribute:value_unit/Value:minutes' => 'minutes',
	'Class:SLT/Attribute:value_unit/Value:minutes+' => 'minutes',
	'Class:SLT/Attribute:sla_list' => 'SLAs',
	'Class:SLT/Attribute:sla_list+' => 'SLAs using the SLT',
));

//
// Class: lnkSLTToSLA
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:lnkSLTToSLA' => 'SLT/SLA',
	'Class:lnkSLTToSLA+' => '',
	'Class:lnkSLTToSLA/Attribute:sla_id' => 'SLA',
	'Class:lnkSLTToSLA/Attribute:sla_id+' => '',
	'Class:lnkSLTToSLA/Attribute:sla_name' => 'SLA',
	'Class:lnkSLTToSLA/Attribute:sla_name+' => '',
	'Class:lnkSLTToSLA/Attribute:slt_id' => 'SLT',
	'Class:lnkSLTToSLA/Attribute:slt_id+' => '',
	'Class:lnkSLTToSLA/Attribute:slt_name' => 'SLT',
	'Class:lnkSLTToSLA/Attribute:slt_name+' => '',
	'Class:lnkSLTToSLA/Attribute:slt_metric' => 'Metric',
	'Class:lnkSLTToSLA/Attribute:slt_metric+' => '',
	'Class:lnkSLTToSLA/Attribute:slt_ticket_priority' => 'Ticket priority',
	'Class:lnkSLTToSLA/Attribute:slt_ticket_priority+' => '',
	'Class:lnkSLTToSLA/Attribute:slt_value' => 'Value',
	'Class:lnkSLTToSLA/Attribute:slt_value+' => '',
	'Class:lnkSLTToSLA/Attribute:slt_value_unit' => 'Unit',
	'Class:lnkSLTToSLA/Attribute:slt_value_unit+' => '',
));

//
// Class: lnkServiceToDoc
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:lnkServiceToDoc' => 'Service/Doc',
	'Class:lnkServiceToDoc+' => '',
	'Class:lnkServiceToDoc/Attribute:service_id' => 'Service',
	'Class:lnkServiceToDoc/Attribute:service_id+' => '',
	'Class:lnkServiceToDoc/Attribute:service_name' => 'Service',
	'Class:lnkServiceToDoc/Attribute:service_name+' => '',
	'Class:lnkServiceToDoc/Attribute:document_id' => 'Document',
	'Class:lnkServiceToDoc/Attribute:document_id+' => '',
	'Class:lnkServiceToDoc/Attribute:document_name' => 'Document',
	'Class:lnkServiceToDoc/Attribute:document_name+' => '',
	'Class:lnkServiceToDoc/Attribute:document_type' => 'Document type',
	'Class:lnkServiceToDoc/Attribute:document_type+' => '',
	'Class:lnkServiceToDoc/Attribute:document_status' => 'Document status',
	'Class:lnkServiceToDoc/Attribute:document_status+' => '',
));

//
// Class: lnkServiceToContact
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:lnkServiceToContact' => 'Service/Contact',
	'Class:lnkServiceToContact+' => '',
	'Class:lnkServiceToContact/Attribute:service_id' => 'Service',
	'Class:lnkServiceToContact/Attribute:service_id+' => '',
	'Class:lnkServiceToContact/Attribute:service_name' => 'Service',
	'Class:lnkServiceToContact/Attribute:service_name+' => '',
	'Class:lnkServiceToContact/Attribute:contact_id' => 'Contact',
	'Class:lnkServiceToContact/Attribute:contact_id+' => '',
	'Class:lnkServiceToContact/Attribute:contact_name' => 'Contact',
	'Class:lnkServiceToContact/Attribute:contact_name+' => '',
	'Class:lnkServiceToContact/Attribute:contact_email' => 'Contact email',
	'Class:lnkServiceToContact/Attribute:contact_email+' => '',
));

//
// Class: lnkServiceToCI
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:lnkServiceToCI' => 'Service/CI',
	'Class:lnkServiceToCI+' => '',
	'Class:lnkServiceToCI/Attribute:service_id' => 'Service',
	'Class:lnkServiceToCI/Attribute:service_id+' => '',
	'Class:lnkServiceToCI/Attribute:service_name' => 'Service',
	'Class:lnkServiceToCI/Attribute:service_name+' => '',
	'Class:lnkServiceToCI/Attribute:ci_id' => 'CI',
	'Class:lnkServiceToCI/Attribute:ci_id+' => '',
	'Class:lnkServiceToCI/Attribute:ci_name' => 'CI',
	'Class:lnkServiceToCI/Attribute:ci_name+' => '',
	'Class:lnkServiceToCI/Attribute:ci_status' => 'CI status',
	'Class:lnkServiceToCI/Attribute:ci_status+' => '',
));


?>
