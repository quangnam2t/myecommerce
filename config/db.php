<?php

/**
 * Database Configuration
 *
 * All of your system's database configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/db.php
 */

return array(

	'*' => array(
		'tablePrefix' => 'cp'
	),
	'local.dhp' => array(
		'server' => 'localhost',
		'user' => 'root',
		// 'password' => 'zJ2CJKcRBq',
		'database' => 'crossparkdb'
	),
);
