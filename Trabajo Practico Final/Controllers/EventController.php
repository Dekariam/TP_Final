<?php namespace Controllers;
//llamar a todos los use, e implementar interfaz probablemente

class EventController{
	
	private $event
		
	public function__construct(){
		// Tenemos que hacer la base de datos para levantar la instancia, y que hereden de singleton para poder usar el
		// getInstance
		//$this->event=EventDao::getInstance();
	}
	// en caso de llamar a la interfaz usar esos metodos MODIFICAR.
	
	public function deleteEvent($idEvent){ // elimina de la base de datos.
		// se llama al eliminar de dao para que lo elimine de la base de datos.
	}
	
	// ver si hay que enviar todos los datos por parametro o el objeto entero
	public function addEvent($event){ // agregar a la base de datos.
		// se llama al agregar de dao para que lo ingrese en la base de datos.
	}
	
	public function modifyEvent($idEvent){
		// se llama a la funcion de dao que modifica por su ID.
	}
	public function returnEvent($idEvent){ // buscar por ID.
		$eventList = //de la base de datos (vienen de DAO).
		//se busca ese objeto por el nombre.
		$event = // si lo encuentra devuelve el objeto entero sino null.
	}
	
	
} 

 ?>
