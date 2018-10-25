<?php namespace Models;

class PurchaseLine{

	private $idPurchaseLine;
	private $amount;  // Cantidad.
	private $price; // precio total.
	private $eventSeat; // plaza evento.
	
	public function__construct($idPurchaseLine,$amount,$price,$eventSeat){
		$this->idPurchaseLine = $idPurchaseLine;
		$this->amount = $amount;
		$this->price = $price;
		$this->eventSeat = $eventSeat;
	}

	public function getIdPurchaseLine(){
		return $this->idPurchaseLine;
	}

	public function getAmount(){
		return $this->amount;
	}

	public function getPrice(){
		return $this->price;
	}

	public function getEventSeat(){
		return $this->eventSeat;
	}

}	
 ?>
