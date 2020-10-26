<div class="sliderscroll">
    <h3>
        فقط در دیجی کالا
    </h3>
    <div class="sliderscroll_content">
        <div class="sliderscroll_prev">
            <span class="prev" onclick="sliderscroll('right' , this);"></span>
        </div>
        <div class="sliderscroll_main">
            <ul>

                <?php
                    $resualt = $data[3];
                    foreach($resualt as $row)
                    {
                ?>
                    <li>
                        <a href="<?= URL ?>/product/index/<?= $row['id']; ?>">
                            <img style="width:150px; margin-top: 20px;" src="public/image/products/<?= $row['id'] ?>/product_220.jpg">
                            <img src="public/image/exclusive-blue.png">
                            <p class="yekan fontsm">
                                <?= $row['title']; ?>
                            </p>
                            <p class="yekan price">
                                <?= $row['price']; ?>
                            </p>
                        </a>
                    </li>
                <?php } ?>

            </ul>
        </div>
        <div class="sliderscroll_next">
            <span class="next" onclick="sliderscroll('left' , this);"></span>
        </div>
    </div>
</div>