<?php
/**
 * Description of UsuarioBo
 *
 * @author Microtemm
 */
require_once 'core/daoImpl/Usuario.php';
class UsuarioBo {
    function validateUser($POST =array()){
       $user = new Usuario();
       $data= array();
        if(array_key_exists('submit',$POST)){
          if(array_key_exists('uname',$POST)){
            $data['username']= $POST['uname'];       
          }        
          if(array_key_exists('pass', $POST)){
            $data['password']= $POST['pass'];
          }               
        }
        return $user->validateUser($data);                
    }
}
