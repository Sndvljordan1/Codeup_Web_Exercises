<?php 
//call pagination file ands states file
require_once '../template/states_array.php';
require_once '../db_controls/db_display_pagination.php';
//set parks array for ease of use

$parks = $displayArray;
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
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                <!-- set foreach loop to display information in human friendly manner -->
                <? foreach ($parks as $park): ?>
                    <tr>
                        <td><?="{$park['name']}"; ?></td>
                        <td><?="{$park['location']}"; ?></td> 
                        <td><?="{$park['date_established']}"; ?></td>
                        <td><?="{$park['area_in_acres']}"; ?></td>
                        <td><?="{$park['description']}"; ?></td>
                    </tr>
                <? endforeach; ?>
            </tbody>
        </table>

        <!-- allow first button to be seen on all pages after page 2 -->
        <? if ($page > 2 && $page <= $totalPages): ?>
            <a class='btn btn-primary' href="?page=1">FIRST</a>
        <? endif; ?>
       
        <!-- allow previous button to be seen on all pages after page 1 -->
        <? if ($page > 1 && $page <= $totalPages): ?>
            <a class='btn btn-primary' href="?page=<?= $page - 1; ?>">PREVIOUS</a>
        <? endif; ?>
       
        <!-- allow next button to be seen on all pages before last page -->
        <? if ($page < $totalPages): ?>
            <a class='btn btn-primary' href="?page=<?= $page + 1; ?>">NEXT</a>
        <? endif; ?>
       
        <!-- allow next button to be seen on all pages before second to last page -->
        <? if ($page < ($totalPages - 1)): ?>
            <a class='btn btn-primary' href="?page=<?= $totalPages; ?>">LAST</a>
        <? endif; ?>

        <div class="container">
            <?php foreach ($errors as $error) : ?>
                <p id="error messages"><?= $error; ?></p>
             <?php endforeach; ?>
            <form method="POST">
                <div class="form-group">
                    <label for="name">Name of National Park</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" value="<?= isset($_POST['name']) ? Input::get('name') : '' ; ?>" require=' '>
                    
                </div>
                <div class="form-group">
                    <label for="location">Location of Park</label>
                    <select name="location" id="location" class="form-control">
                        <?php foreach ($states as $state): ?>
                            <option value="<?= isset($_POST['location']) ? $state : '' ;  ?>"><?= $state; ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                 <div class="form-group">
                    <label for="date">Date of Establishment</label>
                    <input value="<?= isset($_POST['date']) ? Input::get('date') : '' ;  ?>" type="date" class="form-control" name="date" id="date" placeholder="Please enter mm/dd/yyyy" require=' '>
                </div>
                 <div class="form-group">
                    <label for="area">Area in Acres</label>
                    <input value="<?= isset($_POST['area']) ? Input::get('area') : '' ;  ?>" type="text" class="form-control" name="area" id="area" placeholder="Enter area of park in acres." require=' '>                
                </div>
                 <div class="form-group">
                    <label for="description">Description of Park</label>
                    <textarea class="form-control" rows="3" name="description" id="description" placeholder="Description of Park" require=' '><?= isset($_POST['description']) ? Input::get('name') : '' ;  ?></textarea>
                </div>
                <input class="btn btn-primary" type="submit" style="float: right">
            </form>
        </div>
       
        <!-- twitterbootstrap cdn for styling -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    </body>
</html>