<?php
class adminModel extends ModelBase
{
    public function getAll(){
        $qr = "SECLECT * FROM `image`";
        $res = mysqli_query($this->con, $qr);
        return $res;
    }
    public function add($data){
        $qr = "INSERT into `image` (title, decription, `image`, `status`) VALUES (".$data.");";
        return mysqli_query($this->con, $qr);
    }
    public function edit($id, $data=[]){
        $qr = "UPDATE image SET ".$data."=".$data." WHERE id=".$id.";";
        return mysqli_query($this->con, $qr);
    }
    public function delete($id){
        $qr = "DELETE FROM image WHERE id=".$id.";";
        return mysqli_query($this->con, $qr);
    }
    
}
?>