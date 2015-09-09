<?php 
require_once '../template/Input.php';
$errors = [];
if(!empty($_POST)){
    $insertQuery = "INSERT INTO national_parks (name, location, date_established, area_in_acres, description) 
            VALUES (:name, :location, :date_established, :area, :description)";
    $stmt = $dbc->prepare($insertQuery);
        //prepare database to run query
    try {
    // Create a person
        $name = Input::getString('name');
        $stmt->bindValue(':name', $name, PDO::PARAM_STR);
    } catch (LengthException $e) {
            // Report any errors
        $errors[] = "Name - " . $e->getMessage();
    } catch (InvalidArgumentException $e){
        $errors[] = "Name - " . $e->getMessage();
    }
    try {
    // Create a person
        $location = Input::get('location');
        $stmt->bindValue(':location', $location, PDO::PARAM_STR);
    } catch (Exception $e) {
            // Report any errors
        $errors[] = "Location - " . $e->getMessage();
    } 
    try {
    // Create a person
        $date = Input::getDate('date');
        $stmt->bindValue(':date_established', $date, PDO::PARAM_STR);
    } catch (InvalidArgumentException $e){
        $errors[] = "Date - " . $e->getMessage();
    } catch (Exception $e) {
            // Report any errors
        $errors[] = "Date - " . $e->getMessage();
    }
    try {
    // Create a person
        $area = Input::getNumber('area');
        $stmt->bindValue(':area', $area, PDO::PARAM_STR);
    } catch (OutOfRangeException $e) {
            // Report any errors
        $errors[] = "Area - " . $e->getMessage();
    } catch (InvalidArgumentException $e){
        $errors[] = "Area - " . $e->getMessage();
    }
    try {
    // Create a person
        $description = Input::getString('description');
        $stmt->bindValue(':description', $description, PDO::PARAM_STR);
    } catch (LengthException $e) {
            // Report any errors
        $errors[] = "Description - " . $e->getMessage();
    } catch (InvalidArgumentException $e){
        $errors[] = "Description - " . $e->getMessage();
    }
    
    if(empty($errors)){
        $stmt->execute();
    }
}

?>