<?php namespace Controllers;

class CategoryController{

	private $categoryList;

	public function__construct(){
		$this->categoryList=   // levanta la lista de categorias de la base de datos
	}

	// agregar una nueva categoria 
	public function addCategory ($idDescription,$description){
		$newCategory = new Category($idDescription,$description);
		$this->categoryList->add($newCategory);
	}

	public function deleteCategory(){

	}
	
	public function updateCategory(){

	}

	public function returnCategory(){

	}
}

?>
