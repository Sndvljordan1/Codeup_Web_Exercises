<?php 
require_once '../display_parks.php';
 ?>
<html>
    <head>
        <title>Parks</title>
    </head>
    <body>
        <h1>National Parks</h1>
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
                <? foreach ($parks as $park): ?>
                    <tr>
                        <td><?="{$park['name']}"; ?></td>
                        <td><?="{$park['location']}"; ?></td> 
                        <td><?= "{$park['date_established']}"; ?></td>
                        <td><?= "{$park['area_in_acres']}"; ?></td>
                    </tr>
                <? endforeach; ?>
            </tbody>
        </table>
        <? if ($page > 1 && $page <= $totalPages): ?>
            <a class='btn btn-primary' href="?page=<?= $page - 1; ?>">PREVIOUS</a>
        <? endif; ?>
        <? if ($page < $totalPages): ?>
            <a class='btn btn-primary' href="?page=<?= $page + 1; ?>">NEXT</a>
        <? endif; ?>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    </body>
</html>