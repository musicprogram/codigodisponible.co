<script type="text/javascript">
    function pgp(){
      $('.pgp').load('seccions/index/gallery/pgp.php').slideDown(560);
      $('#div_pgp').addClass('hide')
    }

    function eduvial(){
      $('.eduvial').load('seccions/index/gallery/eduvial.php').slideDown(560);
      $('#div_eduvial').addClass('hide')
    }
</script>





<div class="parallax-container pas">

  <div class=" bajar_mas">
   <p class="flow-text center-align blue-text text-darken-1 animar_tit">
     PROYECTOS REALIZADOS
   </p>

   <div class="row">

    <div class="col s12 m6">
      <div class="card" style="overflow: visible; background-color: rgba(37, 48, 50, 0.6);">
        <div class="card-image waves-effect waves-block waves-light ">
          <img class="activator" src="https://image.ibb.co/gWfbix/eduvial_card.jpg">
        </div>
        <div class="card-content">
          <span class="card-title activator white-text light" onmouseover="eduvial()"><i class="fa fa-car  white-text" aria-hidden="true"></i><i class="material-icons right white-text light">more_vert</i></span>
        </div>
        <div class="card-reveal blue darken-1 white-text " style="display: none; transform: translateY(0px);">
          <span class="card-title blue-text text-darken-4"><i class="white-text material-icons right">close</i></span>
          

          <h1 class="flow-text center ani"><b>EDUVIAL</b></h1>
          <div class="grey lighten-3 margen ">
            <p class="blue-text text-darken-1 center">
              
              APLICACIÓN PARA LA PUBLICACIÓN DE CONTENIDO GRÁFICO          
            </p>

          </div>

         
          
      
          
          <br>
          <div class="eduvial"></div>


        </div>


      </div>
    </div>
    <div class="col s12 m6">
      <div class="card" style="overflow: visible; background-color: rgba(37, 48, 50, 0.6);">
        <div class="card-image waves-effect waves-block waves-light ">
          <img class="activator" src="https://image.ibb.co/g1iJwH/pgp_card.jpg">
        </div>
        <div class="card-content">
          <span class="card-title activator white-text light" onmouseover="pgp()"><i class="fa fa-line-chart white-text" aria-hidden="true"></i><i class="material-icons right white-text light animated flash">more_vert</i></span>
        </div>
        <div class="card-reveal blue darken-1 white-text " style="display: none; transform: translateY(0px);">
          <span class="card-title blue-text text-darken-4"><i class="white-text material-icons right">close</i></span>
          

          <h1 class="flow-text center ani"><b>PGP-CONFECCIÓN</b></h1>
          <div class="grey lighten-3 margen ">
            <p class="blue-text text-darken-1 center">
              PLATAFORMA PARA LA GESTIÓN DE LA PRODUCCIÓN EN LA CONFECCIÓN              
            </p>

          </div>

         
   

          
          <br>
          <div class="pgp"></div>



        </div>



      </div>
    </div>
  </div>





</div>







<div class="parallax"><img src="https://image.ibb.co/jSSM16/seccion1.jpg"></div>
</div>


<script type="text/javascript">
 $(document).ready(function(){
  $('.parallax').parallax();

  $('.ani').textillate({
    in: {
      effect: 'flipInX',
      delay: 25
    }
  });

  $('.ani1').textillate({
    in: {
      effect: 'bounceInRight',
      delay: 25
    }
  });


  


});
</script>






