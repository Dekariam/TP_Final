<?php namespace Models

/* Esta clase funciona como una sola fecha, en la que hay un artista, con su lugar del evento, y su tipo de plaza. */
	
class Calendar{

	private $idCalendar; // id del calendario. 
	private $artist; // Datos del artista o de una banda musical.
	private $date;  // La fecha y horario de ese artista en el evento.
	private $eventPlace; // Objeto lugar_evento Ej: Cancha de futbol "Monumental".
	private $eventSeat[];   // Objeto plaza_evento Ej: "Platea".
	
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
