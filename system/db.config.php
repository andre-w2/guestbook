<?php
session_start();
define('DIR', $_SERVER['DOCUMENT_ROOT']);

include_once 'lib/mysqli.class.php';
include_once 'lib/navigation.php';

$DB_HOST='localhost';
$DB_USER='root';
$DB_PASS='';
$DB_BASE='guestbook';

$db = new SafeMySQL(array('user' => $DB_USER, 'pass' => $DB_PASS,'db' => $DB_BASE, 'charset' => 'utf8'));
