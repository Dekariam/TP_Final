<?php namespace Models;

class Artist{

	private $idArtist;
	private $artistName;

	public function__construct ($idArtist,$artistName){
		$this->idArtist = $idArtist;
		$this->artistName = $artistName;
	}
	
	public function getIdArtist(){
		return $this->idArtist;
	}
	
	public function getArtistName (){
		return $this->artistName;
	}

}
?>
