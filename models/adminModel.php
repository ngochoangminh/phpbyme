<?php
class adminModel extends ModelBase
{
    public function checkCreateTB()
    {
        $tbName = 'image';
        $fields = [
            'id'=>[
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE,
                'unique' => TRUE,
                'primary' => TRUE,
            ],
            'title' => ['type' => 'TEXT'],
            'description' => [
                'type' =>'VARCHAR',
                'constraint' => 255,
                'default' => '',
            ],
            'image'=> [
                'type' =>'LONGBLOB',
                'NOT NULL' => TRUE,
                'default' => '',
            ],
            'status' => [
                'type' => 'ENUM',
                'constraint' => ['Enabled', 'Disabled'],
                'default' => 'Enabled',
            ],
        ];


        
    }
    
}
?>