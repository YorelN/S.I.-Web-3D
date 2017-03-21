<?php

abstract class Model
{
    protected $_db;

    public function __construct(PDO $db)
    {
        $this->_db = $db;
    }
}