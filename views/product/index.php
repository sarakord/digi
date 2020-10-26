<div id="main">

    <link href="public/Css/productStyleSheet.css" rel="stylesheet">

   <?php
        $product = $data[0];
        if($product['special'] == 1)
        {
            require ('offer.php');
        }

        require ('details.php');
        require ('introduction.php');
        require ('onlyDigikala.php');
        require ('tabs.php');
   ?>

</div>

<?php
    require ('gallery.php');
?>