<?php
require_once("../config/conexion.php");
if (isset($_POST["enviar"]) and $_POST["enviar"] == "si") {
    require_once("../models/aspirantes.php");
    $usuarios = new Aspirantes();
    $usuarios->login();
}
?>
<!DOCTYPE html>
<html lang="en">

<?php require_once("../modules/head.php") ?>

<?php

if (isset($_GET["m"])) {
    switch ($_GET["m"]) {

        case "1";
?>
            <div class="col-sm-12 alert">
                <span class="adveLog">⚠️ !Credenciales incorrectas. Verifica tus credenciales¡ ⚠️</span>

            </div>
        <?php
            break;
        case "2";
        ?>
            <div class="col-sm-12 alert">
                <span class="adveLog">⚠️ !Error campos basios¡ ⚠️</span>

            </div>
            break;
<?php

    }
}
?>

<body>
    <div class="container row">
        <div class="divFondo col-sm-12">
            <img src="../resources/img/empleados.jpg" alt="" class="img-fluid fondoimg">
        </div>
        <div class="card cards col-sm-5 img-fluid" style="width: 18rem;">
            <div class="card-body">
              <h3 class="card-title">Inicia tus examenes</h3>
              <h5 class="card-subtitle mb-2 text-muted mt-3">Ingresa los siguientes datos</h5>
              <form  method="POST" class="formInicio login" id="login_form">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Nombre completo</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="nombre" aria-describedby="emailHelp" placeholder="Nombre" required maxlength="50" minlength="10">
                  <div id="emailHelp" class="form-text text-muted">Nunca compartiremos su datos personales  con nadie más.</div>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Folio del aspirante</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="folio" placeholder="Folio del aspirante" required maxlength="10" minlength="10">
                </div>
                <input type="hidden" name="enviar" value="si">
                    <button type="submit" class="btn btn-info col-sm-12 mt-3 ">Enviar</button>
              </form>
            </div>
          </div>
    </div>
    
</body>
<?php require_once("../modules/scripts.php") ?>
</html>