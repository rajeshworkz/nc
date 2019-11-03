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
    

$("#videos-modal").on("hidden.bs.modal",function(){
    $("#modal-video-iframe").attr("src","#");
})
    
    
 // $("#modal-promo").modal("show");
    
    $('.nutricook-nav').on('click', 'a', function(e){

        if($(this).attr('id') == "header-search-btn"){
      $(".header-search").fadeToggle();
        }else{
      $(".header-search").fadeOut();
        }
    });
   
    
 
    
});
    
    function playVideo(id){        
var iframe=document.getElementById("modal-video-iframe");
  iframe.src="https://www.youtube.com/embed/"+id;
  $("#videos-modal").modal("show");
}


function closePromo(){
   $("#modal-promo").modal("hide"); 
}

function closeHeaderPromo(){

//    $(".playground-header").css("height","93px");
    $(".playground-header").addClass("playground-header-height");
//    $(".header-promo").css("margin-top","-110px");
    $(".header-promo").hide();
}


//function headerSearch(){
//    
//}


    