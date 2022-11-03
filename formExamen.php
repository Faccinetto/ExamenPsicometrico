<?php
require_once("../config/conexion.php");
if (isset($_SESSION["folio"])) {
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="../resources/css/principal.css">
    <link rel="stylesheet" href="../resources/css/exams.css">
    <link rel="stylesheet" href="../resources/css/formExam.css">
    <title>Document</title>
</head>

<body>
    <div class="container row divFormExam">
        <div class="exams col-sm-12 ">
            <div class="card cardsFomrexa col-sm-10" >
                <div class="card-body carbodyExam">
                    <div class="datosExam">
                        <h2 class="card-title ml-5 ">Examen Psicometrico:</h2>
                        <p class="card-text ml-3 mt-2">Evalúa habilidades y desarrollo general personal.</p>
                        <div class="datosPersonales ml-5">
                            <h5 class="n  mt-3">Bienvenido: <?php  echo $_SESSION["nombre"]?></h5> 
                            <h5 class="n ml-3  mt-3">Folio <?php  echo $_SESSION["folio"]?></h5>
                        </div>
                    </div>
                    <div class="contador btn-outline-light text-center">
                        <h5 class="tiem mt-3">Tiempo restante: 40:00mn</h5>
                        <button type="button" class="btn btn-info col-sm-8 mt-1" data-toggle="modal" data-target="#exampleModal2" >Terminar Examen</button>
                    </div>
                </div>
                <div class="picometricoPregu d-flex justify-content-center">
                <form class="formPsicome col-sm-12">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Contesta las siguientes preguntas</label>
                      <p class="preguntas">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam libero veritatis temporibus reiciendis sed autem officia cumque aliquid a, enim quas quo iure voluptate provident. Ab consectetur beatae dolores officiis!</p>
                      <div class="respuestasCon">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" >
                        <label for="" class="respuestas">Chalala</label>
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" >
                        <label for="" class="respuestas">Chalala</label>
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" >
                        <label for="" class="respuestas">Chalala</label>
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" >
                        <label for="" class="respuestas">Chalala</label>
                      </div>
                    </div>
                    
                    <div class="enviar col-sm-12">
                        <button type="button" class="btn btn-info col-sm-12 "  data-toggle="modal" data-target="#exampleModal2" >Enviar respuestas</button>
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</body>
<?php require_once("../modules/scripts.php") ?>

</html>
<?php

} else {
  header("location:/empleos/pages/loginExa.php");
}

?>
