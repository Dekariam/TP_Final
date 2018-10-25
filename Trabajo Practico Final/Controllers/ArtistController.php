<?php namespace Controllers;

class ArtistController{

	private $artistList;

	public function__construct(){
		$this->artistList=   // levanta la lista de categorias de la base de datos
	}

	public function addCategory ($artistName){
		$newArtist = new Artist($artistName);
		$this->artistList->add($newArtist);
	}

	public function deleteArtist(){

	}
	public function updateArtist(){

	}

	public function returnArtist(){

	}
}

?>
