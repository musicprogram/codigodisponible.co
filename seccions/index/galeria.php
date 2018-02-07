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




<div class="">

  <div class="bajar_mas">


   <div class="row">

    <div class="col s12 m6">
      <div class="card " style="overflow: visible; background-color: rgba(37, 48, 50, 0.6);" >

           <div class="card-content white-text center">
              <div class="blue darken-2 margen">
                <span class="card-title">EDUVIAL</span>
                 <p class="flow-text">
                    Sistema para la publicación de contenido gráfico Elaborado para el estudio y el conocimiento de la educación vial
                 </p>
                <br>
    
              </div>

               
            </div>



        <div class="card-image waves-effect waves-block waves-light activator tooltipped" onclick="eduvial()" data-position="top" data-delay="50" data-tooltip="Click para ver mas">
          <img class="activator" src="https://image.ibb.co/gWfbix/eduvial_card.jpg">
        </div>
     <br>
        <div class="card-reveal blue darken-1 white-text " style="display: none; transform: translateY(0px);">
          <span class="card-title blue-text text-darken-4"><i class="white-text material-icons right">close</i></span>
          

          
          <br>
          <div class="eduvial"></div>


        </div>
        
      


      </div>
    </div>
        <div class="col s12 m6">

  <div class="card " style="overflow: visible; background-color: rgba(37, 48, 50, 0.6);" >

           <div class="card-content white-text center">
              <div class="blue darken-2 margen">
                <span class="card-title">PGP CONFECCIÓN</span>
                 <p class="flow-text">
                     Plataforma para la gestión de producción en la confección, para el manejo de las órdenes de producción, fichas técnicas, entre otros.
                 </p>
                <br>
    
              </div>

               
            </div>



        <div class="card-image waves-effect waves-block waves-light activator tooltipped" onclick="pgp()" data-position="top" data-delay="50" data-tooltip="Click para ver mas">
          <img class="activator" src="https://image.ibb.co/g1iJwH/pgp_card.jpg">
        </div>
     <br>
        <div class="card-reveal blue darken-1 white-text " style="display: none; transform: translateY(0px);">
          <span class="card-title blue-text text-darken-4"><i class="white-text material-icons right">close</i></span>
          

          
          <br>
          <div class="pgp"></div>


        </div>
        
      


      </div>






    </div>

  </div>



  



</div>








</div>


<script type="text/javascript">
 $(document).ready(function(){

  $('.tooltipped').tooltip({delay: 50});

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






