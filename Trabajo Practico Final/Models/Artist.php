<?php namespace Models;

class Artist{

	private $artistName;
	
	/* Constructor del Artista */
	public function__construct ($artistName){
		$this->artistName = $artistName;
	}
	
	/* Get del Artista */ 
	public function getArtistName (){
		return $this->artistName;
	}
}
 ?>
