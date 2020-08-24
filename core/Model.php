<?php
require ('lib/DB_Driver/mysqlDriver.php');

use lib\DB_Driver;
class ModelBase{
    public $con;

    function __construct(){
        $this->con = mysqli_connect($this->servername, $this->username, $this->password);
        mysqli_select_db($this->con, $this->dbname);
    }
}
?>