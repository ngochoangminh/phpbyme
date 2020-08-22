<?php
class Controller{
    public function __construct(){

    }
    public function loadview($viewName, $data = [])
    {
        if (! file_exists('views/'.$viewName.'.php')){
            return false;
        }
        extract($data);
        require('views/'.$viewName.'.php');

    }
}
?>