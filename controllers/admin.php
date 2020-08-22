<?php 
class admin extends Controller{
    public function manage(){
        $dataManage = [
            'title' => 'Manage by MN.Hoang',
            'content' => 'Content Manage'
        ];

        $this->loadview('manage', $dataManage);
    }
    public function edit(){
        echo "edit";
    }
}
?>