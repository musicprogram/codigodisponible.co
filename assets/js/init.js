
$( document ).ready(function() {
    
    /* pages */
        
    $('#video_content').load('seccions/index/video_footer.php').slideDown(560);

    $('ul#slide-out li a').click(function(){

      var page = $(this).attr('id')
      if(page == 'juanhenao'){
        $('#content').removeClass('hide');
        $('#video_content').addClass('hide');
        $('#content').load('juanhenao.php');
        
        /* menú principal */


        $('#prof').html('<h6 class="category text-gray">Desarrollador y Diseñador de software</h6> <h4 class="card-title">Juan Henao</h4> <p class="card-content light"> Apasionado por la tecnología y el conocimiento de nuevas herramientas <div class="redes_so"> <i class="fa fa-twitter fa-2x "></i> <i class="fa fa-linkedin fa-2x "></i> <i class="fa fa-github fa-2x " ></i> </div>  </p>');
        $('#img_profile').html('<div class="card-avatar blue-grey darken-2"> <a> <img src="https://image.ibb.co/bPj8Jb/marc.jpg" id="profile"> </a> </div>'); 
        $('.card').addClass('card-profile');

        $('.button-collapse').sideNav('show');
        
      }
      if(page == 'index'){
        $('#video_content').removeClass('hide');
        $('#content').addClass('hide');

         /* menú principal */
        $('#prof').html('<p class="card-content light center-align"> Desarrollo eficiente y con la mejor calidad, dentro de los tiempos establecidos <div class="redes_so center-align"> <i class="fa fa-twitter fa-2x "></i> <i class="fa fa-linkedin fa-2x "></i> <i class="fa fa-github fa-2x " ></i> </div> </p>');
        $('#img_profile').html('<div class="card-image"> <img src="https://image.ibb.co/dx6zPG/sidebarindex.jpg" id="profile"> </div>'); 
        $('.card').removeClass('card-profile');
        
        $('.button-collapse').sideNav('show');
      }

    })
    

    
    
    
});

