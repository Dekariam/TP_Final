<?php  namespace Config;

    use Config\Request as Request;

    class Router{

        public static function Route(Request $request){

            $controllerName = $request->getcontroller() . 'Controller'; // Controller es por el nombre de la controladora EJ ArtistController
            $methodName = $request->getmethod();
            $methodParameters = $request->getparameters();          
            $controllerClassName = "Controllers\\". $controllerName;            
            $controller = new $controllerClassName;
            if(!isset($methodParameters))            
                call_user_func(array($controller, $methodName));
            else
                call_user_func_array(array($controller, $methodName), $methodParameters);
        }
    }

?>