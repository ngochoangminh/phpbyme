<?php
class request{
    public $controller = 'admin';
    public $action= 'manage';
    public $id = null;
    
    public function __construct(){  
        $uri = $_SERVER['REQUEST_URI'];
        if( isset($uri) ){
            $arr =  explode("/", filter_var(trim($uri, "/")));
        }
        $this->getParam($arr);
    }
    
    public function post($name){
        return$_POST[$name] ?? null;
    }

    public function get($name){
        return $_GET[$name] ?? null;
    }

    private function getParam(array $arr){
        if ($arr != null){
            $this->controller = $arr[0];
            $this->action = $arr[1];
            // if ($arr[2] ?? null){
            //     $this->id = $arr[2];
            // } 
        } 
    }
}
?>