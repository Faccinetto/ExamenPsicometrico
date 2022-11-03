<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="../resources/css/principal.css">
    <link rel="stylesheet" href="../resources/css/general.css">
    <link rel="stylesheet" href="../resources/css/resulGeneral.css">
    <link rel="stylesheet" href="../resources/css/graficas.css">
    <title>Document</title>
</head>
<?php  require_once("../modules/momentanio.php") ?>
<body>
    <div class="container row col-sm-12 img-fluid d-flex justify-content-around">
        <div class="contenedor col-sm-12 img-fluid d-flex justify-content-around">
        <div class="divInstrucciones col sm-12">
                <h1 class="card-title">Graficos de resultados</h1>
                
            </div>    
        <div class="botonImprimir col-sm-12">
                <button type="button" class="btn btn-info col-sm-5">Imprimri graficas</button>
            </div>
            <div class="card graficosVi">
                <div class="card-body">
                  <h2 class="card-title">Grafico de resultados generales</h2>
                  <img src="../resources/img/grabarra.jpg" class="card-img-top gra" alt="...">
                </div>
              </div>
              <div class="card graficosVi">
                <div class="card-body">
                  <h2 class="card-title">Grafico de resultados generales</h2>
                  <img src="../resources/img/grabarra.jpg" class="card-img-top gra" alt="...">
                </div>
              </div>
        </div>
        <?php  require_once("../modules/footer.php") ?>
    </div>
    
</body>
<?php require_once("../modules/scripts.php") ?>
</html>