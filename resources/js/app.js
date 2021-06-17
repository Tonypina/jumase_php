require('./bootstrap');


const menuBtn = document.querySelector('.menu-btn');
const aside = document.querySelector('aside');
const header = document.querySelector('header');

menuBtn.addEventListener('click', () => {
	aside.classList.toggle('open');
	menuBtn.classList.toggle('open');
	header.classList.toggle('open');
});

window.onscroll = function() {myFunction()};
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
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