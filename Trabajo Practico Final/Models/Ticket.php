<?php namespace Models;

class Ticket{

	private $number;
	private $qr;

	public function__construct($number,$qr){
		$this->number = $number;
		$this->qr = $qr;
	}

	public function getNumber(){
		return $this->number;
	}

	public function getQr(){
		return $this->qr;
	}
	
}

 ?>
