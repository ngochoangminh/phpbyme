<?php
class ControllerBase{

    public $database = null;
    public function __construct(){
        global $database;
        $this->database = $database;
    }
    public function loadview($viewName, $data = [])
    {
        if (! file_exists('views/'.$viewName.'.php')){
            return false;
        }
        extract($data);
        require('views/'.$viewName.'.php');

    }
    public function loadModel($modelName){
        $modelName = $modelName.'Model';
        if (! file_exists('models/'.$modelName.'.php')){
            return false;
        }
        require('models/'.$modelName.'.php');

        $this->{$modelName} = new $modelName();
    }
}
?>