<div id="introduction">
    <p class="yekan introduction_title">
        معرفی اجمالی محصول
    </p>
    <a class="yekan" id="more">
        نمایش بیشتر
    </a>
    <p class="yekan introduction_text">
       <?= $product['introduction']; ?>
    </p>
</div>
<script>
    // tozih mahsoul
    $('#introduction #more').click(function () {
        $('#introduction').toggleClass('active');
    });
</script>