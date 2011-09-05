<?php

require_once '/var/www/workspace/sfbackup/lib/php-activerecord/ActiveRecord.php';

ActiveRecord\Config::initialize(function($cfg)
{
	$cfg->set_model_directory('/var/www/workspace/sfbackup/models');
	$cfg->set_connections(array(
    'development' => 'mysql://root:123456@localhost/sfbackup'));
});

