<?php

class HomeModel extends Model
{
    public function Index()
    {
        $sql = "SELECT cours.id as id, cours.name as name, cours.content as content, tags.name as tag FROM `cours`
                INNER JOIN `tags` ON cours.tag_id = tags.id";
        $this->_stmt = $this->_db->prepare($sql);
        $rows = $this->resultSet();
        return json_encode($rows);
    }
}
