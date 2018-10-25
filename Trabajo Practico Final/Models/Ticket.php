<?php namespace Models;

class Ticket{

	private $number;
	private $qr;
	private $purchaseLine;

	public function__construct($number,$qr,$purchaseLine){
		$this->number = $number;
		$this->qr = $qr;
		$this->purchaseLine = $purchaseLine;
	}

	public function getNumber(){
		return $this->number;
	}

	public function getQr(){
		return $this->qr;
	}

	public function getPurchaseLine(){
		return $this->purchaseLine;
	}


}

 ?>