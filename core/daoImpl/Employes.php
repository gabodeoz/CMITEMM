<?php
/**
 * Description of Employes
 *
 * @author vgcruz
 */
class Employes {
    public function create($array = array()) {                
        $this->getSql('create-employe');       
        $this->exec_query($array);
    }
    //findById
    public function findById($array = array()) {    
       $this->query = $this->getSql('users-by-id');
       $this->get_results_from_query($array);
    }    
    //findAll
    public function findAll() {     
       $this->query = $this->getSql('all-users');                
       $this->get_results_from_query();
    }
    
    #Metodo destructor del objeto
    function __destruct() {
        unset($this);
    }
}
