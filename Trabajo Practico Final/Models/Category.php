<?php namespace Model;

class Category{
	
	private $description; // Toma el valor de un string como: Obra teatral, concierto, boxeo, etc.
	private $idCategoty; // Id de la de Categoria.

	public function__construct ($description,$idCategoty){
		$this->description=$description;
		$this->idCategoty=$idCategoty;
	}	
 	
 	public function getDescription(){
 		return $this->description;
 	}
 	
 	public function getIdCategoty(){
 		return $this->idCategoty;
 	}

 	public function setDescription($newDescription){  // Uso en casos de error a la hora de escribir el nombre de la categoria.
		$this->description=$newDescription;
 	}
}

?> 
