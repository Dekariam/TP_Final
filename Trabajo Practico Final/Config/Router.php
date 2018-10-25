<?php  namespace Config;

    use Config\Request as Request;

    class Router{
       
        /*redirreciona a la pagina de la peticion (request) */
        public static function Route(Request $request){

            /*Guarda el nombre de la controladora que viene por request concatenando "Controller"*/
            $controllerName = $request->getcontroller() . 'Controller'; // Controller es por el nombre de la controladora EJ ArtistController
           
            /*Guarda el nombre del metodo que llega*/
            $methodName = $request->getmethod();
           
            /*Guarda los parametros del metodo*/
            $methodParameters = $request->getparameters();          
            
            /*el nombre de la clase usando "Controller\\" para acceder a la carpeta donde se encuentra*/  
            $controllerClassName = "Controllers\\". $controllerName;            
            
            /*instancia la controladora usando el nombre anterior*/
            $controller = new $controllerClassName;
            if(!isset($methodParameters))            
                call_user_func(array($controller, $methodName));
            else
                call_user_func_array(array($controller, $methodName), $methodParameters);
        }
    }

?>
