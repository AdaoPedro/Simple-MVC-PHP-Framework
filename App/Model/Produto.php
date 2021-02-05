<?php
    namespace App\Model;

    use \PDO;
    use Suport\Model\Model;

    class Produto extends Model{

        public function getProdutos(){
            $query = "select * from products";
            $stmt = $this->db->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();
        }
    }

?>