<?php 
include('config.php'); 
if (isset($_POST['submitted'])) { 
foreach($_POST AS $key => $value) { $_POST[$key] = mysql_real_escape_string($value); } 
$sql = "INSERT INTO `opportunities` ( `AccountId` ,  `Amount` ,  `CampaignId` ,  `CloseDate` ,  `CreatedById` ,  `CreatedDate` ,  `CurrentGenerators__c` ,  `DeliveryInstallationStatus__c` ,  `Description` ,  `ExpectedRevenue` ,  `Fiscal` ,  `FiscalQuarter` ,  `FiscalYear` ,  `ForecastCategory` ,  `ForecastCategoryName` ,  `HasOpportunityLineItem` ,  `IsClosed` ,  `IsDeleted` ,  `IsPrivate` ,  `IsWon` ,  `LastActivityDate` ,  `LastModifiedById` ,  `LastModifiedDate` ,  `LeadSource` ,  `MainCompetitors__c` ,  `Name` ,  `NextStep` ,  `OrderNumber__c` ,  `OwnerId` ,  `Pricebook2Id` ,  `Probability` ,  `StageName` ,  `SystemModstamp` ,  `TotalOpportunityQuantity` ,  `TrackingNumber__c` ,  `Type`  ) VALUES(  '{$_POST['AccountId']}' ,  '{$_POST['Amount']}' ,  '{$_POST['CampaignId']}' ,  '{$_POST['CloseDate']}' ,  '{$_POST['CreatedById']}' ,  '{$_POST['CreatedDate']}' ,  '{$_POST['CurrentGenerators__c']}' ,  '{$_POST['DeliveryInstallationStatus__c']}' ,  '{$_POST['Description']}' ,  '{$_POST['ExpectedRevenue']}' ,  '{$_POST['Fiscal']}' ,  '{$_POST['FiscalQuarter']}' ,  '{$_POST['FiscalYear']}' ,  '{$_POST['ForecastCategory']}' ,  '{$_POST['ForecastCategoryName']}' ,  '{$_POST['HasOpportunityLineItem']}' ,  '{$_POST['IsClosed']}' ,  '{$_POST['IsDeleted']}' ,  '{$_POST['IsPrivate']}' ,  '{$_POST['IsWon']}' ,  '{$_POST['LastActivityDate']}' ,  '{$_POST['LastModifiedById']}' ,  '{$_POST['LastModifiedDate']}' ,  '{$_POST['LeadSource']}' ,  '{$_POST['MainCompetitors__c']}' ,  '{$_POST['Name']}' ,  '{$_POST['NextStep']}' ,  '{$_POST['OrderNumber__c']}' ,  '{$_POST['OwnerId']}' ,  '{$_POST['Pricebook2Id']}' ,  '{$_POST['Probability']}' ,  '{$_POST['StageName']}' ,  '{$_POST['SystemModstamp']}' ,  '{$_POST['TotalOpportunityQuantity']}' ,  '{$_POST['TrackingNumber__c']}' ,  '{$_POST['Type']}'  ) "; 
mysql_query($sql) or die(mysql_error()); 
echo "Added row.<br />"; 
echo "<a href='list.php'>Back To Listing</a>"; 
} 
?>

<form action='' method='POST'> 
<p><b>AccountId:</b><br /><input type='text' name='AccountId'/> 
<p><b>Amount:</b><br /><input type='text' name='Amount'/> 
<p><b>CampaignId:</b><br /><input type='text' name='CampaignId'/> 
<p><b>CloseDate:</b><br /><input type='text' name='CloseDate'/> 
<p><b>CreatedById:</b><br /><input type='text' name='CreatedById'/> 
<p><b>CreatedDate:</b><br /><input type='text' name='CreatedDate'/> 
<p><b>CurrentGenerators  C:</b><br /><input type='text' name='CurrentGenerators__c'/> 
<p><b>DeliveryInstallationStatus  C:</b><br /><input type='text' name='DeliveryInstallationStatus__c'/> 
<p><b>Description:</b><br /><input type='text' name='Description'/> 
<p><b>ExpectedRevenue:</b><br /><input type='text' name='ExpectedRevenue'/> 
<p><b>Fiscal:</b><br /><input type='text' name='Fiscal'/> 
<p><b>FiscalQuarter:</b><br /><input type='text' name='FiscalQuarter'/> 
<p><b>FiscalYear:</b><br /><input type='text' name='FiscalYear'/> 
<p><b>ForecastCategory:</b><br /><input type='text' name='ForecastCategory'/> 
<p><b>ForecastCategoryName:</b><br /><input type='text' name='ForecastCategoryName'/> 
<p><b>HasOpportunityLineItem:</b><br /><input type='text' name='HasOpportunityLineItem'/> 
<p><b>IsClosed:</b><br /><input type='text' name='IsClosed'/> 
<p><b>IsDeleted:</b><br /><input type='text' name='IsDeleted'/> 
<p><b>IsPrivate:</b><br /><input type='text' name='IsPrivate'/> 
<p><b>IsWon:</b><br /><input type='text' name='IsWon'/> 
<p><b>LastActivityDate:</b><br /><input type='text' name='LastActivityDate'/> 
<p><b>LastModifiedById:</b><br /><input type='text' name='LastModifiedById'/> 
<p><b>LastModifiedDate:</b><br /><input type='text' name='LastModifiedDate'/> 
<p><b>LeadSource:</b><br /><input type='text' name='LeadSource'/> 
<p><b>MainCompetitors  C:</b><br /><input type='text' name='MainCompetitors__c'/> 
<p><b>Name:</b><br /><input type='text' name='Name'/> 
<p><b>NextStep:</b><br /><input type='text' name='NextStep'/> 
<p><b>OrderNumber  C:</b><br /><input type='text' name='OrderNumber__c'/> 
<p><b>OwnerId:</b><br /><input type='text' name='OwnerId'/> 
<p><b>Pricebook2Id:</b><br /><input type='text' name='Pricebook2Id'/> 
<p><b>Probability:</b><br /><input type='text' name='Probability'/> 
<p><b>StageName:</b><br /><input type='text' name='StageName'/> 
<p><b>SystemModstamp:</b><br /><input type='text' name='SystemModstamp'/> 
<p><b>TotalOpportunityQuantity:</b><br /><input type='text' name='TotalOpportunityQuantity'/> 
<p><b>TrackingNumber  C:</b><br /><input type='text' name='TrackingNumber__c'/> 
<p><b>Type:</b><br /><input type='text' name='Type'/> 
<p><input type='submit' value='Add Row' /><input type='hidden' value='1' name='submitted' /> 
</form> 
