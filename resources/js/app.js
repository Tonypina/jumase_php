require('./bootstrap');


const menuBtn = document.querySelector('.menu-btn');
const menuBtnCls = document.querySelector('.menu-btn-cls');
const aside = document.querySelector('aside');
const header = document.querySelector('header');
const letras = document.querySelector('.letras');


menuBtn.addEventListener('click', () => {

	aside.classList.add('open');
	menuBtn.classList.add('open');
  header.classList.add('open');
  menuBtnCls.classList.add('open');
});

menuBtnCls.addEventListener('click', () => {

  aside.classList.remove('open');
  menuBtnCls.classList.remove('open');
  menuBtn.classList.remove('open');
  header.classList.remove('open');
});

window.onscroll = function() {myFunction()};
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
    letras.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
    letras.classList.remove("sticky");
  }
}

$(document).ready(function(){
    var previousScroll = 0;
    $(window).scroll(function(event){
       var scroll = $(this).scrollTop();
       if (scroll > previousScroll && scroll > 200){
        	$('header').addClass('bgcolor');
       } else if (scroll < 200){
        	$('header').removeClass('bgcolor');
       }
	   previousScroll = scroll;    
	}); 
});

function animImg (x){
  x.classList.add("anim_Img");
}

function normalImg (x){
  x.classList.remove("anim_Img");
}