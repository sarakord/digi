<script src="public/js/jquery.elevatezoom.js"></script>
<div id="details">
    <div class="right">
        <div class="share">
            <i class="social"></i>
            <i class="addtofavorite"></i>
        </div>
        <div class="gallery">
            <img id="zoomproduct" src="public/image/products/medium/product5.jpg"
                 data-zoom-image="public/image/products/large/product5.jpg">
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
            گوشی موبایل لنوو مدل VIBE Shot دو سیم‌ کارت ظرفیت 32 گیگابایت
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
                <li>
                    <span class="circle" style="background-color: black;"></span>
                    مشکی
                </li>
                <li>
                    <span class="circle" style="background-color: white;"></span>
                    سفید
                </li>
            </ul>
            <h4>
                انتخاب گارانتی
            </h4>
            <div id="selectlist">
                    <span class="zemanattitle">
                    18 ماه گارانتی هماتلکام
                    </span>
                <ul>
                    <li>گارانتی شماره ۱</li>
                    <li>گارانتی شماره 2</li>
                </ul>
            </div>
            <div id="price">
                    <span>
                        قیمت :
                    </span>
                <p>
                    1،450،000
                </p>
                <span>
                        تومان
                    </span>
                <span class="discount">
                        <span class="discount_right">
                            تخفیف
                        </span>
                        <span class="discount_left">
                        250 هزار تومان
                        </span>
                    </span>
            </div>
            <div id="priceforyou">
                <span class="priceforyou_img"></span>
                <span>
                        قیمت برای شما :
                    </span>
                <p>
                    1،200،000
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