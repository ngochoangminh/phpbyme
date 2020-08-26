<?php 
class admin extends ControllerBase{
    
    
    public $adminModel;
    public $dataRes=[];
    
    public function manage(){
        $dataRes = $this->adminModel->getAll();
        $this->loadview('manage', $dataRes);
        if ($dataRes == null){
            echo "TRUE";
        }
        if($this->adminModel){
            echo "True";
        }
    }
    public function edit(){
        $id=$_GET['id'];
        if (isset($_POST['submit'])){
            $imagename=$_FILES['image']['name'];
            $title= mysqli_real_escape_string($this->adminModel,$_POST['title']);
            $description=mysqli_real_escape_string($this->adminModel,$_POST['description']);
            $status=$_POST['status'];

            move_uploaded_file($_FILES['image']['tmp_name'], './upload/'.$imagename);
            $data = "'$title','$description','$imagename','$status'";

            $dataRes['res'] = $this->adminModel->edit($id, $data);
        }
        $this->loadview('edit', $dataRes);
    }
    public function add(){
        if (isset($_POST['submit']) && !empty($_FILES['image']['name'])){
            $imagename=$_FILES['image']['name'];
            $title= mysqli_real_escape_string($this->adminModel,$_POST['title']);
            $description=mysqli_real_escape_string($this->adminModel,$_POST['description']);
            $status=$_POST['status'];

            move_uploaded_file($_FILES['image']['tmp_name'], './upload/'.$imagename);
            $data = "'$title','$description','$imagename','$status'";

            $dataRes['res'] = $this->adminModel->add($data);
        }

        $this->loadview('create', $dataRes ); 
    }
    public function delete(){
        $id = $_GET['id'];
        
    }
}
?>