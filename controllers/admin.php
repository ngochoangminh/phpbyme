<?php 
class admin extends ControllerBase{
    public function manage(){

        $this->loadModel('adminModel');

        $dataManage = [
            'title' => 'Manage by MN.Hoang',
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
}
?>