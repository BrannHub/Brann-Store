<nav class="navbar navbar-default fixed-top bg-info">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header text-white" style="color:#fff;">
      <button style="color:#fff;" type="button" class="navbar-toggle collapsed text-white" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span style="color:#fff;" class="sr-only text-white">Toggle navigation</span>
        <span style="color:#fff;" class="icon-bar text-white"></span>
        <span style="color:#fff;" class="icon-bar text-white"></span>
        <span style="color:#fff;" class="icon-bar text-white"></span>
      </button>
      <div class="navbar-brand text-white" href="#"><img src="<?php echo $logo; ?>" height="50" alt="">  &nbsp;&nbsp;<?php echo $nombreapp; ?></div>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="<?php echo $active_home; ?>"><a href="../../index2.php"><b>Inicio</b></a></li>
        <li class="#" data-toggle="modal" data-target="#comedor-digital"><a href="#"><b><i class="fa icono-arg-arma-portacion"></i> Carnet de Comedor Digital</b></a></li>
        <li class=""><a href="index.php"><b><i class="fa fa-user"></i> Cerrar Sesión</b></a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!-- Modal -->
<div class="modal fade" id="comedor-digital" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Carnet de Comedor Digital</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <center><img src="https://i.imgur.com/5rqTQBf.png" style="width: 70%;"></center>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>