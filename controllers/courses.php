<?php

class Courses extends Controller
{
    protected function search()
    {
        $viewmodel = new CourseModel();
        $this->returnView($viewmodel->search(), false);
    }

    protected function api()
    {
        $viewmodel = new CourseModel();
        $viewmodel->api();
    }
}