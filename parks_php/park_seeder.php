<?php 
//calls config to set constants needed to connect
require_once 'parks_config.php';
//calls file to connect to database
require_once '../db_controls/db_connect.php';
//echoes dataase connection status
echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";
//truncates table to eliminate possible duplication of data when seeder is run
$truncstmt = $dbc->prepare('TRUNCATE national_parks');
$truncstmt->execute();

//data to be insert into table set as array
$parks = [
    ['name'=> 'Acadia',
     'location'=> 'Maine',
     'date_established'=>'02-26-1919',
     'area_in_acres'=>'47389.67',
     'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas aspernatur a, animi, reiciendis, reprehenderit temporibus enim in laudantium ratione nam expedita omnis provident natus distinctio. Perspiciatis nobis nemo optio ut!'],
    
    ['name'=> 'Arches',
     'location'=>'Utah',
     'date_established'=> '04-12-1929',
     'area_in_acres'=>'76518.98',
     'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas, in. Temporibus sit, sapiente illo unde nulla quibusdam amet aut nam omnis non laudantium, tempore ipsum saepe maxime officia! Voluptatem, illum?'],
    
    ['name'=>'Bad Lands',
     'location'=>'South Dakota',
     'date_established'=>'11-10-1978',
     'area_in_acres'=> '242755.94',
     'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque corporis enim officia modi, incidunt rerum fugit deleniti est, eos expedita exercitationem odit optio ab sequi commodi provident illum laborum error!'],
    
    ['name'=>'Big Bend',
     'location'=> 'Texas',
     'date_established'=> '06-12-1944',
     'area_in_acres'=>'801163.21',
     'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel ex perspiciatis cum harum mollitia at, aspernatur similique, unde magni, voluptas dolores. Rem, rerum dolore fuga sed eligendi nulla, consequatur dicta.'],
    
    ['name'=>'Crater Lake',
     'location'=> 'Oregon',
     'date_established'=>'05-22-1902',
     'area_in_acres'=>'183244.05',
     'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste consequuntur maiores repellendus blanditiis mollitia, architecto obcaecati commodi quae. Dignissimos reiciendis, odit quia? Error tenetur aperiam eos, porro rerum similique deserunt!'],
    
    ['name'=>'Denali',
     'location'=>'Alaska',
     'date_established'=>'02-26-1917',
     'area_in_acres'=>'4740911.72',
     'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore consequuntur culpa inventore, nobis pariatur dolorum consequatur deleniti repellat quod dolorem repudiandae nesciunt quia quasi molestias sint quae tenetur natus obcaecati?'],
    
    ['name'=>'Everglades',
     'location'=>'Florida',
     'date_established'=>'05-30-1934',
     'area_in_acres'=>'1508537.90',
     'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam saepe hic ex, aliquid commodi quae, totam consequatur quaerat sequi accusantium fugiat cupiditate ab mollitia veritatis aspernatur minus sapiente, natus adipisci.'],
    
    ['name'=>'Glacier',
     'location'=>'Montana',
     'date_established'=>'05-11-1910',
     'area_in_acres'=>'1013572.41',
     'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam veritatis tempora sit earum voluptatem commodi ea iste distinctio est vel, dolor veniam atque perspiciatis nostrum unde iure consequuntur. Iusto, delectus.'],
    
    ['name'=>'Hot Springs',
     'location'=>'Arkansas',
     'date_established'=>'03-04-1921',
     'area_in_acres'=>'5549.75',
     'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias officiis aspernatur voluptates commodi delectus quo sed corrupti, doloribus, illum repellendus, dicta omnis ipsa facilis debitis vel nihil distinctio explicabo eveniet.'],
    
    ['name'=>'Katmai',
     'location'=>'Alaska',
     'date_established'=>'12-02-1980',
     'area_in_acres'=>'3674529.68',
     'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa quas, animi quibusdam, quos saepe et officia a tempora atque. Itaque corrupti dignissimos eveniet nobis maxime. Quasi, dolores incidunt cupiditate obcaecati.'],
    
    ['name'=>'Biscayne',
     'location'=>'Florida',
     'date_established'=>'06-28-1980',
     'area_in_acres'=>'172924.07',
     'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda mollitia obcaecati nesciunt blanditiis ratione nobis, pariatur nemo ducimus explicabo dolor iusto, nihil, optio natus fugiat, dolorem deserunt tempora ipsam tenetur.'],
    
    ['name'=>'Redwood',
     'location'=>'California',
     'date_established'=>'10-02-1968',
     'area_in_acres'=>'112512.05',
     'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt obcaecati labore aliquam, possimus deserunt voluptates eaque ex, at vitae illum aut, nisi non! Ducimus, nam necessitatibus quo tenetur sint modi.'],
    
    ['name'=>'Saguaro',
     'location'=>'Arizona',
     'date_established'=>'10-14-1994',
     'area_in_acres'=>'91439.71',
     'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum molestiae tenetur dolorem officiis minus aliquam quia et non quibusdam fugit deleniti nisi at, repellat placeat aliquid voluptatem. Eligendi, maiores incidunt.']
];

$stmt = $dbc->prepare(
    "INSERT INTO national_parks (name, location, date_established, area_in_acres, description) 
    VALUES( :name, :location, :date_established, :area_in_acres, :description)"
);



//iterating array to input pair each field with correct table keys 
foreach ($parks as $park) { 
    $formatDate = date("m-d-Y", strtotime($park['date_established']));

    $stmt->bindValue(':name', $park['name'], PDO::PARAM_STR); 
    $stmt->bindValue(':location', $park['location'], PDO::PARAM_STR); 
    $stmt->bindValue(':date_established', $formatDate, PDO::PARAM_STR); 
    $stmt->bindValue(':area_in_acres', $park['area_in_acres'], PDO::PARAM_STR);
    $stmt->bindValue(':description', $park['description'], PDO::PARAM_STR);
    //executes insertion query
    $stmt->execute();
    //echoes id's for each park in array in order to verify completion and corret number of entries
    echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;
};