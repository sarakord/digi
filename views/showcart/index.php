
    <link href="public/Css/ShowcartStyleSheet.css" rel="stylesheet">

<div id="main">
    <div id="head">
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
                        <img src="public/image/schwan-903-steering-wheel-lock.jpg">
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
        <div class="pardakht_price">
            <p class="total_price1"> مبلغ قابل پرداخت :</p>
            <p class=total_price2> 123,000</p>
            <p class=total_price3> تومان </p>
        </div>
    </div>

    <div class="send">
        <span class="btn_green"> انتخاب شیوه ارسال کالا</span>
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

</body>
</html>