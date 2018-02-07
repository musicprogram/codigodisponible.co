  
<ul id="slide-out" class="side-nav transparencia">
  <div id="principal" class="waves-effect waves-light">
   <img src="https://image.ibb.co/mpNaUG/ezgif_com_video_to_gif.gif" alt="ezgif_com_video_to_gif" border="0" class="responsive-img">
 </div>
 <div class="card  bajar blue darken-1" style="color: #eceff1;">
  <div id="img_profile">
    <div class="card-image">
      <img src="https://image.ibb.co/dx6zPG/sidebarindex.jpg" id="profile">    
    </div>
  </div>

  <div class="content">
    <div id="prof">

      <p class="card-content light center-align ">
       Desarrollo eficiente y con la mejor calidad, dentro de los tiempos establecidos
       <div class="redes_so center-align">
        <i class="fa  fa-twitter  fa-2x "></i>
        <i class="fa  fa-linkedin  fa-2x "></i>
        <i class="fa  fa-github  fa-2x " ></i>
      </div>
    </p>
  </div>


</div>
</div>

<div id="botones">

  <li class="active"><a id="drop_juan" class="waves-effect waves-light white-text text-darken-1 dropdown-button" data-activates='dropdown1'><i class="material-icons blue-text text-darken-1">person</i><p class="letter_tra">Juan Henao Rendón</p></a></li> 

</div>


<!-- Dropdown Structure -->
  <ul id='dropdown1' class='dropdown-content white-text light blue-grey lighten-5'>

    
    <li><a class="blue-text " id="center_ju"><i class="material-icons blue-text">cloud</i>Habilidades y técnicas</a></li>
    <li><a class="blue-text " id="project"><i class="material-icons blue-text">view_module</i>Proyectos</a></li>
    <li><a class="blue-text " id="init_ju"><i class="material-icons blue-text ">mode_comment</i>Acerca de mi</a></li>



  </ul>


<!--

<li class="active"><a id="juanhenao" class="waves-effect waves-light white-text text-darken-1 dropdown-button" data-activates='dropdown1'><i class="material-icons blue-text text-darken-1">person</i><p class="letter_tra">About me</p></a></li> 





<li class="container-fluid">
 <div class="transparencia_w margen">
    <?php include_once 'seccions/index/contacto.php'?>
 </div>

</li>
-->

</ul>

<div id="boton_menu" class="valign-wrapper">
  <div class="fixed-action-btn left">
    <a data-activates="slide-out" class="btn-floating btn-large transparencia button-collapse pulse" id="menu_p">
      <i class="large material-icons" id="menu_change">blur_on</i>
    </a>
  </div>
</div>





<script type="text/javascript">

$('.dropdown-button').dropdown({
     
      alignment: 'bottom', // Displays dropdown with edge aligned to the left of button

    }
  );


 $('.button-collapse').sideNav({

  onOpen: function(el) {  
    $('#menu_change').text('blur_circular'); 

    $('.letter_tra').textillate({
      in: {
        effect: 'flipInX',
        delay: 40
      }
    });

  }, 
  onClose: function(el) {  
    $('#menu_change').text('blur_on'); 
  }, 
}
);




 $('#principal').click(function(){
   $('#video_content').removeClass('hide');
   $('#content').html('');
   $('#prof').html('<p class="card-content light center-align"> Desarrollo eficiente y con la mejor calidad, dentro de los tiempos establecidos <div class="redes_so center-align"> <i class="fa fa-twitter fa-2x "></i> <i class="fa fa-linkedin fa-2x "></i> <i class="fa fa-github fa-2x " ></i> </div> </p>');
   $('#img_profile').html('<div class="card-image"> <img src="https://image.ibb.co/dx6zPG/sidebarindex.jpg" id="profile"> </div>'); 
   $('.card').removeClass('card-profile');
 })


 $('#init_ju').click(function(){
   $('#video_content').addClass('hide');
   $('#content').load('seccions/juan/intro.php').slideDown(560);
 })

 $('#center_ju').click(function(){
   $('#video_content').addClass('hide');
   $('#content').load('seccions/juan/center.php').slideDown(560);
 })

 $('#project').click(function(){
   $('#video_content').addClass('hide');
   $('#content').load('seccions/index/galeria.php').slideDown(560);
 })


 $('#drop_juan').click(function(){
  $('#prof').html('<h6 class="category text-gray">Desarrollador y Diseñador de software</h6> <h4 class="card-title">Juan Henao</h4> <p class="card-content light"> Apasionado por la tecnología y el conocimiento de nuevas herramientas <br> Celular:+(57) 3023929614 <div class="redes_so"> <i class="fa fa-twitter fa-2x "></i> <i class="fa fa-linkedin fa-2x "></i> <i class="fa fa-github fa-2x " ></i> </div>  </p>');

  $('#img_profile').html('<div class="card-avatar blue-grey darken-2"> <a> <img src="https://image.ibb.co/jKn8MH/juan.png" id="profile"> </a> </div>'); 

  $('.card').addClass('card-profile');





})




</script>