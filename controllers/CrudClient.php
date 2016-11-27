<?php 
include '../include/config.php';
include '../models/Client.php';
session_start();


class CrudClient
{
	public $conn;
	function __construct()
	{
		$c=new config();
		$this->conn=$c->getConnection();
	}
	
	function addClient($conn, $client)
	{	
		$req=$conn->prepare('INSERT INTO CLIENT(USERNAME,PASSWORD,EMAIL,NAME,LASTNAME,BIRTHDATE,MOBILE,REGION) VALUES 
							(:USERNAME, :PASSWORD, :EMAIL, :NAME, :LASTNAME, :BIRTHDATE, :MOBILE, :REGION)'); 
		$req->execute(array('USERNAME' => $client->getUsername(), 'PASSWORD' => md5($client->getPassword()), 'EMAIL' => $client->getEmail(), 'NAME' => $client->getName(), 
		'LASTNAME' => $client->getLastname(), 'BIRTHDATE' => $client->getBirthdate(), 'MOBILE' => $client->getMobile(), 'REGION' => $client->getRegion()));
	}

	function updateClient($conn, $client) {
		$req=$conn->prepare('UPDATE CLIENT SET USERNAME= :USERNAME,EMAIL= :EMAIL,
		NAME= :NAME,LASTNAME= :LASTNAME,BIRTHDATE= :BIRTHDATE,MOBILE= :MOBILE,REGION= :REGION WHERE ID= :ID');
		$req->execute(array('USERNAME' => $client->getUsername(), 'EMAIL' => $client->getEmail(), 'NAME' => $client->getName(), 
		'LASTNAME' => $client->getLastname(), 'BIRTHDATE' => $client->getBirthdate(), 'MOBILE' => $client->getMobile(), 'REGION' => $client->getRegion(), 'ID' => $client->getId()));
	}

	function updatePasswordClient($conn, $client) {
		$req=$conn->prepare('UPDATE CLIENT SET PASSWORD= :PASSWORD WHERE ID= :ID');
		$req->execute(array('PASSWORD' => md5($client->getPassword()), 'ID' => $client->getId()));
	}

	
	function deleteClient($conn, $client) {
		$req=$conn->prepare('DELETE FROM CLIENT WHERE ID= :ID ');
		$req->execute(array('ID' => $client.getId()));
	}
	
	function getClients($conn) {
		$req=$conn->prepare('SELECT * FROM CLIENT');
		$req->execute();
		return $req->fetchall();		
	}
	function getClientsNumber($conn) {
		$req=$conn->prepare('SELECT COUNT(*) FROM client');
		$req->execute();
		return $req->fetchColumn();
	}


	function verification($conn,$username,$password)
	{
		$req=$conn->prepare('SELECT COUNT(*) from CLIENT where USERNAME= :USERNAME and password = :PASSWORD');
		$req->execute(array('USERNAME' => $username, 'PASSWORD' => $password));
		return $req->fetchColumn();
	}

	function getClientConnected($conn,$username,$password)
	{
		$req=$conn->prepare('SELECT * from CLIENT where USERNAME= :USERNAME and password = :PASSWORD');
		$req->execute(array('USERNAME' => $username, 'PASSWORD' => $password));
		return $req->fetchAll();
	}

	
}

if (isset($_GET['id'])&& $_GET['id']==1)
{

	
	if(isset($_POST['username'])){
	$username=$_POST['username'];
	}
	if(isset($_POST['password'])){
	$password=$_POST['password'];
	}
			$_SESSION['FUCK'] = $password;

	$crudclient = new CrudClient();
	$count = $crudclient->verification($crudclient->conn, $username, $password);
	
	if ($count==1) {
		$clientdata = $crudclient->getClientConnected($crudclient->conn, $username, $password);
		$_SESSION['CLIENT'] = NULL;
		foreach ($clientdata as $data) {
			$client = Client::ClientOne($data['USERNAME'], $date['PASSWORD'], $data['EMAIL'], 
			$data['NAME'], $data['LASTNAME'], $data['BIRTHDATE'], $data['MOBILE'], $data['REGION']);
			$_SESSION ['CLIENT'] = $client;
		}
		echo $_SESSION['CLIENT']->getUsername();



	}
	else
		header('location: ../index/login.php?password=false');
	

}


?>