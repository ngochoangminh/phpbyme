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
}
?>