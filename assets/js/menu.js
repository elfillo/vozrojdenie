$(function(){
    $(window).scroll(function() {
        if($(this).scrollTop() >= 100) {
            $('.top-bar').addClass('stickytop');
        }
        else{
            $('.top-bar').removeClass('stickytop');
        }
    });
});

var burger = document.querySelector('#checkbox3');
var menu = document.querySelector('.fullscreen-menu');
var logo = document.querySelector('.top-bar-logo');
var head = document.querySelector('.top-bar-social');
burger.onclick = function() {
	burger.classList.toggle('active');
	menu.classList.toggle('active');
	logo.classList.toggle('menu-active');
	head.classList.toggle('menu-hide');
};