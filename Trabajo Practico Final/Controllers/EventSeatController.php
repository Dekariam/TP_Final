<?php namespace Controllers;

class EventSeatController{
	
	private $eventSeat
		
	public function__construct(){
		// Tenemos que hacer la base de datos para levantar la instancia, y que hereden de singleton para poder usar el
		// getInstance
		//$this->eventSeat=EventSeatDao::getInstance();
	}
	// en caso de llamar a la interfaz usar esos metodos MODIFICAR.
	
	public function deleteEventSeat($idEventSeat){ // elimina de la base de datos.
		// se llama al eliminar de dao para que lo elimine de la base de datos.
	}
	public function addEventSeat($eventSeat){ // agregar a la base de datos.
		// se llama al agregar de dao para que lo ingrese en la base de datos.
	}
	
	public function modifyEventSeat($idEventSeat){
		// se llama a la funcion de dao que modifica por su ID.
	}
	public function returnEventSeat($idEventSeat){ // buscar por ID.
		$eventPlaceList = //de la base de datos (vienen de DAO).
		//se busca ese objeto por el nombre.
		$eventPlace = // si lo encuentra devuelve el objeto entero sino null.
	}
	
} 

 ?>
