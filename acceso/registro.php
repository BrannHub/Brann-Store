<?php

include('../php/datos.php');

$pagina = "Registro";
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="estilos/estilos.css">
<!-- Icons -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.28.4/sweetalert2.all.js" charset="utf-8"></script>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

  <title><?php echo $nombreapp; ?> | <?php echo $pagina; ?></title>
</head>
 <!-- LOGIN MODULE -->
        <div class="login">
            <div class="wrap">
                <!-- TOGGLE -->
                <div id="toggle-wrap">
                    <div id="toggle-terms">
                        <div id="cross">
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
                <!-- TERMS -->
                <div class="terms">
                    <h2>Términos de servicios</h2>
                    <p class="small">Última modificación: Abril 7, 2019</p>
                    <div>
                    <span style="font-family: Montserrat Medium;"><b>1.<span style="white-space: pre;"> </span>DURACIÓN: </b>El sistema una vez registrado el primer pago comienzan a correr los (30) treinta días, durante ese lapso estarán habilitados los beneficios acordados en el presente documento.</span></div>
                    <div>
                    <span style="font-family: Montserrat Medium;"><b><br /></b></span></div>
                    <div>
                    <span style="font-family: Montserrat Medium;"><b>2.<span style="white-space: pre;"> </span>VENCIMIENTO: </b>Pasando el lapso de los (30) treinta días, poseen un plazo de 5 días adicionales para registrar el pago del servicio, si este no se cumpliese, el sistema se bloqueará, pero sin perder los datos de facturación, pero dejando este inutilizable, pasando los (30) treinta días, el sistema quedará eliminado de nuestros registros incluyendo los datos con previo aviso mediante correo electrónico brindado por el cliente.</span></div>
                    <div>
                    <span style="font-family: Montserrat Medium;"><b><br /></b></span></div>
                    <div>
                    <span style="font-family: Montserrat Medium;"><b>3.<span style="white-space: pre;"> </span>PRECIO: </b>El cliente deberá abonar al prestatario $500 cada (30) días facturado el sistema, por los servicios declarados en el documento, este podrá abonar mediante transferencia bancaria, efectivo, tarjeta de débito o crédito en un solo pago.</span></div>
                    <div>
                    <span style="font-family: Montserrat Medium;"><b><br /></b></span></div>
                    <div>
                    <span style="font-family: Montserrat Medium;"><b>4.<span style="white-space: pre;"> </span>MODIFICACIÓN O AMPLIACIÓN DE LOS SERVICIOS: </b>Si durante la vigencia del presente contrato el Cliente, Interniviente o Prestador del servicio consideran oportuno modificar o ampliar el servicio, ambas partes deberán negociar el alcance de dichas modificaciones o ampliaciones en la prestación. Los acuerdos adoptados en la negociación deberán constar por escrito. En su caso, el cliente que considere oportuno modificar o alterar el servicio objeto del presente contrato deberá enviar propuesta por escrito a la otra Parte a fin de negociar el nuevo precio del servicio.&nbsp;</span></div>
                    <div>
                    <span style="font-family: Montserrat Medium;"><b><br /></b></span></div>
                    <div>
                    <span style="font-family: Montserrat Medium;"><b>5.<span style="white-space: pre;"> </span>CONFIDENCIALIDAD Y PROTECCIÓN DE DATOS: </b>El prestador debe tener la obligación de proteger los datos y solo si es solicitado por el cliente, debe ser entregados en formato SQL o CSV hacia el mismo, no a terceros. Esta clausula se adjunta con la Ley Nacional N° 25.326 de “PROTECCIÓN DE DATOS PERSONALES”.</span></div>
                    <div>
                    <span style="font-family: Montserrat Medium;"><b><br /></b></span></div>
                    <div>
                    <span style="font-family: Montserrat Medium;"><b>6.<span style="white-space: pre;"> </span>NO COMPETENCIA:</b> El cliente se compromete a no realizar proyectos de equivalente o análoga naturaleza para un tercero, ni iniciar a partir del presente desarrollo una nueva línea de negocio relacionada con la realización de sitios Web. Se considerará que el cliente incurre en dicha circunstancia siempre que opere directa o indirectamente mediante otra empresa en la que disponga de participación social, o que actúe como mero asesor o colaborador y que en definitiva obtenga como resultado un proyecto igual, semejante o con la misma finalidad a la ofrecida por el prestador.&nbsp;</span></div>
                    <div>
                    <span style="font-family: Montserrat Medium;"><b><br /></b></span></div>
                    <div>
                    <span style="font-family: Montserrat Medium;"><b>El incumplimiento del anterior compromiso llevará aparejada una penalización equivalente a 25.000$ Pesos Argentinos, sin perjuicio y de las indemnizaciones que correspondiesen por los daños y perjuicios causados al prestador.</b></span></div>
                    <div>
                    <span style="font-family: Montserrat Medium;"><b><br /></b></span></div>
                    <div>
                    <span style="font-family: Montserrat Medium;"><b>7.<span style="white-space: pre;"> </span>PROPIEDAD INTELECTUAL: </b>El prestador autoriza al cliente el uso de solo lectura del sistema, así como el resultado obtenido, es un producto original que no vulnera ninguna ley o derechos de terceros, en especial los referidos a propiedad industrial e intelectual. Adjunto a esta clausula con la Ley Nacional 11.723 de “REGIMEN LEGAL DE LA PROPIEDAD INTELECTUAL”</span></div>
                    <div>
                    <span style="font-family: Montserrat Medium;"><b><br /></b></span></div>
                    <div>
                    <span style="font-family: Montserrat Medium;"><b>8.<span style="white-space: pre;"> </span>COMUNICACIONES: </b>Las partes se obligan a comunicarse toda la información que pudiera ser necesaria para el correcto desarrollo del proyecto. Toda comunicación entre las partes relativa al presente contrato se realizará por escrito o telefónicamente. A efectos de comunicaciones y/o notificaciones las partes designan:</span></div>
                    <div>
                    <br /></div>

                </div>

                <!-- RECOVERY -->
                <div class="recovery">
                    <h2>Recuperación de contraseña</h2>
                    <p>Se le enviará un correo electrónico con un enlace para recuperar la clave.</p>
                    <form class="recovery-form" action="" method="post">
                        <input type="text" class="input" id="user_recover" placeholder="Correo Electrónico">
                        <input type="submit" class="btn btn-block btn-dark" value="Recuperar contraseña">
                    </form>
                </div>

                <!-- SLIDER -->
                <div class="content">
                    <!-- LOGO -->
                    <div class="logo">
                        <a href="#"><img src="https://i.imgur.com/YSToWuI.png" alt=""></a>
                    </div>
                    <br>
                    <p style="color:#FFF; float: right; margin-right: 5px;"><b><?php echo $nombreapp; ?> v2.5</b></p>
                    <!-- SLIDESHOW -->
                     <div id="slideshow">
                        <div class="one">
                            <h2><span>PUBLIQUE</span></h2>
                            <p>Haga conocer su aplicación</p>
                        </div>
                        <div class="two">
                            <h2><span>COMODA</span></h2>
                            <p>Nuestra interfaz es agradable</p>
                        </div>
                        <div class="three">
                            <h2><span>INTERACTIVO</span></h2>
                            <p>Tenga un control dinámico del sistema</p>
                        </div>
                        <div class="four">
                            <h2><span>FÁCIL</span></h2>
                            <p>Un sistema muy sencillo para utilizar</p>
                        </div>
                    </div>
                </div>
                <!-- LOGIN FORM -->
                <div class="user">
                    <!-- ACTIONS
                    <div class="actions">
                        <a class="help" href="#signup-tab-content">Sign Up</a><a class="faq" href="#login-tab-content">Login</a>
                    </div>
                    -->
                    <div class="form-wrap">
                        <!-- TABS -->
                      <div class="tabs">
                        <h3 class="login-tab"><a style="text-decoration: none;" class="log-in active" href="#login-tab-content"><span>Registro<span></a></h3>
                        <!--
                        <h3 class="signup-tab"><a style="text-decoration: none;" class="sign-up" href="#signup-tab-content"><span>Registro</span></a></h3> -->
                      </div>
                        <!-- TABS CONTENT -->
                      <div class="tabs-content">
                            <!-- TABS CONTENT LOGIN -->
                        <div id="login-tab-content" class="active">
                          <form class="login-form" action="" method="post">
                            <input style="color: #FFF; font-size: 1.2em;" type="text" class="input" name="username" id="user_login" autocomplete="off" placeholder="Usuario">
                            <input style="color: #FFF; font-size: 1.2em;" type="text" class="input" name="nombre" id="user_login" autocomplete="off" placeholder="Nombre">
                            <input style="color: #FFF; font-size: 1.2em;" type="text" class="input" name="apellido" id="user_login" autocomplete="off" placeholder="Apellido">
                            <input style="color: #FFF; font-size: 1.2em;" type="date" class="input" name="fecha" id="user_login" autocomplete="off" placeholder="Fecha de nacimiento">
                            <input style="color: #FFF; font-size: 1.2em;" type="email" class="input" name="correo" id="user_login" autocomplete="off" placeholder="Correo Electronico">
                            <input style="color: #FFF; font-size: 1.2em;" type="password" class="input" name="contrasena" id="user_pass" autocomplete="off" placeholder="Contraseña">
                            <br><br>
                            <input type="submit" class="btn btn-primary btn-block" name="infe" value="Registrarse">
                            <br><br>
                          </form>
                          <div class="help-action">
                            <p><i class="fa fa-arrow-left" aria-hidden="true"></i><a class="agree" href="#">Terminos de servicio</a></p>
                             <p><i class="fa fa-arrow-left"></i><a class="" href="index.php">¿Ya tienes cuenta?</a></p>
                          </div>
                        </div>
                            <!-- TABS CONTENT SIGNUP -->
                        <div id="signup-tab-content">
                          <form class="signup-form" action="" method="post">
                            <input type="email" class="input" id="user_email" autocomplete="off" placeholder="Email">
                            <input type="text" class="input" id="user_name" autocomplete="off" placeholder="Username">
                            <input type="password" class="input" id="user_pass" autocomplete="off" placeholder="Password">
                            <input type="submit" class="button" value="Sign Up">
                          </form>
                          <div class="help-action">
                            <p>By signing up, you agree to our</p>
                            <p><i class="fa fa-arrow-left" aria-hidden="true"></i><a class="agree" href="#">Terms of service</a></p>
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
            </div>
        </div>
</html>
<script >/* LOGIN - MAIN.JS - dp 2017 */

// LOGIN TABS
$(function() {
  var tab = $('.tabs h3 a');
  tab.on('click', function(event) {
    event.preventDefault();
    tab.removeClass('active');
    $(this).addClass('active');
    tab_content = $(this).attr('href');
    $('div[id$="tab-content"]').removeClass('active');
    $(tab_content).addClass('active');
  });
});

// SLIDESHOW
$(function() {
  $('#slideshow > div:gt(0)').hide();
  setInterval(function() {
    $('#slideshow > div:first')
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('#slideshow');
  }, 3850);
});

// CUSTOM JQUERY FUNCTION FOR SWAPPING CLASSES
(function($) {
  'use strict';
  $.fn.swapClass = function(remove, add) {
    this.removeClass(remove).addClass(add);
    return this;
  };
}(jQuery));

// SHOW/HIDE PANEL ROUTINE (needs better methods)
// I'll optimize when time permits.
$(function() {
  $('.agree,.forgot, #toggle-terms, .log-in, .sign-up').on('click', function(event) {
    event.preventDefault();
    var terms = $('.terms'),
        recovery = $('.recovery'),
        close = $('#toggle-terms'),
        arrow = $('.tabs-content .fa');
    if ($(this).hasClass('agree') || $(this).hasClass('log-in') || ($(this).is('#toggle-terms')) && terms.hasClass('open')) {
      if (terms.hasClass('open')) {
        terms.swapClass('open', 'closed');
        close.swapClass('open', 'closed');
        arrow.swapClass('active', 'inactive');
      } else {
        if ($(this).hasClass('log-in')) {
          return;
        }
        terms.swapClass('closed', 'open').scrollTop(0);
        close.swapClass('closed', 'open');
        arrow.swapClass('inactive', 'active');
      }
    }
    else if ($(this).hasClass('forgot') || $(this).hasClass('sign-up') || $(this).is('#toggle-terms')) {
      if (recovery.hasClass('open')) {
        recovery.swapClass('open', 'closed');
        close.swapClass('open', 'closed');
        arrow.swapClass('active', 'inactive');
      } else {
        if ($(this).hasClass('sign-up')) {
          return;
        }
        recovery.swapClass('closed', 'open');
        close.swapClass('closed', 'open');
        arrow.swapClass('inactive', 'active');
      }
    }
  });
});

// DISPLAY MSSG
$(function() {
  $('.recovery .button').on('click', function(event) {
    event.preventDefault();
    $('.recovery .mssg').addClass('animate');
    setTimeout(function() {
      $('.recovery').swapClass('open', 'closed');
      $('#toggle-terms').swapClass('open', 'closed');
      $('.tabs-content .fa').swapClass('active', 'inactive');
      $('.recovery .mssg').removeClass('animate');
    }, 2500);
  });
});

// DISABLE SUBMIT FOR DEMO
$(function() {
  $('.button').on('click', function(event) {
    $(this).stop();
    event.preventDefault();
    return false;
  });
});
//# sourceURL=pen.js
</script>
