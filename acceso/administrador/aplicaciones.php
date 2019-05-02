<?php include ("../../php/datos.php"); 
$pagina = "Inicio";
$active_inicio = "active";
?>
<html>
<head>
	<?php include ("../php/head.php");?>
</head>

<body class="layout layout-vertical layout-left-navigation layout-below-toolbar layout-below-footer media-step-lg fuse-aside-folded">
    <main>
        <div id="wrapper">
                <?php include("../php/nav.php"); ?>
                <div class="content custom-scrollbar">
                    <div class="page-layout blank p-6">

                        <div class="page-content-card card card-body">
                            <h2>Hola</h2>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </main>
</body>
<?php include ("../php/footer.php");?>
<script>
	$(document).ready( function () {
    $('#apps').DataTable();
	} );
</script>
</html>