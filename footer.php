
<footer>
    <div id="footer_top">
        <div class="main">

            <span class="yekan fontlg">
 7 روز هفته ، 24 ساعته پاسخگوی شما هستیم.
            </span>

            <ul>
                <li>
                    <a class="yekan">
                        021-91989120
                        <i  style= "background-position: -397px -420px;"></i>
                    </a>
                </li>

                <li>
                    <a class="yekan">
                        سوالات متداول
                        <i style="background-position: -358px -420px;"></i>
                    </a>
                </li>


                <li style="margin-left: 10px;">
                    <a class="yekan">
support@clicksite.ir
                        <i style="background-position: -321px -420px;"></i>
                    </a>
                </li>

            </ul>
        </div>
    </div>
    <div id="footer_bottom">
       <div class="main">
        <div class="right">
            <ul>
                <li class="title">
                    <a>
راهنمای خرید از دیجی کالا
                    </a>
                </li>

                <li>
                    <a>
ثبت سفارش
                    </a>
                </li>

                <li>
                    <a>
رویه های ارسال سفارش
                    </a>
                </li>

                <li>
                    <a>
شیوه های پرداخت
                    </a>
                </li>

                <li>
                    <a>
معرفی دیجی بن
                    </a>
                </li>

            </ul>
        </div>
        <div class="center">
            <ul >
                <li class="title">
                    <a>
خدمات مشتریان
                    </a>
                </li>

                <li>
                    <a>
پاسخ به پرسش های متداول
                    </a>
                </li>

                <li>
                    <a>
رویه های بازگرداندن کالا
                    </a>
                </li>

                <li>
                    <a>
شرایط استفاده
                    </a>
                </li>

                <li>
                    <a>
حریم خصوصی
                    </a>
                </li>

            </ul>
        </div>
        <div class="left yekan">
            <p class="title">
اولین نفری که مطلع میشود ، باشید !
            </p>
            <div class="email">
<input type="text" placeholder="لطفا ایمیل خود را وارد کنید">
            <span class="btn">
تایید ایمیل
            </span>
            </div>
            
            <div class="social">
                <a>
                    <img src="public/image/android_app_bg.png">
                    </a>
                <a>
                    <img src="public/image/ios_app_bg.png">
                </a>
                <span class="social_button" style="background-position: -577px -621px;"></span>
                <span class="social_button" style="background-position: -453px -621px;"></span>
                <span class="social_button" style="background-position: -494px -621px;"></span>
                <span class="social_button" style="background-position: -411px -621px;"></span>
            </div>
            
        </div>
    </div>
        </div>
</footer>

<script>

    /*menu*/

    var timer = {};

    $('#menu_top li').hover(function () {
                var tag = $(this);
                var timerAttr = tag.attr('data-time');
                clearTimeout(timer[timerAttr]);
                timer[timerAttr] = setTimeout(function () {
                    $('> ul', tag).fadeIn(0);
                    tag.addClass('active-menu');
                    $('> .submenu3', tag).fadeIn(0);

                }, 400);


            }
            , function () {
                var tag = $(this);
                var timerAttr = tag.attr('data-time');
                clearTimeout(timer[timerAttr]);
                timer[timerAttr] = setTimeout(function () {
                    $('> ul', tag).fadeOut(0);
                    tag.removeClass('active-menu');
                    $('> .submenu3', tag).fadeOut(0);
                }, 500);
            });


</script>

</body>
</html>