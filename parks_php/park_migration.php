<?php 
//calls config to set constants needed to connect
require_once 'parks_config.php';
//calls file to connect to database
require_once '../db_controls/db_connect.php';
//echoes database connection status
echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";

//delete existing table 
$dbc->exec('DROP TABLE IF EXISTS `national_parks`');
//create new table variable to be inserted into query, alog with table keys
$add = "CREATE TABLE national_parks(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(240) NOT NULL,
    location VARCHAR(240) NOT NULL,
    date_established VARCHAR(12) NOT NULL,
    area_in_acres VARCHAR(30) NOT NULL,
    description TEXT NOT NULL,
    PRIMARY KEY(id)
    );";
//table creating query
$dbc->exec($add);
 ?>