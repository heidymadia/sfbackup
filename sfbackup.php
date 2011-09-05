<?php
require_once 'lib/soapclient/SforceEnterpriseClient.php';

class sfbackup{
	
	private $sessionID;
	private $url;
	private $sfConnection;
	
	private $accountsFields = array("id", "AccountNumber", "Active__c", "AnnualRevenue", "BillingCity", "BillingCountry", "BillingPostalCode", "BillingState", "BillingStreet", "CreatedById", "CreatedDate", "CustomerPriority__c", "Description", "Fax", "Industry", "IsDeleted", "Jigsaw", "LastActivityDate", "LastModifiedById", "LastModifiedDate", "MasterRecordId", "Name", "NumberOfEmployees", "NumberofLocations__c", "OwnerId", "Ownership", "ParentId", "Phone", "Rating", "SLAExpirationDate__c", "SLASerialNumber__c", "SLA__c", "ShippingCity", "ShippingCountry", "ShippingPostalCode", "ShippingState", "ShippingStreet", "Sic", "Site", "SystemModstamp", "TickerSymbol", "Type", "UpsellOpportunity__c", "Website");
	private $contactsFields = array("id", "AccountId", "AssistantName", "AssistantPhone", "Birthdate", "CreatedById", "CreatedDate", "Department", "Description", "Email", "EmailBouncedDate", "EmailBouncedReason", "Fax", "FirstName", "HomePhone", "IsDeleted", "Jigsaw", "Languages__c", "LastActivityDate", "LastCURequestDate", "LastCUUpdateDate", "LastModifiedById", "LastModifiedDate", "LastName", "LeadSource", "Level__c", "MailingCity", "MailingCountry", "MailingPostalCode", "MailingState", "MailingStreet", "MasterRecordId", "MobilePhone", "Name", "OtherCity", "OtherCountry", "OtherPhone", "OtherPostalCode", "OtherState", "OtherStreet", "OwnerId", "Phone", "ReportsToId", "Salutation", "SystemModstamp", "Title");
	private $leadsFields = array("id", "AnnualRevenue", "City", "Company", "ConvertedAccountId", "ConvertedContactId", "ConvertedDate", "ConvertedOpportunityId", "Country", "CreatedById", "CreatedDate", "CurrentGenerators__c", "Description", "Email", "EmailBouncedDate", "EmailBouncedReason", "Fax", "FirstName", "Industry", "IsConverted", "IsDeleted", "IsUnreadByOwner", "Jigsaw", "LastActivityDate", "LastModifiedById", "LastModifiedDate", "LastName", "LeadSource", "MasterRecordId", "MobilePhone", "Name", "NumberOfEmployees", "NumberofLocations__c", "OwnerId", "Phone", "PostalCode", "Primary__c", "ProductInterest__c", "Rating", "SICCode__c", "Salutation", "State", "Status", "Street", "SystemModstamp", "Title", "Website");
	private $opportunitiesFields = array("id", "AccountId", "Amount", "CampaignId", "CloseDate", "CreatedById", "CreatedDate", "CurrentGenerators__c", "DeliveryInstallationStatus__c", "Description", "ExpectedRevenue", "Fiscal", "FiscalQuarter", "FiscalYear", "ForecastCategory", "ForecastCategoryName", "HasOpportunityLineItem", "IsClosed", "IsDeleted", "IsPrivate", "IsWon", "LastActivityDate", "LastModifiedById", "LastModifiedDate", "LeadSource", "MainCompetitors__c", "Name", "NextStep", "OrderNumber__c", "OwnerId", "Pricebook2Id", "Probability", "StageName", "SystemModstamp", "TotalOpportunityQuantity", "TrackingNumber__c", "Type");
	private $tasksFields = array("id", "AccountId", "ActivityDate", "CallDisposition", "CallDurationInSeconds", "CallObject", "CallType", "CreatedById", "CreatedDate", "Description", "IsArchived", "IsClosed", "IsDeleted", "IsRecurrence", "IsReminderSet", "LastModifiedById", "LastModifiedDate", "OwnerId", "Priority", "RecurrenceActivityId", "RecurrenceDayOfMonth", "RecurrenceDayOfWeekMask", "RecurrenceEndDateOnly", "RecurrenceInstance", "RecurrenceInterval", "RecurrenceMonthOfYear", "RecurrenceStartDateOnly", "RecurrenceTimeZoneSidKey", "RecurrenceType", "ReminderDateTime", "Status", "Subject", "SystemModstamp", "WhatId", "WhoId");

	function __construct(){	}
	
	private function _getConnection($sessionID='', $url=''){
		if(!empty($sessionID))
		  $this->sessionID = $sessionID;
		 
		if(!empty($url))
		  $this->url = $url;
		  
		$this->sfConnection = new SforceEnterpriseClient();
		$this->sfConnection->createConnection("/var/www/workspace/sfbackup/lib/soapclient/enterprise1.wsdl.xml");

    $this->sfConnection->setSessionHeader($this->sessionID);
    $this->sfConnection->setEndpoint($this->url);
       
	}
	
	function getConnection($sessionID='', $url=''){
		$this->_getConnection($sessionID, $url);
	}

	
	
	function backupAccount(){
		$fields = implode(", ", $this->accountsFields);
		
		$soqlQuery = "SELECT ".$fields." FROM Account WHERE id = '".$_GET['acc']."'";
		$response = $this->sfConnection->query($soqlQuery);
		
		echo "<pre>";
    var_dump($soqlQuery);
    echo "</pre>";
		
		
	}
	
	function backupContact(){
		
	}
	
	function backupTask(){
		
	}
	
	function backupOpportunity(){
		
	}
	
	function backupLeads(){
		
	}
}

