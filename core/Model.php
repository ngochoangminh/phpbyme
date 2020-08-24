<?php
// require ('lib/DB_Driver/mysqlDriver.php');
require ('./config.php');

class ModelBase{
    public $con;
    protected $host = 'localhost';
    protected $user = 'root';
    protected $pass = '';
    protected $name = 'test';

    function __construct(){
        $this->con = mysqli_connect($this->host, $this->user, $this->pass);

        // Check database exist
        $qr = 'CREATE DATABASE IF NOT EXISTS '.$this->name;
        mysqli_query($this->con, $qr);
        mysqli_select_db($this->con, $this->name);
        // Check table exist
        $tbName = 'image';
        $info = "(id INT NOT NULL AUTO_INCREMENT , title VARCHAR(255) NOT NULL ,
        description TEXT NULL,  image LONGBLOB NOT NULL,  
        status ENUM('Enabled', 'Disabled') DEFAULT 'Enabled', PRIMARY KEY (id))";
        $ex = mysqli_query($this->con, 'SELECT 1 FROM '.$tbName);
        if (! $ex){
            $qr = "CREATE TABLE '.$tbName.' ('.$info.') ENGINE = InnoDB;";
            mysqli_query($this->con, $qr);
        }
    }
}
?>