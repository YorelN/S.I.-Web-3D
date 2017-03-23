<?php

class CourseModel extends Model
{

    public function search()
    {
        $sql = "SELECT `id`, `name`, `color` as tag_color FROM `tags`";
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
            $sql = "SELECT cours.id as id, cours.name as name, cours.content as content, tags.name as tag, tags.id as tag_id, tags.color as tag_color FROM `cours` INNER JOIN `tags` ON cours.tag_id = tags.id WHERE tags.name = :tags";
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
        if (!isset($_SESSION['logged_in'])) {
            Message::setMsg('Vous devez vous connecter pour voir les articles', 'error');
            header("Location: ".ROOT_URL.'users/login');
            exit;
        }

        if ($_GET['id'] != '')
        {
            $this->add_history();

            $sql = "SELECT cours.name as name,cours.full_content as full_content, cours.tag_id as tag_id, tags.name as tag, tags.color as tag_color FROM `cours`
            INNER JOIN `tags` ON cours.tag_id = tags.id WHERE cours.id = :id";
            $this->_stmt = $this->_db->prepare($sql);
            $this->_stmt->bindValue(':id', htmlentities($_GET['id']));
            $this->_stmt->execute();
            $row = $this->_stmt->fetch(PDO::FETCH_ASSOC);

            $sql_articles_lies = "SELECT cours.id as cours_id, cours.name as cours_name, cours.content as cours_content, tags.name as tag_name, tags.color as tag_color FROM `cours`
            INNER JOIN `tags` ON cours.tag_id = tags.id WHERE tags.id = :tag LIMIT 2";
            $stmt = $this->_db->prepare($sql_articles_lies);
            $stmt->bindValue(":tag", $row['tag_id']);
            $stmt->execute();
            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

            $sql_autres = "SELECT cours.id as cours_id, cours.name as cours_name, cours.content as cours_content, tags.name as tag_name, tags.color as tag_color FROM `cours`
            INNER JOIN `tags` ON cours.tag_id = tags.id WHERE NOT tags.id = :tag LIMIT 2";
            $stmt_autres = $this->_db->prepare($sql_autres);
            $stmt_autres->bindValue(":tag", $row['tag_id']);
            $stmt_autres->execute();
            $rowss = $stmt_autres->fetchAll(PDO::FETCH_ASSOC);

            $row_final['cours'] = $row;
            $row_final['lies'] = $rows;
            $row_final['autres'] = $rowss;
            return $row_final;
        }
        return;
    }

    private function exists($user, $cours)
    {
        $stmt = $this->_db->prepare('SELECT COUNT(*) FROM `favoris` WHERE `user_id` = :user AND `cours_id` = :cours');
        $stmt->bindValue(":user", $user);
        $stmt->bindValue(":cours", $cours);
        $stmt->execute();
        return (bool) $stmt->fetchColumn();
    }

    private function exists_in_history($user, $cours)
    {
        $stmt = $this->_db->prepare('SELECT COUNT(*) FROM `history` WHERE `user_id` = :user AND `cours_id` = :cours');
        $stmt->bindValue(":user", $user);
        $stmt->bindValue(":cours", $cours);
        $stmt->execute();
        return (bool) $stmt->fetchColumn();
    }

    private function add_history()
    {
        if (!$this->exists_in_history($_SESSION['id'],$_GET['id'])) {
            $sql = "INSERT INTO `history` (`user_id`, `cours_id`) VALUES (:user, :cours)";
            $stmt = $this->_db->prepare($sql);
            $stmt->bindValue(':user', $_SESSION['id']);
            $stmt->bindValue(':cours', $_GET['id']);
            $stmt->execute();
        }
        return;
    }
}
