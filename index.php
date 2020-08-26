<?php
define('ENV', 'dev');

require('config.php');
require('core/functions.php');

if (ENV=='dev'){
    error_reporting(E_ALL);
    ini_set('display_error', 1);
    set_error_handler('showError');
}

session_start();
// Load third party libraries
// if (file_exists('vendor/autoload.php')){
//     require('vendor/autoload.php');
// }


// Load require
$autoload = [
    'Request',
    'Controller',
    'Model',
    'Database',
    'Helper'
];
foreach($autoload as $file){
    require('core/'.$file.'.php');
}

// Create Database Connection
// $dbDriverName = $config['database']['driver'].'Driver';
// require('lib/DB_Driver/'.$dbDriverName.'.php');
// $dbDriver = new $dbDriverName();

$request = new request();

// // create controller
$controllerName = $request->controller;
$actionName = $request->action;
$id =  $request->id;

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
$controller->{$actionName}();
if ($id != null){
    $controller->{$actionName}->{$id}();
}
// Call action

?>