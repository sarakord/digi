
<link href="public/Css/PanelStyleSheet.css" rel="stylesheet">

<div id="main">
    <?php
        require ('user_profile.php');
        require ('report.php');
        require ('tab.php');

    ?>

    <div id="tabchilds">
        <?php
            require ('myMessage_tab1.php');
            require ('myOrders_tab2.php');
            require ('favorits_tab3.php');
            require ('critique_tab4.php');
            require ('viewpoint_tab5.php');
            require ('digiBon_tab6.php');
        ?>
    </div>
</div>

<script>
    //ShowDetails
    function showDetailsTr(tag) {

        var imgtag = $(tag);
        var src = imgtag.attr('src');
        if (src == 'public/image/orderdetailsopen.png') {
            imgtag.attr('src', 'public/image/orderdetailsclose.png');
        } else {
            imgtag.attr('src', 'public/image/orderdetailsopen.png');
        }
        var parentTr = imgtag.parents('tr');
        parentTr.next().fadeToggle(50);
    }

    //tab
    $('#tab li').click(function () {

        $('#tab li').removeClass('active');
        $(this).addClass('active');
        $('#tabchilds section').fadeOut(0);
        var index = $(this).index();
        $('#tabchilds section').eq(index).fadeIn(200);
    });

</script>
