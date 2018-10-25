<?php namespace Model;

class Category{
	
	private $description; // Toma el valor de un string como: Obra teatral, concierto, boxeo, etc.
	private $idCategory; // Id de la de Categoria.

	public function__construct ($description,$idCategory){
		$this->description=$description;
		$this->idCategory=$idCategory;
	}	
 	
 	public function getDescription(){
 		return $this->description;
 	}
 	
 	public function getIdCategory(){
 		return $this->idCategory;
 	}

 	public function setDescription($newDescription){  // Uso en casos de error a la hora de escribir el nombre de la categoria.
		$this->description=$newDescription;
 	}
}

?> 
