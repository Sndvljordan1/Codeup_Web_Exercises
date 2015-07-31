<?php 
$dbc = new PDO("$DB_HOST;$DB_NAME", "$USER", "$PASS");

$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);




















 ?>