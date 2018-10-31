<?php namespace Controllers;

class SeatTypeController{
	
	private $seatType
		
	public function__construct(){
		// Tenemos que hacer la base de datos para levantar la instancia, y que hereden de singleton para poder usar el
		// getInstance
		//$this->seatType=SeatTypeDao::getInstance();
	}
	// en caso de llamar a la interfaz usar esos metodos MODIFICAR.
	
	public function deleteSeatType($idSeatType){ // elimina de la base de datos.
		// se llama al eliminar de dao para que lo elimine de la base de datos.
	}
	
	// ver si hay que enviar todos los datos por parametro o el objeto entero
	public function addSeatType($seatType){ // agregar a la base de datos.
		// se llama al agregar de dao para que lo ingrese en la base de datos.
	}
	
	public function modifySeatType($idSeatType){
		// se llama a la funcion de dao que modifica por su ID.
	}
	public function returnSeatType($idSeatType){ // buscar por ID.
		$seatTypeList = //de la base de datos (vienen de DAO).
		//se busca ese objeto por el nombre.
		$seatType = // si lo encuentra devuelve el objeto entero sino null.
	}
	
} 

 ?>
