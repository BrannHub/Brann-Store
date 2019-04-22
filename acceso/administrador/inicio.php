<?php include ("../../php/datos.php"); 
$pagina = "Inicio";
$active_inicio = "active";
?>
<html>
<head>
	<?php include ("../php/head.php");?>
</head>

<body class="hold-transition sidebar-mini sidebar-collapse">
	<div class="wrapper">
		<header>
			<?php include ("../php/nav.php");?>
		</header>
		<div class="content-wrapper mt-5">
			<div class="content-header">
				<div class="card card-body">
					<div class="container-fluid">
						<div class="row mb-2">
							<div class="col-sm-6">
								<h1 class="m-0 text-dark"><i class="fa fa-dashboard"></i> <?php echo $pagina; ?></h1>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid p-2" style="margin-top:-25px;">
				<div class="card">
					<div class="card-header bg-primary text-white">
						<b>Aplicaciones a revisión</b>
					</div>
					<div class="card-body">
						<table id="apps" class="table table-striped table-bordered table-responsive" style="width:100%">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Desarrollador</th>
                <th>Aplicación</th>
                <th>Fecha de publicación</th>
                <th>Sistema operativo</th>
                <th>Categorías</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Facebook</td>
                <td>Facebook Inc</td>
                <td><a href="#">Descargar</a></td>
                <td>15/05/2019</td>
                <td>Brann</td>
                <td>Social</td>
                <td>$320,800</td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th>Nombre</th>
                <th>Desarrollador</th>
                <th>Aplicación</th>
                <th>Fecha de publicación</th>
                <th>Sistema operativo</th>
                <th>Categorías</th>
                <th>Opciones</th>
            </tr>
        </tfoot>
    </table>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<?php include ("../php/footer.php");?>
<script>
	$(document).ready( function () {
    $('#apps').DataTable();
	} );
</script>
</html>