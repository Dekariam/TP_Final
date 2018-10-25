<?php namespace Interfaces;

  interface CollectionDaos{

    public function return(); // devuelve la informacion de la base de datos
	public function update(); // actualizar
	public function delete(); // borrar una categoria
	public function add(); // agrega una nueva categoria(perteneciente al evento) a la base de datos
   
   }
   
  ?>