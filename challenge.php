<?php
function assocArray(){
	$array = array(array("name" => "person name",
		"age"  => 42
	),
		array("name" => "another person name",
			"age"  =>  28
		)
	);

	foreach($array as $key => $value) {
		print_r($value['name']);
		print_r($value['age'] / count($value));

	}
};

assocArray();