

    <link href="Css/ShowcartStyleSheet3.css" rel="stylesheet">


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
            <li>
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

    <div class="head">
        <h4>
            سبد خرید شما در دیجی کالا
        </h4>
        <p class="btn_green">
            خرید خود را نهایی کنید
        </p>
    </div>

    <div class="content">
        <table cellspacing="0">
            <tr>
                <td>شرح محصول</td>
                <td>تعداد</td>
                <td>قیمت واحد</td>
                <td style="border-left:none ">قیمت کل</td>
                <td></td>
            </tr>

            <tr>
                <td>
                    <div class="right">
                        <img src="image/schwan-903-steering-wheel-lock.jpg">
                    </div>
                    <div class="left">
                        <p>
                            قفل فرمان خودرو شوان مدل 903
                        </p>
                        <p>قرمز</p>
                        <p>گارانتی یکساله</p>
                    </div>
                </td>
                <td>
                    <div class="selectlist">
                        <span class="zemanattitle">
                    1
                        </span>
                        <ul>
                            <li>1</li>
                            <li>2</li>
                            <li>3</li>
                        </ul>
                    </div>
                </td>
                <td>
                    <span class="price">100,000</span>
                    <span class="tuman"> تومان</span>
                </td>
                <td>
                    <span class="price">100,000</span>
                    <span class="tuman"> تومان</span>
                </td>
                <td class="remove_td">
                    <i class="remove_icon"></i>
                </td>
            </tr>
        </table>
    </div>

    <div class="final_price">
        <div class="total_price">
            <p class="total_price1"> جمع کل خرید شما :</p>
            <p class=total_price2> 123,000</p>
            <p class=total_price3> تومان </p>
        </div>
        <div class="send_price">
            <p class="send_price1"> هزینه ارسال , بسته بندی , بیمه :</p>
            <p class=send_price2> 123,000</p>
            <p class=send_price3> تومان </p>
        </div>
        <div class="discount_price">
            <p class="discount_price1"> جمع کل تخفیف :</p>
            <p class=discount_price2> 23,000</p>
            <p class=discount_price3> تومان </p>
        </div>
        <div class="pardakht_price">
            <p class="total_price1"> مبلغ قابل پرداخت :</p>
            <p class=total_price2> 123,000</p>
            <p class=total_price3> تومان </p>
        </div>
    </div>

    <div class="head">
        <h4>
            اطلاعات ارسال سفارش
        </h4>
    </div>

    <table class="review_send_info" cellspacing="0">

        <tr>
            <td><i style="background-position: -810px -205px;"></i></td>
            <td>
                این سفارش به کلیک سایت به آدرس اقدسیه، بلوار اوشان، خیابان پیروز شفیعی، خیابان رضوان، روبروی طاق کسری، پلاک: ۳۸ تحویل
                میگردد.
            </td>
        </tr>

        <tr>
            <td><i style="background-position: -806px -250px;"></i></td>
            <td>
                این سفارش از طریق پست پیشتاز (هزینه ارسال طبق تعرفه پست) با هزینه 4,500 تومان به شما تحویل داده خواهد
                شد.
            </td>
        </tr>

    </table>

    <div class="send">
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

