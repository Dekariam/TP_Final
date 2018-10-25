<?php namespace Models;

class Role{
	
	private $idRole;
	private $name; // Administrador - cliente - empleado.

	public function__construct ($idRole,$name){
		$this->idRole = $idRole;
		$this->name = $name;
	}

	public function getIdRole(){
		return $this->idRole;
	}

	public function getName(){
		return $this->name;
	}

}
?>
