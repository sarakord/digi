<script src="public/js/scroll/jquery.mCustomScrollbar.js"></script>
<link href="public/js/scroll/jquery.mCustomScrollbar.css" rel="stylesheet">
<script src="public/3d/jsc3d.js"></script>
<script src="public/3d/jsc3d.touch.js"></script>
<script src="public/3d/jsc3d.webgl.js"></script>
<div id="product_gallery">
    <h4>
        گوشی لنوو مدل VIBE Shot
        <span class="close"></span>
    </h4>
    <div class="right">
        <canvas id="cv"></canvas>
        <img class="mainimage" src="">
    </div>
    <div class="left">
        <ul>
            <li data-main-image="">
                <img src="public/image/products/gallery/thumbnail/pre%20gallery2.jpg">
                <span class="icon3d"></span>
            </li>
            <li data-main-image="public/image/products/gallery/main/gallery2.jpg">
                <img src="public/image/products/gallery/thumbnail/pre%20gallery2.jpg">
            </li>
            <li data-main-image="public/image/products/gallery/main/gallery1.jpg">
                <img src="public/image/products/gallery/thumbnail/pre%20gallery1.jpg">
            </li>
            <li data-main-image="public/image/products/gallery/main/gallery3.jpg">
                <img src="public/image/products/gallery/thumbnail/pre%20gallery3.jpg">
            </li>
            <li data-main-image="public/image/products/gallery/main/gallery3.jpg">
                <img src="public/image/products/gallery/thumbnail/pre%20gallery3.jpg">
            </li>
            <li data-main-image="public/image/products/gallery/main/gallery3.jpg">
                <img src="public/image/products/gallery/thumbnail/pre%20gallery3.jpg">
            </li>
        </ul>
    </div>
</div>
<div id="dark"></div>
<script>
    //3D with library & java Script
    var canvasTag = document.getElementById('cv');
    var viewer = new JSC3D.Viewer(canvasTag, {
        SceneUrl: 'public/3d/bmw/bmw.obj',
        InitRotationX: -100,
        InitRotationY: -100,
        InitRotationZ: 0,
        RenderMode: 'texturesmooth'
    });
    viewer.init();
    viewer.update();

    //slide show 2

    var productGallery = $('#product_gallery');

    function showGallery(imageUrl, index) {

        productGalleryThumbnails.removeClass('active'); //remove li opacity
        productGalleryThumbnails.eq(index).addClass('active'); //remove li opacity
        if (imageUrl.length > 0) {
            productGallery.find('.mainimage').attr('src', imageUrl);
            $('#cv').fadeOut(0);
            $('.mainimage').fadeIn(100);
        } else {
            $('.mainimage').fadeOut(0);
            $('#cv').fadeIn(100);
        }
    }

    var productGalleryThumbnails = productGallery.find('.left ul li');
    productGalleryThumbnails.click(function () {

        var index = $(this).index();
        var mainImageUrl = $(this).attr('data-main-image');
        showGallery(mainImageUrl, index);

    });

    //close gallery
    productGallery.find('.close').click(function () {

        productGallery.fadeOut(200);
        $('#dark').fadeOut(200);

    });

    //باز شدن پنجره گالری
    $('.gallery ul li').click(function () {

        $('#dark').fadeIn(200);
        productGallery.fadeIn(200);
        var index = $(this).index();
        index++;
        if (index < 0) {
            index = 0;
        }
        var mainImageUrl = $(this).attr('data-main-image');
        showGallery(mainImageUrl, index);

    });

    //scroll
    $("#product_gallery .left").mCustomScrollbar({
        setWidth: false,
        setHeight: false,
        setTop: 0,
        setLeft: 0,
        axis: "y",
        scrollbarPosition: "inside",
        scrollInertia: 950,
        autoDraggerLength: true,
        autoHideScrollbar: false,
        autoExpandScrollbar: false,
        alwaysShowScrollbar: 0,
        snapAmount: null,
        snapOffset: 0,
        mouseWheel: {
            enable: true,
            scrollAmount: "auto",
            axis: "y",
            preventDefault: false,
            deltaFactor: "auto",
            normalizeDelta: false,
            invert: false,
            disableOver: ["select", "option", "keygen", "datalist", "textarea"]
        },
        scrollButtons: {
            enable: true,
            scrollType: "stepless",
            scrollAmount: "auto"
        },
        keyboard: {
            enable: true,
            scrollType: "stepless",
            scrollAmount: "auto"
        },
        contentTouchScroll: 25,
        advanced: {
            autoExpandHorizontalScroll: false,
            autoScrollOnFocus: "input,textarea,select,button,datalist,keygen,a[tabindex],area,object,[contenteditable='true']",
            updateOnContentResize: true,
            updateOnImageLoad: true,
            updateOnSelectorChange: false,
            releaseDraggableSelectors: false
        },
        theme: "3d-dark",

        callbacks: {
            onInit: false,
            onScrollStart: false,
            onScroll: false,
            onTotalScroll: false,
            onTotalScrollBack: false,
            whileScrolling: false,
            onTotalScrollOffset: 0,
            onTotalScrollBackOffset: 0,
            alwaysTriggerOffsets: true,
            onOverflowY: false,
            onOverflowX: false,
            onOverflowYNone: false,
            onOverflowXNone: false
        },
        live: false,
        liveSelector: null

    });
</script>