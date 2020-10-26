<?php

class model_product extends Model
{
    public function __constuct()
    {
        parent::__construct();
    }

    public function productInfo($id)
    {
        $sql = "select * from tbl_product where id = :id";
        $stmt = self::$conn->prepare($sql);
        $stmt->bindParam(':id',$id);
        $stmt->execute();
        $product = $stmt->fetch();

        $price = $product['price'];
        $discount = $product['discount'];
        $discount_calculate = $this->calculateDiscount($price , $discount);

        $product['price_discount'] = $discount_calculate[0];
        $product['total_price'] = $discount_calculate[1];
        
        return $product;
    }
}

?>