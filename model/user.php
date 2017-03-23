<?php

class UserModel extends Model
{
    public function register()
    {
        $password = hash("sha512",$_POST['password']);

        if ($_POST['submit'] && $this->exists($_POST['mail'])) {
            Message::setMsg('Un compte a déjà été crée avec cet adresse e-mail', "error");
            return;
        } else if ($_POST['submit']) {
            if ($_POST['password'] == '' || $_POST['mail'] == '' || $_POST['universite'] == '') {
                Message::setMsg("Merci de remplir tous les champs", "error");
                return;
            }

            $sql = "INSERT INTO `users` (`mail`,`password`, `universite`) VALUES (:mail, :password , :universite)";

            $stmt = $this->_db->prepare($sql);

            $stmt->bindValue(':mail',htmlentities($_POST['mail']));
            $stmt->bindValue(':password',$password);
            $stmt->bindValue(':universite',htmlentities($_POST['universite']));

            $stmt->execute();
            Message::setMsg("Votre compte a bien été crée", "success");
        }
            return;
    }

    public function login()
    {

        if (isset($_SESSION['logged_in'])) {
            // INSERER MESSAGE D'ERREUR DISANT "VOUS ETES DEJA CONNECTE"
            header("Location: ".ROOT_URL);
        }

        $password = hash("sha512",$_POST['password']);

        if ($_POST['submit']) {

            $sql = "SELECT `id` FROM `users` WHERE `mail` = :mail AND `password` = :password ";

            $stmt = $this->_db->prepare($sql);

            $stmt->bindValue(':mail', htmlentities($_POST['mail']));
            $stmt->bindValue(':password', $password);

            $stmt->execute();

            $row = $stmt->fetch();


            if (!$row) {
                Message::setMsg("Les identifiants de connexion sont incorrects", "error");
            } else {

                session_start();
                $_SESSION['id'] = $row['id'];
                $_SESSION['mail'] = $row['mail'];
                $_SESSION['logged_in'] = true;
                // $_SESSION['name'] = $row['name'];
                header('Location: ' . ROOT_URL);
            }
        }
    }


    public function logout()
    {
        $_SESSION = array();
        session_destroy();
        header("Location: ".ROOT_URL."users/login");
        exit;
    }

    public function organisation()
    {
        $sql = "SELECT cours.id as cours_id, cours.name as cours_name, cours.tag_id as tag FROM ((`users`
                INNER JOIN `history` ON users.id = history.user_id)
                INNER JOIN `cours` ON history.cours_id = cours.id) WHERE users.id = :id";
        $this->_stmt = $this->_db->prepare($sql);
        $this->_stmt->bindValue(':id', $_SESSION['id']);
        $this->_stmt->execute();
        $row = $this->_stmt->fetchAll(PDO::FETCH_ASSOC);
        return $row;
    }

    private function exists($info)
    {
        $stmt = $this->_db->prepare('SELECT COUNT(*) FROM `users` WHERE `mail` = :mail');
        $stmt->bindValue(":mail", $info);
        $stmt->execute();
        return (bool) $stmt->fetchColumn();
    }
}