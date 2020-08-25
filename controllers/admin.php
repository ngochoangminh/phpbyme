<?php 
class admin extends ControllerBase{
    public function manage(){

        $this->loadModel('adminModel');

        $dataManage = [
            'title' => 'Manage Site',
            'content' => 'Content Manage'
        ];
        
        $this->loadview('manage', $dataManage);
    }
    public function edit(){
        $dataEdit = [
            'title' => 'Edit Site',
            'content' => 'Content Edit'
        ];
        $this->loadview('edit', $dataEdit);
    }
    public function add(){
        $dataAdd=[
            'title' => 'Edit Site',
            'content' => 'Content Edit'
        ];
        $adminModel = $this->loadModel('admin');
        if (isset($_POST['submit']) && !empty($_FILES['image']['name'])){

            $imagename=$_FILES['image']['name'];
            $title=$_POST['title'];
            $description=$_POST['description'];
            $status=$_POST['status'];

            move_uploaded_file($_FILES['image']['tmp_name'], './upload/'.basename($imagename));
            $data = "'$title','$description','$imagename','$status'";
            printf($data);
            $dataAdd['al'] = $adminModel->add($data);
        }

        $this->loadview('create', $dataAdd); 
    }
}
?>