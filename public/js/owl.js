$(document).ready(function(){
  $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    samrtSpeed: 4000,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
});

$('#biography').click(function(){
  $('.main-content').hide();
});

$('#upload').click(function(){
  $('main-content').hide();
});

$('#directory').click(function(){
  $('.main-content').hide();
});
