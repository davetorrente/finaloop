<?php

// require 'Database.php';
// require 'User.php';


// $user = new User();

// $user->create("dave");

// $oldArray = ["dave","robert", "torrente"];

// $newArray = [];

// // foreach($oldArray as $item)
// // {
// // 	$newArray[] = $item;
// // }

// for($i=0; $i < count($oldArray); $i++)
// {
// 	array_push($i, array_keys($array));

// }
// print_r($newArray);


class Post {
	public $hehe;
	public function __set($name, $value)
	{
		
		echo $name . $value . "<br/>";
		$this->hehe = $value;
		echo $this->hehe;

	}
}

$post = new Post;

$post->haha = 'Dave';
