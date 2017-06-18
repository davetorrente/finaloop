<?php 

// try
// {
// 	$cn = new PDO("mysql:host=localhost;dbname=exdb", 'root', '');

// 	echo 'success';
// }
// catch(PDOException $e){
// 	echo $e->getMessage();
// }


try {
	$cn = new mysqli("localhost", "root", "123s", "exdb");

	if($cn->connect_error)
	{
		throw new Exception("FAILED TO CONNECT " . $cn->connect_error);
	}
	echo "success!";
}
catch(Exception $e)
{
	echo $e->getMessage();
}
