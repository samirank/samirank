$(document).ready(function(){
  $('.sidenav').sidenav();
  $('ul.tabs').tabs({
    'swipeable' : true,
    'responsiveThreshold' : 1920
  });
});

// Autohide nav
$(document).ready(function () {

  'use strict';

  var c, currentScrollTop = 0,
  navbar = $('nav');

  $(window).scroll(function () {
    var a = $(window).scrollTop();
    var b = navbar.height();

    currentScrollTop = a;

    if (c < currentScrollTop && a > b + b) {
      navbar.addClass("scrollUp");
    } else if (c > currentScrollTop && !(a <= b)) {
      navbar.removeClass("scrollUp");
    }
    c = currentScrollTop;
  });
  
});

// Age
dob = new Date('1994-01-17');
var today = new Date();
var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
$('#age').html(age);


// Initialize AOS
AOS.init();