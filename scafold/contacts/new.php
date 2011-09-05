<?php
include('config.php'); 
if (isset($_POST['submitted'])) { 
foreach($_POST AS $key => $value) { $_POST[$key] = mysql_real_escape_string($value); } 
$sql = "INSERT INTO `contacts` ( `AccountId` ,  `AssistantName` ,  `AssistantPhone` ,  `Birthdate` ,  `CreatedById` ,  `CreatedDate` ,  `Department` ,  `Description` ,  `Email` ,  `EmailBouncedDate` ,  `EmailBouncedReason` ,  `Fax` ,  `FirstName` ,  `HomePhone` ,  `IsDeleted` ,  `Jigsaw` ,  `Languages__c` ,  `LastActivityDate` ,  `LastCURequestDate` ,  `LastCUUpdateDate` ,  `LastModifiedById` ,  `LastModifiedDate` ,  `LastName` ,  `LeadSource` ,  `Level__c` ,  `MailingCity` ,  `MailingCountry` ,  `MailingPostalCode` ,  `MailingState` ,  `MailingStreet` ,  `MasterRecordId` ,  `MobilePhone` ,  `Name` ,  `OtherCity` ,  `OtherCountry` ,  `OtherPhone` ,  `OtherPostalCode` ,  `OtherState` ,  `OtherStreet` ,  `OwnerId` ,  `Phone` ,  `ReportsToId` ,  `Salutation` ,  `SystemModstamp` ,  `Title`  ) VALUES(  '{$_POST['AccountId']}' ,  '{$_POST['AssistantName']}' ,  '{$_POST['AssistantPhone']}' ,  '{$_POST['Birthdate']}' ,  '{$_POST['CreatedById']}' ,  '{$_POST['CreatedDate']}' ,  '{$_POST['Department']}' ,  '{$_POST['Description']}' ,  '{$_POST['Email']}' ,  '{$_POST['EmailBouncedDate']}' ,  '{$_POST['EmailBouncedReason']}' ,  '{$_POST['Fax']}' ,  '{$_POST['FirstName']}' ,  '{$_POST['HomePhone']}' ,  '{$_POST['IsDeleted']}' ,  '{$_POST['Jigsaw']}' ,  '{$_POST['Languages__c']}' ,  '{$_POST['LastActivityDate']}' ,  '{$_POST['LastCURequestDate']}' ,  '{$_POST['LastCUUpdateDate']}' ,  '{$_POST['LastModifiedById']}' ,  '{$_POST['LastModifiedDate']}' ,  '{$_POST['LastName']}' ,  '{$_POST['LeadSource']}' ,  '{$_POST['Level__c']}' ,  '{$_POST['MailingCity']}' ,  '{$_POST['MailingCountry']}' ,  '{$_POST['MailingPostalCode']}' ,  '{$_POST['MailingState']}' ,  '{$_POST['MailingStreet']}' ,  '{$_POST['MasterRecordId']}' ,  '{$_POST['MobilePhone']}' ,  '{$_POST['Name']}' ,  '{$_POST['OtherCity']}' ,  '{$_POST['OtherCountry']}' ,  '{$_POST['OtherPhone']}' ,  '{$_POST['OtherPostalCode']}' ,  '{$_POST['OtherState']}' ,  '{$_POST['OtherStreet']}' ,  '{$_POST['OwnerId']}' ,  '{$_POST['Phone']}' ,  '{$_POST['ReportsToId']}' ,  '{$_POST['Salutation']}' ,  '{$_POST['SystemModstamp']}' ,  '{$_POST['Title']}'  ) "; 
mysql_query($sql) or die(mysql_error()); 
echo "Added row.<br />"; 
echo "<a href='list.php'>Back To Listing</a>"; 
} 
?>

<form action='' method='POST'> 
<p><b>AccountId:</b><br /><input type='text' name='AccountId'/> 
<p><b>AssistantName:</b><br /><input type='text' name='AssistantName'/> 
<p><b>AssistantPhone:</b><br /><input type='text' name='AssistantPhone'/> 
<p><b>Birthdate:</b><br /><input type='text' name='Birthdate'/> 
<p><b>CreatedById:</b><br /><input type='text' name='CreatedById'/> 
<p><b>CreatedDate:</b><br /><input type='text' name='CreatedDate'/> 
<p><b>Department:</b><br /><input type='text' name='Department'/> 
<p><b>Description:</b><br /><input type='text' name='Description'/> 
<p><b>Email:</b><br /><input type='text' name='Email'/> 
<p><b>EmailBouncedDate:</b><br /><input type='text' name='EmailBouncedDate'/> 
<p><b>EmailBouncedReason:</b><br /><input type='text' name='EmailBouncedReason'/> 
<p><b>Fax:</b><br /><input type='text' name='Fax'/> 
<p><b>FirstName:</b><br /><input type='text' name='FirstName'/> 
<p><b>HomePhone:</b><br /><input type='text' name='HomePhone'/> 
<p><b>IsDeleted:</b><br /><input type='text' name='IsDeleted'/> 
<p><b>Jigsaw:</b><br /><input type='text' name='Jigsaw'/> 
<p><b>Languages  C:</b><br /><input type='text' name='Languages__c'/> 
<p><b>LastActivityDate:</b><br /><input type='text' name='LastActivityDate'/> 
<p><b>LastCURequestDate:</b><br /><input type='text' name='LastCURequestDate'/> 
<p><b>LastCUUpdateDate:</b><br /><input type='text' name='LastCUUpdateDate'/> 
<p><b>LastModifiedById:</b><br /><input type='text' name='LastModifiedById'/> 
<p><b>LastModifiedDate:</b><br /><input type='text' name='LastModifiedDate'/> 
<p><b>LastName:</b><br /><input type='text' name='LastName'/> 
<p><b>LeadSource:</b><br /><input type='text' name='LeadSource'/> 
<p><b>Level  C:</b><br /><input type='text' name='Level__c'/> 
<p><b>MailingCity:</b><br /><input type='text' name='MailingCity'/> 
<p><b>MailingCountry:</b><br /><input type='text' name='MailingCountry'/> 
<p><b>MailingPostalCode:</b><br /><input type='text' name='MailingPostalCode'/> 
<p><b>MailingState:</b><br /><input type='text' name='MailingState'/> 
<p><b>MailingStreet:</b><br /><input type='text' name='MailingStreet'/> 
<p><b>MasterRecordId:</b><br /><input type='text' name='MasterRecordId'/> 
<p><b>MobilePhone:</b><br /><input type='text' name='MobilePhone'/> 
<p><b>Name:</b><br /><input type='text' name='Name'/> 
<p><b>OtherCity:</b><br /><input type='text' name='OtherCity'/> 
<p><b>OtherCountry:</b><br /><input type='text' name='OtherCountry'/> 
<p><b>OtherPhone:</b><br /><input type='text' name='OtherPhone'/> 
<p><b>OtherPostalCode:</b><br /><input type='text' name='OtherPostalCode'/> 
<p><b>OtherState:</b><br /><input type='text' name='OtherState'/> 
<p><b>OtherStreet:</b><br /><input type='text' name='OtherStreet'/> 
<p><b>OwnerId:</b><br /><input type='text' name='OwnerId'/> 
<p><b>Phone:</b><br /><input type='text' name='Phone'/> 
<p><b>ReportsToId:</b><br /><input type='text' name='ReportsToId'/> 
<p><b>Salutation:</b><br /><input type='text' name='Salutation'/> 
<p><b>SystemModstamp:</b><br /><input type='text' name='SystemModstamp'/> 
<p><b>Title:</b><br /><input type='text' name='Title'/> 
<p><input type='submit' value='Add Row' /><input type='hidden' value='1' name='submitted' /> 
</form> 
