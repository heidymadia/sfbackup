<?php  
include('config.php'); 
if (isset($_POST['submitted'])) { 
foreach($_POST AS $key => $value) { $_POST[$key] = mysql_real_escape_string($value); } 
$sql = "INSERT INTO `tasks` ( `AccountId` ,  `ActivityDate` ,  `CallDisposition` ,  `CallDurationInSeconds` ,  `CallObject` ,  `CallType` ,  `CreatedById` ,  `CreatedDate` ,  `Description` ,  `IsArchived` ,  `IsClosed` ,  `IsDeleted` ,  `IsRecurrence` ,  `IsReminderSet` ,  `LastModifiedById` ,  `LastModifiedDate` ,  `OwnerId` ,  `Priority` ,  `RecurrenceActivityId` ,  `RecurrenceDayOfMonth` ,  `RecurrenceDayOfWeekMask` ,  `RecurrenceEndDateOnly` ,  `RecurrenceInstance` ,  `RecurrenceInterval` ,  `RecurrenceMonthOfYear` ,  `RecurrenceStartDateOnly` ,  `RecurrenceTimeZoneSidKey` ,  `RecurrenceType` ,  `ReminderDateTime` ,  `Status` ,  `Subject` ,  `SystemModstamp` ,  `WhatId` ,  `WhoId`  ) VALUES(  '{$_POST['AccountId']}' ,  '{$_POST['ActivityDate']}' ,  '{$_POST['CallDisposition']}' ,  '{$_POST['CallDurationInSeconds']}' ,  '{$_POST['CallObject']}' ,  '{$_POST['CallType']}' ,  '{$_POST['CreatedById']}' ,  '{$_POST['CreatedDate']}' ,  '{$_POST['Description']}' ,  '{$_POST['IsArchived']}' ,  '{$_POST['IsClosed']}' ,  '{$_POST['IsDeleted']}' ,  '{$_POST['IsRecurrence']}' ,  '{$_POST['IsReminderSet']}' ,  '{$_POST['LastModifiedById']}' ,  '{$_POST['LastModifiedDate']}' ,  '{$_POST['OwnerId']}' ,  '{$_POST['Priority']}' ,  '{$_POST['RecurrenceActivityId']}' ,  '{$_POST['RecurrenceDayOfMonth']}' ,  '{$_POST['RecurrenceDayOfWeekMask']}' ,  '{$_POST['RecurrenceEndDateOnly']}' ,  '{$_POST['RecurrenceInstance']}' ,  '{$_POST['RecurrenceInterval']}' ,  '{$_POST['RecurrenceMonthOfYear']}' ,  '{$_POST['RecurrenceStartDateOnly']}' ,  '{$_POST['RecurrenceTimeZoneSidKey']}' ,  '{$_POST['RecurrenceType']}' ,  '{$_POST['ReminderDateTime']}' ,  '{$_POST['Status']}' ,  '{$_POST['Subject']}' ,  '{$_POST['SystemModstamp']}' ,  '{$_POST['WhatId']}' ,  '{$_POST['WhoId']}'  ) "; 
mysql_query($sql) or die(mysql_error()); 
echo "Added row.<br />"; 
echo "<a href='list.php'>Back To Listing</a>"; 
} 
?>

<form action='' method='POST'> 
<p><b>AccountId:</b><br /><input type='text' name='AccountId'/> 
<p><b>ActivityDate:</b><br /><input type='text' name='ActivityDate'/> 
<p><b>CallDisposition:</b><br /><input type='text' name='CallDisposition'/> 
<p><b>CallDurationInSeconds:</b><br /><input type='text' name='CallDurationInSeconds'/> 
<p><b>CallObject:</b><br /><input type='text' name='CallObject'/> 
<p><b>CallType:</b><br /><input type='text' name='CallType'/> 
<p><b>CreatedById:</b><br /><input type='text' name='CreatedById'/> 
<p><b>CreatedDate:</b><br /><input type='text' name='CreatedDate'/> 
<p><b>Description:</b><br /><input type='text' name='Description'/> 
<p><b>IsArchived:</b><br /><input type='text' name='IsArchived'/> 
<p><b>IsClosed:</b><br /><input type='text' name='IsClosed'/> 
<p><b>IsDeleted:</b><br /><input type='text' name='IsDeleted'/> 
<p><b>IsRecurrence:</b><br /><input type='text' name='IsRecurrence'/> 
<p><b>IsReminderSet:</b><br /><input type='text' name='IsReminderSet'/> 
<p><b>LastModifiedById:</b><br /><input type='text' name='LastModifiedById'/> 
<p><b>LastModifiedDate:</b><br /><input type='text' name='LastModifiedDate'/> 
<p><b>OwnerId:</b><br /><input type='text' name='OwnerId'/> 
<p><b>Priority:</b><br /><input type='text' name='Priority'/> 
<p><b>RecurrenceActivityId:</b><br /><input type='text' name='RecurrenceActivityId'/> 
<p><b>RecurrenceDayOfMonth:</b><br /><input type='text' name='RecurrenceDayOfMonth'/> 
<p><b>RecurrenceDayOfWeekMask:</b><br /><input type='text' name='RecurrenceDayOfWeekMask'/> 
<p><b>RecurrenceEndDateOnly:</b><br /><input type='text' name='RecurrenceEndDateOnly'/> 
<p><b>RecurrenceInstance:</b><br /><input type='text' name='RecurrenceInstance'/> 
<p><b>RecurrenceInterval:</b><br /><input type='text' name='RecurrenceInterval'/> 
<p><b>RecurrenceMonthOfYear:</b><br /><input type='text' name='RecurrenceMonthOfYear'/> 
<p><b>RecurrenceStartDateOnly:</b><br /><input type='text' name='RecurrenceStartDateOnly'/> 
<p><b>RecurrenceTimeZoneSidKey:</b><br /><input type='text' name='RecurrenceTimeZoneSidKey'/> 
<p><b>RecurrenceType:</b><br /><input type='text' name='RecurrenceType'/> 
<p><b>ReminderDateTime:</b><br /><input type='text' name='ReminderDateTime'/> 
<p><b>Status:</b><br /><input type='text' name='Status'/> 
<p><b>Subject:</b><br /><input type='text' name='Subject'/> 
<p><b>SystemModstamp:</b><br /><input type='text' name='SystemModstamp'/> 
<p><b>WhatId:</b><br /><input type='text' name='WhatId'/> 
<p><b>WhoId:</b><br /><input type='text' name='WhoId'/> 
<p><input type='submit' value='Add Row' /><input type='hidden' value='1' name='submitted' /> 
</form> 
