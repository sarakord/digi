<ul id="tab">
    <li class="naghd active">
        نقد و بررسی تخصصی
    </li>
    <li class="fanni">
        مشخصات فنی
    </li>
    <li class="nazar">
        نظرات کاربران
    </li>
    <li class="soal">
        پرسش و پاسخ
    </li>
</ul>
<div id="tabchilds">
  <?php
        require ('tab1.php');
        require ('tab2.php');
        require ('tab3.php');
        require ('tab4.php');
  ?>

</div>
<script>
    //itemcontainer
    $('#tabchilds .itemcontainer .item h4').click(function () {

        var item = $(this).parents('.item');
        $(this).toggleClass('active');
        $('.description', item).slideToggle(200);
    });

    // tab
    $('#tab li').click(function () {

        $('#tab li').removeClass('active');
        $(this).addClass('active');
        $('#tabchilds section').fadeOut(0);
        var index = $(this).index();
        $('#tabchilds section').eq(index).fadeIn(200);
    });

</script>