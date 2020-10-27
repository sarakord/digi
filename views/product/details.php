<script src="public/js/jquery.elevatezoom.js"></script>
<div id="details">
    <div class="right">
        <div class="share">
            <i class="social"></i>
            <i class="addtofavorite"></i>
        </div>
        <div class="gallery">
            <img id="zoomproduct" src="public/image/products/<?= $product['id']; ?>/product_350.jpg"
                 data-zoom-image="public/image/products/<?= $product['id']; ?>/product_zoom.jpg">
            <ul>
                <li data-main-image="public/image/products/gallery/main/gallery2.jpg"><img
                        src="public/image/product5_1.jpg"></li>
                <li data-main-image="public/image/products/gallery/main/gallery1.jpg"><img
                        src="public/image/product5_2.jpg"></li>
                <li data-main-image="public/image/products/gallery/main/gallery3.jpg"><img
                        src="public/image/product5_3.jpg"></li>
                <li data-main-image="public/image/products/gallery/main/gallery3.jpg"><img
                        src="public/image/product5_4.jpg"></li>
                <li data-main-image="public/image/products/gallery/main/gallery3.jpg">
                    <span></span>
                </li>
            </ul>
        </div>
    </div>
    <div class="left">
        <div class="title">
            <?= $product['title']; ?>
            <div class="stars">
                <div class="gray ">
                    <div class="red"></div>
                </div>
                <p class="rate">
                    3.5 رای از 74 رای
                </p>
            </div>
        </div>
        <div class="right">
            <h4>
                انتخاب رنگ
            </h4>
            <ul class="colors">
                <?php 
                    $all_colors = $product['all_colors'];
                    foreach($all_colors as $all_color)
                    {
                ?>
                <li>
                    <span class="circle" style="background-color: <?= $all_color['hex']; ?>;"></span>
                    <?= $all_color['title']; ?>
                </li>
                <?php
                    } 
                ?>
            </ul>
            <h4>
                انتخاب گارانتی
            </h4>
            <div id="selectlist">
                    <span class="zemanattitle">
                        انتخاب کنید
                    </span>
                <ul>
                    <?php 
                        $all_guarantees = $product['all_guarantees'];
                        foreach($all_guarantees as $all_guarantee)
                        {
                    ?>
                    <li data-id="<?= $all_guarantee['id']; ?>"><?= $all_guarantee['title']; ?></li>
                    <?php
                        }
                    ?>
                </ul>
            </div>
            <div id="price">
                    <span>
                        قیمت :
                    </span>
                <p>
                    <?= $product['price']; ?>
                </p>
                <span>
                        تومان
                    </span>
                <span class="discount">
                        <span class="discount_right">
                            تخفیف
                        </span>
                        <span class="discount_left">
                            <?= $product['price_discount']; ?>
                            تومان
                        </span>
                    </span>
            </div>
            <div id="priceforyou">
                <span class="priceforyou_img"></span>
                <span>
                        قیمت برای شما :
                </span>
                <p style="text-decoration:none;">
                    <?= $product['total_price']; ?>
                </p>
                <span style="font-size: 10pt !important;">
                        تومان
                </span>
            </div>
            <div id="compare">
                    <span class="yekan compare-btn">
                        <i></i>
                        مقایسه کن
                    </span>
                <span class="yekan addtocart_btn">
                        <i></i>
                        افزودن به سبد
                    </span>
            </div>
        </div>
        <div class="left">
            <ul>
                <li>
                    <i></i>
                    <span class="yekan attr_left">
                             تعداد سیم کارت :
                        </span>
                    <span class="yekan attr_left_value">
                          دو سیم کارته
                        </span>
                </li>
                <li>
                    <i></i>
                    <span class="yekan attr_left">
                            حافظه داخلی :
                        </span>
                    <span class="yekan attr_left_value">
                            32 گیگابایت
                        </span>
                </li>
                <li>
                    <i class="moreAttr_icon"></i>
                    <span class="yekan moreAttr">
                             موارد بیشتر
                        </span>
                </li>
            </ul>
            <span class="yekan gift_left">
                    <i></i>
                    هدایای همراه این کالا
                    <div class="horizental_row2"></div>
                    <img src="public/image/gift_product.jpg">
                    <p>
                        محافظ صفحه نمایش مناسب گوشی هوآوی
                    </p>
                </span>
        </div>
        <div class="horizental_row2"></div>
        <div id="services_feature">
            <ul>
                <li>
                    <a class="fontsm">
                        <i style="background-position:-210px -473px ;"></i>
                        7 روز ضمانت برگشت
                    </a>
                </li>
                <li>
                    <a class="fontsm">
                        <i style="background-position:-263px -473px ;"></i>
                        پرداخت در محل
                    </a>
                </li>
                <li>
                    <a class="fontsm">
                        <i style=" background-position:-158px -473px;"></i>
                        ضمانت اصل بودن کالا
                    </a>
                </li>
                <li>
                    <a class="fontsm">
                        <i style="width: 32px; background-position:-320px -473px;"></i>
                        تحویل اکسپرس
                    </a>
                </li>
                <li>
                    <a class="fontsm">
                        <i style="background-position:-103px -473px ;"></i>
                        تضمین بهترین قیمت
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<script>
    // selectlist zemanattitle
    $('#selectlist').click(function () {
        var ulTag = $('ul', this);
        ulTag.slideToggle(200);
    });

    $('#selectlist ul li').click(function () {
        var txt = $(this).text();
        $('#selectlist .zemanattitle').text(txt);
    });

    //product color
    $(".colors li").click(function () {
        $('.circle').removeClass('active');
        $(".circle", this).addClass('active');
    });

    //data-zoom-image
    $('#zoomproduct').elevateZoom({
        'zoomWindowOffetx': -800,
        'scrollZoom': true,
        'tint': true
    });

</script>