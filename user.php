<?php
class User {
		
	public $name;
	public $email;
	public $type;
	
	public function __construct($name, $email){
		$this->name = $name;
		$this->email = $email;
	}
	
	public function getType(){
		return $this->type;
	}
}

class Admin extends User {
	
	public $permissionLevel;
	public $type = "Admin";
	
	public function __construct($name, $email, $permissionLevel){
		parent::__construct($name, $email);
		$this->permissionLevel = $permissionLevel;
	}
	
	public function getType(){
		return "Hello from " . parent::getType();
	}
}

class Member extends User {
	
	public $dateadded;
	public $type = "Member";

	public function __construct($name, $email, $dateadded){
		parent::__construct($name, $email);
		$this->dateadded = $dateadded;
	}
	
}
//==USERS==
//User
//-names
//-email
//
//Admin
//-permission level
//
//Members
//-date added
	
?>