<?php 
class admin extends ControllerBase{
    
    
    public $adminModel;
    public $dataRes=[];
    public function __construct(){
        $this->adminModel=$this->loadModel('admin');
    }
    
    public function manage(){
        // $dataRes = $this->adminModel->getAll();
        // $dataRes = mysqli_query($this->adminModel->con, "select * from image");
        // $this->loadview('manage', $dataRes);
       
        $this->loadview('home',$this->dataRes);
    }
    public function show(){
        $id = null;
        try {
            $id=$_GET['id'];
        }
        catch(\Throwable $th){
        }
        
    }
    public function edit(){
        $id = null;
        try {
            $id=$_GET['id'];
        }
        catch(\Throwable $th){
        }
        
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

        $this->loadview('create', $this->dataRes); 
    }
    public function delete(){
        $id = null;
        try {
            $id=$_GET['id'];
        }
        catch(\Throwable $th){
        }
        mysqli_query($this->adminModel,"DELETE FROM image WHERE id=".$id);
        // $this->adminModel->delete($id);

        $this->loadview('home',$this->dataRes);


    }
}
?>