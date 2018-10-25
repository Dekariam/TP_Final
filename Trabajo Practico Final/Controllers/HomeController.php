<?php namespace Controllers;

    class HomeController{

        public function index(){
            require_once(VIEWS_PATH./*"Nombre de la vista inicial"*/);
        }

        public function logout(){
            session_destroy();
            $this->index();
        }
    }
?> 