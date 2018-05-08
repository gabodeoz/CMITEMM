<?php
require_once 'core/dao/ConexionClass.php'; 

class Usuario extends ConexionClass {
    private $username ='';
    private $password ='';
    
    public $data = array();
    // consulta de usuario por id
    public function getUserById($id = '') {    
        $this->query = "SELECT * "
                . " FROM  tusuarios"
                . " WHERE  1=1 "
                . " AND id_user = $id ;";
       print_r($this->get_results_from_query());
    }
    
    //Listado de usuarios
    public function getUsers($id = '') {
        $condicion = ($id != '') ? " AND id_user = $id" : "";
        $this->query = "SELECT * "
                . " FROM  tusuarios"
                . " WHERE  1=1 ";
                
       print_r( $this->get_results_from_query());
    }
    //Validar usuario
    public function validateUser($data = array()) {  
        print_r($data);
        if(!empty($data)){              
         if(array_key_exists('username', $data)&& array_key_exists('password', $data))
              foreach($data as $key=>$value) 
               $$key = $value;   
               echo $this->query = "SELECT * "
                             . " FROM  tusuarios"
                             . " WHERE  username ='".$username."' AND  password ='".$password."';";
              
              if (!empty( $this->get_results_from_query()))
              return true;               
        }       
               
        return false;        
    }
    # Método destructor del objeto

    function __destruct() {
       // unset($this);
    }

}// fin UsuarioClass