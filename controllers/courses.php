<?php

class Courses extends Controller
{
    protected function search()
    {
        $this->returnView('', false);
    }

    protected function api()
    {
        $viewmodel = new CourseModel();
        $viewmodel->api();
    }

    protected function addfavoris()
    {
      $viewmodel = new CourseModel();
      $viewmodel->addfavoris();
    }

    protected function articles() {
        $viewmodel = new CourseModel();
        $this->returnView($viewmodel->articles(), false);
    }
}
