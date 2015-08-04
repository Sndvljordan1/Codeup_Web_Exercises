<?php 
require_once '../template/Input.php';
if (!empty($_POST))
{
    if (Input::has('name') && Input::has('location') && Input::has('date') && Input::has('area') && Input::has('description'))
    {
        //assigns user posted data to variables
        $name = Input::get('name');
        $location = Input::get('location');
        $inputDate = Input::get('date');
        $area = Input::get('area');
        $description = Input::get('description');
        $formatDate = date("m-d-Y", strtotime($inputDate));
        //sets query to variable
        $insertQuery = "INSERT INTO national_parks (name, location, date_established, area_in_acres, description) 
            VALUES (:name, :location, :date_established, :area, :description)";
        //prepare database to run query
        $stmt = $dbc->prepare($insertQuery);
        //binds values for use by database
        $stmt->bindValue(':name', $name, PDO::PARAM_STR);
        $stmt->bindValue(':location', $location, PDO::PARAM_STR);
        $stmt->bindValue(':date_established', $formatDate, PDO::PARAM_STR);
        $stmt->bindValue(':area', $area, PDO::PARAM_STR);
        $stmt->bindValue(':description', $description, PDO::PARAM_STR);
        //executes query to add new park
        $stmt->execute();
    } else
    {
        $errorMessage = "To add a park please make sure to complete all fields.";
    }
}
 ?>