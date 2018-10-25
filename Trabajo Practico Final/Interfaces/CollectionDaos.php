<?php namespace Interfaces;

  interface Collection {
    	
	  public function modifyObject($id,$object); // modifica la informacion de un objeto buscado por su id en la base de datos.
	
	  public function deleteObject($id); // borra un objeto por su id en la base de datos.
	
	  public function updateObject($object); // agrega un nuevo objeto a la base de datos.
	  
	  public function returnObject ($id); // retorna un objeto en caso de encontrarlo y en caso contrario retorna null.
	  
   
   }
   
  ?>
