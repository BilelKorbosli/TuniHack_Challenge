<?php 
class Client {
	private $id;
    private  $username;
    private  $password;
    private  $email;
    private  $name;
	private  $lastname;
    private  $birthdate;
	private  $mobile;
    private  $region;


    function __construct() {
    }

	public static function clientOne($username, $password, $email, $name, $lastname, $birthdate, $mobile, $region) 
	{
    	$instance = new self();
    	$instance->loadByClient($username, $password, $email, $name, $lastname, $birthdate, $mobile, $region);
    	return $instance;
    }
    protected function loadByClient($username, $password, $email, $name, $lastname, $birthdate, $mobile, $region) 
	{
    	$this->fillClient($username, $password, $email, $name, $lastname, $birthdate, $mobile, $region);
    }
    protected function fillClient($username, $password, $email, $name, $lastname, $birthdate, $mobile, $region)
	{
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
        $this->name = $name;
        $this->lastname = $lastname;
        $this->birthdate = $birthdate;
        $this->mobile = $mobile;		
        $this->region = $region;
    }

    function getId() {
        return $this->id;
    }

    function setId($id) {
        $this->id = $id;
    }
	
    function getUsername() {
        return $this->username;
    }

    function setUsername($username) {
        $this->username = $username;
    }

    function  getPassword() {
        return $this->password;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function  getEmail() {
        return $this->email;
    }

    function  setEmail($email) {
        $this->email = $email;
    }

    function  getName() {
        return $this->name;
    }

    function  setName($name) {
        $this->name = $name;
    }

    function  getLastname() {
        return $this->lastname;
    }

    function  setLastname($lastname) {
        $this->lastname = $lastname;
    }

    function  getBirthdate() {
        return $this->birthdate;
    }

    function  setBirthdate($birthdate) {
        $this->birthdate = $birthdate;
    }

    function  getMobile() {
        return $this->mobile;
    }

    function  setMobile($mobile) {
        $this->mobile = $mobile;
    }	
	
    function  getRegion() {
        return $this->region;
    }

    function  setRegion($region) {
        $this->region = $region;
    }

}
?>