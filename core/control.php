<?php
class Control  {
   public function handler_request ($request = '', $data = array()) {
        $response= '';
        switch ($request) {
          case  CREATE_USER:
               $user = new Users();               
               $user->createUser($data);
               break;
        }//.switch                
        print ($response);
    }        
//.handler
}
?>