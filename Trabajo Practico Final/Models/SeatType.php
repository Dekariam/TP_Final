<?php namespace Models;

class SeatType{

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