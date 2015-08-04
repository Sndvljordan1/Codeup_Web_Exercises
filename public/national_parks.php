<?php 
//set limit for use in pagination file 
$limit = 4;
$config = '../parks_php/parks_config.php';
//call pagination file
require_once '../db_controls/db_display_pagination.php';
 ?>
<html>
    <head>
        <title>Parks</title>
    </head>
    <body>
        <h1>National Parks</h1>
        <!-- twitterbootstrap classes for styling -->
        <table class=" col-md-4 container  table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Park Name</th>
                    <th>Park Location</th>
                    <th>Date of Park Establishment</th>
                    <th>Park Area in Acres</th>
                </tr>
            </thead>
            <tbody>
                <!-- set foreach loop to display information in human friendly manner -->
                <? foreach ($display as $park): ?>
                    <tr>
                        <td><?="{$park['name']}"; ?></td>
                        <td><?="{$park['location']}"; ?></td> 
                        <td><?= "{$park['date_established']}"; ?></td>
                        <td><?= "{$park['area_in_acres']}"; ?></td>
                    </tr>
                <? endforeach; ?>
            </tbody>
        </table>
        <!-- allow previous button to be seen on all pages after page 1 -->
        <? if ($page > 1 && $page <= $totalPages): ?>
            <a class='btn btn-primary' href="?page=<?= $page - 1; ?>">PREVIOUS</a>
        <? endif; ?>
        <!-- allow next button to be seen on all pages before last page -->
        <? if ($page < $totalPages): ?>
            <a class='btn btn-primary' href="?page=<?= $page + 1; ?>">NEXT</a>
        <? endif; ?>
        <!-- twitterbootstrap cdn for styling -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    </body>
</html>