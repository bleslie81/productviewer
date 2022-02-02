<?php
    class Config
    {
        private const DBHOST = 'localhost';
        private const DBUSER = 'root';
        private const DBPASS = '';
        private const DBNAME = 'janiwebshop';

        private $dsn='mysql:host='.self::DBHOST.';dbname='.self::DBNAME.'';

        public $conn=null;

        public function __construct()
        {
            try {
                $this->conn=new PDO($this->dsn, self::DBUSER, self::DBPASS);
                $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                die('Error: '.$e->getMessage());
            }
            return $this->conn;
        }

        public function fetchCategories(){
            $sql = "SELECT * FROM category";
            $stmt=$this->conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();
            return $result;
        }

        public function fetchProduct(){
            $sql = "SELECT * FROM products LIMIT 6";
            $stmt=$this->conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();
            return $result;
        }

        public function newsfetchProduct(){
            $afterDate = strtotime(date("Y-m-d"))-1209600; //jelenlegi időből kivonva a 2 hét óta eltelt mp száma
            $time = date("Y-m-d",$afterDate);
            
            $sql = "SELECT * FROM products WHERE date BETWEEN date AND '$time' ORDER BY date DESC LIMIT 3";
            $stmt=$this->conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();
            return $result;
        }

        public function login($name,$psw){
            $sql = "SELECT * FROM users WHERE names='$name' AND passwords='$psw'";
            $stmt=$this->conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();
            
            return $result;
        }
    }

?>