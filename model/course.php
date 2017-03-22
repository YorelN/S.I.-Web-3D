<?php

class CourseModel extends Model
{
    public function search()
    {
        $sql = "SELECT `id`, `name`, `content`, `tag_id` FROM `cours`";
        $this->_stmt = $this->_db->prepare($sql);
        $rows = $this->resultSet();
        return json_encode($rows);
    }

    public function api()
    {
        if ($_POST['tag']) {
            $sql = "SELECT cours.id as id, cours.name as name, cours.content as content, tags.name as tag FROM `cours` INNER JOIN `tags` ON cours.tag_id = tags.id WHERE tags.name = :tags";
            $this->_stmt = $this->_db->prepare($sql);
            $this->_stmt->bindValue(':tags', htmlentities($_POST['tag']));
            $rows = $this->resultSet();
            echo json_encode($rows);
        }

    }
}