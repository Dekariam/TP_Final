<?php namespace Controllers;

use Daos\CategoryDaoList as CategoryDao;

class CategoryController{

	private $category;

	public function__construct(){
		// Tenemos que hacer la base de datos para levantar la instancia, y que hereden de singleton para poder usar el
		// getInstance
		//$this->category=CategoryDao::getInstance();
	}
	
	public function index(){ // Metodo que se llama por defecto cuando no viene en la url, y llama a la vista necesaria (puede
				// inicializar algunos datos tambien)	
	}

	// ver si hay que enviar todos los datos por parametro o el objeto entero
	public function addCategory ($idDescription,$description){
		$newCategory = new Category($idDescription,$description);
		$this->category->add($newCategory);
	}

	public function deleteCategory($idCategory){ // elimina de la base de datos.
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
