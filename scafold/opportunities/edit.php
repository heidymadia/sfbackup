<?php 
include('config.php'); 
if (isset($_GET['id']) ) { 
$id = (int) $_GET['id']; 
if (isset($_POST['submitted'])) { 
foreach($_POST AS $key => $value) { $_POST[$key] = mysql_real_escape_string($value); } 
$sql = "UPDATE `opportunities` SET  `AccountId` =  '{$_POST['AccountId']}' ,  `Amount` =  '{$_POST['Amount']}' ,  `CampaignId` =  '{$_POST['CampaignId']}' ,  `CloseDate` =  '{$_POST['CloseDate']}' ,  `CreatedById` =  '{$_POST['CreatedById']}' ,  `CreatedDate` =  '{$_POST['CreatedDate']}' ,  `CurrentGenerators__c` =  '{$_POST['CurrentGenerators__c']}' ,  `DeliveryInstallationStatus__c` =  '{$_POST['DeliveryInstallationStatus__c']}' ,  `Description` =  '{$_POST['Description']}' ,  `ExpectedRevenue` =  '{$_POST['ExpectedRevenue']}' ,  `Fiscal` =  '{$_POST['Fiscal']}' ,  `FiscalQuarter` =  '{$_POST['FiscalQuarter']}' ,  `FiscalYear` =  '{$_POST['FiscalYear']}' ,  `ForecastCategory` =  '{$_POST['ForecastCategory']}' ,  `ForecastCategoryName` =  '{$_POST['ForecastCategoryName']}' ,  `HasOpportunityLineItem` =  '{$_POST['HasOpportunityLineItem']}' ,  `IsClosed` =  '{$_POST['IsClosed']}' ,  `IsDeleted` =  '{$_POST['IsDeleted']}' ,  `IsPrivate` =  '{$_POST['IsPrivate']}' ,  `IsWon` =  '{$_POST['IsWon']}' ,  `LastActivityDate` =  '{$_POST['LastActivityDate']}' ,  `LastModifiedById` =  '{$_POST['LastModifiedById']}' ,  `LastModifiedDate` =  '{$_POST['LastModifiedDate']}' ,  `LeadSource` =  '{$_POST['LeadSource']}' ,  `MainCompetitors__c` =  '{$_POST['MainCompetitors__c']}' ,  `Name` =  '{$_POST['Name']}' ,  `NextStep` =  '{$_POST['NextStep']}' ,  `OrderNumber__c` =  '{$_POST['OrderNumber__c']}' ,  `OwnerId` =  '{$_POST['OwnerId']}' ,  `Pricebook2Id` =  '{$_POST['Pricebook2Id']}' ,  `Probability` =  '{$_POST['Probability']}' ,  `StageName` =  '{$_POST['StageName']}' ,  `SystemModstamp` =  '{$_POST['SystemModstamp']}' ,  `TotalOpportunityQuantity` =  '{$_POST['TotalOpportunityQuantity']}' ,  `TrackingNumber__c` =  '{$_POST['TrackingNumber__c']}' ,  `Type` =  '{$_POST['Type']}'   WHERE `id` = '$id' "; 
mysql_query($sql) or die(mysql_error()); 
echo (mysql_affected_rows()) ? "Edited row.<br />" : "Nothing changed. <br />"; 
echo "<a href='list.php'>Back To Listing</a>"; 
} 
$row = mysql_fetch_array ( mysql_query("SELECT * FROM `opportunities` WHERE `id` = '$id' ")); 
?>

<form action='' method='POST'> 
<p><b>AccountId:</b><br /><input type='text' name='AccountId' value='<?= stripslashes($row['AccountId']) ?>' /> 
<p><b>Amount:</b><br /><input type='text' name='Amount' value='<?= stripslashes($row['Amount']) ?>' /> 
<p><b>CampaignId:</b><br /><input type='text' name='CampaignId' value='<?= stripslashes($row['CampaignId']) ?>' /> 
<p><b>CloseDate:</b><br /><input type='text' name='CloseDate' value='<?= stripslashes($row['CloseDate']) ?>' /> 
<p><b>CreatedById:</b><br /><input type='text' name='CreatedById' value='<?= stripslashes($row['CreatedById']) ?>' /> 
<p><b>CreatedDate:</b><br /><input type='text' name='CreatedDate' value='<?= stripslashes($row['CreatedDate']) ?>' /> 
<p><b>CurrentGenerators  C:</b><br /><input type='text' name='CurrentGenerators__c' value='<?= stripslashes($row['CurrentGenerators__c']) ?>' /> 
<p><b>DeliveryInstallationStatus  C:</b><br /><input type='text' name='DeliveryInstallationStatus__c' value='<?= stripslashes($row['DeliveryInstallationStatus__c']) ?>' /> 
<p><b>Description:</b><br /><input type='text' name='Description' value='<?= stripslashes($row['Description']) ?>' /> 
<p><b>ExpectedRevenue:</b><br /><input type='text' name='ExpectedRevenue' value='<?= stripslashes($row['ExpectedRevenue']) ?>' /> 
<p><b>Fiscal:</b><br /><input type='text' name='Fiscal' value='<?= stripslashes($row['Fiscal']) ?>' /> 
<p><b>FiscalQuarter:</b><br /><input type='text' name='FiscalQuarter' value='<?= stripslashes($row['FiscalQuarter']) ?>' /> 
<p><b>FiscalYear:</b><br /><input type='text' name='FiscalYear' value='<?= stripslashes($row['FiscalYear']) ?>' /> 
<p><b>ForecastCategory:</b><br /><input type='text' name='ForecastCategory' value='<?= stripslashes($row['ForecastCategory']) ?>' /> 
<p><b>ForecastCategoryName:</b><br /><input type='text' name='ForecastCategoryName' value='<?= stripslashes($row['ForecastCategoryName']) ?>' /> 
<p><b>HasOpportunityLineItem:</b><br /><input type='text' name='HasOpportunityLineItem' value='<?= stripslashes($row['HasOpportunityLineItem']) ?>' /> 
<p><b>IsClosed:</b><br /><input type='text' name='IsClosed' value='<?= stripslashes($row['IsClosed']) ?>' /> 
<p><b>IsDeleted:</b><br /><input type='text' name='IsDeleted' value='<?= stripslashes($row['IsDeleted']) ?>' /> 
<p><b>IsPrivate:</b><br /><input type='text' name='IsPrivate' value='<?= stripslashes($row['IsPrivate']) ?>' /> 
<p><b>IsWon:</b><br /><input type='text' name='IsWon' value='<?= stripslashes($row['IsWon']) ?>' /> 
<p><b>LastActivityDate:</b><br /><input type='text' name='LastActivityDate' value='<?= stripslashes($row['LastActivityDate']) ?>' /> 
<p><b>LastModifiedById:</b><br /><input type='text' name='LastModifiedById' value='<?= stripslashes($row['LastModifiedById']) ?>' /> 
<p><b>LastModifiedDate:</b><br /><input type='text' name='LastModifiedDate' value='<?= stripslashes($row['LastModifiedDate']) ?>' /> 
<p><b>LeadSource:</b><br /><input type='text' name='LeadSource' value='<?= stripslashes($row['LeadSource']) ?>' /> 
<p><b>MainCompetitors  C:</b><br /><input type='text' name='MainCompetitors__c' value='<?= stripslashes($row['MainCompetitors__c']) ?>' /> 
<p><b>Name:</b><br /><input type='text' name='Name' value='<?= stripslashes($row['Name']) ?>' /> 
<p><b>NextStep:</b><br /><input type='text' name='NextStep' value='<?= stripslashes($row['NextStep']) ?>' /> 
<p><b>OrderNumber  C:</b><br /><input type='text' name='OrderNumber__c' value='<?= stripslashes($row['OrderNumber__c']) ?>' /> 
<p><b>OwnerId:</b><br /><input type='text' name='OwnerId' value='<?= stripslashes($row['OwnerId']) ?>' /> 
<p><b>Pricebook2Id:</b><br /><input type='text' name='Pricebook2Id' value='<?= stripslashes($row['Pricebook2Id']) ?>' /> 
<p><b>Probability:</b><br /><input type='text' name='Probability' value='<?= stripslashes($row['Probability']) ?>' /> 
<p><b>StageName:</b><br /><input type='text' name='StageName' value='<?= stripslashes($row['StageName']) ?>' /> 
<p><b>SystemModstamp:</b><br /><input type='text' name='SystemModstamp' value='<?= stripslashes($row['SystemModstamp']) ?>' /> 
<p><b>TotalOpportunityQuantity:</b><br /><input type='text' name='TotalOpportunityQuantity' value='<?= stripslashes($row['TotalOpportunityQuantity']) ?>' /> 
<p><b>TrackingNumber  C:</b><br /><input type='text' name='TrackingNumber__c' value='<?= stripslashes($row['TrackingNumber__c']) ?>' /> 
<p><b>Type:</b><br /><input type='text' name='Type' value='<?= stripslashes($row['Type']) ?>' /> 
<p><input type='submit' value='Edit Row' /><input type='hidden' value='1' name='submitted' /> 
</form> 
<? } ?> 
