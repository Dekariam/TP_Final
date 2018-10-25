<?php namespace Models;

class Event {

	private $idEvent;
	private $title;
	private $category; // Objeto de la clase Category (recital,boxeo,obra teatral,etc).
	private $calendarList[]; // Lista de la clase Calendar, con su artista/banda, fecha/horario, lugar.

	public function__construct($idEvent,$title,$category,$calendarList[]){
		$this->idEvent = $idEvent;
		$this->title = $title;
		$this->category = $category;
		$this->calendarList = $calendarList;
	}

	public function getIdEvent (){
		return $this->idEvent;
	}

	public function getTitle (){
		return $this->title;
	}

	public function getCategory (){
		return $this->category;
	}

	public function getCalendarList (){
		return $this->calendarList;
	}

}

 ?>
