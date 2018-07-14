<?php
/**
 * Description of Equipos
 *
 * @author vgcruz
 */
class Equipos extends ConnectionDB  {
    //put your code here
     #create
    public function create($array = array()) {                
        $this->getSql('create-equipo');       
        $this->exec_query($array);
    }
    #update
    public function update() {     
       $this->query = $this->getSql('update-equipo');                
       $this->get_results_from_query();
    }
    #findById
    public function findById($array = array()) {    
       $this->query = $this->getSql('equipo-by-id');
       $this->get_results_from_query($array);
    }    
    #getAll
    public function getAll() {     
       $this->query = $this->getSql('get-all-equipos');                
       $this->get_results_from_query();
    }            
    #destruct
    function __destruct() {
        unset($this);
    }
}

?>
