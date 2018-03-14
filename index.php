<!DOCTYPE html>
<?php include 'vistas/encabezado.php' ?>
<body>

<header>
    <div class=" container uno">
        <p class="col-md-6"><i class="fas fa-map-marker-alt"></i> C. 23 #64 por 12 Col. Chuburna de Hidalgo, Mérida, Yucatán. CP. 97205.</p>
        <p class="col-md-3"><i class="far fa-clock"></i> Lunes a Viernes de 9 am a 6 pm</p>
        <p class="col-md-3"><i class="far fa-envelope"></i> info@adminciudadblanca.com</p>
    </div>
    <div class="container dos">
        <p class="text-right">Redes sociales</p>
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
        <img src="img/cd-blanca.png" alt="CIUDAD BLANCA" class="img-responsive">
    </figure>
    <nav class="pull-right">
        <ul>
            <a class="selector" id="select" href="index.php">INICIO</a>
            <a class="selector" href="vistas/nosotros.php">NOSOTROS</a>
            <a class="selector" href="vistas/servcios.php">SERVICIOS</a>
            <a class="selector" href="vistas/contactp.php">CONTACTO</a>
        </ul>
    </nav>
</div>

<div class="banner">
    <div class="fondo">
        <div class="textoi pull-right">
            <p>
            Si tienes un problema, hablar y ser escuchado no te costará nada. La pimera consulta es gratuita. Con una experiencia, ofrecemos nuestros servicios en beneficio de personas en situación de vulnerabilidad.</p>
            <a style="margin-top: 3%; margin-right: 5%;" href="vistas/contacto.php" class="btn btn-warning btn-outline btn-lg pull-right">CONTACTANOS</a>
        </div>
    </div>
</div>

<div class="section" style="padding: 5% 0%;">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img src="img/servi.jpg"
            class="img-responsive">
          </div>
          <div class="col-md-6">
            <h1>Servicios</h1>
            <!-- <h3>A subtitle</h3> -->
            <p>Ofrecemos asesoría legal integral, solucionamos y prevenimos los conflictos de nuestros clientes, mediante un servicio eficiente, responsable, honesto, discreto y sobre todo ético. <br><br>
            Realice una consulta jurìdica en lìnea adjuntando los documentos relativos y reciba respuesta en 24 horas*.</p>
            <a style="margin-top: 3%; margin-right: 5%;" href="vistas/contacto.php" class="btn btn-warning btn-outline btn-lg pull-right">CONTACTANOS</a>
          </div>
        </div>
      </div>
    </div>

    <div class="banneri">
        <div class="fondoi">
            <p class="tit">¿Requieres Asesoría Legal?</p>
            <p class="subtit">Llámanos hoy mismo para agendar una consulta y discutiremos todos los detalles de tu caso. Facilitandonos toda la información podremos ofrecerte la mejor solución.</p>
            <div class="row text-center" style="margin-top: 2%;">
            <a href="vistas/servicios.php" class="btn btn-warning btn-outline btn-lg">SERVICIOS</a>
    </div>
        </div>
    </div>

<!-- <div class="container" style="margin-bottom: 2%;">
	<div class="row text-center">
            <a href="vistas/contacto.php" class="btn btn-warning btn-outline btn-lg">CONTACTANOS</a>
	</div>
</div> -->



<!-- <a class="go-top" href="#">Ir Arriba</a> -->
<?php include 'vistas/pie.php' ?>
<script src="js/jquery.js"></script>
<script src="js/menu.js"></script>
<script src="js/arriba.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>