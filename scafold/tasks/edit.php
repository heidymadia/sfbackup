<?php
include('config.php'); 
if (isset($_GET['id']) ) { 
$id = (int) $_GET['id']; 
if (isset($_POST['submitted'])) { 
foreach($_POST AS $key => $value) { $_POST[$key] = mysql_real_escape_string($value); } 
$sql = "UPDATE `tasks` SET  `AccountId` =  '{$_POST['AccountId']}' ,  `ActivityDate` =  '{$_POST['ActivityDate']}' ,  `CallDisposition` =  '{$_POST['CallDisposition']}' ,  `CallDurationInSeconds` =  '{$_POST['CallDurationInSeconds']}' ,  `CallObject` =  '{$_POST['CallObject']}' ,  `CallType` =  '{$_POST['CallType']}' ,  `CreatedById` =  '{$_POST['CreatedById']}' ,  `CreatedDate` =  '{$_POST['CreatedDate']}' ,  `Description` =  '{$_POST['Description']}' ,  `IsArchived` =  '{$_POST['IsArchived']}' ,  `IsClosed` =  '{$_POST['IsClosed']}' ,  `IsDeleted` =  '{$_POST['IsDeleted']}' ,  `IsRecurrence` =  '{$_POST['IsRecurrence']}' ,  `IsReminderSet` =  '{$_POST['IsReminderSet']}' ,  `LastModifiedById` =  '{$_POST['LastModifiedById']}' ,  `LastModifiedDate` =  '{$_POST['LastModifiedDate']}' ,  `OwnerId` =  '{$_POST['OwnerId']}' ,  `Priority` =  '{$_POST['Priority']}' ,  `RecurrenceActivityId` =  '{$_POST['RecurrenceActivityId']}' ,  `RecurrenceDayOfMonth` =  '{$_POST['RecurrenceDayOfMonth']}' ,  `RecurrenceDayOfWeekMask` =  '{$_POST['RecurrenceDayOfWeekMask']}' ,  `RecurrenceEndDateOnly` =  '{$_POST['RecurrenceEndDateOnly']}' ,  `RecurrenceInstance` =  '{$_POST['RecurrenceInstance']}' ,  `RecurrenceInterval` =  '{$_POST['RecurrenceInterval']}' ,  `RecurrenceMonthOfYear` =  '{$_POST['RecurrenceMonthOfYear']}' ,  `RecurrenceStartDateOnly` =  '{$_POST['RecurrenceStartDateOnly']}' ,  `RecurrenceTimeZoneSidKey` =  '{$_POST['RecurrenceTimeZoneSidKey']}' ,  `RecurrenceType` =  '{$_POST['RecurrenceType']}' ,  `ReminderDateTime` =  '{$_POST['ReminderDateTime']}' ,  `Status` =  '{$_POST['Status']}' ,  `Subject` =  '{$_POST['Subject']}' ,  `SystemModstamp` =  '{$_POST['SystemModstamp']}' ,  `WhatId` =  '{$_POST['WhatId']}' ,  `WhoId` =  '{$_POST['WhoId']}'   WHERE `id` = '$id' "; 
mysql_query($sql) or die(mysql_error()); 
echo (mysql_affected_rows()) ? "Edited row.<br />" : "Nothing changed. <br />"; 
echo "<a href='list.php'>Back To Listing</a>"; 
} 
$row = mysql_fetch_array ( mysql_query("SELECT * FROM `tasks` WHERE `id` = '$id' ")); 
?>

<form action='' method='POST'> 
<p><b>AccountId:</b><br /><input type='text' name='AccountId' value='<?= stripslashes($row['AccountId']) ?>' /> 
<p><b>ActivityDate:</b><br /><input type='text' name='ActivityDate' value='<?= stripslashes($row['ActivityDate']) ?>' /> 
<p><b>CallDisposition:</b><br /><input type='text' name='CallDisposition' value='<?= stripslashes($row['CallDisposition']) ?>' /> 
<p><b>CallDurationInSeconds:</b><br /><input type='text' name='CallDurationInSeconds' value='<?= stripslashes($row['CallDurationInSeconds']) ?>' /> 
<p><b>CallObject:</b><br /><input type='text' name='CallObject' value='<?= stripslashes($row['CallObject']) ?>' /> 
<p><b>CallType:</b><br /><input type='text' name='CallType' value='<?= stripslashes($row['CallType']) ?>' /> 
<p><b>CreatedById:</b><br /><input type='text' name='CreatedById' value='<?= stripslashes($row['CreatedById']) ?>' /> 
<p><b>CreatedDate:</b><br /><input type='text' name='CreatedDate' value='<?= stripslashes($row['CreatedDate']) ?>' /> 
<p><b>Description:</b><br /><input type='text' name='Description' value='<?= stripslashes($row['Description']) ?>' /> 
<p><b>IsArchived:</b><br /><input type='text' name='IsArchived' value='<?= stripslashes($row['IsArchived']) ?>' /> 
<p><b>IsClosed:</b><br /><input type='text' name='IsClosed' value='<?= stripslashes($row['IsClosed']) ?>' /> 
<p><b>IsDeleted:</b><br /><input type='text' name='IsDeleted' value='<?= stripslashes($row['IsDeleted']) ?>' /> 
<p><b>IsRecurrence:</b><br /><input type='text' name='IsRecurrence' value='<?= stripslashes($row['IsRecurrence']) ?>' /> 
<p><b>IsReminderSet:</b><br /><input type='text' name='IsReminderSet' value='<?= stripslashes($row['IsReminderSet']) ?>' /> 
<p><b>LastModifiedById:</b><br /><input type='text' name='LastModifiedById' value='<?= stripslashes($row['LastModifiedById']) ?>' /> 
<p><b>LastModifiedDate:</b><br /><input type='text' name='LastModifiedDate' value='<?= stripslashes($row['LastModifiedDate']) ?>' /> 
<p><b>OwnerId:</b><br /><input type='text' name='OwnerId' value='<?= stripslashes($row['OwnerId']) ?>' /> 
<p><b>Priority:</b><br /><input type='text' name='Priority' value='<?= stripslashes($row['Priority']) ?>' /> 
<p><b>RecurrenceActivityId:</b><br /><input type='text' name='RecurrenceActivityId' value='<?= stripslashes($row['RecurrenceActivityId']) ?>' /> 
<p><b>RecurrenceDayOfMonth:</b><br /><input type='text' name='RecurrenceDayOfMonth' value='<?= stripslashes($row['RecurrenceDayOfMonth']) ?>' /> 
<p><b>RecurrenceDayOfWeekMask:</b><br /><input type='text' name='RecurrenceDayOfWeekMask' value='<?= stripslashes($row['RecurrenceDayOfWeekMask']) ?>' /> 
<p><b>RecurrenceEndDateOnly:</b><br /><input type='text' name='RecurrenceEndDateOnly' value='<?= stripslashes($row['RecurrenceEndDateOnly']) ?>' /> 
<p><b>RecurrenceInstance:</b><br /><input type='text' name='RecurrenceInstance' value='<?= stripslashes($row['RecurrenceInstance']) ?>' /> 
<p><b>RecurrenceInterval:</b><br /><input type='text' name='RecurrenceInterval' value='<?= stripslashes($row['RecurrenceInterval']) ?>' /> 
<p><b>RecurrenceMonthOfYear:</b><br /><input type='text' name='RecurrenceMonthOfYear' value='<?= stripslashes($row['RecurrenceMonthOfYear']) ?>' /> 
<p><b>RecurrenceStartDateOnly:</b><br /><input type='text' name='RecurrenceStartDateOnly' value='<?= stripslashes($row['RecurrenceStartDateOnly']) ?>' /> 
<p><b>RecurrenceTimeZoneSidKey:</b><br /><input type='text' name='RecurrenceTimeZoneSidKey' value='<?= stripslashes($row['RecurrenceTimeZoneSidKey']) ?>' /> 
<p><b>RecurrenceType:</b><br /><input type='text' name='RecurrenceType' value='<?= stripslashes($row['RecurrenceType']) ?>' /> 
<p><b>ReminderDateTime:</b><br /><input type='text' name='ReminderDateTime' value='<?= stripslashes($row['ReminderDateTime']) ?>' /> 
<p><b>Status:</b><br /><input type='text' name='Status' value='<?= stripslashes($row['Status']) ?>' /> 
<p><b>Subject:</b><br /><input type='text' name='Subject' value='<?= stripslashes($row['Subject']) ?>' /> 
<p><b>SystemModstamp:</b><br /><input type='text' name='SystemModstamp' value='<?= stripslashes($row['SystemModstamp']) ?>' /> 
<p><b>WhatId:</b><br /><input type='text' name='WhatId' value='<?= stripslashes($row['WhatId']) ?>' /> 
<p><b>WhoId:</b><br /><input type='text' name='WhoId' value='<?= stripslashes($row['WhoId']) ?>' /> 
<p><input type='submit' value='Edit Row' /><input type='hidden' value='1' name='submitted' /> 
</form> 
<? } ?> 
