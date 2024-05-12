<?php

//konštanta
define('DATABASE', [
    'HOST' => 'localhost',
    'DBNAME' => 'dt_sj_projekt',
    'USER_NAME' => 'root',
    'PASSWORD' => ''
]);

require_once('classes/Menu.php');
require_once('classes/Database.php');
require_once('classes/User.php');

session_start();
?>