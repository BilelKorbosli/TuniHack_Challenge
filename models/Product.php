<?php 
class Product {    
	 private $id;
     private $category;
     private $brand;
     private $name;
     private $price; 
     private $status;
     private $age;
     private $picture;
     private $description;

    function __construct() {
    }

	public static function ProductOne($category, $brand, $name, $price, $status, $age, $picture, $description) 
	{
    	$instance = new self();
    	$instance->loadByProduct($category, $brand, $name, $price, $status, $age, $picture, $description);
    	return $instance;
    }
    protected function loadByProduct($category, $brand, $name, $price, $status, $age, $picture, $description) 
	{
    	$this->fillProduct($category, $brand, $name, $price, $status, $age, $picture, $description);
    }
    protected function fillProduct($category, $brand, $name, $price, $status, $age, $picture, $description)
	{
        $this->category = $category;
        $this->brand = $brand;
        $this->name = $name;
        $this->price = $price;
        $this->status = $status;
        $this->age = $age;
        $this->picture = $picture;
        $this->description = $description;
    }
	
	
    
    function  getId() {
        return $this->id;
    }

    function  setId($id) {
        $this->id = $id;
    }

    function  getCategory() {
        return $this->category;
    }

    function  setCategory($category) {
        $this->category = $category;
    }

    function  getBrand() {
        return $this->brand;
    }

    function  setBrand($brand) {
        $this->brand = $brand;
    }

    function  getName() {
        return $this->name;
    }

    function  setName($name) {
        $this->name = $name;
    }

    function  getPrice() {
        return $this->price;
    }

    function  setPrice($price) {
        $this->price = $price;
    }

    function  getStatus() {
        return $this->status;
    }

    function  setStatus($status) {
        $this->status = $status;
    }

    function  getAge() {
        return $this->age;
	}

    function  setAge($age) {
        $this->age = $age;
    }

    function  getPicture() {
        return $this->picture;
    }

    function  setPicture($picture) {
        $this->picture = $picture;
    }

    function  getDescription() {
        return $this->description;
    }

    function  setDescription($description) {
        $this->description = $description;
    }
}
?>