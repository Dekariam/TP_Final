<?php namespace Models;

class Purchase{ // compra

	private $idPurchase;
	private $date;
	private $purchaseLine[];
	private $totalPrice;

	public function__construct ($idPurchase,$date,$purchaseLine[],$totalPrice){ 
		$this->idPurchase;
		$this->date = $date;
		$this->purchaseLine = $purchaseLine;
		$this->totalPrice = $totalPrice;
	}

	public function getIdPurchase (){
		return $this->idPurchase;
	}

	public function getDate(){
		return $this->date;
	}

	public function getPurchaseLine (){
		return $this->purchaseLine;
	}
	
	public function getTotalPrice(){
		return $this->totalPrice;
	}

}

?>