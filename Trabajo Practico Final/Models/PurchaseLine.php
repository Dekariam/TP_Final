<?php namespace Models;

class PurchaseLine{

	private $idPurchaseLine;
	private $eventSeat; // Plaza evento.
	private $amount;  // Cantidad.
	private $tickets[]; // Tickets igual a la cantidad;
	private $price; // Precio total.

	
	
	public function__construct($idPurchaseLine,$eventSeat,$amount,$tickets[],$price){
		$this->idPurchaseLine = $idPurchaseLine;
		$this->eventSeat = $eventSeat;
		$this->amount = $amount;
		$this->tickets = $tickets;
		$this->price = $price;
		
	}

	public function getIdPurchaseLine(){
		return $this->idPurchaseLine;
	}
	
	public function getEventSeat(){
		return $this->eventSeat;
	}

	public function getAmount(){
		return $this->amount;
	}
	
	public function getTickets (){
		return $this->tickets[];
	}

	public function getPrice(){
		return $this->price;
	}


	
	

}	
 ?>
