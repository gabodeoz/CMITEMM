<?php
class Control  {
   public function handler_request ($request = '', $data = array()) {        
        switch ($request) {
          case  CREATE_USER:
               $user = new UsuarioBo();               
               return $user->createUser($data);
               unset($user);
               break;
          case VALIDATE_USER:              
               $user = new UsuarioBo();               
               return $user->validateUser($data);
               $unset($user);
               break;                                 
           case CREATE_EMPLOYE:
               $employe = new Employes();
               $employe->create($data);
               break;
           case  GET_USERS:
               $user = new UsuarioBo();               
               return $user->getAll();
               unset($user);
               break;
           /**/
        }//.switch                
        
    }        
//.handler
}
?>