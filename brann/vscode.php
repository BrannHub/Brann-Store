<?php 
$active_home = "active"; 
$pagina = "Brann - Visual Studio Code";
?>
<?php include('../php/datos.php'); ?>
<?php include('../php/head.php'); ?>

<body>
	<header><?php include('../php/nav.php'); ?></header>
	<section class="jumbotron" style="background-image:url('https://i.imgur.com/px4RK2Z.png'); background-attachment: fixed;background-size:cover;">
	<div class="jumbotron_bar">
	<div class="container">
	<div class="row">
	<div class="col-md-12">
	<ol class="breadcrumb pull-left">
	<li><a href="">Brann Store</a></li>
	<li><a href="">Aplicaciones para Brann</a></li>
	<li class="active"><span>Visual Studio Code</span></li>
	</ol>
	<ul class="list-inline pull-right">
	<li><a href="#">Desarrollador: <b>Microsoft Windows</b></a></li>
	</ul>
	</div>
	</div>
	</div>
	</div>
	  <div class="jumbotron_body jumbotron_body-lg">
	    <div class="container">
	      <div class="row">
	        <div class="col-md-12">
	          <center><img src="https://i.imgur.com/Gj8v4GQ.png" alt="..."></center>
	          <h1 class="text-center">Visual Studio Code</h1>
	        </div>
	      </div>
	      <div class="row">
	        <div class="col-md-8 col-md-offset-2">
	         <a href="#" class="btn btn-success btn-block"><i class="fa fa-download"></i> Descargar</a>
	        </div>
	      </div>
	    </div>
	  </div>
	  <div class="overlay"></div>
	</section>
	<br>
	<div class="container">
		<center>
			<a href="#" class="btn btn-info"><i class="fa fa-github"></i> Ver repositorio</a>
			<a href="#" class="btn btn-success"><i class="fa fa-envelope"></i> Contactarse con el desarrollador</a>
			<a href="mailto:soporte@brannar.com" target="a_blank" class="btn btn-danger"><i class="fa fa-info"></i> ¿Tu eres el desarrollador de esta aplicación?</a>
			<br>
			<iframe type="text/html" style="width: 100%;" height="460" src="https://www.youtube.com/embed/Sdg0ef2PpBw?autoplay=1&mute=1&loop=1&modestbranding=1&playlist=Sdg0ef2PpBw" frameborder="0"></iframe>
		</center>
		<br><br>
		<h5>Visual Studio Code es un editor de código fuente ligero pero potente que se ejecuta en su escritorio y está disponible para Linux , macOS y Windows. <br>
		Viene con soporte incorporado para JavaScript , TypeScript y Node.js y tiene un rico ecosistema de extensiones para otros idiomas (como C ++ , C # , Java , Python , PHP , Go ) y tiempos de ejecución (como .NET y Unity ) .</h5>
		<br>
		<h2>Capturas de pantalla</h2>
		<hr>
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		    <li data-target="#myCarousel" data-slide-to="1"></li>
		    <li data-target="#myCarousel" data-slide-to="2"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner">
		    <div class="item active">
		      <img src="https://i.imgur.com/px4RK2Z.png">
		    </div>

		    <div class="item">
		      <img src="https://i.imgur.com/jOyeFWf.png">
		    </div>

		    <div class="item">
		      <img src="https://i.imgur.com/dJWgicF.png">
		    </div>
		  </div>

		  <!-- Left and right controls -->
		  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
		    <span class="fa fa-arrow-left"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#myCarousel" data-slide="next">
		    <span class="fa fa-arrow-right"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
		<br><br>
		<center>
		<div style="width: 100%;"  data-width="1000" class="fb-comments" data-href="https://brannar.com" data-numposts="5"></div>	</center>
	</div>
</body>

<?php include('../php/footer.php') ?>
