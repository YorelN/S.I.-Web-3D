<?php

class Users extends Controller
{
    protected function register()
    {
        $viewmodel = new UserModel();
        $this->returnView($viewmodel->register(), false);
    }

    protected function login()
    {
        $viewmodel = new UserModel();
        $this->returnView($viewmodel->login(), false);
    }

    protected function logout()
    {
        $viewmodel = new UserModel();
        $this->returnView($viewmodel->logout(), false);
    }
}
