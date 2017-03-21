<?php

abstract class Controller
{
    protected $_request;
    protected $_action;
    protected $_db;

    public function __construct($action, $request)
    {
        $this->_action = $action;
        $this->_request = $request;
    }

    public function executeAction()
    {
        return $this->{$this->_action}();
    }

    protected function returnView($viewmodel, $fullview)
    {
        $view = "views/" . get_class($this) . "/" . $this->_action . ".php";
//        var_dump($view);

        if ($fullview) {
            require 'views/main.php';
        } else {
            require($view);
        }
    }
}