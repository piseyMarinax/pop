<?php

// Always provide a TRAILING SLASH (/) AFTER A PATH
define('URL', 'http://pop.cam/');
define('LIBS', 'libs/');

define('DB_TYPE', 'mysql');
define('DB_HOST', 'http://pop.dev/');
define('DB_NAME', 'client_popdb');
define('DB_USER', 'admin');
define('DB_PASS', 'admin');

// The sitewide hashkey, do not change this because its used for passwords!
// This is for other hash keys... Not sure yet
define('HASH_GENERAL_KEY', 'MixitUp200');

// This is for database passwords only
define('HASH_PASSWORD_KEY', 'catsFLYhigh2000miles');