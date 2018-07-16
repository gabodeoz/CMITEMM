<?php
 class Users extends ConnectionDB {  
    #create
    public function createUser($array = array()) {          
        $this->getSql('create-user');       
        $this->exec_query($array);
    }
    #update
    public function updateUser($array = array()) {          
        $this->getSql('update-user');       
        $this->exec_query($array);
    }
    //consulta de usuario por id
    public function getUserById($array = array()) {    
       $this->query = $this->getSql('users-by-id');
       $this->get_results_from_query($array);
    }    
    //Listado de usuarios
    public function getAllUsers() {     
       $this->query = $this->getSql('all-users');                
       $this->get_results_from_query();
    }
    //Validar usuario
    public function validateUser($array = array()) {          
        if(!empty($array)){
            $this->getSql('validate-user'); 
            $this->get_results_from_query($array);
            print_r($this->rows);
        }                                                
    }
    #Metodo destructor del objeto
    function __destruct() {
        unset($this);
    }
}// Users