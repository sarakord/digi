<?php

class model_index extends Model
{
     function __construct()
    {
        parent::__construct();
    }

    function getSlider1()
    {
        
        $sql = "select * from tbl_slider1";
        $result = $this->doSelect($sql);
        return $result;
    }

    function getSlider2()
    {
        $sql = "select * from tbl_product where special=1";
        $result = $this->doSelect($sql);

        foreach($result as $key => $row)
        {
            $discount = $row['discount'];
            $price = $row['price'];
            $discount_calculate = $this->calculateDiscount($price , $discount) ; 
            $total_price = $discount_calculate[1];
            $result[$key]['total_price'] = $total_price;
        }

        $first_row = $result[0];
        $time_special = $first_row['time_special'];

        $options = self::getOption();
        $duration_special = $options['special_time'];

        $time_end = $time_special + $duration_special;
        date_default_timezone_set('Asia/Tehran');
        $date = date('F d,Y H:i:s',$time_end);

        return [$result , $date];
    }

    function only_digikala()
    {
        $sql = "select * from tbl_product where only_digikala=1";
        $result = $this->doSelect($sql);

        return $result;
    }

    function most_viewed()
    {
        $options = $this->getOption();
        $limit = $options['limit_slider'];

        $sql = "select * from tbl_product order by viewed desc limit $limit";
        $result = $this->doSelect($sql,[],1);

        return $result;
    }

    function last_product()
    {
        $options = $this->getOption();
        $limit = $options['limit_slider'];

        $sql = "select * from tbl_product order by id desc limit $limit";
        $result = $this->doSelect($sql);

        return $result;
    }

}

?>