<?php

class User

{



	public function create($data)
	{
		$db = Database::getInstance();

		$db->prepareQuery("INSERT INTO items (name) VALUES ( ? )");

		$db->bindParam($data);
	
		
	}
}