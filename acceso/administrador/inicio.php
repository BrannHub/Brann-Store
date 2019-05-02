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
            <div class="content custom-scrollbar ps ps--active-y">
                <div class="container-fluid">
                    <div class="row mt-4">
                        <div class="col-md-4">
                            <div class="widget widget2 card">
                                <div class="widget-content pt-2 pb-8 d-flex flex-column align-items-center justify-content-center">
                                    <div class="h1 text-blue">4</div>
                                    <div class="sub-title h6 text-muted">Aplicaciones públicadas</div>
                                </div>                                
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="widget widget2 card">
                                <div class="widget-content pt-2 pb-8 d-flex flex-column align-items-center justify-content-center">
                                    <div class="h1 text-danger">2</div>
                                    <div class="sub-title h6 text-muted">Aplicaciones pendientes</div>
                                </div>                                
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="widget widget2 card">
                                <div class="widget-content pt-2 pb-8 d-flex flex-column align-items-center justify-content-center">
                                    <div class="h1 text-info">12</div>
                                    <div class="sub-title h6 text-muted">Desarrolladores</div>
                                </div>                                
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header text-white" style="background: linear-gradient(135deg, rgba(59,103,158,1) 0%,rgba(43,136,217,1) 50%,rgba(32,124,202,1) 51%,rgba(125,185,232,1) 100%);">
                                    <strong>Aplicaciones pendientes de públicar</strong>
                                </div>
                                <div class="card-body">
                                    <div class="input-group input-group-lg">
                                        <input type="text" class="form-control" aria-label="Large" placeholder="Buscar" aria-describedby="inputGroup-sizing-sm">
                                    </div><br>
                                    <table class="table">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">Fecha de públicación</th>
                                                <th scope="col">Aplicación</th>
                                                <th scope="col">Sistema Operativo</th>
                                                <th scope="col">Versión</th>
                                                <th scope="col">Detalles</th>
                                                <th scope="col">Opciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>15-05-2019</td>
                                                <td>WhatsApp</td>
                                                <td>Windows</td>
                                                <td>1.1</td>
                                                <td>WhatsApp es una aplicación de chat online para todas las plataformas disponibles.</td>
                                                <td>
                                                    <a href="#" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#eliminar"><i class="fa fa-times s-6"></i></a>
                                                    <a href="#" class="btn bg-green-700  text-white btn-sm" data-toggle="modal" data-target="#eliminar"><i class="fa fa-check s-6"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
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
        $('#e-commerce-products-table').DataTable();
    } );
</script>
<div id="eliminar" class="modal fade" tabindex="-1" role="dialog"
     aria-labelledby="myLargeModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header bg-red-700 text-auto">
                <h4 class="modal-title" id="myLargeModalLabel">Rechazar la aplicación "WhatsApp" de su publicación</h4>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <strong>Describa la razón de porque fue rechazado.</strong><br><br>
                <div class="input-group input-group-lg">
                    <textarea type="text" class="form-control" aria-label="Large" placeholder="Razón..." aria-describedby="inputGroup-sizing-sm"></textarea>
                </div><br>
                <a href="#" class="btn btn-danger btn-block btn-lg">Rechazar aplicación</a>
            </div>
        </div>
    </div>
</div>

</html>