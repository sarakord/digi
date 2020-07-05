
    <link href="Css/ShowcartStyleSheet4.css" rel="stylesheet">


<div id="main">

    <div class="order_steps">

        <div class="dashed">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>

        <ul>
            <li class="active">
                <span class="circle"></span>
                <span class="line"></span>
                <span class="title">ورود به دیجی کالا</span>
            </li>
            <li class="active">
                <span class="circle"></span>
                <span class="line"></span>
                <span class="title">اطلاعات ارسال سفارش</span>
            </li>
            <li class="active">
                <span class="circle"></span>
                <span class="line"></span>
                <span class="title">بازبینی سفارش</span>
            </li>
            <li>
                <span class="circle"></span>
                <span class="title">اطلاعات پرداخت</span>
            </li>
        </ul>

        <div class="dashed">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

    <div class="discount">
        <h4>
            کد تخفیف
        </h4>
    </div>

    <div class="content">
        <table class="discount_code" cellspacing="0">
            <tr>
                <td>
                    <p style="font-size: 11pt;color: black;">کد تخفیف دیجی کالا دارم</p>
                    <p style="font-size: 9pt; color: #7b7878;">
                        اگر مایل هستید از کد تخفیف دیجی کالا استفاد ه کنید کافیست کد آن را وراد کرده
                        و با انتخاب دکمه ثبت مبلغ آن از هزینه قابل پرداخت شما حذف میشود.
                    </p>
                </td>
                <td>
                    <input type="text">
                </td>
                <td>
                    <span class="btn-blue">ثبت کد تخفیف</span>
                </td>
            </tr>

        </table>
    </div>

    <div class="gift">
        <h4>
            کارت هدیه
        </h4>
    </div>

    <div class="content">

        <table class="gift_code" cellspacing="0">
            <tr>
                <td>
                    <p style="font-size: 11pt;color: black;">کارت هدیه دیجی کالا دارم</p>
                    <p style="font-size: 9pt; color: #7b7878;">
                        اگر مایل هستید از کارت هدیه دیجی کالا استفاد ه کنید کافیست کد آن را وراد کرده
                        و با انتخاب دکمه ثبت مبلغ آن از هزینه قابل پرداخت شما حذف میشود.
                    </p>
                </td>
                <td>
                    <input type="text">
                </td>
                <td>
                    <span class="btn-blue">ثبت کارت هدیه</span>
                </td>
            </tr>

        </table>

        <table class="final_price" cellspacing="0">
            <tr>
                <td style="width: 1030px;padding-right: 5px;">مبلغ کل قابل پرداخت</td>
                <td>
                    <p>100,000</p>
                    <p style="margin-right: 15px;">تومان</p>
                </td>
            </tr>
        </table>


    </div>

    <div class="payment">
        <h4>
            شیوه پرداخت
        </h4>
    </div>

    <div class="content">
        <table cellspacing="0" class=" pardakht_type">
            <tr>
                <td style="border-top:1px solid #dcdbdb;width: 60px;position: relative; " rowspan="3">
                    <span style="cursor: pointer;" class=" circle active"></span>
                </td>
                <td style="border-top:1px solid #dcdbdb; " colspan="3">
                    انتخاب شیوه پرداخت
                    <br>
                    <div style="float: right;margin-right: 10px;margin-left: 30px;">
                        <span style="cursor: pointer;float: right;margin-top: 2px;" class="circle"></span>
                        <span style="float: right;margin-right: 8px;" >درگاه ملت</span>
                    </div>
                    <div style="float: right;margin-right: 10px;margin-left: 30px;">
                        <span style="cursor: pointer;float: right;margin-top: 2px;" class="circle"></span>
                        <span style="float: right;margin-right: 8px;" >درگاه پارسیان</span>
                    </div>
                </td>
            </tr>
        </table>

        <table cellspacing="0" class=" pardakht_type">
            <tr>
                <td style="border-top:1px solid #dcdbdb;width: 60px;position: relative; " rowspan="3">
                    <span style="cursor: pointer;" class="circle"></span>
                </td>
                <td style="border-top:1px solid #dcdbdb; " colspan="3">
                    <p>کارت به کارت</p>
                    <p>
                        شما میتوانید وجه سفارش خود را به به صورت انتقال وجه کارت به کارت پرداخت نموده و حداکثر تا
                        24 ساعت پس از سفارش اطلاعات آن را ثبت نمایید.
                    </p>
                </td>
            </tr>
        </table>

        <table cellspacing="0" class=" pardakht_type">
            <tr>
                <td style="border-top:1px solid #dcdbdb;width: 60px;position: relative; " rowspan="3">
                    <span style="cursor: pointer;" class="circle"></span>
                </td>
                <td style="border-top:1px solid #dcdbdb; " colspan="3">
                    <p>واریز به حساب</p>
                    <p>
                        شما میتوانید وجه سفارش خود را به صورت انتقال وجه کارت به کارت پرداخت نمودهوحداکثر تا 24 ساعت
                        پس از سفارش اطلاعات آن را ثبت نمایید.
                    </p>
                </td>
            </tr>
        </table>

    </div>


    <div class="back_send">
        <span class="btn_gray">بازگشت</span>
        <span class="btn_green">ادامه خرید</span>
    </div>

</div>





<script>

    //selectlist

    $('.selectlist').click(function () {
        var ulTag = $('ul', this);
        ulTag.slideToggle(200);
    });

    $('.selectlist ul li').click(function () {
        var txt = $(this).text();
        $('.selectlist .zemanattitle').text(txt);
    });



</script>
