<div id="filters_selected"></div>

<ul class="filter_top">
    <li>
         <span class="title">
                تعداد سیم کارت
         </span>
        <img src="public/image/sideArrow.gif">

        <div class="options">
            <ul>
                <li data-id="0">
                    <span class="square"></span>
                    نمایش همه
                </li>
                <div class="horizental_row"></div>
                <li data-id="1">
                    <span class="square"></span>
                    یک
                </li>
                <li data-id="2">
                    <span class="square"></span>
                    دو
                </li>
                <li data-id="3">
                    <span class="square"></span>
                    سه
                </li>
            </ul>
        </div>
    </li>
    <li>
         <span class="title">
                حافظه داخلی
         </span>
         <img src="public/image/sideArrow.gif">
        <div class="options">
            <ul>
                <li>
                    <span class="square"></span>
                    نمایش همه
                </li>
                <div class="horizental_row"></div>
                <li data-id="4">
                    <span class="square"></span>
                    8 گیگابایت
                </li>
                <li data-id="5">
                    <span class="square"></span>
                    ۱۶ گیگابایت
                </li>
                <li data-id="6">
                    <span class="square"></span>
                    32 گیگابایت
                </li>
                <li data-id="7">
                    <span class="square"></span>
                    64 گیگابایت
                </li>
                <li data-id="8">
                    <span class="square"></span>
                    128 گیگابایت
                </li>
                <li data-id="9">
                    <span class="square"></span>
                    256 گیگابایت
                </li>
                <li data-id="10">
                    <span class="square"></span>
                    512 گیگابایت
                </li>
                <li data-id="11">
                    <span class="square"></span>
                    1 ترابایت
                </li>
            </ul>
        </div>
    </li>
    <li>
        <span class="title">
                شبکه های ارتباطی
        </span>
        <img src="public/image/sideArrow.gif">
    </li>
    <li>
        <span class="title">
                رزولوشن عکس
        </span>
        <img src="public/image/sideArrow.gif">
    </li>
    <li>
        <span class="title">
                بازه ی سایز صفحه نمایش
        </span>
        <img src="public/image/sideArrow.gif">
    </li>
</ul>

<div class="horizental_row"></div>

<script>

    var filters = $('.filter_top > li ');

    filters.hover(function () {
        $('.options', this).slideDown(200);

    }, function () {
        $('.options', this).slideUp(200);
    });

    $('.check_input').click(function () {

        if ($(this).is(':checked')) {

            $(this).parents('li').find('.check_label').addClass('checked');
        }
        else {
            $(this).parents('li').find('.check_label').removeClass('checked');
        }
    })

    var Items = $('.filter_top .options li');

    Items.hover(function () {

            $('.square', this).addClass('square_hover');
        }
        , function () {

            $('.square', this).removeClass('square_hover');
        });

    Items.click(function () {
        var title = $(this).parents('li').find('.title').text();
        var value = $(this).text();
        var id = $(this).attr('data-id');
        var filter_selected = $('#filters_selected');
        var filter_selected_span = filter_selected.find('span[data-id=' + id + ']');
        var len = filter_selected_span.length;
        if (len > 0) {
            filter_selected_span.remove();
        }
        else {
            var span = '<span data-id="' + id + '" class="filters_selected_span">' + title + ':' + value + '<i class="remove_filter" onclick="removeSelected(this)"></i></span>';
            filter_selected.append(span);
        }
        $('.square', this).toggleClass('square_selected');
    });

    function removeSelected(tag) {
        var span_tag = $(tag).parents('span');
        span_tag.remove();
        var id = span_tag.attr('data-id');
        $('.options li[data-id=' + id + ']').find('.square').removeClass('square_selected');
    }

</script>