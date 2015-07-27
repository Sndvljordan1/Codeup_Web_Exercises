<?php 

class Person
{
	public $firstName;
	public $lastName;
}

class Cohort
{
	public $name;
	public $startDate;
	public $endDate;
	public $students;

	public function addStudent($student)
	{
		$this->students[] = $student;
		return 'Welcome to ' . $this->name . ' ' . $student->firstName . ' ' . $student->lastName . PHP_EOL;
	}
}

$person1 = new Person();

$person1->firstName = 'Lionel';
$person1->lastName = 'Richie';

$person2 = new Person();

$person2->firstName = 'Bob';
$person2->lastName = 'Dylan';

$person3 = new Person();
$person3->firstName = 'John';
$person3->lastName = 'Lenon';

var_dump($person1);
var_dump($person2);
var_dump($person3);
echo  $person1->firstName . ' ' . $person1->lastName . PHP_EOL;

$glacier = new Cohort();
$glacier->name = 'Glacier';
echo $glacier->addStudent($person1) . PHP_EOL;
echo $glacier->addStudent($person2) . PHP_EOL;
echo $glacier->addStudent($person3) . PHP_EOL;

 ?>