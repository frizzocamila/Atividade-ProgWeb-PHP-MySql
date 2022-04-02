<?php 
    class Conexao{
        private $con;
        function __construct() {
            try {
                $this->con = new PDO ("mysql:host=127.0.0.1;dbname=logsys", "logsysuser", "#logsysuser");                
                $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);                
            } catch (PDOException $e) {
                echo ($e->getMessage());        
            }
        }
        
        function select($login) {
            try {
                $arr = [];
                if ($this->con) {
                    $stmt = $this->con->prepare("SELECT * FROM usuario WHERE login = ?");            
                    $stmt->bindParam(1 , $login);
                    $stmt->execute();
                    $arr = $stmt->fetchAll(PDO::FETCH_ASSOC);                    
                    return $arr;
                }
                $stmt = null;                            
            } catch (Exception $e) {
                echo ($e->getMessage());        
            }            
        }
    }
?>