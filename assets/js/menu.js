var burger = document.querySelector('#burger');
var menu = document.querySelector('.fullscreen-menu');
var logo = document.querySelector('.top-bar-logo');
burger.onclick = function() {
	burger.classList.toggle('active');
	menu.classList.toggle('active');
	logo.classList.toggle('menu-active');
};