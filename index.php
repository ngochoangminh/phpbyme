<?php
define('ENV', 'dev');

require('config.php');
require('core/functions.php');

if (ENV=='dev'){
    error_reporting(E_ALL);
    ini_set('display_error', 1);
    set_error_handler('showError');
}

// Load third party libraries
// if (file_exists('vendor/autoload.php')){
//     require('vendor/autoload.php');
// }
$autoload = [
    'Controller',
    'Model',
    'Request'
];

foreach($autoload as $file){
    require('core/'.$file.'.php');
}

$request = new request();

// create controller
$controllerName = $request->controller;
$actionName = $request->action;

// Check controller
if (! file_exists('controllers/'.$controllerName.'.php')){
    show404Error();
}

require('controllers/'.$controllerName.'.php');
$controller = new $controllerName;

// Check Action
if (! method_exists($controller, $actionName)){
    show404Error();
}
// Call action
$controller->{$actionName}();
?>