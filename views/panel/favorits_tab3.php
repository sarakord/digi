<section class="favorits" style="display: block">
    <ul>
        <li>
            <a>
                <img class="folder" src="public/image/folder_documents_all.png">
                <span>
                    همه پوشه ها
                </span>
            </a>
        </li>
        <li class="active">
            <a>
                <img class="folder" src="public/image/folder_documents_all.png">
                <span>
                    گوشی
                </span>
                <img class="edit" src="public/image/icon_edit_16.png">
            </a>
        </li>
    </ul>
    <div class="item">
        <div class="right">
            <img src="public/image/product5_1.jpg">
        </div>
        <div class="left">
                    <span>
                        گوشی موبایل لنوو مدل VIBE Shot دو سیم‌ کارت ظرفیت 32 گیگابایت
                        <img class="delete" src="public/image/Delete.gif">
                        <img class="edit" src="public/image/Edit.gif">
                    </span>
            <p class="description">
                توضیحات این محصول توسط کاربر...
            </p>
        </div>
    </div>
</section>

<script>
    //favotits edit img
    $('.favorits ul li a').hover(function () {
        $('.edit', this).fadeIn(100);
    }, function () {
        $('.edit', this).fadeOut(100);
    });
</script>