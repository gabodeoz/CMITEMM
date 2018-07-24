<?php
 class Users extends ConnectionDB {  
    private $result = array();
    #create
    public function createUser($array = array()) {          
        $this->getSql('create-user');       
        $this->exec_query($array);
        return $this->response;
    }
    #update
    public function updateUser($array = array()) {          
        $this->getSql('update-user');       
        $this->exec_query($array);
    }
    //consulta de usuario por id
    public function getUserById($array = array()) {    
       $this->getSql('users-by-id');
       $this->get_results_from_query($array);
    }    
    //Listado de usuarios
    public function getAllUsers() {     
       $this->getSql('all-users');                
       $this->get_result_objects();
       $total= count($this->rows);
       if($total >= 1)
       $this->result ['draw']=1;
       $this->result ["recordsTotal"]=$total;
       $this->result ["recordsFiltered"]=$total;
       $this->result['data']=$this->data;  
       return $this->result;
    }
    //Validar usuario
    public function validateUser($array = array()) {          
        if(!empty($array)){
            $this->getSql('validate-user'); 
            $this->get_results_from_query($array);
            if (count($this->rows)==1)
                return 1;
        }                
        return 0;
    }
    #Metodo destructor del objeto
    function __destruct() {
        unset($this);
    }
}// Users