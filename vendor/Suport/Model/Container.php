<?php
    namespace Suport\Model;

    use App\Core\Connection;

    class Container{

        public static function getModel($model){
            $class = "\\App\\Model\\" . $model;
            $conn = Connection::getDB();
            return new $class($conn);
        }
    }

?>