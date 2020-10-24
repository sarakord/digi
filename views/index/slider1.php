<div id="slider">
    <span id="prev"></span>
    <span id="next"></span>
    <div id="slider_img">
        <?php foreach($data as $slider) { ?>
            <a href="<?= $slider['link']; ?>" class="item">
                <img src="<?= $slider['image']; ?>">
            </a>
        <?php } ?>
    </div>
    <div id="slider_navigator">
        <ul>
            <li>
                <a class="yekan fontsm">
                    محصولات آب و آفتاب
                </a>
            </li>
            <li>
                <a class="yekan fontsm">
                    سری جدید VAIO
                </a>
            </li>
            <li>
                <a class="yekan fontsm">
                    فروش ویژه هندزفیری
                </a>
            </li>
            <li>
                <a class="yekan fontsm">
                    اسپیکرهای قابل حمل
                </a>
            </li>
            <li>
                <a class="yekan fontsm">
                    اسباب بازی تابستانه
                </a>
            </li>
        </ul>
    </div>
</div>

<script>
    /* main slider*/
    var sliderTag = $('#slider');
    var sliderItems = sliderTag.find('.item');
    var nextSlide = 1;
    var numItems = sliderItems.length;
    var sliderNavigators = sliderTag.find("#slider_navigator ul li");
    var timeout = 5000;

    function slider() {

        if (nextSlide > numItems) {
            nextSlide = 1;
        }
        if (nextSlide < 1) {
            nextSlide = numItems;
        }

        sliderItems.hide();
        sliderItems.eq(nextSlide - 1).fadeIn(100);
        sliderNavigators.removeClass('active');
        sliderNavigators.eq(nextSlide - 1).addClass('active');
        nextSlide++;
    }

    slider();
    var sliderInterval = setInterval(slider, timeout);

    sliderTag.mouseleave(function () {
        clearInterval(sliderInterval);
        sliderInterval = setInterval(slider, timeout);
    });

    function goTonext() {
        slider();
    }

    $('#slider #next').click(function () {
        clearInterval(sliderInterval);
        goTonext();
    });

    function goToprev() {
        nextSlide = nextSlide - 2;
        slider();
    }

    $('#slider #prev').click(function () {
        clearInterval(sliderInterval);
        goToprev();
    });

    function goToslide(index) {
        nextSlide = index;
        slider();
    }

    $('#slider #slider_navigator li').hover(function () {
        clearInterval(sliderInterval);
        var index = $(this).index();
        goToslide(index + 1);
    }, function () {});

</script>