
<!-- <div id="wistia_51h5qwe4hz" wmode=transparent></div> -->



<div id="cell"></div>
 <div id="pc">
   
  



 </div>
 


<div class="movil">
  
 



<img src="https://image.ibb.co/eM6b5c/movil_img.jpg" alt="LOGO" border="0" class="responsive-img bajar_log">

  
</div>



<script>

$(document).ready(function() {

   if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
     $('#cell').html('<div id="wistia_51h5qwe4hz" wmode=transparent></div>')

        // run test on initial page load
      checkSize();
      // run test on resize of the window
      $(window).resize(checkSize);

      wistiaEmbed = Wistia.embed("51h5qwe4hz", {
        
        qualityMax: parseInt(calidad),
        videoFoam: true,


      });
      
      wistiaEmbed.play();

      function setPlaySpeed(speed) {
        wistiaEmbed.playbackRate(speed);
        video.pause(speed)

      }

      $('#principal').click(function() { // play desde el id index
            wistiaEmbed.play();
      });

      

    



     
    }else{
     $('#pc').html('<video class="responsive-video " loop autoplay controls="false" id="video_p" muted playsinline> <source src="https://s3.us-east-2.amazonaws.com/codigodigital.tk/web_intro.MP4" type="video/mp4"> <source src="https://s3.us-east-2.amazonaws.com/codigodigital.tk/web_intro.webm" type="video/webm"> <source src="https://s3.us-east-2.amazonaws.com/codigodigital.tk/web_intro.ogv" type="video/ogv"> </video>') 
    }





    
});

//Function to the css rule
function checkSize(){
    if ($(".movil").css("display") == "none" ){
        calidad = 1080;       
    }
    if ($(".movil").css("display") == "block" ){
        calidad = 360;     
    }
}


var vids = $("video"); 
$.each(vids, function(){
       this.controls = false; 
}); 


$('#loading').fadeOut(2000,function(){
  $('#video_p')[0].play();
});

</script>