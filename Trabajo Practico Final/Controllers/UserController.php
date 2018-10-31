<?php namespace Controllers;

class UserController{

	private $userList;

	public function__construct(){
		$this->userList= // levantar la lista de usuarios de la base de datos
	}

	// ver si hay que enviar todos los datos por parametro o el objeto entero
	public function addUser($account,$password,$role,$firstName,$lastName,$phone,$docType,$docNumber){
		$newUser = new User($account,$password,$role,$firstName,$lastName,$phone,$docType,$docNumber);
		$this->userList->add($newUser);
	}

	public function deleteUser($idUser){ // elimina de la base de datos.
		// se llama al eliminar de dao para que lo elimine de la base de datos.
	}
	public function addUser($user){ // agregar a la base de datos.
		// se llama al agregar de dao para que lo ingrese en la base de datos.
	}
	
	public function modifyUser($idUser){
		// se llama a la funcion de dao que modifica por su ID.
	}
	public function returnUser($idUser){ // buscar por ID.
		$userList = //de la base de datos (vienen de DAO).
		//se busca ese objeto por el nombre.
		$user = // si lo encuentra devuelve el objeto entero sino null.
	}
		


}
 ?>
