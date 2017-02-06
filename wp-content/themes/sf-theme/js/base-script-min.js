/*jshint devel:true */

var $ = jQuery.noConflict();

$(document).ready(function(){

var menuToggle = $('header i.mobile-nav-toggle');
var mobileMenu = $('.mobile-menu-container');
  var switchMenu = function(){
    var status = menuToggle.attr('status');
    if(status === "closed"){
      menuToggle.removeClass('ion-navicon').addClass('ion-android-close');
      menuToggle.attr('status','open');
      mobileMenu.toggleClass('open-mobile-nav');

    } else {
      menuToggle.removeClass('ion-android-close').addClass('ion-navicon');
      menuToggle.attr('status','closed');
      mobileMenu.toggleClass('open-mobile-nav');
    }
  };

  menuToggle.click(switchMenu);
  

  




});

