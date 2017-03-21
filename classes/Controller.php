<?php


class Controller
{
    protected $_request;
    protected $_action;

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
        
    }
}