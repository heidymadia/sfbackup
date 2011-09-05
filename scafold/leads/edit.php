<?php
include('config.php'); 
if (isset($_GET['id']) ) { 
$id = (int) $_GET['id']; 
if (isset($_POST['submitted'])) { 
foreach($_POST AS $key => $value) { $_POST[$key] = mysql_real_escape_string($value); } 
$sql = "UPDATE `leads` SET  `AnnualRevenue` =  '{$_POST['AnnualRevenue']}' ,  `City` =  '{$_POST['City']}' ,  `Company` =  '{$_POST['Company']}' ,  `ConvertedAccountId` =  '{$_POST['ConvertedAccountId']}' ,  `ConvertedContactId` =  '{$_POST['ConvertedContactId']}' ,  `ConvertedDate` =  '{$_POST['ConvertedDate']}' ,  `ConvertedOpportunityId` =  '{$_POST['ConvertedOpportunityId']}' ,  `Country` =  '{$_POST['Country']}' ,  `CreatedById` =  '{$_POST['CreatedById']}' ,  `CreatedDate` =  '{$_POST['CreatedDate']}' ,  `CurrentGenerators__c` =  '{$_POST['CurrentGenerators__c']}' ,  `Description` =  '{$_POST['Description']}' ,  `Email` =  '{$_POST['Email']}' ,  `EmailBouncedDate` =  '{$_POST['EmailBouncedDate']}' ,  `EmailBouncedReason` =  '{$_POST['EmailBouncedReason']}' ,  `Fax` =  '{$_POST['Fax']}' ,  `FirstName` =  '{$_POST['FirstName']}' ,  `Industry` =  '{$_POST['Industry']}' ,  `IsConverted` =  '{$_POST['IsConverted']}' ,  `IsDeleted` =  '{$_POST['IsDeleted']}' ,  `IsUnreadByOwner` =  '{$_POST['IsUnreadByOwner']}' ,  `Jigsaw` =  '{$_POST['Jigsaw']}' ,  `LastActivityDate` =  '{$_POST['LastActivityDate']}' ,  `LastModifiedById` =  '{$_POST['LastModifiedById']}' ,  `LastModifiedDate` =  '{$_POST['LastModifiedDate']}' ,  `LastName` =  '{$_POST['LastName']}' ,  `LeadSource` =  '{$_POST['LeadSource']}' ,  `MasterRecordId` =  '{$_POST['MasterRecordId']}' ,  `MobilePhone` =  '{$_POST['MobilePhone']}' ,  `Name` =  '{$_POST['Name']}' ,  `NumberOfEmployees` =  '{$_POST['NumberOfEmployees']}' ,  `NumberofLocations__c` =  '{$_POST['NumberofLocations__c']}' ,  `OwnerId` =  '{$_POST['OwnerId']}' ,  `Phone` =  '{$_POST['Phone']}' ,  `PostalCode` =  '{$_POST['PostalCode']}' ,  `Primary__c` =  '{$_POST['Primary__c']}' ,  `ProductInterest__c` =  '{$_POST['ProductInterest__c']}' ,  `Rating` =  '{$_POST['Rating']}' ,  `SICCode__c` =  '{$_POST['SICCode__c']}' ,  `Salutation` =  '{$_POST['Salutation']}' ,  `State` =  '{$_POST['State']}' ,  `Status` =  '{$_POST['Status']}' ,  `Street` =  '{$_POST['Street']}' ,  `SystemModstamp` =  '{$_POST['SystemModstamp']}' ,  `Title` =  '{$_POST['Title']}' ,  `Website` =  '{$_POST['Website']}'   WHERE `id` = '$id' "; 
mysql_query($sql) or die(mysql_error()); 
echo (mysql_affected_rows()) ? "Edited row.<br />" : "Nothing changed. <br />"; 
echo "<a href='list.php'>Back To Listing</a>"; 
} 
$row = mysql_fetch_array ( mysql_query("SELECT * FROM `leads` WHERE `id` = '$id' ")); 
?>

<form action='' method='POST'> 
<p><b>AnnualRevenue:</b><br /><input type='text' name='AnnualRevenue' value='<?= stripslashes($row['AnnualRevenue']) ?>' /> 
<p><b>City:</b><br /><input type='text' name='City' value='<?= stripslashes($row['City']) ?>' /> 
<p><b>Company:</b><br /><input type='text' name='Company' value='<?= stripslashes($row['Company']) ?>' /> 
<p><b>ConvertedAccountId:</b><br /><input type='text' name='ConvertedAccountId' value='<?= stripslashes($row['ConvertedAccountId']) ?>' /> 
<p><b>ConvertedContactId:</b><br /><input type='text' name='ConvertedContactId' value='<?= stripslashes($row['ConvertedContactId']) ?>' /> 
<p><b>ConvertedDate:</b><br /><input type='text' name='ConvertedDate' value='<?= stripslashes($row['ConvertedDate']) ?>' /> 
<p><b>ConvertedOpportunityId:</b><br /><input type='text' name='ConvertedOpportunityId' value='<?= stripslashes($row['ConvertedOpportunityId']) ?>' /> 
<p><b>Country:</b><br /><input type='text' name='Country' value='<?= stripslashes($row['Country']) ?>' /> 
<p><b>CreatedById:</b><br /><input type='text' name='CreatedById' value='<?= stripslashes($row['CreatedById']) ?>' /> 
<p><b>CreatedDate:</b><br /><input type='text' name='CreatedDate' value='<?= stripslashes($row['CreatedDate']) ?>' /> 
<p><b>CurrentGenerators  C:</b><br /><input type='text' name='CurrentGenerators__c' value='<?= stripslashes($row['CurrentGenerators__c']) ?>' /> 
<p><b>Description:</b><br /><input type='text' name='Description' value='<?= stripslashes($row['Description']) ?>' /> 
<p><b>Email:</b><br /><input type='text' name='Email' value='<?= stripslashes($row['Email']) ?>' /> 
<p><b>EmailBouncedDate:</b><br /><input type='text' name='EmailBouncedDate' value='<?= stripslashes($row['EmailBouncedDate']) ?>' /> 
<p><b>EmailBouncedReason:</b><br /><input type='text' name='EmailBouncedReason' value='<?= stripslashes($row['EmailBouncedReason']) ?>' /> 
<p><b>Fax:</b><br /><input type='text' name='Fax' value='<?= stripslashes($row['Fax']) ?>' /> 
<p><b>FirstName:</b><br /><input type='text' name='FirstName' value='<?= stripslashes($row['FirstName']) ?>' /> 
<p><b>Industry:</b><br /><input type='text' name='Industry' value='<?= stripslashes($row['Industry']) ?>' /> 
<p><b>IsConverted:</b><br /><input type='text' name='IsConverted' value='<?= stripslashes($row['IsConverted']) ?>' /> 
<p><b>IsDeleted:</b><br /><input type='text' name='IsDeleted' value='<?= stripslashes($row['IsDeleted']) ?>' /> 
<p><b>IsUnreadByOwner:</b><br /><input type='text' name='IsUnreadByOwner' value='<?= stripslashes($row['IsUnreadByOwner']) ?>' /> 
<p><b>Jigsaw:</b><br /><input type='text' name='Jigsaw' value='<?= stripslashes($row['Jigsaw']) ?>' /> 
<p><b>LastActivityDate:</b><br /><input type='text' name='LastActivityDate' value='<?= stripslashes($row['LastActivityDate']) ?>' /> 
<p><b>LastModifiedById:</b><br /><input type='text' name='LastModifiedById' value='<?= stripslashes($row['LastModifiedById']) ?>' /> 
<p><b>LastModifiedDate:</b><br /><input type='text' name='LastModifiedDate' value='<?= stripslashes($row['LastModifiedDate']) ?>' /> 
<p><b>LastName:</b><br /><input type='text' name='LastName' value='<?= stripslashes($row['LastName']) ?>' /> 
<p><b>LeadSource:</b><br /><input type='text' name='LeadSource' value='<?= stripslashes($row['LeadSource']) ?>' /> 
<p><b>MasterRecordId:</b><br /><input type='text' name='MasterRecordId' value='<?= stripslashes($row['MasterRecordId']) ?>' /> 
<p><b>MobilePhone:</b><br /><input type='text' name='MobilePhone' value='<?= stripslashes($row['MobilePhone']) ?>' /> 
<p><b>Name:</b><br /><input type='text' name='Name' value='<?= stripslashes($row['Name']) ?>' /> 
<p><b>NumberOfEmployees:</b><br /><input type='text' name='NumberOfEmployees' value='<?= stripslashes($row['NumberOfEmployees']) ?>' /> 
<p><b>NumberofLocations  C:</b><br /><input type='text' name='NumberofLocations__c' value='<?= stripslashes($row['NumberofLocations__c']) ?>' /> 
<p><b>OwnerId:</b><br /><input type='text' name='OwnerId' value='<?= stripslashes($row['OwnerId']) ?>' /> 
<p><b>Phone:</b><br /><input type='text' name='Phone' value='<?= stripslashes($row['Phone']) ?>' /> 
<p><b>PostalCode:</b><br /><input type='text' name='PostalCode' value='<?= stripslashes($row['PostalCode']) ?>' /> 
<p><b>Primary  C:</b><br /><input type='text' name='Primary__c' value='<?= stripslashes($row['Primary__c']) ?>' /> 
<p><b>ProductInterest  C:</b><br /><input type='text' name='ProductInterest__c' value='<?= stripslashes($row['ProductInterest__c']) ?>' /> 
<p><b>Rating:</b><br /><input type='text' name='Rating' value='<?= stripslashes($row['Rating']) ?>' /> 
<p><b>SICCode  C:</b><br /><input type='text' name='SICCode__c' value='<?= stripslashes($row['SICCode__c']) ?>' /> 
<p><b>Salutation:</b><br /><input type='text' name='Salutation' value='<?= stripslashes($row['Salutation']) ?>' /> 
<p><b>State:</b><br /><input type='text' name='State' value='<?= stripslashes($row['State']) ?>' /> 
<p><b>Status:</b><br /><input type='text' name='Status' value='<?= stripslashes($row['Status']) ?>' /> 
<p><b>Street:</b><br /><input type='text' name='Street' value='<?= stripslashes($row['Street']) ?>' /> 
<p><b>SystemModstamp:</b><br /><input type='text' name='SystemModstamp' value='<?= stripslashes($row['SystemModstamp']) ?>' /> 
<p><b>Title:</b><br /><input type='text' name='Title' value='<?= stripslashes($row['Title']) ?>' /> 
<p><b>Website:</b><br /><input type='text' name='Website' value='<?= stripslashes($row['Website']) ?>' /> 
<p><input type='submit' value='Edit Row' /><input type='hidden' value='1' name='submitted' /> 
</form> 
<? } ?> 
