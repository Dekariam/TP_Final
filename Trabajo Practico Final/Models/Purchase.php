<?php namespace Models;

class Purchase{ // Compra.

	private $idPurchase; // Id de compra.
	private $date; // Fecha de la compra.
	private $purchaseLines[]; // Lineas de compra (Carrito de compra). 
	private $totalPrice; // Total de la compra.

	public function__construct ($idPurchase,$date,$purchaseLines[],$totalPrice){ 
		$this->idPurchase;
		$this->date = $date;
		$this->purchaseLines = $purchaseLines;
		$this->totalPrice = $totalPrice;
	}

	public function getIdPurchase (){
		return $this->idPurchase;
	}

	public function getDate(){
		return $this->date;
	}

	public function getPurchaseLines (){
		return $this->purchaseLines;
	}
	
	public function getTotalPrice(){
		return $this->totalPrice;
	}
	
	public function setPurchaseLines ($purchaseLines[]){ // Actualizar el carrito de compra, en caso de agregar o quitar un producto.
		$this->purchaseLines = $purchaseLines;
	}
	
	public function setTotalPrice ($totalPrice){ // Actualizar el precio total de la compra.
		$this->totalPrice = $totalPrice; 
	}
	
}

?>
