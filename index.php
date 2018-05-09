<?php
    require_once 'core/bo/HtmlBo.php';     
    require_once 'core/bo/UsuarioBo.php';     
    require_once 'constants/constants.php'; 
        
    $view = new HtmlBo();
    $user= new UsuarioBo();
    $view->getView(VIEW_LOGIN);
    
    if($_POST){  
        $val = $user->validateUser($_POST);
      if ($val)
          echo 0;
      else    
          echo 1;
      
    }                   
?>
