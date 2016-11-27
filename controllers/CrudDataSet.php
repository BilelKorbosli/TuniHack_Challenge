<?php
class CrudDataSet
{
	private $conn;
	function __construct()
	{
		$c=new config();
		$this->conn=$c->getConnection();
	}

	
	
	function getCategories($conn) 
	{
		$req=$conn->prepare('SELECT * FROM PRODUCT');
		$req->execute();
		return $req->fetchall();		
	}
















?>