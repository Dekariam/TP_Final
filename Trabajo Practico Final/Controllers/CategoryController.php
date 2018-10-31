<?php namespace Controllers;

class CategoryController{

	private $category;

	public function__construct(){
		// Tenemos que hacer la base de datos para levantar la instancia, y que hereden de singleton para poder usar el
		// getInstance
		//$this->category=CategoryDao::getInstance();
	}

	// agregar una nueva categoria 
	public function addCategory ($idDescription,$description){
		$newCategory = new Category($idDescription,$description);
		$this->category->add($newCategory);
	}

	public function deleteCategory($id){ // elimina de la base de datos.
		// se llama al eliminar de dao para que lo elimine de la base de datos.
	}
	
	public function modifyCategory($idCategory){
		// se llama a la funcion de dao que modifica por su ID.
	}
	public function returnCategory($idCategory){ // buscar por ID.
		$categoryList = //de la base de datos (vienen de DAO).
		//se busca ese objeto por el nombre.
		$category = // si lo encuentra devuelve el objeto entero sino null.
	}
	
}

?>
