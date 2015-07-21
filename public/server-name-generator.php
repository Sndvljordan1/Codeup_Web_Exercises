<?php
	
	function generateName($array){
		$serverName = mt_rand(0, count($array)-1);
		return $array[$serverName];
	}

	function pageController()
	{
	    // Initialize an empty data array.
	    $data = array();

	    // Add data to be used in the html view.
	    $data['adj'] = ['Hungry', 'Melancholy', 'Plastic', 'Lonely', 'Arbitrary', 'Perpetual', 'Cosmic', 'Chocolate covered', 'Hard', 'Limp', 'Bright', 'Bubbly', 'Uncomfortable', 'Small', 'Dirty', 'Spicy', 'Dull', 'Bitter', 'Funky', 'Silent', 'Stormy', 'Dark', 'Derpy', 'Giant', 'Slick', 'Deadly', 'Famous', 'Magic'];
		$data['noun'] = ['beach', 'hill', 'island', 'noodle', 'chair', 'desk', 'coffee bean', 'wand', 'snake', 'liver', 'dwarf', 'Iskandir', 'mumakil', 'ninja', 'kiwi', 'Chuck Norris round house kick to the face', 'jawa', 'hobbit', 'nun', 'raccoon', 'CL4P-TRP', 'novel', 'dragon'];
	    $data['serverName'] = generateName($data['adj']) . ' ' . generateName($data['noun']);

	    // Return the completed data array.
	    return $data;    
	}

	// Call the pageController function and extract all the returned array as local variables.
	extract(pageController());

	// Only use echo, conditionals, and loops anywhere within the HTML.


?>
<!Doctype html>
<html>
	<head>
		<title>Generation name</title>
	</head>
	<body>
		<h1>Your new server name is<br> <span><?= $serverName;?></span>!</h1>
	</body>
	<style>
	span{
		font-size: 3em;
		color: burlywood;
		font-style: bold, italic, underline;
	}
	</style>
</html>