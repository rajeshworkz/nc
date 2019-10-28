$(document).ready(function(){
$('.image').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:false
        }
    }
});
    
$('.video').owlCarousel({
    items: 1,
    loop: false,
    video: true,
animateOut: 'fadeOut',
   
        
   
    });
    

    
    
    
});
