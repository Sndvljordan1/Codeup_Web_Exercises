<?php 
require_once 'parks_config.php';
require_once 'db_connect.php';

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";

$dbc->exec('TRUNCATE national_parks');



$parks = [
    ['name'=> 'Acadia', 
    'location'=> 'Maine', 
    'date_established'=>'1919-02-26', 
    'area_in_acres'=>47389.67],
    ['name'=> 'Arches',
     'location'=>'Utah',
     'date_established'=> '1929-04-12', 
     'area_in_acres'=>76518.98],
    ['name'=>'Bad Lands',
     'location'=>'South Dakota',
     'date_established'=>'1978-11-10',
     'area_in_acres'=> 242755.94],
    ['name'=>'Big Bend',
     'location'=> 'Texas',
     'date_established'=> '1944-06-12',
     'area_in_acres'=>801163.21],
    ['name'=>'Crater Lake',
     'location'=> 'Oregon',
     'date_established'=>'1902-05-22',
     'area_in_acres'=>183244.05],
    ['name'=>'Denali',
     'location'=>'Alaska',
     'date_established'=>'1917-02-26',
     'area_in_acres'=>4740911.72],
    ['name'=>'Everglades',
     'location'=>'Florida',
     'date_established'=>'1934-05-30',
     'area_in_acres'=>1508537.90],
    ['name'=>'Glacier',
     'location'=>'Montana',
     'date_established'=>'1910-05-11',
     'area_in_acres'=>1013572.41],
    ['name'=>'Hot Springs',
     'location'=>'Arkansas',
     'date_established'=>'1921-03-04',
     'area_in_acres'=>5549.75],
    ['name'=>'Katmai',
     'location'=>'Alaska',
     'date_established'=>'1980-12-02',
     'area_in_acres'=>3674529.68]
     ,
    ['name'=>'Biscayne',
     'location'=>'Florida',
     'date_established'=>'1980-06-28',
     'area_in_acres'=>172924.07],
    ['name'=>'Redwood',
     'location'=>'California',
     'date_established'=>'1968-10-02',
     'area_in_acres'=>112512.05],
    ['name'=>'Saguaro',
     'location'=>'Arizona',
     'date_established'=>'1994-10-14',
     'area_in_acres'=>91439.71],
    ['name'=>'Shenandoah',
     'location'=>'Virginia',
     'date_established'=>'1926-05-22',
     'area_in_acres'=>199045.23]
    ];

foreach ($parks as $park) {
    $query = "INSERT INTO national_parks 
        (name, location, date_established, area_in_acres) 
        VALUES('{$park['name']}', 
            '{$park['location']}', 
            '{$park['date_established']}', 
            '{$park['area_in_acres']}')";
    $dbc->exec($query);
    echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;
};
