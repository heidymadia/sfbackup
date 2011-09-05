<? 
include('config.php'); 
if (isset($_POST['submitted'])) { 
foreach($_POST AS $key => $value) { $_POST[$key] = mysql_real_escape_string($value); } 
$sql = "INSERT INTO `accounts` ( `AccountNumber` ,  `Active__c` ,  `AnnualRevenue` ,  `BillingCity` ,  `BillingCountry` ,  `BillingPostalCode` ,  `BillingState` ,  `BillingStreet` ,  `CreatedById` ,  `CreatedDate` ,  `CustomerPriority__c` ,  `Description` ,  `Fax` ,  `Industry` ,  `IsDeleted` ,  `Jigsaw` ,  `LastActivityDate` ,  `LastModifiedById` ,  `LastModifiedDate` ,  `MasterRecordId` ,  `Name` ,  `NumberOfEmployees` ,  `NumberofLocations__c` ,  `OwnerId` ,  `Ownership` ,  `ParentId` ,  `Phone` ,  `Rating` ,  `SLAExpirationDate__c` ,  `SLASerialNumber__c` ,  `SLA__c` ,  `ShippingCity` ,  `ShippingCountry` ,  `ShippingPostalCode` ,  `ShippingState` ,  `ShippingStreet` ,  `Sic` ,  `Site` ,  `SystemModstamp` ,  `TickerSymbol` ,  `Type` ,  `UpsellOpportunity__c` ,  `Website`  ) VALUES(  '{$_POST['AccountNumber']}' ,  '{$_POST['Active__c']}' ,  '{$_POST['AnnualRevenue']}' ,  '{$_POST['BillingCity']}' ,  '{$_POST['BillingCountry']}' ,  '{$_POST['BillingPostalCode']}' ,  '{$_POST['BillingState']}' ,  '{$_POST['BillingStreet']}' ,  '{$_POST['CreatedById']}' ,  '{$_POST['CreatedDate']}' ,  '{$_POST['CustomerPriority__c']}' ,  '{$_POST['Description']}' ,  '{$_POST['Fax']}' ,  '{$_POST['Industry']}' ,  '{$_POST['IsDeleted']}' ,  '{$_POST['Jigsaw']}' ,  '{$_POST['LastActivityDate']}' ,  '{$_POST['LastModifiedById']}' ,  '{$_POST['LastModifiedDate']}' ,  '{$_POST['MasterRecordId']}' ,  '{$_POST['Name']}' ,  '{$_POST['NumberOfEmployees']}' ,  '{$_POST['NumberofLocations__c']}' ,  '{$_POST['OwnerId']}' ,  '{$_POST['Ownership']}' ,  '{$_POST['ParentId']}' ,  '{$_POST['Phone']}' ,  '{$_POST['Rating']}' ,  '{$_POST['SLAExpirationDate__c']}' ,  '{$_POST['SLASerialNumber__c']}' ,  '{$_POST['SLA__c']}' ,  '{$_POST['ShippingCity']}' ,  '{$_POST['ShippingCountry']}' ,  '{$_POST['ShippingPostalCode']}' ,  '{$_POST['ShippingState']}' ,  '{$_POST['ShippingStreet']}' ,  '{$_POST['Sic']}' ,  '{$_POST['Site']}' ,  '{$_POST['SystemModstamp']}' ,  '{$_POST['TickerSymbol']}' ,  '{$_POST['Type']}' ,  '{$_POST['UpsellOpportunity__c']}' ,  '{$_POST['Website']}'  ) "; 
mysql_query($sql) or die(mysql_error()); 
echo "Added row.<br />"; 
echo "<a href='list.php'>Back To Listing</a>"; 
} 
?>

<form action='' method='POST'> 
<p><b>AccountNumber:</b><br /><input type='text' name='AccountNumber'/> 
<p><b>Active  C:</b><br /><input type='text' name='Active__c'/> 
<p><b>AnnualRevenue:</b><br /><input type='text' name='AnnualRevenue'/> 
<p><b>BillingCity:</b><br /><input type='text' name='BillingCity'/> 
<p><b>BillingCountry:</b><br /><input type='text' name='BillingCountry'/> 
<p><b>BillingPostalCode:</b><br /><input type='text' name='BillingPostalCode'/> 
<p><b>BillingState:</b><br /><input type='text' name='BillingState'/> 
<p><b>BillingStreet:</b><br /><input type='text' name='BillingStreet'/> 
<p><b>CreatedById:</b><br /><input type='text' name='CreatedById'/> 
<p><b>CreatedDate:</b><br /><input type='text' name='CreatedDate'/> 
<p><b>CustomerPriority  C:</b><br /><input type='text' name='CustomerPriority__c'/> 
<p><b>Description:</b><br /><input type='text' name='Description'/> 
<p><b>Fax:</b><br /><input type='text' name='Fax'/> 
<p><b>Industry:</b><br /><input type='text' name='Industry'/> 
<p><b>IsDeleted:</b><br /><input type='text' name='IsDeleted'/> 
<p><b>Jigsaw:</b><br /><input type='text' name='Jigsaw'/> 
<p><b>LastActivityDate:</b><br /><input type='text' name='LastActivityDate'/> 
<p><b>LastModifiedById:</b><br /><input type='text' name='LastModifiedById'/> 
<p><b>LastModifiedDate:</b><br /><input type='text' name='LastModifiedDate'/> 
<p><b>MasterRecordId:</b><br /><input type='text' name='MasterRecordId'/> 
<p><b>Name:</b><br /><input type='text' name='Name'/> 
<p><b>NumberOfEmployees:</b><br /><input type='text' name='NumberOfEmployees'/> 
<p><b>NumberofLocations  C:</b><br /><input type='text' name='NumberofLocations__c'/> 
<p><b>OwnerId:</b><br /><input type='text' name='OwnerId'/> 
<p><b>Ownership:</b><br /><input type='text' name='Ownership'/> 
<p><b>ParentId:</b><br /><input type='text' name='ParentId'/> 
<p><b>Phone:</b><br /><input type='text' name='Phone'/> 
<p><b>Rating:</b><br /><input type='text' name='Rating'/> 
<p><b>SLAExpirationDate  C:</b><br /><input type='text' name='SLAExpirationDate__c'/> 
<p><b>SLASerialNumber  C:</b><br /><input type='text' name='SLASerialNumber__c'/> 
<p><b>SLA  C:</b><br /><input type='text' name='SLA__c'/> 
<p><b>ShippingCity:</b><br /><input type='text' name='ShippingCity'/> 
<p><b>ShippingCountry:</b><br /><input type='text' name='ShippingCountry'/> 
<p><b>ShippingPostalCode:</b><br /><input type='text' name='ShippingPostalCode'/> 
<p><b>ShippingState:</b><br /><input type='text' name='ShippingState'/> 
<p><b>ShippingStreet:</b><br /><input type='text' name='ShippingStreet'/> 
<p><b>Sic:</b><br /><input type='text' name='Sic'/> 
<p><b>Site:</b><br /><input type='text' name='Site'/> 
<p><b>SystemModstamp:</b><br /><input type='text' name='SystemModstamp'/> 
<p><b>TickerSymbol:</b><br /><input type='text' name='TickerSymbol'/> 
<p><b>Type:</b><br /><input type='text' name='Type'/> 
<p><b>UpsellOpportunity  C:</b><br /><input type='text' name='UpsellOpportunity__c'/> 
<p><b>Website:</b><br /><input type='text' name='Website'/> 
<p><input type='submit' value='Add Row' /><input type='hidden' value='1' name='submitted' /> 
</form> 

