<?php
/**
 * Description of Employes
 *
 * @author vgcruz
 */
class Employes extends ConnectionDB {
    #create
    public function create($array = array()) {                
        $this->getSql('create-employe');       
        $this->exec_query($array);
    }
    #update
    public function update() {     
       $this->query = $this->getSql('update-employe');                
       $this->get_results_from_query();
    }
    #findById
    public function findById($array = array()) {    
       $this->query = $this->getSql('employe-by-id');
       $this->get_results_from_query($array);
    }    
    #getAll
    public function getAll() {     
       $this->query = $this->getSql('get-all-employes');                
       $this->get_results_from_query();
    }            
    #destruct
    function __destruct() {
        unset($this);
    }
}
?>