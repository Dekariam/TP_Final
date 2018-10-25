<?php namespace Config;

    class Request{

        private $controller;
        private $method;
        private $parameters = array();
        
        public function __construct(){
            
            /*  usa el .htaccess para poder tomar la url como metodo de petición. (Nose como)*/
            $url = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);
            
            /*convierte la url en un array separadondo por /  */
            $urlArray = explode("/", $url);
            
            /* elimina datos vacios del arreglo*/
            $urlArray = array_filter($urlArray);

            /*
              controladora por defecto si el arreglo esta vacío
              sino, llama a la controladora del primer elemento del arreglo.
             */
            if(empty($urlArray))
                $this->controller = 'Home';            
            else
                $this->controller = ucwords(array_shift($urlArray));
            
            /*
             método por defecto si el arreglo esta vacío
             sino, llama al método del primer elemento.
             */
            if(empty($urlArray))
                $this->method = 'index';
            else
                $this->method = array_shift($urlArray);
             
            /*guardo el metodo que llega por peticion en una variable*/
            $methodRequest = $this->getMethodRequest();
            
            if($methodRequest == 'GET'){
                unset($_GET["url"]);
                /*Determines if GET is sent with Controller/Method/Value1/ValueN 
                or Controller/Method?Param1=value1&ParamN=valueN format*/
                if(!empty($_GET)){
                    foreach($_GET as $key => $value)                    
                        array_push($this->parameters, $value);
                }
                else
                    $this->parameters = $urlArray;
            }
            elseif ($_POST)
                $this->parameters = $_POST;
        }

        private static function getMethodRequest(){
            return $_SERVER['REQUEST_METHOD']; // duda
        }            

        public function getController(){
            return $this->controller;
        }

        public function getMethod(){
            return $this->method;
        }

        public function getparameters(){
            return $this->parameters;
        }
    }

?>
