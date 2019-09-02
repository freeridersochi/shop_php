$(function(){
    var slider = $('#slider');
    var navLink = $('#sliderPrev');
    var sliderWrap = $('#slider ul');
    var sliderImg = $('#slider ul li');
    var length = sliderImg.length;
    var width = sliderImg.width();
    var thumbWidth = 58;

    sliderWrap.width(width*(length+2));

    //Set up
    slider.after('<div id="' + 'pager' + '"></div>');

    //Create Main image 
    var dataVal = 1;
    sliderImg.each(
        function(){
            $(this).attr('data-img' , dataVal);
            $(this).children().attr({'id': 'img_'+ dataVal});
            $('#pager').append('<a data-img="' + dataVal + '"><img src=' + $('img', this).attr('src') + ' width=' + thumbWidth + '></a>');
        dataVal++;
    });

    //Copy 2 images and put them in the front and at the end
    $('#slider ul li:first-child').clone().appendTo('#slider ul');
    $('#slider ul li:nth-child(' + length + ')').clone().prependTo('#slider ul');

    //Create btn 
    $('#pager').prepend('<img src="../img/icons/product_slider_arrow.png" id="sliderPrev">');
    $('#pager').append('<img src="../img/icons/product_slider_arrow.png" id="sliderNext">');
    $('.left_bar').prepend('<a class="zoom_on"></a>');
    $('.left_bar').prepend('<a class="zoom_off"></a>');
    var prevBtn = $('#sliderPrev');
    var nextBtn = $('#sliderNext');

    //Zoom
    function zoomOn(){
            var img = $('li.active img');
            img.addClass("zoom");
            img.draggable();
            $('.zoom_on').css("display","none");
            $('.zoom_off').css("display","block");		
        };
    $('.zoom_on').on('click',zoomOn);
    function zoomOff(){
        var img = $('li.active img');
        if(img.hasClass("zoom")){
            img.draggable( "destroy" );
            img.removeAttr("style");
            img.removeClass("zoom");
            $('.zoom_off').css("display","none");
            $('.zoom_on').css("display","block");
            }
        };	
    $('.zoom_off').on('click',zoomOff);

    //Set 
    sliderWrap.css('margin-left', - width);
    $('#slider ul li:nth-child(2)').addClass('active');

    var imgPos = pagerPos = $('#slider ul li.active').attr('data-img');
    $('#pager a:nth-child(' +pagerPos+ ')').addClass('active');

    //Click on Pager  
    $('#pager a').on('click', function() {
        pagerPos = $(this).attr('data-img');
        $('#pager a.active').removeClass('active');
        $(this).addClass('active');

        if (pagerPos > imgPos) {
            var movePx = width * (pagerPos - imgPos);
            moveNext(movePx);
        }

        if (pagerPos < imgPos) {
            var movePx = width * (imgPos - pagerPos);
            movePrev(movePx);
        }
        return false;
    });

    //Click on Buttons
    nextBtn.on('click', function(){
        moveNext(width);
        return false;
    });

    prevBtn.on('click', function(){
        movePrev(width);
        return false;
    });

    //Function for pager active motion
    function pagerActive() {
        pagerPos = imgPos;
        $('#pager a.active').removeClass('active');
        $('#pager a[data-img="' + pagerPos + '"]').addClass('active');
        $('li.active').removeClass('active');
        $('li[data-img="' + pagerPos + '"]').addClass('active');
    }

    //Function for moveNext Button
    function moveNext(moveWidth) {
        zoomOff();
        sliderWrap.animate({
            'margin-left': '-=' + moveWidth
            }, 470, function() {
                if (imgPos==length) {
                    imgPos=1;
                    sliderWrap.css('margin-left', - width);
                }
                else if (pagerPos > imgPos) {
                    imgPos = pagerPos;
                } 
                else {
                    imgPos++;
                }
                pagerActive();
        });
    }

    //Function for movePrev Button
    function movePrev(moveWidth) {
        zoomOff();
        sliderWrap.animate({
            'margin-left': '+=' + moveWidth
            }, 470, function() {
                if (imgPos==1) {
                    imgPos=length;
                    sliderWrap.css('margin-left', -(width*length));
                }
                else if (pagerPos < imgPos) {
                    imgPos = pagerPos;
                } 
                else {
                    imgPos--;
                }
                pagerActive();
        });
    }
    });
