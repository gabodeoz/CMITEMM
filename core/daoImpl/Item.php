<?php
/**
 * Description of Item
 *
 * @author Microtemm
 */
class Item extends ConnectionDB{
     public $item;    
     public function get($tabla=''){
     if($tabla!=''){    
       $this->query="update contador set item=item+1 where tabla='$tabla';";
        $this->execute_single_query();
       $this->query="select item  from contador where tabla ='$tabla';";
        $this->get_results_from_query();
        if(count($this->rows) == 1) {
                foreach ($this->rows[0] as $propiedad=>$valor) {
                    $this->$propiedad = $valor;
                }                
                return true;
          }
     }//fin de validacion   
       return false;
    }     
}
