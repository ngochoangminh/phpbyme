<?php
class request{
    public $controller = 'admin';
    public $action= 'manage';
    
    public function __construct(){    
        $this->getParam();
    }
    
    public function post($name){
        return$_POST[$name] ?? null;
    }

    public function get($name){
        return $_GET[$name] ?? null;
    }

    private function getParam(){
        if ($this->get('controller') != null){
            $this->controller = $this->get('controller');
        }
        if ($this->get('action')!= null){
            $this->action = $this->get('action');
        }
    }
    // function __construct(){
    //     $arr = $this->urlProcess();
    //     echo $arr;
    //     // Controller
    //     if( file_exists("controllers/".$arr[0].".php") ){
    //         $this->controller = $arr[0];
    //         // unset($arr[0]);
    //     }
    //     require_once "controllers/". $this->controller .".php";
    //     $this->controller = new $this->controller;
        
    //     // Action
    //     if(isset($arr[1])){
    //         if( method_exists( $this->controller , $arr[1]) ){
    //             $this->action = $arr[1];
    //         }
    //         // unset($arr[1]);
    //     $controller->{$action}();
    //     // call_user_func_array($this->controller, $this->action );
    //     }
    // }

    // split '/' and ' ' of url
    private function urlProcess(){
        $uri = $_SERVER['REQUEST_URI'];
        if( isset($uri) ){
            return explode("/", filter_var(trim($uri, "/")));
        }
    }
}
?>