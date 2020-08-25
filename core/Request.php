<?php
class request{
    public $controller = 'admin';
    public $action= 'manage';
    
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

    // private function getParams(){
    //     if ($this->get('controller') != null){
    //         $this->controller = $this->get('controller');
    //     }
    //     if ($this->get('action')!= null){
    //         $this->action = $this->get('action');
    //     }
    // }

    private function getParam(array $arr){
        if ($arr != null){
            $this->controller = $arr[0];
            $this->action = $arr[1];
        }
        
    }
}
?>