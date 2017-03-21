<?php

class HomeModel extends Model
{
    public function Index()
    {
        $sql = "SELECT `id`, `name`, `contenu` FROM `cours` WHERE 1";
        $this->_stmt = $this->_db->prepare($sql);
        $rows = $this->resultSet();
        return $rows;
    }
}