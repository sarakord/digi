<?php

class Model
{

    public static $conn = '';

    public function __construct()
    {
        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'digi';
        $attr = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');

        self::$conn = new PDO('mysql:host=' .$servername.';dbname='.$dbname,$username,$password,$attr);
    }

    public static function getOption()
    {
        $sql = "select value from tbl_option where setting = 'tel' or setting = 'email'"; 
        $stmt = self::$conn->prepare($sql);
        $stmt->execute();
        $options = $stmt->fetchAll();

        return $options;
    }

    public function calculateDiscount($price , $discount)
    {
        $price_discount = ($discount*$price)/100;
        $total_price = $price - $price_discount ; 

        return [$price_discount , $total_price];
    }
}

?>