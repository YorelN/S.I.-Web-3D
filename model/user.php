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

                echo 'Vous êtes bien connecté';
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

    private function exists($info)
    {
        $stmt = $this->_db->prepare('SELECT COUNT(*) FROM `users` WHERE `mail` = :mail');
        $stmt->bindValue(":mail", $info);
        $stmt->execute();
        return (bool) $stmt->fetchColumn();
    }
}