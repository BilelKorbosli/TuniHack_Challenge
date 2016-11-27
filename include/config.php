<?php
class config
{
	function getConnection()
	{
		$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET CHARACTER SET utf8');
		$servername="localhost";
		$dbname="bugs";
		$username="iheb";
		$password="rootrootroot";
		$conn=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password,$options);
		if ($conn)
		{
		echo "";
		}
		
		return $conn;
	}
}

?>