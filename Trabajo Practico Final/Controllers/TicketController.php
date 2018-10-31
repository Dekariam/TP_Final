<?php namespace Controllers;

class TicketController{
	
	private $ticket
		
	public function__construct(){
		// Tenemos que hacer la base de datos para levantar la instancia, y que hereden de singleton para poder usar el
		// getInstance
		//$this->ticket=TicketDao::getInstance();
	}
	// en caso de llamar a la interfaz usar esos metodos MODIFICAR.
	
	public function deleteTicket($idTicket){ // elimina de la base de datos.
		// se llama al eliminar de dao para que lo elimine de la base de datos.
	}
	public function addTicket($ticket){ // agregar a la base de datos.
		// se llama al agregar de dao para que lo ingrese en la base de datos.
	}
	
	public function modifyTicket($idTicket){
		// se llama a la funcion de dao que modifica por su ID.
	}
	public function returnTicket($idTicket){ // buscar por ID.
		$ticketList = //de la base de datos (vienen de DAO).
		//se busca ese objeto por el nombre.
		$ticket = // si lo encuentra devuelve el objeto entero sino null.
	}
	
} 

 ?>
