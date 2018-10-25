<?php namespace Models;

class Artist{

	private $artistName;

	public function__construct ($artistName){
		$this->artistName = $artistName;
	}

	public function getArtistName (){
		return $this->artistName;
	}

}
?>
