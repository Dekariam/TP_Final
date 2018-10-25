<?php namespace Models

class EventPlace{ // Descripcion del lugar del evento.

	private $idEventPlace; // id del lugar del evento.
	private $name; // nombre del lugar del evento.
	private $capacity; // maxima capacidad del lugar del evento.
	private $phone; // telefono del lugar del evento.
	private $adress; // direccion del lugar del evento.
	
	public function__construct($idEventPlace,$name,$capacity,$phone,$adress){
		$this->idEventPlace = $idEventPlace;
		$this->name = $name;
		$this->capacity = $capacity;
		$this->phone = $phone;
		$this->adress = $adress;
	}

	public function getIdEventPlace (){
		return $this->idEventPlace;
	}
	
	public function getNameEventPlace (){
		return $this->name;
	}

	public function getCapacity (){
		return $this->capacity;
	}

	public function getPhoneEventPlace (){
		return $this->phone;
	}

	public function getAdressEventPlace (){
		return $this->adress;
	}



}

?>
