<?php namespace Models;

class Artist{

	private $artistName;
	private $idArtist;
	
	public function__construct ($artistName, $idArtist){
		$this->artistName = $artistName;
		$this->idArtist = $idArtist;
	}

	public function getArtistName (){
		return $this->artistName;
	}
	
	public function getIdArtist (){
		return $this->idArtist;
	}

}
?>
