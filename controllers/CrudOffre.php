<?php
require_once 'CrudProduct.php';
require_once '../models/Offre.php';

class CrudOffre
{
    public $conn;
    function __construct()
    {
        $c=new config();
        $this->conn=$c->getConnection();
    }

    function addOffre($conn, $Offre)
    {
        $req=$conn->prepare('INSERT INTO `OFFRE`(`ID_PRODUCT`, `ID_CLIENT`, `DATE`, `STATUS_VENTE`, `STATUS_FIRE`)
        VALUES (:ID_PRODUCT,:ID_CLIENT,:DATE,:STATUS_VENTE,:STATUS_FIRE)');
        $req->execute(array('ID_PRODUCT' => $Offre->getIdProduct(),'DATE' => $Offre->getDate() ,'ID_CLIENT' => $Offre->getIdClient() ,
            'STATUS_VENTE' => $Offre->getStatusVente(), 'STATUS_FIRE' => $Offre->getStatusFire()));
    }

    function updateOffre($conn, $Offre)
    {
    }
	
	function getAllOffers($conn)
	{
		$req=$conn->prepare('SELECT O.DATE, P.NAME, P.PRICE, P.STATUS, P.AGE, P.DESCRIPTION, P.PICTURE, C.USERNAME, C.MOBILE, C.REGION FROM 
		OFFRE O INNER JOIN PRODUCT P on O.ID_PRODUCT = P.ID INNER JOIN CLIENT C on O.ID_CLIENT = C.ID');	
		$req->execute();		
		return $req->fetchall();
	}

	function searchAllOffersByBrand($conn, $brand)
	{
		$req=$conn->prepare('SELECT O.DATE, P.NAME, P.PRICE, P.STATUS, P.AGE, P.DESCRIPTION, P.PICTURE, C.USERNAME, C.MOBILE, C.REGION FROM 
		OFFRE O INNER JOIN PRODUCT P on O.ID_PRODUCT = P.ID INNER JOIN CLIENT C on O.ID_CLIENT = C.ID WHERE P.NAME= :NAME');	
		$req->execute(array('NAME' => $brand));		
		return $req->fetchall();
	}	

    function deleteOffre($conn, $Offre) 
	{
        $req=$conn->prepare('DELETE * FROM OFFRE WHERE ID_PRODUCT= :ID_PRODUCT');
        $req->execute(array('ID_PRODUCT' => $Offre.getIdProduct()));
    }

    function getNumberOffre($conn) {
        $req=$conn->prepare('SELECT COUNT(*) as total FROM OFFRE');
        $req->execute();
        return $req->fetchColumn();
    }
	
    function getNumberOffreByBrand($conn, $brand) {
        $req=$conn->prepare('SELECT COUNT(*) as total FROM OFFRE O INNER JOIN PRODUCT P ON O.ID_PRODUCT = P.ID WHERE P.NAME= :NAME');
        $req->execute(array('NAME' => $brand));
        return $req->fetchColumn();
    }	


}

if (isset($_GET['id'])&& $_GET['id']==1)
{
	
	if(isset($_POST['category'])){
	$category=$_POST['category'];
	}
	if(isset($_POST['brand'])){
	$brand=$_POST['brand'];
	}
	if(isset($_POST['name'])){
	$name=$_POST['name'];
	}	
	if(isset($_POST['price'])){
	$price=$_POST['price'];
	}
	if(isset($_POST['age'])){
	$age=$_POST['age'];
	}
	if(isset($_POST['status'])){
	$status=$_POST['status'];
	}	
	if(isset($_POST['description'])){
	$description=$_POST['description'];
	}	
	if(isset($_POST['picture'])){



	$picture=$_POST['picture'];	
	$source="C:\Users\Maissen\Desktop";
	$destination="C:\\xampp\htdocs\TuniHack-challenge\assets\img";
	copy($source."\\".$picture,$destination."\\".$picture);
	$final=$destination."\\".$picture;


	
	}	
	
	$product = Product::ProductOne($category, $brand, $name, $price, $status, $age, $final, $description);
	$crudproduct = new CrudProduct();
	$crudproduct->addProduct($crudproduct->conn, $product);

	$idProduct = $crudproduct->getIdProduct($crudproduct->conn);
	$dateOffre = date("Y-m-d");
	$idClient = 1;
	
	$statusVente = 1;
	$statusFire = 0;
	
	$offre = new Offre($idProduct, $dateOffre, $idClient, $statusVente, $statusFire);
	$crudoffre = new CrudOffre();
	$crudoffre->addOffre($crudoffre->conn, $offre);
	


}

?>