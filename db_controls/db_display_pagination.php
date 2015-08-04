<?php
require_once '../parks_php/parks_config.php';
require_once 'db_connect.php';
 //declare variables for offset, total number of columns/parks, and total number of pages
$offset = 0;
$stmt = $dbc->query("SELECT count(*) FROM {$table}");
$totalPages = ceil(($stmt->fetchColumn())/$limit);
//if index at page is not set, numeric, or greater than one then set page to page 1
if (!isset($_GET['page']) || !is_numeric($_GET['page']) || $_GET['page'] < 1) {
    $_GET['page'] = 1;
    $page = 1;
} else{
    //if not page 1, take index and set as page number, take index -1 * limit to get offset
    $offset = ($_GET['page'] - 1) * $limit;
    $page = $_GET['page']; 
}
//if index at page is greater than the total number of pages then redirect to last available page
if ($_GET['page'] > $totalPages){
    header("Location: ?page=$totalPages");
}
//set query to select which table and what data to show from that table based on offset, limit, and table variables
$display = $dbc->query("SELECT * FROM {$table} LIMIT {$limit} OFFSET {$offset}")->fetchAll(PDO::FETCH_ASSOC);