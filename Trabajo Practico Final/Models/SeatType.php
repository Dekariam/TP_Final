<?php namespace Models;

class SeatType{ // Clase con el nombre e id del Tipo de asiento.

	private $idSeatType;
	private $name;
	
	public function__construct($idSeatType,$name){
		$this->idSeatType = $idSeatType;
		$this->name = $name;
	}

	public function getIdSeatType(){
		return $this->idSeatType;
	}

	public function getNameSeatType(){
		return $this->name;
	}

} 
 



 ?>
