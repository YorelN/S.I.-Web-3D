<?php

class UserModel extends Model
{
    public function register()

    {
        $password = md5($_POST['password']);

        if ($_POST['submit']) {
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
}