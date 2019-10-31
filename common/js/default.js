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
    
    

    
    
});
    
    function playVideo(id){        
var iframe=document.getElementById("modal-video-iframe");
  iframe.src="https://www.youtube.com/embed/"+id;
  $("#videos-modal").modal("show");
        
        
        
    }
    