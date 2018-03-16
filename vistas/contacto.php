<!DOCTYPE html>
<?php include 'encabezado2.php' ?>
<body>

<header>
    
    <div class="container dos">
        <p class="text-right tit-rs">Redes sociales</p>
        <p class="iconosi text-right">
            <i class="fab fa-facebook-f"></i> &nbsp;
            <i class="fab fa-google-plus-g"></i> &nbsp;
            <i class="fab fa-twitter"></i> &nbsp;
            <i class="fab fa-linkedin-in"></i>
        </p>
    </div>
    <hr>
</header>

<div class="menu">
    <figure class="logo pull-left">
        <img src="../img/cd-blanca.png" alt="CIUDAD BLANCA" class="img-responsive">
    </figure>
    <nav class="pull-right">
        <ul>
            <a class="selector" href="../index.php">INICIO</a>
            <a class="selector" href="nosotros.php">NOSOTROS</a>
            <a class="selector" href="servicios.php">SERVICIOS</a>
            <a class="selector" id="select" href="contacto.php">CONTACTO</a>
        </ul>
    </nav>
     <div class="op-menu">
        <i class="fa fa-bars fa-1x i-menu" aria-hidden="true"></i>
    </div>
</div>

<div class="banner4">
    <div class="fondo">
        <div class="textoi pull-right">
            <p>
            En MCI CIUDAD BLANCA Y ASOCIADOS resolvemos a su favor.</p>
        </div>
    </div>
</div>

<section id="contact" class="content-section text-center" style="padding: 5% 0%;">
        <div class="contact-section">
            <div class="container">
              <h2 class="tit-c">CONTACTANOS</h2>
              <p>Por favor, llena este formulario para contactarnos</p> <br>
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <form class="form-horizontal" onSubmit="return false">
                    <div class="form-group">
                      <label for="exampleInputName2">Nombre</label>
                      <input type="text" class="form-control" id="txtNOMBRE" placeholder="Nombre completo">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName2">Teléfono</label>
                      <input type="text" class="form-control" id="txtTELEFONO" placeholder="Teléfono">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail2">Correo</label>
                      <input type="email" class="form-control" id="txtCORREO" placeholder="jane.doe@example.com">
                    </div>
                    <div class="form-group ">
                      <label for="exampleInputText">Comentario</label>
                     <textarea  id="txtCOMENTARIO" class="form-control" placeholder="Escribe el texto"></textarea> 
                    </div>
                    <div id="_AJAX_PRE_"></div><br>
                    <button type="submit" class="btn btn-default" onclick="sendCORREO()">Enviar mensaje</button>
                  </form>
                </div>
              </div>
            </div>
        </div>
      </section>

      <!-- <div class="container" style="padding: 5% 0%;"> -->
	<!-- <div class="row"> -->
        <div class="mapa">
        	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.5615384622274!2d-89.62836948589252!3d21.010205986008486!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f56741d4a0fef9b%3A0x64c3201960327dfc!2sCalle+23+64%2C+Hidalgo+de+Chuburn%C3%A1%2C+97208+M%C3%A9rida%2C+Yuc.!5e0!3m2!1ses-419!2smx!4v1521056420071" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
    	</div>

      <div class=" container uno">
        <p class="col-xs-12 col-md-4 text-center"><i class="fas fa-map-marker-alt"></i> C. 23 #64 por 12 Col. Chuburna de Hidalgo, Mérida, Yucatán. CP. 97205.</p>
        <p class="col-xs-12 col-md-3"><i class="far fa-clock"></i> Lunes a Viernes de 9 am a 6 pm</p>
        <p class="col-xs-12 col-md-3"><i class="far fa-envelope"></i> info@adminciudadblanca.com</p>
        <p class="col-xs-12 col-md-2"><i class="fas fa-phone-volume"></i> PENDIENTE</p>
    </div>
    	
      	<!-- <div class="col-md-4">
    		<h2>Datos de la Empresa</h2>
    		<address>
    			
    			15 Springfield Way<br>
    			Hythe<br>
    			Kent<br>
    			United Kingdon<br>
    			CT21 5SH<br>
    			<abbr title="Phone">P:</abbr> 01234 567 890
    		</address>
    	</div> -->
    <!-- </div> -->
<!-- </div> -->

	
  
<!-- <a class="go-top" href="#">Subir</a> -->
<?php include 'pie.php' ?>
<script src="../js/jquery.js"></script>
<script src="../js/sendCORREO.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/arriba.js"></script>
<script src="../js/funciondthc.js"></script>
<script src="../js/menu.js"></script>
<script src="../js/sendCORREO.js"></script>
</body>
</html>
