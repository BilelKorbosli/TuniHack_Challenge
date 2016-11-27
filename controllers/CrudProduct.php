<?php 
include '../include/config.php';
include '../models/Product.php';

class CrudProduct
{
	public $conn;
	function __construct()
	{
		$c=new config();
		$this->conn=$c->getConnection();
	}
	
	function addProduct($conn, $product)
	{
		$req=$conn->prepare('INSERT INTO PRODUCT(CATEGORY,BRAND,NAME,PRICE,STATUS,AGE,PICTURE,DESCRIPTION) VALUES 
							(:CATEGORY, :BRAND, :NAME, :PRICE, :STATUS, :AGE, :PICTURE, :DESCRIPTION)'); 
		$req->execute(array('CATEGORY' => $product->getCategory(), 'BRAND' => $product->getBrand(), 'NAME' => $product->getName(), 'PRICE' => $product->getPrice(), 
		'STATUS' => $product->getStatus(), 'AGE' => $product->getAge(), 'PICTURE' => $product->getPicture(), 'DESCRIPTION' => $product->getDescription()));
	}
	
	function changePriceProduct($conn, $product)
	{
		$req=$conn->prepare('UPDATE PRODUCT SET PRICE= :PRICE WHERE ID= :ID');
		$req->execute(array('PRICE' => $product->getPrice(), 'ID' => $product->getId()));
	}	
	
	function deleteProduct($conn, $id)
	{
		$req=$conn->prepare('DELETE FROM PRODUCT WHERE ID= :ID');
		$req->execute(array('ID' => $id));		
	}
	
	function getProducts($conn) 
	{
		$req=$conn->prepare('SELECT * FROM PRODUCT');
		$req->execute();
		return $req->fetchall();		
	}
	
	function getProductsByCategory($conn, $category) 
	{
		$req=$conn->prepare('SELECT * FROM PRODUCT WHERE CATEGORY= :CATEGORY');
		$req->execute(array('CATEGORY' => $category));
		return $req->fetchall();
	}
	
	
	function getProductsByBrand($conn, $category, $brand) 
	{
		$req=$conn->prepare('SELECT * FROM PRODUCT WHERE CATEGORY= :CATEGORY AND BRAND= :BRAND');
		$req->execute(array('CATEGORY' => $category, 'BRAND' => $brand));
		return $req->fetchall();		
	}
		
	function getProductsByName($conn, $category, $brand, $name) 
	{
		$req=$conn->prepare('SELECT * FROM PRODUCT WHERE CATEGORY= :CATEGORY AND BRAND= :BRAND AND NAME= :NAME');
		$req->execute(array('CATEGORY' => $category, 'BRAND' => $brand, 'NAME' => $name));
		return $req->fetchall();		
	}
	
	//count of number of products
	function getNumberProductsByCategory($conn, $category) 
	{
		$req=$conn->prepare('SELECT COUNT(*) FROM PRODUCT WHERE CATEGORY= :CATEGORY');
		$req->execute(array('CATEGORY' => $category));
		return $req->fetchall();
	}

	function getNumberProductsByBrand($conn, $category, $brand) 
	{
		$req=$conn->prepare('SELECT COUNT(*)  FROM PRODUCT WHERE CATEGORY= :CATEGORY AND BRAND= :BRAND');
		$req->execute(array('CATEGORY' => $category, 'BRAND' => $brand));
		return $req->fetchall();		
	}
	
	function getNumberProductsByName($conn, $category, $brand, $name) 
	{
		$req=$conn->prepare('SELECT COUNT(*) FROM PRODUCT WHERE CATEGORY= :CATEGORY AND BRAND= :BRAND AND NAME= :NAME');
		$req->execute(array('CATEGORY' => $category, 'BRAND' => $brand, 'NAME' => $name));
		return $req->fetchall();		
	}
	
	function getIdProduct($conn)
	{
		$req=$conn->prepare('SELECT ID FROM PRODUCT ORDER BY ID DESC LIMIT 1') ;
		$req->execute();	
		return $req->fetchColumn();
	}	
	
	
	//discuss with team
	/*
	function getProductsPriceBetween($conn, $price_1, $price_2) 
	{
		$req=$conn->prepare('SELECT * FROM PRODUCT WHERE PRICE > :PRICE_1 AND PRICE < :PRICE_2');
		$req->execute(array('PRICE_1' => $price_1, 'PRICE_2' => $price_2);
		return $req->fetchall();		
	}
	*/
	
}

if (isset($_GET['id'])&& $_GET['id']==1)
{
	/*
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
	}	
	
	$product = Product::ProductOne($category, $brand, $name, $price, $status, $age, $picture, $description);
	$crudproduct = new CrudProduct();
	$crudproduct->addProduct($crudproduct->conn, $product);
	*/

	
	
	
	
	
}


if (isset($_GET['id'])&& $_GET['id']==2)
{

}


if (isset($_GET['id'])&& $_GET['id']==3)
{
	/*
	$crudproduct = new CrudProduct();
	$crudproduct->deleteProduct($crudproduct->conn, $id);
	header('Location: ../view/x/y.php');		
	*/
}






?>