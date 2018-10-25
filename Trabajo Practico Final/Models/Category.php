<?php namespace Model;

class Category{
	
	private $description; // toma el valor de un string (obra teatral, concierto,boxeo,etc)
	private $idDescription;

	public function__construct ($description,$idDescription){
		$this->description=$description;
		$this->idDescription=$idDescription;
	}	
 	
 	public function getDescription(){
 		return $this->description;
 	}
 	
 	public function getIdDescription(){
 		return $this->idDescription;
 	}

 	 public function setDescription($description){  // Uso en casos de error a la hora de escribir

 	}
}

?> 