<?php
/**
 * Description of ConnectionDB
 *
 * @author Microtemm
 */
abstract class ConnectionDB {    
    /*
     * Engines:
     *           mysql = MySQL 
     *           sqlsrv = MSSQL     *
     */
    private $engine;
    private $server; //
    private $sesion; //
    private $pass;  //
    private $dbname;  //
    public $query;
    public $rows = array();
    private $conn;
          
    function __construct(){            
        $this->engine = 'mysql';
        $this->server = 'localhost';
        $this->sesion ='root';
        $this->pass='';
        $this->dbname ='cmi';                        
    }            
    # los siguientes métodos pueden definirse con exactitud y no son abstractos
    # Conectar a la base de datos        
	private function open_connection() {
            try {                
                $strConn=$this->getStrConection($this->engine);                
                $this->conn = new PDO($strConn, $this->sesion, $this->pass);
                $this->conn->setAttribute(PDO::SQLSRV_ATTR_FETCHES_NUMERIC_TYPE, true);
            } catch (PDOException $e) {
                Log::write($e->getMessage());
                Log::write("No fue posible establecer la conexion en la base de datos.");
            }
        }
    # Ejecutar un query simple del tipo INSERT, DELETE, UPDATE
        protected function exec_query($array=array()) {            
	    try{            
                $this->open_connection();
                $sth = $this->conn->prepare($this->query);
                if(count($array)>0)
                     $sth->execute($array);
                 else
                     $sth->execute();
                 }catch (Exception $e){
                   Log::write ( $e->getMessage());
                 } 
	    $sth= null;
            $this->conn=null;
	}
    # Traer resultados de una consulta en un Array
        protected function get_results_from_query($array= array()) {           
           try{
                $this->open_connection();
                $sth = $this->conn->prepare($this->query);
                    if(count($array)>0)
                       $sth->execute($array);
                    else
                       $sth->execute();                 

                while ($this->rows[]= $sth->fetch(PDO::FETCH_ASSOC));
                    array_pop($this->rows);
                    
            }catch (Exception $e){
                Log::write ( $e->getMessage());
            }                       
            $sth= null;
            $this->conn=null;
        }                
    #get string connection    
        private function getStrConection($engine){            
            if($engine=='sqlsrv')
                return $engine.":Server=" . $this->server . "; database=" . $this->dbname . "; ";
            if($engine=='mysql')
                return $engine.":host=". $this->server .";dbname=". $this->dbname ;
                
        }
    #get text sql        
        protected function getSql($sqlFile) {
            $str_sql = '';
            $file_path = PATH_SQL . $sqlFile . '.sql';
            if (is_readable($file_path)) {
                 $str_sql = file_get_contents($file_path);
            } 
            $this->query = $str_sql;
        }
    # Método destructor del objeto
        function __destruct() {
            unset($this);
        }
}


