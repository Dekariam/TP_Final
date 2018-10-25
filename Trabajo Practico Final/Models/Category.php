<?php namespace Model;

class Category{
	
	private $nameCategory; // Toma el valor de un string como: Obra teatral, concierto, boxeo, etc.
	private $idCategory; // Id de la de Categoria.

	public function__construct ($nameCategory,$idCategory){
		$this->nameCategory=$nameCategory;
		$this->idCategory=$idCategory;
	}	
 	
 	public function getNameCategory(){
 		return $this->nameCategory;
 	}
 	
 	public function getIdCategory(){
 		return $this->idCategory;
 	}

 	public function setNameCategory($newNameCategory){  // Uso en casos de error a la hora de escribir el nombre de la categoria.
		$this->nameCategory=$newNameCategory;
 	}
}

?> 
