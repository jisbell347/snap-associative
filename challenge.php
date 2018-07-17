<?php
function assocArray(){
	$array = array(
				["name" => "Jean-Luc Picard",
		"		age"  => 42
				],
				["name" => "Mr. Spock",
			"		age"  =>  28
				]
	);

	foreach($array as $key => $value) {
		print_r($value['name']);
		print_r($value['age'] / count($value));

	}
};

assocArray();