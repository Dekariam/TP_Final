<?php namespace Models

class Calendar{

	private $idCalendar; // id 
	private $artist; // datos del artista o de un conjunto de artistas
	private $date;  // las fechas de evento de ese artista o del conjunto de artistas
	private $eventPlace; // objeto lugar_evento Ej: Cancha de futbol "monumental";
	private $eventSeat[];   // objeto plaza_evento Ej: platea; 1 por cada tipo de plaza
	
	public function__construct ($idCalendar,$artist,$date,$eventPlace,$eventSeat[]){ 
			$this->idCalendar = $idCalendar;
			$this->artist = $artist;
			$this->date = $date;
			$this->eventPlace = $eventPlace;
			$this->eventSeat = $eventSeat;
	}

	public function getIdCalendar (){
		return $this->idCalendar;
	}

	public function getArtist (){
		return $this->artist;
	}

	public function getDate (){
		return $this->date;
	}

	public function getEventPlace (){
		return $this->eventPlace;
	}

	public function getEventSeat (){
		return $this->eventSeat;
	}

	public function setDate ($newDate){
		$this->date = $newDate;
	}

	public function setEventPlace ($newEventPlace){
		$this->eventPlace = $newEventPlace;
	}
}

 ?>
