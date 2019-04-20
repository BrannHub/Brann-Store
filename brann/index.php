<?php 
$active_home = "active"; 
$pagina = "Brann - Aplicaciones";
?>
<?php include('../php/datos.php'); ?>
<?php include('../php/head.php'); ?>

<body>
	<header><?php include('../php/nav.php'); ?></header>
	<section class="jumbotron" style="background-image:url('https://i.imgur.com/Fmu9Aga.png'); background-attachment: fixed;background-size:cover;">
	  <div class="jumbotron_body jumbotron_body-lg">
	    <div class="container">
	      <div class="row">
	        <div class="col-md-12">
	          <h1 class="text-center">Brann</h1>
	          <center><small class="text-center">Aplicaciones para el sistema operativo de BrannAR</small></center><br>	
	        </div>
	      </div>
	      <div class="row">
	        <div class="col-md-8 col-md-offset-2">
	          <form role="search">
	            <div class="input-group input-group-lg">
	              <input class="form-control" type="text" placeholder="Busca aplicaciones, categorías, etc" id="yobusco">
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
	</section>
	<br>
	<div class="container">
		<div class="row">
			<div class="col-md-4 buscar">
				 <div class="thumbnail">
				      <img src="https://i.imgur.com/Gj8v4GQ.png" alt="...">
				      <div class="caption">
				        <h3>Visual Studio Code</h3>
				        <p>Editor de código desarrollado por Microsoft.</p>
				        <span class="badge badge-dark">Desarrollo</span><span class="badge badge-dark">IDE</span>
				        <br><br>
				        <p>
				          <a href="vscode.php" class="btn btn-success btn-block" role="button">Descargar</a>
				        </p>
				      </div>
			    </div>
			</div>
			<div class="col-md-4 buscar">
				 <div class="thumbnail">
				      <img src="https://dashboard.snapcraft.io/site_media/appmedia/2018/02/icon256.png" alt="...">
				      <div class="caption">
				        <h3>Telegram Desktop</h3>
				        <p>Aplicación de mensajería instantanea.</p>
				        <span class="badge badge-dark">Productivo</span><span class="badge badge-dark">Social</span>
				        <br><br>
				        <p>
				          <a href="#" class="btn btn-success btn-block" role="button">Descargar</a>
				        </p>
				      </div>
			    </div>
			</div>
		</div>
	</div>
</body>

<?php include('../php/footer.php') ?>
