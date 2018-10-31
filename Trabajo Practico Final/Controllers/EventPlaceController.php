<?php namespace Controllers;

class EventPlaceController{
	
	private $eventPlace
		
	public function__construct(){
		// Tenemos que hacer la base de datos para levantar la instancia, y que hereden de singleton para poder usar el
		// getInstance
		//$this->eventPlace=EventPlaceDao::getInstance();
	}
	// en caso de llamar a la interfaz usar esos metodos MODIFICAR.
	
	public function deleteEventPlace($idEventPlace){ // elimina de la base de datos.
		// se llama al eliminar de dao para que lo elimine de la base de datos.
	}
	public function addEventPlace($eventPlace){ // agregar a la base de datos.
		// se llama al agregar de dao para que lo ingrese en la base de datos.
	}
	
	public function modifyEventPlace($idEventPlace){
		// se llama a la funcion de dao que modifica por su ID.
	}
	public function returnEventPlace($idEventPlace){ // buscar por ID.
		$eventPlaceList = //de la base de datos (vienen de DAO).
		//se busca ese objeto por el nombre.
		$eventPlace = // si lo encuentra devuelve el objeto entero sino null.
	}
	
	
} 

 ?>
