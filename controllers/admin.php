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
        if (isset($_POST['submit'])){
            $adminModel=new AdminModel();
            $imagename=$_FILES['image']['name'];
                if($imagename==''){
                    $imagename='anh-dai-dien-FB-200.jpg';
                }
            $dataAdd['title']=$_POST['title'];
            $dataAdd['description']=$_POST['description'];
            $dataAdd['image']=$imagename;
            $dataAdd['status']=$_POST['status'];
            if($imagename!='anh-dai-dien-FB-200.jpg'){
                move_uploaded_file($imagename,"./upload");
            }
            $data = $dataAdd['title'].','.$dataAdd['description'].','.$dataAdd['image'].','.$dataAdd['status'];
            $adminModel->add($data);
            }
        $this->loadview('create', $dataAdd);

        
    }
}
?>