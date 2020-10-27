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
        $sql = "select * from tbl_option "; 
        $stmt = self::$conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        $options = [];
        foreach($result as $item)
        {
            $setting = $item['setting'];
            $value = $item['value'];
            $options[$setting] = $value;
        }

        return $options;
    }

    public function calculateDiscount($price , $discount)
    {
        $price_discount = ($discount*$price)/100;
        $total_price = $price - $price_discount ; 

        return [$price_discount , $total_price];
    }

    public function doSelect($sql , $values = [] , $fetch = '' , $fetchStyle = PDO::FETCH_ASSOC)
    {
        $stmt = self::$conn->prepare($sql);
        foreach($values as $key=>$value)
        {
            $stmt->bindValue($key+1 , $value);
        }
        $stmt->execute();
        if( $fetch == '' )
        {
            $result = $stmt->fetchAll($fetchStyle);
        }else{
            $result = $stmt->fetch($fetchStyle);
        }
        
        return $result;
    }

}

?>