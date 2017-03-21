<?php

class UserModel extends Model
{
    public function register()
    {
        $password = hash("sha512",$_POST['password']);

        if ($_POST['submit'] && $this->exists($_POST['mail'])) {
            echo 'Vous avez déjà un compte';
            return;
        } else if ($_POST['submit']) {
            $sql = "INSERT INTO `users` (`mail`,`password`, `universite`) VALUES (:mail, :password , :universite)";

            $stmt = $this->_db->prepare($sql);

            $stmt->bindValue(':mail',htmlentities($_POST['mail']));
            $stmt->bindValue(':password',$password);
            $stmt->bindValue(':universite',htmlentities($_POST['universite']));

            $stmt->execute();
        }
            return;
    }

    public function login()
    {
        $password = hash("sha512",$_POST['password']);

        if ($_POST['submit']) {


            $sql = "SELECT `id` FROM `users` WHERE `mail` = :mail AND `password` = :password ";

            $stmt = $this->_db->prepare($sql);

            $stmt->bindValue(':mail', htmlentities($_POST['mail']));
            $stmt->bindValue(':password', $password);

            $stmt->execute();

            $row = $stmt->fetch();


            if (!$row) {

                echo 'Mail ou mot de passe incorrect';
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

    private function exists($info)
    {
        $stmt = $this->_db->prepare('SELECT COUNT(*) FROM `users` WHERE `mail` = :mail');
        $stmt->bindValue(":mail", $info);
        $stmt->execute();
        return (bool) $stmt->fetchColumn();
    }
}