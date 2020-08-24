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
            'title' => 'Edit by MN.Hoang',
            'content' => 'Content Edit'
        ];
        $this->loadview('edit', $dataEdit);
    }
    public function add(){
        $dataAdd = [
            'title' => 'Add by MN.Hoang',
            'content' => 'Content Edit'
        ];
        $adminModel=new AdminModel();
        $imagename=$_FILES['image']['name'];
			if($imagename==''){
				$imagename='anh-dai-dien-FB-200.jpg';
			}
        $dataAdd['title']=$_POST['title'];
        $dataAdd['description']=$_POST['description'];
        $dataAdd['image']=$imagename;
        $dataAdd['status']=$_POST['status'];
        $this->loadview('create', $dataAdd);
    }
}
?>