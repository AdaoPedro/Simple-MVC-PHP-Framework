<?php
    namespace App\Core;
    
    use \PDO;

    class Connection{

        public static function getDB(){
            try{
                return new PDO(
                    "mysql:host=127.0.0.1; dbname=mvc_db",
                    "root",
                    ""
                );
            } catch(\PDOException $e){
                echo $e->getMessage();
            }
        }
    }

?>