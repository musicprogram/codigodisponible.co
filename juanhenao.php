<script type="text/javascript">
 function myOverFunction(){
  $('#centro').load('seccions/juan/centro.php').slideDown(560).addClass('animated bounceInLeft');
  $('#pri_pun').addClass('hide');
}
Materialize.toast('Para continuar ...', 3000);

</script>


<div id="index-banner" class="parallax-container">
  <div class="section no-pad-bot">
    <div class="container">
      <br><br>
      <h1 class="header center blue-text text-darken-1 animar_tit"><b>JUAN HENAO RENDÓN</b></h1>
      <div class="row center">
        <h5 class="header col s12 blue-text text-darken-1 light animar_subt">Programador y Desarrollador Web</h5>
      </div>
    </div>
  </div>
  <div class="parallax">
    <img src="https://image.ibb.co/dzLnBw/background1.jpg" alt="Unsplashed background img 1" id="primer_img" >
  </div>
</div>

<div class="container-fluid" id="second">
  <div class="section">





    <blockquote>
      <p class="descripcion flow-text ">
        Hola, si estas en esta sección es porque probablemente quieras saber mas de mi pasión por la tecnología, soy análista y programador de sistemas de Información, capaz de formular y poner en marcha proyectos informáticos según los objetivos de la empresa a corto, mediano y largo plazo. Apto para diseñar objetivos para un correcto flujo de trabajo, con habilidades para obtener, analizar y sintetizar ideas en diagramación con los diferentes perfiles que se requiere en un desarrollo de software        
      </p>
    </blockquote>

     
 </div>
 
</div>

 <div class="center">
    <i class="arriba fa fa-ellipsis-h fa-3x  blue-text text-darken-1" aria-hidden="true" onmouseover="myOverFunction()" id="pri_pun"></i>
 </div>
  


<div id="centro"></div>


<div id="habilidades"></div>




<div id="galle"></div>

<div id="foot" class="hide">
  <?php include_once 'seccions/juan/footer.php'?>
</div>




<script type="text/javascript">
  $('.parallax').parallax();
  

  $('.animar_tit').textillate({
    in: {
      effect: 'flipInX',
      delay: 45
    }
  });

  $('.animar_subt').textillate({
    in: {
      effect: 'bounceIn',
      delay: 30
    }
  });
</script>