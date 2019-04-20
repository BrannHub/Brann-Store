<?php 
$active_home = "active"; 
$pagina = "Inicio";
?>
<?php include('php/datos.php'); ?>
<?php include('php/head.php'); ?>

<body>
	<header><?php include('php/nav.php'); ?></header>
	<!--
	<section class="jumbotron" style="background-image:url('https://i.imgur.com/RGNSJ2O.jpg'); background-position: fixed;">
	  <div class="jumbotron_body jumbotron_body-lg">
	    <div class="container">
	      <div class="row">
	        <div class="col-md-12">
	          <h2 class="text-center">¿Qué estás buscando?</h2>
	        </div>
	      </div>
	      <div class="row">
	        <div class="col-md-8 col-md-offset-2">
	          <form role="search">
	            <div class="input-group input-group-lg">
	              <input class="form-control" type="text" placeholder="" id="yobusco">
	              <span class="input-group-btn">
	                <button class="btn btn-primary" type="button"><span class="fa fa-search"></span></button>
	              </span>
	            </div>
	          </form>
	        </div>
	      </div>
	    </div>
	  </div>
	  <div class="overlay"></div>
	</section> -->
	<br>
	<div class="container">
		<div class="row panels-row">
			<div class="col-md-4 buscar">
				<a href="paginas/servicios/servicios.php" class="panel panel-default panel-icon panel-primary">
			        <div class="panel-heading hidden-xs">
			           <i class="fa fa-5x fa-android" style="font-size: 7em; padding-top:20px;"></i>
			        </div>
			        <div class="panel-body">
			           <h3><span class="visible-xs-inline"> </span>Android</h3>
			           <div class="text-muted">
			              <p>Aplicaciones para Android.</p>
			           </div>
			        </div>
			     </a>
			</div>
			<div class="col-md-4 buscar">
				<a href="brann/" class="panel panel-default panel-icon panel-primary">
			        <div class="panel-heading hidden-xs">
			           <i class="fa" style="font-size: 7em; padding-top:20px;"><img src="https://i.imgur.com/rHHOVNO.png" style="width: 98%"></i>
			        </div>
			        <div class="panel-body">
			           <h3><span class="visible-xs-inline"></span>Brann</h3>
			           <div class="text-muted">
			              <p>Aplicaciones para el sistema operativo Brann.</p>
			           </div>
			        </div>
			     </a>
			</div>
			<div class="col-md-4 buscar">
				<a href="paginas/mapa/mapa-interactivo.php" class="panel panel-default panel-icon panel-primary">
			        <div class="panel-heading hidden-xs">
			           <i class="fa fa-5x fa-windows" style="font-size: 7em; padding-top:20px;"></i>
			        </div>
			        <div class="panel-body">
			           <h3><span class="visible-xs-inline"></span>Windows</h3>
			           <div class="text-muted">
			              <p>Aplicaciones para el sistema operativo Windows</p>
			           </div>
			        </div>
			     </a>
			</div>
			<div class="col-md-12 buscar">
				<a href="index3.php" class="panel panel-default panel-icon panel-primary">
			        <div class="panel-heading hidden-xs">
			           <i class="fa fa-5x fa-eye-slash" style="font-size: 7em; padding-top:20px;"></i>
			        </div>
			        <div class="panel-body">
			           <h3><span class="visible-xs-inline"><i class="fa fa fa-eye-slash"></i>&nbsp; </span>Acceso a lectura para no videntes</h3>
			           <div class="text-muted">
			              <p>Pagina adaptada con control de voz</p>
			           </div>
			        </div>
			     </a>
			</div>
		</div>
	</div>
</body>

<?php include('php/footer.php') ?>
