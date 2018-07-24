<?php
/**
 * Description of UsuarioBo
 *
 * @author Microtemm
 */

class UsuarioBo {
    private $response = 0;
    private $array_response = array();
    private $message = '';
    private $data;
    #createUser
    public function createUser($data =array()){                        
        if (!empty($data)) {
            $user = new Users();
            $this->response = $user->createUser($data);
            unset ($user);
        }
        if($this->response ==1){
            $this->message = 'El usuario ha sido creado.';        
        }else{
            $this->message = 'El usuario no ha podido ser creado.';        
        }
        $this->array_response['message']=$this->message;        
        $this->array_response['response']=$this->response;
        return json_encode($this->array_response);        
    }    
    #validateUser
    public function validateUser($data =array()){                 
       if (!empty($data)) {
            if (array_key_exists('username', $data) && array_key_exists('password', $data)) {
                $user = new Users();
                $this->response = $user->validateUser($data);
                unset ($user);
            }
        }
        $this->array_response['response']=$this->response;
        return json_encode($this->array_response);
    }
    #getAll
    function getAll(){
        $user = new Users();        
        return json_encode($user->getAllUsers());
        unset($user);
    }
    #Metodo destructor del objeto
    function __destruct() {
        unset($this);
    }
}
