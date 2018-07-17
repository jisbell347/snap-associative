<?php

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
function averageAge(array $personsArray) : float {
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

	return ($totalAge / count($personsArray));
}

echo "The average age is " . averageAge($paramArray) .PHP_EOL;