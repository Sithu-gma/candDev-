<?php 
    class Dbh{
        private $dbhost="localhost";
        private $dbname="candev_blog";
        private $dbuser="root";
        private $dbpass="";

        public function connect() {
            $dsn="mysql:host=".$this->dbhost.";dbname=".$this->dbname;
            $pdo=new PDO($dsn,$this->dbuser,$this->dbpass);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $pdo;
        }
   }
?>