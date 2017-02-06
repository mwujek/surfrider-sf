/*jshint devel:true */

var $ = jQuery.noConflict();

$(document).ready(function(){

$('.slider').flickity({
  cellSelector: '.glider',
  cellAlign: 'left',
  contain: true,
  prevNextButtons: false,
  autoPlay: 4000,
  wrapAround: true,

});


});