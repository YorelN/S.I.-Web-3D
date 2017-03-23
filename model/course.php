<?php

class CourseModel extends Model
{

    public function search()
    {
        $sql = "SELECT `id`, `name` FROM `tags`";
        $this->_stmt = $this->_db->prepare($sql);
        $rows = $this->resultSet();
        return json_encode($rows);
    }

    public function api()
    {
//        if (!isset($_SESSION['logged_in'])) {
//            Message::setMsg("Vous devez être connecté pour accéder aux cours.","error");
//            header("Location: ".ROOT_URL."users/login");
//        }

        if ($_POST['tag']) {
            $sql = "SELECT cours.id as id, cours.name as name, cours.content as content, tags.name as tag, tags.id as tag_id FROM `cours` INNER JOIN `tags` ON cours.tag_id = tags.id WHERE tags.name = :tags";
            $this->_stmt = $this->_db->prepare($sql);
            $this->_stmt->bindValue(':tags', htmlentities($_POST['tag']));
            $rows = $this->resultSet();
            echo json_encode($rows);
        }

    }

    public function addfavoris()
    {
      if (isset($_POST['cours']) && isset($_POST['user'])) {
        if ($this->exists($_POST['user'], $_POST['cours'])) {
          echo "delete";
          $sql = "DELETE FROM `favoris` WHERE `cours_id` = :cours AND `user_id` = :user";
        } else {
          echo "add";
          $sql = "INSERT INTO `favoris` (`user_id`, `cours_id`) VALUES (:user, :cours)";
        }
        $this->_stmt = $this->_db->prepare($sql);
        $this->_stmt->bindValue(':user', htmlentities($_POST['user']));
        $this->_stmt->bindValue(':cours', htmlentities($_POST['cours']));
        $this->_stmt->execute();
      }
    }

    public function articles()
    {
        if ($_GET['id'] != '')
        {
            echo $_GET['id'];
        }
    }

    private function exists($user, $cours)
    {
        $stmt = $this->_db->prepare('SELECT COUNT(*) FROM `favoris` WHERE `user_id` = :user AND `cours_id` = :cours');
        $stmt->bindValue(":user", $user);
        $stmt->bindValue(":cours", $cours);
        $stmt->execute();
        return (bool) $stmt->fetchColumn();
    }
}
