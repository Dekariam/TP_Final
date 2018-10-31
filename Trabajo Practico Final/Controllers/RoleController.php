<?php namespace Controllers;

class RoleController{
	
	private $role;

	public function__construct(){
		// Tenemos que hacer la base de datos para levantar la instancia, y que hereden de singleton para poder usar el
		// getInstance
		//$this->role=RoleDao::getInstance();
	}

	public function addRole($idRole,$name){
		$newRole = new Role($idRole,$name);
		$this->role->add($newRole);
	}
	
	public function deleteRole($idRole){ // elimina de la base de datos.
		// se llama al eliminar de dao para que lo elimine de la base de datos.
	}
	
	public function modifyRole($idRole){
		// se llama a la funcion de dao que modifica por su ID.
	}
	public function returnRole($idRole){ // buscar por ID.
		$roleList = //de la base de datos (vienen de DAO).
		//se busca ese objeto por el nombre.
		$role = // si lo encuentra devuelve el objeto entero sino null.
	}

} 
 
 ?>
