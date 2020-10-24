<div id="slider2">
    <div class="flipTimer">
        <div class="hours"></div>
        <div class="minutes"></div>
        <div class="seconds"></div>
    </div>
    <div class="slider2_finished">
        تمام شد !
    </div>
    <div id="slider2_content">

        <?php 
            $slider2=$data[1];
            foreach($slider2 as $slider){
        ?>

            <a class="item">
                <div class="slider2_content_right">
                    <p class="title">
                       تخفیف شگفت‌انگیز
                    </p>
                    <div class="price_info">
                        <div class="price_info_old yekan">
                            <?= $slider['price']; ?>
                        </div>
                        <div class="price_info_new yekan">
                            <?= $slider['total_price'] ?>
                         تومان
                        </div>
                        <p class="yekan fontsm slider2_content_right_p">
                        نوع اتصال : بی سیم
                        </p>
                        <p class="yekan fontsm slider2_content_right_p">
                        قابلیت شوک : دارد
                        </p>
                    </div>
                </div>
                <div class="slider2_content_left">
                    <p>
                        <?= $slider['title']; ?>
                    </p>
                    <img src="public/image/products/<?= $slider['id']; ?>/product_220.jpg">
                </div>
            </a>

        <?php } ?>
        
    </div>
    <div id="slider2_navigator">
        <ul>

        <?php 
            $slider2=$data[1];
            foreach($slider2 as $slider){
        ?>
            <li>
                <a>
                <?= $slider['title']; ?>
                </a>
            </li>
        <?php } ?>

        </ul>
    </div>
</div>

<script>
    /*flip Timer*/
    $('.flipTimer').flipTimer({
        direction: 'down',
        date: '<?= $data[2] ?>',
        callback: function () {
            $('.slider2_content_right').css('opacity', .4);
            $('.slider2_content_left').css('opacity', .4);
            $('.slider2_finished').fadeIn(200);
        }
    });

    /* slider2*/
    var sliderTag2 = $('#slider2');
    var sliderItems2 = sliderTag2.find('.item');
    var nextSlide2 = 1;
    var numItems2 = sliderItems2.length;
    var sliderNavigators2 = sliderTag2.find("#slider2_navigator ul li");
    var timeout2 = 5000;

    function slider2() {

        if (nextSlide2 > numItems2) {
            nextSlide2 = 1;
        }
        if (nextSlide2 < 1) {
            nextSlide2 = numItems2;
        }

        sliderItems2.hide();
        sliderItems2.eq(nextSlide2 - 1).fadeIn(100);
        sliderNavigators2.removeClass('active');
        sliderNavigators2.eq(nextSlide2 - 1).addClass('active');
        nextSlide2++;
    }

    slider2();
    var sliderInterval2 = setInterval(slider2, timeout2);

    sliderTag2.mouseleave(function () {
        clearInterval(sliderInterval2);
        sliderInterval2 = setInterval(slider2, timeout2);
    });

    function goToslide2(index) {
        nextSlide2 = index;
        slider2();
    }

    $('#slider2 #slider2_navigator li').click(function () {
        clearInterval(sliderInterval2);
        var index = $(this).index();
        goToslide2(index + 1);
    })
</script>