<?php
include('config.php'); 
if (isset($_GET['id']) ) { 
$id = (int) $_GET['id']; 
if (isset($_POST['submitted'])) { 
foreach($_POST AS $key => $value) { $_POST[$key] = mysql_real_escape_string($value); } 
$sql = "UPDATE `contacts` SET  `AccountId` =  '{$_POST['AccountId']}' ,  `AssistantName` =  '{$_POST['AssistantName']}' ,  `AssistantPhone` =  '{$_POST['AssistantPhone']}' ,  `Birthdate` =  '{$_POST['Birthdate']}' ,  `CreatedById` =  '{$_POST['CreatedById']}' ,  `CreatedDate` =  '{$_POST['CreatedDate']}' ,  `Department` =  '{$_POST['Department']}' ,  `Description` =  '{$_POST['Description']}' ,  `Email` =  '{$_POST['Email']}' ,  `EmailBouncedDate` =  '{$_POST['EmailBouncedDate']}' ,  `EmailBouncedReason` =  '{$_POST['EmailBouncedReason']}' ,  `Fax` =  '{$_POST['Fax']}' ,  `FirstName` =  '{$_POST['FirstName']}' ,  `HomePhone` =  '{$_POST['HomePhone']}' ,  `IsDeleted` =  '{$_POST['IsDeleted']}' ,  `Jigsaw` =  '{$_POST['Jigsaw']}' ,  `Languages__c` =  '{$_POST['Languages__c']}' ,  `LastActivityDate` =  '{$_POST['LastActivityDate']}' ,  `LastCURequestDate` =  '{$_POST['LastCURequestDate']}' ,  `LastCUUpdateDate` =  '{$_POST['LastCUUpdateDate']}' ,  `LastModifiedById` =  '{$_POST['LastModifiedById']}' ,  `LastModifiedDate` =  '{$_POST['LastModifiedDate']}' ,  `LastName` =  '{$_POST['LastName']}' ,  `LeadSource` =  '{$_POST['LeadSource']}' ,  `Level__c` =  '{$_POST['Level__c']}' ,  `MailingCity` =  '{$_POST['MailingCity']}' ,  `MailingCountry` =  '{$_POST['MailingCountry']}' ,  `MailingPostalCode` =  '{$_POST['MailingPostalCode']}' ,  `MailingState` =  '{$_POST['MailingState']}' ,  `MailingStreet` =  '{$_POST['MailingStreet']}' ,  `MasterRecordId` =  '{$_POST['MasterRecordId']}' ,  `MobilePhone` =  '{$_POST['MobilePhone']}' ,  `Name` =  '{$_POST['Name']}' ,  `OtherCity` =  '{$_POST['OtherCity']}' ,  `OtherCountry` =  '{$_POST['OtherCountry']}' ,  `OtherPhone` =  '{$_POST['OtherPhone']}' ,  `OtherPostalCode` =  '{$_POST['OtherPostalCode']}' ,  `OtherState` =  '{$_POST['OtherState']}' ,  `OtherStreet` =  '{$_POST['OtherStreet']}' ,  `OwnerId` =  '{$_POST['OwnerId']}' ,  `Phone` =  '{$_POST['Phone']}' ,  `ReportsToId` =  '{$_POST['ReportsToId']}' ,  `Salutation` =  '{$_POST['Salutation']}' ,  `SystemModstamp` =  '{$_POST['SystemModstamp']}' ,  `Title` =  '{$_POST['Title']}'   WHERE `id` = '$id' "; 
mysql_query($sql) or die(mysql_error()); 
echo (mysql_affected_rows()) ? "Edited row.<br />" : "Nothing changed. <br />"; 
echo "<a href='list.php'>Back To Listing</a>"; 
} 
$row = mysql_fetch_array ( mysql_query("SELECT * FROM `contacts` WHERE `id` = '$id' ")); 
?>

<form action='' method='POST'> 
<p><b>AccountId:</b><br /><input type='text' name='AccountId' value='<?= stripslashes($row['AccountId']) ?>' /> 
<p><b>AssistantName:</b><br /><input type='text' name='AssistantName' value='<?= stripslashes($row['AssistantName']) ?>' /> 
<p><b>AssistantPhone:</b><br /><input type='text' name='AssistantPhone' value='<?= stripslashes($row['AssistantPhone']) ?>' /> 
<p><b>Birthdate:</b><br /><input type='text' name='Birthdate' value='<?= stripslashes($row['Birthdate']) ?>' /> 
<p><b>CreatedById:</b><br /><input type='text' name='CreatedById' value='<?= stripslashes($row['CreatedById']) ?>' /> 
<p><b>CreatedDate:</b><br /><input type='text' name='CreatedDate' value='<?= stripslashes($row['CreatedDate']) ?>' /> 
<p><b>Department:</b><br /><input type='text' name='Department' value='<?= stripslashes($row['Department']) ?>' /> 
<p><b>Description:</b><br /><input type='text' name='Description' value='<?= stripslashes($row['Description']) ?>' /> 
<p><b>Email:</b><br /><input type='text' name='Email' value='<?= stripslashes($row['Email']) ?>' /> 
<p><b>EmailBouncedDate:</b><br /><input type='text' name='EmailBouncedDate' value='<?= stripslashes($row['EmailBouncedDate']) ?>' /> 
<p><b>EmailBouncedReason:</b><br /><input type='text' name='EmailBouncedReason' value='<?= stripslashes($row['EmailBouncedReason']) ?>' /> 
<p><b>Fax:</b><br /><input type='text' name='Fax' value='<?= stripslashes($row['Fax']) ?>' /> 
<p><b>FirstName:</b><br /><input type='text' name='FirstName' value='<?= stripslashes($row['FirstName']) ?>' /> 
<p><b>HomePhone:</b><br /><input type='text' name='HomePhone' value='<?= stripslashes($row['HomePhone']) ?>' /> 
<p><b>IsDeleted:</b><br /><input type='text' name='IsDeleted' value='<?= stripslashes($row['IsDeleted']) ?>' /> 
<p><b>Jigsaw:</b><br /><input type='text' name='Jigsaw' value='<?= stripslashes($row['Jigsaw']) ?>' /> 
<p><b>Languages  C:</b><br /><input type='text' name='Languages__c' value='<?= stripslashes($row['Languages__c']) ?>' /> 
<p><b>LastActivityDate:</b><br /><input type='text' name='LastActivityDate' value='<?= stripslashes($row['LastActivityDate']) ?>' /> 
<p><b>LastCURequestDate:</b><br /><input type='text' name='LastCURequestDate' value='<?= stripslashes($row['LastCURequestDate']) ?>' /> 
<p><b>LastCUUpdateDate:</b><br /><input type='text' name='LastCUUpdateDate' value='<?= stripslashes($row['LastCUUpdateDate']) ?>' /> 
<p><b>LastModifiedById:</b><br /><input type='text' name='LastModifiedById' value='<?= stripslashes($row['LastModifiedById']) ?>' /> 
<p><b>LastModifiedDate:</b><br /><input type='text' name='LastModifiedDate' value='<?= stripslashes($row['LastModifiedDate']) ?>' /> 
<p><b>LastName:</b><br /><input type='text' name='LastName' value='<?= stripslashes($row['LastName']) ?>' /> 
<p><b>LeadSource:</b><br /><input type='text' name='LeadSource' value='<?= stripslashes($row['LeadSource']) ?>' /> 
<p><b>Level  C:</b><br /><input type='text' name='Level__c' value='<?= stripslashes($row['Level__c']) ?>' /> 
<p><b>MailingCity:</b><br /><input type='text' name='MailingCity' value='<?= stripslashes($row['MailingCity']) ?>' /> 
<p><b>MailingCountry:</b><br /><input type='text' name='MailingCountry' value='<?= stripslashes($row['MailingCountry']) ?>' /> 
<p><b>MailingPostalCode:</b><br /><input type='text' name='MailingPostalCode' value='<?= stripslashes($row['MailingPostalCode']) ?>' /> 
<p><b>MailingState:</b><br /><input type='text' name='MailingState' value='<?= stripslashes($row['MailingState']) ?>' /> 
<p><b>MailingStreet:</b><br /><input type='text' name='MailingStreet' value='<?= stripslashes($row['MailingStreet']) ?>' /> 
<p><b>MasterRecordId:</b><br /><input type='text' name='MasterRecordId' value='<?= stripslashes($row['MasterRecordId']) ?>' /> 
<p><b>MobilePhone:</b><br /><input type='text' name='MobilePhone' value='<?= stripslashes($row['MobilePhone']) ?>' /> 
<p><b>Name:</b><br /><input type='text' name='Name' value='<?= stripslashes($row['Name']) ?>' /> 
<p><b>OtherCity:</b><br /><input type='text' name='OtherCity' value='<?= stripslashes($row['OtherCity']) ?>' /> 
<p><b>OtherCountry:</b><br /><input type='text' name='OtherCountry' value='<?= stripslashes($row['OtherCountry']) ?>' /> 
<p><b>OtherPhone:</b><br /><input type='text' name='OtherPhone' value='<?= stripslashes($row['OtherPhone']) ?>' /> 
<p><b>OtherPostalCode:</b><br /><input type='text' name='OtherPostalCode' value='<?= stripslashes($row['OtherPostalCode']) ?>' /> 
<p><b>OtherState:</b><br /><input type='text' name='OtherState' value='<?= stripslashes($row['OtherState']) ?>' /> 
<p><b>OtherStreet:</b><br /><input type='text' name='OtherStreet' value='<?= stripslashes($row['OtherStreet']) ?>' /> 
<p><b>OwnerId:</b><br /><input type='text' name='OwnerId' value='<?= stripslashes($row['OwnerId']) ?>' /> 
<p><b>Phone:</b><br /><input type='text' name='Phone' value='<?= stripslashes($row['Phone']) ?>' /> 
<p><b>ReportsToId:</b><br /><input type='text' name='ReportsToId' value='<?= stripslashes($row['ReportsToId']) ?>' /> 
<p><b>Salutation:</b><br /><input type='text' name='Salutation' value='<?= stripslashes($row['Salutation']) ?>' /> 
<p><b>SystemModstamp:</b><br /><input type='text' name='SystemModstamp' value='<?= stripslashes($row['SystemModstamp']) ?>' /> 
<p><b>Title:</b><br /><input type='text' name='Title' value='<?= stripslashes($row['Title']) ?>' /> 
<p><input type='submit' value='Edit Row' /><input type='hidden' value='1' name='submitted' /> 
</form> 
<? } ?> 
