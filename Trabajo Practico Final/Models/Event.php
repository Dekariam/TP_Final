<?php namespace Models;

class Event {

	private $idEvent;
	private $title;
	private $category; // objeto de la clase category 
	private $calendarList[]; 

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