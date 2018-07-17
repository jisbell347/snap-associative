<?php
// creates an array with multiple arrays nested inside the array


$person = {"name": "foo", "age": 11}

$person->getName(); // returns foo
$person->setName("Caleb");
$person->setAge(18);


$car = {"model": "ford", "cylinders" : 8};

class Car {
	private $model;
	private $cylinders;
	// The "$this" keyword is pointing directly back to the object it is being referenced on. i.e; the $car object in this case

	/*
 * The constructor creates the object. Goes before the accessor/mutator
 *  must be in this order: primary key, foreign key(s), everything else alphabatized!!!
 */
	//Takes two parameters to create the object
	public function __construct(int $newCyliders, string $newModel) {
		// uses mutators/setters to set the values
		$this-> setCylinders($newCyliders);
		$this-> setModel($newModel);

	}
	/**
	 * calls the getter/accessor method on the class
	 * must be in this order: primary key, foreign key(s), everything else alphabatized!!!
	 *
	 **/
	public getCylinders() : int {
		return ($this->cylinders); //returns 8
	}
	public getModel() : string {
		return ($this->model); //returns ford
	}

/**
 * Calls the setter/mutator method on the class
 * again....Alphabatize
 */
	public function setCylinders(int $newCylinders) : void{ //void means there is nothing needed to be returned.
	//checks if the parameter matches the required value
	if(($newCylinders <= 0) || ($newCylinders % 2 != 0)){
		// if the "if block" fails to pass it will force stop the function and cause an error message
		throw (new Exception("Cylinders must be even"));
	}
	// if the "if block" passes it will pass the value and store it into the $newCylinders variable
	$this->cylinders = $newCylinders;

	}
}
//a local variable working outside the class
// uses the getVariable because outside the class
$car->getModel();
//Working inside the class (object state variable)
// changed to the actual variable because inside of the class
$this->model();

object.value //javascript
object->value //php

$car->setCylinders(6); //$car = {"model": "ford", "cylinders": 6};

$this->__construct("chevy", 6); // WRONG!!! $this can only be used inside the class!

//To call the constructor we set the object name and use the keyword "new" followed by the class
$chevy = new Car(4, "Chevy"); // $chevy = {cylinders: 4, "Chevy"}

//PHP function that uses the Car classes accessor with no fear of Fatal Errors
public function mapModel(Car $car) {
	return $car->model;
}


$paramArray = [
	["name" => "Goku", "age" => 40],
	["name" => "Luffy", "age" => 20],
	["name" => "Zoro", "age" => 22],
	["name" => "Ichigo", "age" => 19],
];

/**
 *A function that takes an associative array of people with names and ages and returns an average age.
 *
 *@param array $personsArray an array of people
 *@return int $averageAge average age of people in the array
 **/

// the array in the function will only allow the function to pass in an array and nothing else. It will return an integer
function averageAge(People[] $personsArray) : float { //Only allows the arrays within the People object
	$totalAge = 0;
	// feeds in the personsArray and returns a person(key = in this case age) out of it each time it loops
	foreach($personsArray as $person) {
		//echo only works on a string     //PHP_EOL means end of line and creates a new line when outputing the values from the script
		echo $person['name'] ."'s " . "age is " . $person["age"] . PHP_EOL;
		//Adds the persons age value to the $totalAge variable each time the loop runs and stores it back in $totalAge
		$totalAge += $person["age"];
		}

	//make sure $totalAge is the correct number
	echo "The total age is " . $totalAge . PHP_EOL;

	// returns the $totalAge divided by the length of the $personsArray
	return ($totalAge / count($personsArray));
}

// pushes $paramArray array into the averageAge function
echo "The average age is " . averageAge($paramArray) .PHP_EOL;

$paramsArray = [
	People (object)["name" => "Goku", "age" => 40], //People sets the class and (object) forces the associative array to become an object