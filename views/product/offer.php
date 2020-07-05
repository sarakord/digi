<div id="offer">
        <span id="discount">
            <span class="right">
                <p class="number">46</p>
                <p class="tuman">
                هزار تومان
                </p>
            </span>
            <span class="left">
                <p>
                تخفیف
                </p>
            </span>
        </span>
    <div class="flipTimer">
        <div class="hours"></div>
        <div class="minutes"></div>
        <div class="seconds"></div>
    </div>
</div>

<script>
    /*flip Timer*/
    $('.flipTimer').flipTimer({
        direction: 'down',
        date: 'Des 08 , 2019 , 17:01:10',
        callback: function () {
            $('.slider2_content_right').css('opacity', .4);
            $('.slider2_content_left').css('opacity', .4);
            $('.slider2_finished').fadeIn(200);
        }
    });
</script>