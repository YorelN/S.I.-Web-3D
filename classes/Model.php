<?php

abstract class Model
{
    protected $_db;
    protected $_stmt;

    public function __construct()
    {
        $this->_db = new PDO(DBN, DB_USER, DB_PASS);
    }

    protected function resultSet()
    {
        $this->_stmt->execute();
        return $this->_stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}