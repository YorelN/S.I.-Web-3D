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

            $stmt->bindValue(':mail',$_POST['mail']);
            $stmt->bindValue(':password',$password);
            $stmt->bindValue(':universite',$_POST['universite']);

            $stmt->execute();
        }
            return;
    }

    public function login()
    {

    }

    private function exists($info)
    {
        $stmt = $this->_db->prepare('SELECT COUNT(*) FROM `users` WHERE `mail` = :mail');
        $stmt->bindValue(":mail", $info);
        $stmt->execute();
        return (bool) $stmt->fetchColumn();
    }
}