<?php namespace Models

class EventPlace{ // lugar de evento

	private $idEventPlace;
	private $capacity;
	private $name;
	private $phone;
	private $adress;



	public function__construct($idEventPlace,$capacity,$name,$phone,$adress){
		$this->idEventPlace = $idEventPlace;
		$this->capacity = $capacity;
		$this->name = $name;
		$this->phone = $phone;
		$this->adress = $adress;
	}

	public function getIdEventPlace (){
		return $this->idEventPlace;
	}

	public function getCapacity (){
		return $this->capacity;
	}

	public function getNameEventPlace (){
		return $this->name;
	}

	public function getPhoneEventPlace (){
		return $this->phone;
	}

	public function getAdressEventPlace (){
		return $this->adress;
	}



}

?>
