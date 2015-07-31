<?php 
$DB_HOST = 'mysql:host=127.0.0.1';
$DB_NAME = 'employees';
$USER = 'codeup';
$PASS = '';
require_once 'db_connect.php';

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";
 ?>