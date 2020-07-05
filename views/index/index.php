<div id="main">
    <div id="banner_top">
        <img src="public/image/banner.jpg">
    </div>
    <?php
    require('sidebar_right.php');
    ?>
    <div id="content">
        <?php
        require('slider1.php');
        require('services_feature.php');
        require('slider2.php');
        require('onlyDigikala.php');
        require('direct_access.php');
        require('most_viewed.php');
        require('last_products.php');
        require('most_saled.php');
        ?>
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
        var sliderscrollNumbers = Math.ceil(sliderscrollItemsNumber / 4);
        var maxNegativeMargin = -(sliderscrollNumbers - 1) * 780;

        sliderscrollUl.css('width', sliderscrollItemsNumber * 195);

        var marginRightNew;
        var marinRightOld = sliderscrollUl.css('margin-right');
        marinRightOld = parseFloat(marinRightOld);

        if (direction == 'left') {
            marginRightNew = marinRightOld - 780;
        }
        if (direction == 'right') {
            marginRightNew = marinRightOld + 780;
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

