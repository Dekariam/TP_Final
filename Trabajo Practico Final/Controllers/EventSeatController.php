<?php namespace Controllers;

use Daos\EventSeatDaoList as EventSeatDao;

class EventSeatController{
	
	private $eventSeat
		
	public function__construct(){
		// Tenemos que hacer la base de datos para levantar la instancia, y que hereden de singleton para poder usar el
		// getInstance
		//$this->eventSeat=EventSeatDao::getInstance();
	}
	
	public function index(){ // Metodo que se llama por defecto cuando no viene en la url, y llama a la vista necesaria (puede
				// inicializar algunos datos tambien)
		
	}
	
	// en caso de llamar a la interfaz usar esos metodos MODIFICAR.
	
	public function deleteEventSeat($idEventSeat){ // elimina de la base de datos.
		// se llama al eliminar de dao para que lo elimine de la base de datos.
	}
	
	// ver si hay que enviar todos los datos por parametro o el objeto entero
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
