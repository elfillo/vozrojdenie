var scrollElem = document.getElementById("upstairs");
$(document).ready(function () {
    $(window).scroll(function () {
        0 < $(this).scrollTop() ? scrollElem.style.opacity = "1" : scrollElem.style.opacity = "0"
    });
});
    $("#upstairs").click(function () {
        $("html").animate({
            scrollTop: 0
        }, 1500);
        $("body").animate({
            scrollTop: 0
    }, 1500);
});
$(document).ready(function (){
  console.log('ready?');
    var windowsize = $(window).width();
    console.log(windowsize);
    setTimeout(function () {
        $('.swiper-slide').css({'width': windowsize, 'transform': 'translate(25%)'});
    }, 2000);
});