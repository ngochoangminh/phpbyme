<?php
class adminModel extends ModelBase
{
    public function getAll(){
        $qr = "SECLECT * FROM tets";
        return mysqli_query($this->con, $qr);
    }
    public function add($data){
        $qr = "INSERT INTO image (title, decription, image, status) VALUES (".$data.");";
        return mysqli_query($this->con, $qr);
    }
    public function edit($id, $data=[]){
        $qr = "UPDATE image SET ".$data."=".$data." WHERE id=".$id.";";
    }
    public function delete($id){
        $qr = "DELETE FROM image WHERE id=".$id.";";
        return mysqli_query($this->con, $qr);
    }
    
}
?>