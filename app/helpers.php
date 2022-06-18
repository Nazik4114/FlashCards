<?php
function dd($flag = true, ...$arguments) {

    if (count($arguments)) {
    
    echo "<pre>";
    
    foreach($arguments as $arg) {
    
    var_dump($arg);
    
    }
    
    echo "</pre>";
    
    if ($flag) exit;
    
    }
    
    }
 function route(array $routes, $action) {
    if (array_key_exists($action, $routes)) {

        list($controlerClass,$method)=explode('@',$routes[$action]);
        $controllerPath = CONTROLLERS_PATH . "/" . $controlerClass . '.php';
        if (is_readable($controllerPath)) {
            require_once $controllerPath;

            $ObjControler=new $controlerClass;
            $ObjControler->$method();

        } else {
            die("Undefined Controller {$controllerPath}");
        }
    }
} 
