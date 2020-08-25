<?php
class ModelBase{
    public $con;
    protected $host = '127.0.0.1';
    protected $user = 'root';
    protected $pass = '';
    protected $name = 'ngoc';

    function __construct(){
        $this->con = mysqli_connect($this->host, $this->user, $this->pass);

        // Check database exist
        if (! mysqli_select_db($this->con, $this->name)){
            $qr = 'CREATE DATABASE IF NOT EXISTS '.$this->name;
            mysqli_query($this->con, $qr);
        }
        mysqli_select_db($this->con, $this->name);

        // Check table exist
        $tbName = 'image';
        $ex = mysqli_query($this->con, 'SELECT 1 FROM '.$tbName);
        if (! $ex){
            $qr = "CREATE TABLE image ( id INT NOT NULL AUTO_INCREMENT , 
            title VARCHAR(50) NOT NULL , description VARCHAR(500) NULL , `image` LONGBLOB NOT NULL , 
            `status` ENUM('Enabled','Disabled') NOT NULL DEFAULT 'Enabled' , PRIMARY KEY (`id`)) ENGINE = InnoDB;";
            mysqli_query($this->con, $qr);
        }
    }
}
?>