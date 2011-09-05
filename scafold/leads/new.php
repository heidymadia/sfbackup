<?php 
include('config.php'); 
if (isset($_POST['submitted'])) { 
foreach($_POST AS $key => $value) { $_POST[$key] = mysql_real_escape_string($value); } 
$sql = "INSERT INTO `leads` ( `AnnualRevenue` ,  `City` ,  `Company` ,  `ConvertedAccountId` ,  `ConvertedContactId` ,  `ConvertedDate` ,  `ConvertedOpportunityId` ,  `Country` ,  `CreatedById` ,  `CreatedDate` ,  `CurrentGenerators__c` ,  `Description` ,  `Email` ,  `EmailBouncedDate` ,  `EmailBouncedReason` ,  `Fax` ,  `FirstName` ,  `Industry` ,  `IsConverted` ,  `IsDeleted` ,  `IsUnreadByOwner` ,  `Jigsaw` ,  `LastActivityDate` ,  `LastModifiedById` ,  `LastModifiedDate` ,  `LastName` ,  `LeadSource` ,  `MasterRecordId` ,  `MobilePhone` ,  `Name` ,  `NumberOfEmployees` ,  `NumberofLocations__c` ,  `OwnerId` ,  `Phone` ,  `PostalCode` ,  `Primary__c` ,  `ProductInterest__c` ,  `Rating` ,  `SICCode__c` ,  `Salutation` ,  `State` ,  `Status` ,  `Street` ,  `SystemModstamp` ,  `Title` ,  `Website`  ) VALUES(  '{$_POST['AnnualRevenue']}' ,  '{$_POST['City']}' ,  '{$_POST['Company']}' ,  '{$_POST['ConvertedAccountId']}' ,  '{$_POST['ConvertedContactId']}' ,  '{$_POST['ConvertedDate']}' ,  '{$_POST['ConvertedOpportunityId']}' ,  '{$_POST['Country']}' ,  '{$_POST['CreatedById']}' ,  '{$_POST['CreatedDate']}' ,  '{$_POST['CurrentGenerators__c']}' ,  '{$_POST['Description']}' ,  '{$_POST['Email']}' ,  '{$_POST['EmailBouncedDate']}' ,  '{$_POST['EmailBouncedReason']}' ,  '{$_POST['Fax']}' ,  '{$_POST['FirstName']}' ,  '{$_POST['Industry']}' ,  '{$_POST['IsConverted']}' ,  '{$_POST['IsDeleted']}' ,  '{$_POST['IsUnreadByOwner']}' ,  '{$_POST['Jigsaw']}' ,  '{$_POST['LastActivityDate']}' ,  '{$_POST['LastModifiedById']}' ,  '{$_POST['LastModifiedDate']}' ,  '{$_POST['LastName']}' ,  '{$_POST['LeadSource']}' ,  '{$_POST['MasterRecordId']}' ,  '{$_POST['MobilePhone']}' ,  '{$_POST['Name']}' ,  '{$_POST['NumberOfEmployees']}' ,  '{$_POST['NumberofLocations__c']}' ,  '{$_POST['OwnerId']}' ,  '{$_POST['Phone']}' ,  '{$_POST['PostalCode']}' ,  '{$_POST['Primary__c']}' ,  '{$_POST['ProductInterest__c']}' ,  '{$_POST['Rating']}' ,  '{$_POST['SICCode__c']}' ,  '{$_POST['Salutation']}' ,  '{$_POST['State']}' ,  '{$_POST['Status']}' ,  '{$_POST['Street']}' ,  '{$_POST['SystemModstamp']}' ,  '{$_POST['Title']}' ,  '{$_POST['Website']}'  ) "; 
mysql_query($sql) or die(mysql_error()); 
echo "Added row.<br />"; 
echo "<a href='list.php'>Back To Listing</a>"; 
} 
?>

<form action='' method='POST'> 
<p><b>AnnualRevenue:</b><br /><input type='text' name='AnnualRevenue'/> 
<p><b>City:</b><br /><input type='text' name='City'/> 
<p><b>Company:</b><br /><input type='text' name='Company'/> 
<p><b>ConvertedAccountId:</b><br /><input type='text' name='ConvertedAccountId'/> 
<p><b>ConvertedContactId:</b><br /><input type='text' name='ConvertedContactId'/> 
<p><b>ConvertedDate:</b><br /><input type='text' name='ConvertedDate'/> 
<p><b>ConvertedOpportunityId:</b><br /><input type='text' name='ConvertedOpportunityId'/> 
<p><b>Country:</b><br /><input type='text' name='Country'/> 
<p><b>CreatedById:</b><br /><input type='text' name='CreatedById'/> 
<p><b>CreatedDate:</b><br /><input type='text' name='CreatedDate'/> 
<p><b>CurrentGenerators  C:</b><br /><input type='text' name='CurrentGenerators__c'/> 
<p><b>Description:</b><br /><input type='text' name='Description'/> 
<p><b>Email:</b><br /><input type='text' name='Email'/> 
<p><b>EmailBouncedDate:</b><br /><input type='text' name='EmailBouncedDate'/> 
<p><b>EmailBouncedReason:</b><br /><input type='text' name='EmailBouncedReason'/> 
<p><b>Fax:</b><br /><input type='text' name='Fax'/> 
<p><b>FirstName:</b><br /><input type='text' name='FirstName'/> 
<p><b>Industry:</b><br /><input type='text' name='Industry'/> 
<p><b>IsConverted:</b><br /><input type='text' name='IsConverted'/> 
<p><b>IsDeleted:</b><br /><input type='text' name='IsDeleted'/> 
<p><b>IsUnreadByOwner:</b><br /><input type='text' name='IsUnreadByOwner'/> 
<p><b>Jigsaw:</b><br /><input type='text' name='Jigsaw'/> 
<p><b>LastActivityDate:</b><br /><input type='text' name='LastActivityDate'/> 
<p><b>LastModifiedById:</b><br /><input type='text' name='LastModifiedById'/> 
<p><b>LastModifiedDate:</b><br /><input type='text' name='LastModifiedDate'/> 
<p><b>LastName:</b><br /><input type='text' name='LastName'/> 
<p><b>LeadSource:</b><br /><input type='text' name='LeadSource'/> 
<p><b>MasterRecordId:</b><br /><input type='text' name='MasterRecordId'/> 
<p><b>MobilePhone:</b><br /><input type='text' name='MobilePhone'/> 
<p><b>Name:</b><br /><input type='text' name='Name'/> 
<p><b>NumberOfEmployees:</b><br /><input type='text' name='NumberOfEmployees'/> 
<p><b>NumberofLocations  C:</b><br /><input type='text' name='NumberofLocations__c'/> 
<p><b>OwnerId:</b><br /><input type='text' name='OwnerId'/> 
<p><b>Phone:</b><br /><input type='text' name='Phone'/> 
<p><b>PostalCode:</b><br /><input type='text' name='PostalCode'/> 
<p><b>Primary  C:</b><br /><input type='text' name='Primary__c'/> 
<p><b>ProductInterest  C:</b><br /><input type='text' name='ProductInterest__c'/> 
<p><b>Rating:</b><br /><input type='text' name='Rating'/> 
<p><b>SICCode  C:</b><br /><input type='text' name='SICCode__c'/> 
<p><b>Salutation:</b><br /><input type='text' name='Salutation'/> 
<p><b>State:</b><br /><input type='text' name='State'/> 
<p><b>Status:</b><br /><input type='text' name='Status'/> 
<p><b>Street:</b><br /><input type='text' name='Street'/> 
<p><b>SystemModstamp:</b><br /><input type='text' name='SystemModstamp'/> 
<p><b>Title:</b><br /><input type='text' name='Title'/> 
<p><b>Website:</b><br /><input type='text' name='Website'/> 
<p><input type='submit' value='Add Row' /><input type='hidden' value='1' name='submitted' /> 
</form> 
