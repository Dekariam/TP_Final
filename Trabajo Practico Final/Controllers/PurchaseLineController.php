<?php namespace Controllers;

class PurchaseLineController{
	
	private $purchaseLine
		
	public function__construct(){
		// Tenemos que hacer la base de datos para levantar la instancia, y que hereden de singleton para poder usar el
		// getInstance
		//$this->purchaseLine=PurchaseLineDao::getInstance();
	}
	// en caso de llamar a la interfaz usar esos metodos MODIFICAR.
	
	public function deletePurchaseLine($idPurchaseLine){ // elimina de la base de datos.
		// se llama al eliminar de dao para que lo elimine de la base de datos.
	}
	public function addPurchaseLine($purchaseLine){ // agregar a la base de datos.
		// se llama al agregar de dao para que lo ingrese en la base de datos.
	}
	
	public function modifyPurchaseLine($idPurchaseLine){
		// se llama a la funcion de dao que modifica por su ID.
	}
	public function returnPurchaseLine($idPurchaseLine){ // buscar por ID.
		$purchaseLineList = //de la base de datos (vienen de DAO).
		//se busca ese objeto por el nombre.
		$purchaseLine = // si lo encuentra devuelve el objeto entero sino null.
	}
	
} 

 ?>
