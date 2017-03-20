<?php

// Class Boostrap --> Récupère et génère un objet de la classe controller nécessaire pour utiliser le
// Modele et la vue demandées par l'utilisateur à travers la méthode GET (l'URL est réecris grâce au .htaccess

class Bootstrap {
    private $_controller;
    private $_action;
    private $_request;

    /**
     * Construction d'un objet Bootstrap, récupère la requête ($_GET), parametres controller et action utilisés pour appeler le controller
     */
    public function __construct($request)
    {
        $this->_request = $request;
        if ($this->_request['controller'] == "") {
            $this->_controller = "home";
        } else {
            $this->_controller = $this->_request['controller'];
        }
        if ($this->_request['action'] == "") {
            $this->_action = "index";
        } else {
            $this->_action = $this->_request['action'];
        }
    }

    /**
     * @return mixed
     */
    public function createController(){
        // Check Class
        if(class_exists($this->_controller)){
            $parents = class_parents($this->_controller);
            // Check Extend
            if(in_array("Controller", $parents)){
                if(method_exists($this->_controller, $this->_action)){
                    return new $this->_controller($this->_action, $this->_request);
                } else {
                    // Method Does Not Exist
                    echo '<h1>Method does not exist</h1>';
                    return;
                }
            } else {
                // Base Controller Does Not Exist
                echo '<h1>Base controller not found</h1>';
                return;
            }
        } else {
            // Controller Class Does Not Exist
            echo '<h1>Controller class does not exist</h1>';
            return;
        }
    }
}