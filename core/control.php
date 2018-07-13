<?php
class Control  {

   public function handler_request ($request = '', $data = array()) {
        $response= '';
        switch ($request) {
           default:
               $user = new Users();               
               $user->createUser($data);
        }//.switch 
        print ($response);
    }        
//.handler
}

?>