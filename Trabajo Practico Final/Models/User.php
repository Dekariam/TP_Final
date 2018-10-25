<?php namespace Models;

class User{ // Usuario
	
	private $account;  // Sirve como Primary keyes ya que es unica y funciona como la id, es el email.
	private $password; // Contraseña del usuario.
	private $role;  // Rol que cumple ese usuario (administrador-cliente) viene de la clase Role.
	private $firstName; // Nombre.
	private $lastName; // Apellido.
	private $phone; // Telefono.
	private $adress; // Direcccion.
	private $docType; // Tipo de documento.
	private $docNumber; // Numero de documento.
	private $purchase[]; // Compra que viene de la clase Purchase.

	public function__construct($account,$password,$role,$firstName,$lastName,$phone,$adress,$docType,$docNumber,$purchase[]){
		
		$this->account = $account;
		$this->password = $password;
		$this->role = $role;
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->phone = $phone;
		$this->adress = $adress;
		$this->docType = $docType;
		$this->docNumber = $docNumber;
		
	}

	public function getAccount(){
		return $this->account;
	}

	public function getPassword(){
		return $this->password;
	}
	public function getRole(){
		return $this->role;
	}

	public function getFirstName(){
		return $this->firstName;
	}

	public function getLastName(){
		return $this->lastName;
	}
	public function getPhoneUser(){
		return $this->phone;
	}

	public function getAdressUser(){
		return $this->adress;
	}

	public function getDocType(){
		return $this->docType;
	}

	public function getDocNumber(){
		return $this->docNumber;
	}

	public function getPurchase(){
		return $this->purchase;
	}

	public function setPassword($newPassword){
		$this->password = $newPassword;
	}


}
 ?>
