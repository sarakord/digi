
<link href="public/Css/RegisterStyleSheet.css" rel="stylesheet">

<div id="mainRegister">
    <div class="header">

        <i> </i>

        <h2>
            به دیجی کالا بپیوندید
        </h2>

        <div class="right">
            <div class="right_textbox">
                <label>
                    پست الکترونیک
                </label>
                <input type="text" placeholder="آدرس ایمیل خود را وارد کنید">
            </div>
            <div class="right_textbox">
                <label>
                    رمز عبور
                </label>
                <input type="password" placeholder="کلمه عبور خود را وارد نمایید">
            </div>
            <div class="check_div" >
                <label class="check_label"></label>
                <input class="check_input" type="checkbox">
                حریم خصوصی و شرایط و قوانین استفاده از سرویس های سایت دیجی‌کالا را مطالعه نموده و با کلیه موارد آن
                موافقم.
            </div>
            <div class="check_div">
                <label class="check_label"></label>
                <input class="check_input" type="checkbox">
                خبرنامه دیجی کالا را برای من ارسال کنید.
            </div>
            <span class="btn">
                ثبت نام
            </span>
        </div>

        <div class="left">
            <ul>
                <li><i style="background-position:-980px -330px "></i>
                    سریع تر و ساده تر خرید کنید
                </li>
                <li><i style="background-position:-980px -286px "></i>
                    به سادگی سوابق خرید و فعالیت های خود را مدیریت کنید
                </li>
                <li><i style="background-position:-980px -243px "></i>
                    لیست علاقمندی های خود را بسازید و تغییرات آن را دنبال کنید
                </li>
                <li><i style="background-position:-980px -200px "></i>
                    نقد ، بررسی و نظرات خود را با دیگران به اشتراک بگذارید
                </li>
                <li><i style="background-position:-980px -162px "></i>
                    در جریان فروش های ویژه و قیمت روز محصولات قرار بگیرید
                </li>
            </ul>
        </div>

    </div>
</div>

<script>
    $('.check_input').click(function(){

        if ($(this).is(':checked')) {

            $(this).parents('.check_div').find('.check_label').addClass('checked');
        }
        else {
            $(this).parents('.check_div').find('.check_label').removeClass('checked');

        }
    })
</script>
