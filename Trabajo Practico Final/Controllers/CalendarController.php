<?php namespace Controllers;
//llamar a todos los use, e implementar interfaz probablemente
class CalendarController{
	
	private $calendar
		
	public function__construct(){
		// Tenemos que hacer la base de datos para levantar la instancia, y que hereden de singleton para poder usar el
		// getInstance
		//$this->calendar=CalendarDao::getInstance();
	}
	// en caso de llamar a la interfaz usar esos metodos MODIFICAR.
	
	public function deleteCalendar($idCalendar){ // elimina de la base de datos.
		// se llama al eliminar de dao para que lo elimine de la base de datos.
	}
	public function addCalendar($calendar){ // agregar a la base de datos.
		// se llama al agregar de dao para que lo ingrese en la base de datos.
	}
	
	public function modifyCalendar($idCalendar){
		// se llama a la funcion de dao que modifica por su ID.
	}
	public function returnCalendar($idCalendar){ // buscar por ID.
		$calendarList = //de la base de datos (vienen de DAO).
		//se busca ese objeto por el nombre.
		$calendar = // si lo encuentra devuelve el objeto entero sino null.
	}
	
} 

 ?>
