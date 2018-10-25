<?php namespace Controllers;

class UserController{

	private $userList;

	public function__construct(){
		$this->userList= // levantar la lista de usuarios de la base de datos
	}

	public function addUser($account,$password,$role,$firstName,$lastName,$phone,$docType,$docNumber){
		$newUser = new User($account,$password,$role,$firstName,$lastName,$phone,$docType,$docNumber);
		$this->userList->add($newUser);
	}

	public function deleteUser (){

	}

	public function updateUser(){

	}

	public function returnUser(){
		
	}


}
 ?>
