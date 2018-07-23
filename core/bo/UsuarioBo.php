<?php
/**
 * Description of UsuarioBo
 *
 * @author Microtemm
 */

class UsuarioBo {
    #createUser
    function createUser($data =array()){
        $array_response = array();        
        $response =0;
        if (!empty($data)) {
            $user = new Users();
            $response = $user->createUser($data);
            unset ($user);
        }        
        $array_response['response']=$response;
        return json_encode($array_response);        
    }    
    #validateUser
    function validateUser($data =array()){          
       $array_response = array();
        $response = 0;
       if (!empty($data)) {
            if (array_key_exists('username', $data) && array_key_exists('password', $data)) {
                $user = new Users();
                $response = $user->validateUser($data);
                unset ($user);
            }
        }
        $array_response['response']=$response;
        return json_encode($array_response);
    }
    #Metodo destructor del objeto
    function __destruct() {
        unset($this);
    }
}
