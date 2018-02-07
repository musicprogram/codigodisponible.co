<script type="text/javascript">
   function myOverFunction3(){
      $('#galle').load('seccions/index/gallery.php');
      $('#pri_pun3').addClass('hide');
      $('#foot').removeClass('hide');
      

    }

</script>



<div class="habilidades blue darken-1 ">
  <div class="container">
    <p class="flow-text center-align white-text light animar_tit">
      HABILIDADES Y TÉCNICAS
    </p>

    <ul class="collection blue-text light">
      <li class="collection-item">Análisis de requisitos de software</li>
      <li class="collection-item">Implementación de soluciones sistematizadas</li>
      <li class="collection-item">Trabajo rápido, responsable y organizado</li>
      <li class="collection-item">Desarrollo de prototipos funcionales en tiempos agiles</li>
      <li class="collection-item">Edición, producción y musicalización para videos, animación y todo lo relacionado con elementos de multimedia</li>

    </ul>
            
  </div>
</div>





<div class="center">
  <i class="arriba bajar fa fa-ellipsis-h fa-3x  blue-text text-darken-1" aria-hidden="true" onmouseover="myOverFunction3()" id="pri_pun3"></i>
</div>


<script type="text/javascript">
  
  $('.animar_tit').textillate({
    in: {
            effect: 'flipInX',
            delay: 40
        }
  });
   $('ul .collection-item').textillate({
    in: {
            effect: 'fadeInUp',
            delay: 10 
        }
  });
</script>