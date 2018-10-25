<?php namespace Interfaces;

  interface Collection {
    	
	  public function modify($id,$object); // modifica la informacion de un objeto buscado por su id en la base de datos.
	
	  public function delete($id); // borra un objeto por su id en la base de datos.
	
	  public function update($object); // agrega un nuevo objeto a la base de datos.
	  
	  public function returnObject ($id); // retorna un objeto en caso de encontrarlo y en caso contrario retorna null.
	  
   
   }
   
  ?>
