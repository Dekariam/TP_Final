<?php namespace Controllers;

class ArtistController{

	private $artist;
	public function__construct(){
		// Tenemos que hacer la base de datos para levantar la instancia, y que hereden de singleton para poder usar el
		// getInstance
		//$this->artist=ArtistDao::getInstance();
	}

	// en caso de llamar a la interfaz usar esos metodos MODIFICAR.
	
	public function deleteArtist($idArtist){ // elimina un artista a la base de datos.
		// se llama al eliminar artista de dao para que lo elimine de la base de datos.
	}
	public function addArtist($artist){ // agregar un artista a la base de datos.
		// se llama al agregar artista de dao para que lo ingrese en la base de datos.
	}
	
	public function modifyArtistName($idArtist,$nameArtist){
		// se llama a la funcion de dao que modifica el nombre del artista por su ID.
	}

	public function returnArtist($nameArtist){ // buscar artista por su nombre.
		$artistList = //artistas de la base de datos (vienen de DAO).
		//se busca ese artista por el nombre.
		$artist = // si lo encuentra devuelve el artista entero sino null.
	}
	
}

?>
