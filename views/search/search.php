<div id="search">
    <input type="text" placeholder="جستجو">
    <img src="public/image/search2.png">
    <span class="exist">
        <span class="exist_back"></span>
        <span class="exist_yesno"></span>
    </span>
    <p>
        فقط نمایش کالاهای موجود
    </p>
    <span class="display_type">
        <span class="type2"></span>
        <span class="type1"></span>
        <p>
            نوع نمایش
        </p>
    </span>
</div>

<script>

    $('.exist').click(function () {
        $(this).toggleClass('active');
        if ($(this).hasClass('active')){
            $('.exist_yesno', this).animate({'right': '-1px'}, 200);
        }else
            $('.exist_yesno', this).animate({'right': '9px'}, 200);
    });

    $('.type1').click(function () {
        $('#products').addClass('display1');
        $(this).addClass('active');
        $('.type2').removeClass('active');
    });
    $('.type2').click(function () {
        $('#products').removeClass('display1');
        $(this).addClass('active');
        $('.type1').removeClass('active');
    });

</script>