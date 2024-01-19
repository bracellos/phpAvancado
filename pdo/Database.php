<?php
namespace pdo;
abstract class Database{
    abstract protected function connect();

    abstract public function select($sql);
    abstract public function insert($sql);
    abstract public function update($sql);
    abstract public function delete($sql);
}