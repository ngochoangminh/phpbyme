<?php
abstract class Database{
    abstract public function create($table, $data);
    abstract public function get($table, $data);
    abstract public function getSingle($table, $id);
    abstract public function update($table, $where, $data);
    abstract public function delete($table, $id);
}
?>