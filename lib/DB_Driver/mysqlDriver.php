<?php 
require ('config.php');
class mysqlDriver extends Database
{ 
    public function get($table, $where){

    }
    public function getSingle($table, $id){
        
    }
    public function update($table, $where,  $data){
        
    }
    public function create($table, $data){
        
    }
    public function delete($table, $id){
        
    }
    
    public function connect()
    {
        $servername = $this->$config['database']['host'];
        $username = $this -> $config['database']['user'];
        $password = $this->$config['database']['pass'];

        // Create connection
        $conn = new mysqli($servername, $username, $password);

        // Check connection
        if ($conn->connect_error) 
        {
            die("Connection failed: " . $conn->connect_error);     
        }
    }
}
?>