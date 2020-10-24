<?php

class model_index
{
     function __construct()
    {
        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'digi';
        $attr = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');

        $this->conn = new PDO('mysql:host=' .$servername.';dbname='.$dbname,$username,$password,$attr);
    }

    function getSlider1()
    {
        
        $sql = "select * from tbl_slider1";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

    function getSlider2()
    {
        $sql = "select * from tbl_product where special=1";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();

        foreach($result as $key => $row)
        {
            $discount = $row['discount'];
            $price = $row['price'];
            $total_price = ((100-$discount)*$price)/100 ; 
            $result[$key]['total_price'] = $total_price;
        }

        $first_row = $result[0];
        $time_special = $first_row['time_special'];

        $sql = "select * from tbl_option where setting='special_time' and value>0";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result2 = $stmt->fetch();
        $duration_special = $result2['value'];

        $time_end = $time_special + $duration_special;
        date_default_timezone_set('Asia/Tehran');
        $data = date('F d,Y H:i:s',$time_end);

        return [$result , $data];
    }

    function only_digikala()
    {
        $sql = "select * from tbl_product where only_digikala=1";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();

        return $result;
    }

    function most_viewed()
    {
        $sql = "select * from tbl_option where setting = 'limit_slider'";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch();
        $limit = $result['value'];


        $sql = "select * from tbl_product order by viewed desc limit $limit";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();

        return $result;
    }

    function last_product()
    {
        $sql = "select * from tbl_option where setting = 'limit_slider'";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch();
        $limit = $result['value'];


        $sql = "select * from tbl_product order by id desc limit $limit";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();

        return $result;
    }

}

?>