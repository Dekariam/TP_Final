<?php namespace Controllers;

class RoleController{
	
	private $roleList;

	public function__construct(){
		$this->roleList= // levantar la lista de roles de la base de datos
	}

	public function addRole($idRole,$name){
		$newRole = new Role($idRole,$name);
		$this->roleList->add($newRole);
	}

	public function deleteRole (){

	}
	
	public function updateRole(){

	}

	public function returnRole(){
		
	}

} 
 
 ?>