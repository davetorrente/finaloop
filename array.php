<?php

$object = new stdClass;

$object->name = ["1" => "dave", "2" => "Robert"];

foreach($object->name as $key => $value)
{
	if($object->name[$key] == "dave")
	{
		echo $key . "<br/>";
	}
}

$object->array2 = ["dave", "pogi", "torrente"];

foreach($object->array2 as $item)

{
	echo $item . "<br/>"; 
} 
// print_r($object->name);