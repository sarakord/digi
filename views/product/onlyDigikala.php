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
                <li>
                    <a>
                        <img src="public/image/sliderscroll_1.jpg">
                        <img src="public/image/exclusive-blue.png">
                        <p class="yekan fontsm">
                            لپ تاپ لنوو
                        </p>
                        <p class="yekan price">
                            2,270,000
                        </p>
                    </a>
                </li>
                <li>
                    <a>
                        <img src="public/image/scrollslider_2.jpg">
                        <img src="public/image/exclusive-blue.png">
                        <p class="yekan fontsm">
                            گوشی هوآوی
                        </p>
                        <p class="yekan price">
                            980,000
                        </p>
                    </a>
                </li>
                <li>
                    <a>
                        <img src="public/image/scrollslider_3.jpg">
                        <img src="public/image/exclusive-blue.png">
                        <p class="yekan fontsm">
                            لپ تاپ acer
                        </p>
                        <p class="yekan price">
                            2,123,000
                        </p>
                    </a>
                </li>
                <li>
                    <a>
                        <img src="public/image/scrollslider_4.jpg">
                        <img src="public/image/exclusive-blue.png">
                        <p class="yekan fontsm">
                            لپ تاپ sony
                        </p>
                        <p class="yekan price">
                            3,599,000
                        </p>
                    </a>
                </li>
                <li>
                    <a>
                        <img src="public/image/scrollslider_5.jpg">
                        <img src="public/image/exclusive-blue.png">
                        <p class="yekan fontsm">
                            مودم همراه 3G
                        </p>
                        <p class="yekan price">
                            253,000
                        </p>
                    </a>
                </li>
                <li>
                    <a>
                        <img src="public/image/scrollslider_2.jpg">
                        <img src="public/image/exclusive-blue.png">
                        <p class="yekan fontsm">
                            گوشی هوآوی
                        </p>
                        <p class="yekan price">
                            980,000
                        </p>
                    </a>
                </li>
            </ul>
        </div>
        <div class="sliderscroll_next">
            <span class="next" onclick="sliderscroll('left' , this);"></span>
        </div>
    </div>
</div>
<script>
    /*/!*sliderscroll 1
    left---> next
    right---> prev*/
    function sliderscroll(direction, tag) {

    var span_tag = $(tag);
    var sliderscrollTag = span_tag.parents(".sliderscroll");
    var sliderscrollUl = sliderscrollTag.find('.sliderscroll_main ul');
    var sliderscrollItems = sliderscrollUl.find('li');
    var sliderscrollItemsNumber = sliderscrollItems.length;
    var sliderscrollNumbers = Math.ceil(sliderscrollItemsNumber / 5);
    var maxNegativeMargin = -(sliderscrollNumbers - 1) * 1085;

    sliderscrollUl.css('width', sliderscrollItemsNumber * 217);

    var marginRightNew;
    var marinRightOld = sliderscrollUl.css('margin-right');
    marinRightOld = parseFloat(marinRightOld);


    if (direction == 'left') {
    marginRightNew = marinRightOld - 1085;

    }
    if (direction == 'right') {
    marginRightNew = marinRightOld + 1085;
    }

    if (marginRightNew < maxNegativeMargin) {
    marginRightNew = 0;
    }

    if (marginRightNew > 0) {
    marginRightNew = maxNegativeMargin;
    }

    sliderscrollUl.animate({'marginRight': marginRightNew}, 1000);
    }

    $('.next').click(function () {
    sliderscroll('left');
    });

    $('.prev').click(function () {
    sliderscroll('right');
    });

</script>