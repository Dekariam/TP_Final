<?php namespace Controllers;

class PurchaseController{
	
	private $purchase
		
	public function__construct(){
		// Tenemos que hacer la base de datos para levantar la instancia, y que hereden de singleton para poder usar el
		// getInstance
		//$this->purchase=PurchaseDao::getInstance();
	}
	// en caso de llamar a la interfaz usar esos metodos MODIFICAR.
	
	public function deletePurchase($idPurchase){ // elimina de la base de datos.
		// se llama al eliminar de dao para que lo elimine de la base de datos.
	}
	
	// ver si hay que enviar todos los datos por parametro o el objeto entero
	public function addPurchase($purchase){ // agregar a la base de datos.
		// se llama al agregar de dao para que lo ingrese en la base de datos.
	}
	
	public function modifyPurchase($idPurchase){
		// se llama a la funcion de dao que modifica por su ID.
	}
	public function returnPurchase($idPurchase){ // buscar por ID.
		$purchaseList = //de la base de datos (vienen de DAO).
		//se busca ese objeto por el nombre.
		$purchase = // si lo encuentra devuelve el objeto entero sino null.
	}
	
} 

 ?>
