<div class="sliderscroll" style="float: right;margin-top: 8px;">
    <h3>
        جدیدترین ها
    </h3>
    <div class="sliderscroll_content">
        <div class="sliderscroll_prev">
            <span class="prev" onclick="sliderscroll('right' , this);"></span>
        </div>
        <div class="sliderscroll_main">
            <ul>

                <?php 
                    $last_products = $data[5];
                    foreach($last_products as $row)
                    {
                ?>
                    <li>
                        <a href="<?= URL ?>/product/index/<?= $row['id']; ?>">
                        <img style="width:150px; margin-top:20px;" src="public/image/products/<?= $row['id']; ?>/product_220.jpg">
                            <img src="public/image/exclusive-blue.png">
                            <p class="yekan fontsm">
                                <?= $row['title']; ?>
                            </p>
                            <p class="yekan price">
                                <?= $row['price']; ?>
                            </p>
                        </a>
                    </li>
                <? } ?>


            </ul>
        </div>
        <div class="sliderscroll_next">
            <span class="next" onclick="sliderscroll('left' , this);"></span>
        </div>
    </div>
</div>