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
                    $resualt = $data[1];
                    foreach($resualt as $row)
                    {
                ?>
                <li>
                    <a>
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