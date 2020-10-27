<?php

class model_product extends Model
{
    public function __constuct()
    {
        parent::__construct();
    }

    public function productInfo($id)
    {
        $values = [$id];
        $sql = "select * from tbl_product where id = ?";
        $product = $this->doSelect($sql , $values , 1);

        $price = $product['price'];
        $discount = $product['discount'];
        $discount_calculate = $this->calculateDiscount($price , $discount);

        $product['price_discount'] = $discount_calculate[0];
        $product['total_price'] = $discount_calculate[1];

        $time_special = $product['time_special'];
        $options = self::getOption();
        $duration_special = $options['special_time'];
        $time_end = $time_special + $duration_special;
        date_default_timezone_set('Asia/Tehran');
        $date = date('F d,Y H:i:s',$time_end);
        $product['date_special'] = $date;

        $colors = $product['color'];
        $colors = explode(',',$colors);
        $colors = array_filter($colors);
        $all_colors = [];
        foreach($colors as $color)
        {
            $colorInfo = $this->color_info($color);
            array_push($all_colors,$colorInfo);
        }
        $product['all_colors'] = $all_colors;

        $guarantees = $product['guarantee'];
        $guarantees = explode(',',$guarantees);
        $guarantees = array_filter($guarantees);
        $all_guarantees = [];
        foreach($guarantees as $guarantee)
        {
            $guaranteeInfo = $this->guarantee_info($guarantee);
            array_push($all_guarantees,$guaranteeInfo);
        }
        $product['all_guarantees'] = $all_guarantees;
      
        return $product;
    }

    public function color_info($id)
    {
        $sql = "select * from tbl_color where id = ?";
        $color = $this->doSelect($sql, [$id] , 1);
        return $color;
    }

    public function guarantee_info($id)
    {
        $sql = "select * from tbl_guarantee where id = ?";
        $guarantee = $this->doSelect($sql, [$id] , 1);
        return $guarantee;
    }

    function only_digikala()
    {
        $sql = "select * from tbl_product where only_digikala=1";
        $result = $this->doSelect($sql);

        return $result;
    }
}

?>