<?php

class model_index
{
     function __construct()
    {

    }

    function getSlider1()
    {
        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'digi';
        $attr = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');

        $conn = new PDO('mysql:host=' .$servername.';dbname='.$dbname,$username,$password,$attr);
        $sql = "select * from tbl_slider1";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }
}

?>