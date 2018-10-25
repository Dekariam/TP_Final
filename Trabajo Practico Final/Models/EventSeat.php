<?php namespace Models

class EventSeat { // Plaza del evento.
	
	private $idEventSeat; // Id de la plaza del evento.
	private $quantityAvailable; // Cantidad disponible.
	private $reserved; // Remanente/reservado.
	private $price; // Precio.
	private $seatType; //Se guarda el nombre e id del tipo de plaza en un objeto de tipo SeatType;

	public function__construct ($idEventSeat,$quantityAvailable,$reserved,$price,$seatType){
		$this->idEventSeat = $idEventSeat;
		$this->quantityAvailable = $quantityAvailable;
		$this->reserved = $reserved;
		$this->price = $price;
		$this->seatType = $seatType;
	}

	public function getIdEventSeat(){
		return $this->idEventSeat;
	}

	public function getQuantityAvailable(){
		return $this->quantityAvailable;
	}

	public function getReserved(){
		return $this->reserved;
	}

	public function getPrice(){
		return $this->price;
	}
	
	public function getSeatType(){
		return $this->seatType;
	}

	public function setQuantityAvaible ($quantityAvailable){  // en la controladora se resta la cantidad disponible
		$this->quantityAvailable = $quantityAvailable;
	}

	public function setReserved ($reserved){ // en la controladora se suma los reservados
		$this->reserved = $reserved;
	}

	public function setPrice ($price){
		$this->price = $price;
	}


}

?>
