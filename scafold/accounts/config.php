<?php
// connect to db
$link = mysql_connect('localhost', 'root', '123456');
if (!$link) {
    die('Not connected : ' . mysql_error());
}

if (! mysql_select_db('sfbackup') ) {
    die ('Can\'t use foo : ' . mysql_error());
}
