<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="resources/DataTables-1.12.1/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="../resources/css/principal.css">
    <link rel="stylesheet" href="../resources/css/general.css">
    <link rel="stylesheet" href="../resources/css/resulGeneral.css">
    <title>Document</title>
</head>
<?php  require_once("../modules/momentanio.php") ?>
<body>
    <div class="row col-sm-12 img-fluid d-flex justify-content-around este">
        <div class="contenedor col-sm-12 img-fluid ">
            <div class="detalle">
                <h1 class="card-title">Ranquin de los mejores resultados</h1>
            </div>
            <div class="card cardMejor col-sm-12">
                <div class="datosAsoirante col-sm-4">
                    <img class="card-img-top candidato rounded-circle" src="../resources/img/candidato.jpg"
                        alt="Card image cap">
                </div>
                <div class="card-body col-sm-9 curepo">
                    <div class="nombre col-sm-3 info">
                        <h5 class="card-title">Pérez Álvarez Ángel Daniel</h5>
                    </div>
                    <div class="puesto col-sm-3 info">
                        <h5 class="card-title">Programador junior</h5>
                        <h5 class="card-title">Apirante a desarrollador</h5>
                    </div>
                    <div class="puntaje col-sm-3 info">
                        <h5 class="card-title">Examen Psicometrico 80% : Aceptado</h5>
                        <h5 class="card-title">Examen de conocimientos 83% : Aceptado</h5>

                    </div>
                    <div class="vermas col-sm-12  d-flex justify-content-around">
                        <a href="#" class="btn btn-primary col-sm-10">Ver perfil completo</a>
                    </div>

                </div>
            </div>

            <div class="card cardMejor col-sm-12">
                <div class="datosAsoirante col-sm-4">
                    <img class="card-img-top candidato rounded-circle" src="../resources/img/candidato.jpg"
                        alt="Card image cap">
                </div>
                <div class="card-body col-sm-9 curepo">
                    <div class="nombre col-sm-3 info">
                        <h5 class="card-title">Pérez Álvarez Ángel Daniel</h5>
                    </div>
                    <div class="puesto col-sm-3 info">
                        <h5 class="card-title">Programador junior</h5>
                        <h5 class="card-title">Apirante a desarrollador</h5>
                    </div>
                    <div class="puntaje col-sm-3 info">
                        <h5 class="card-title">Examen Psicometrico 80% : Aceptado</h5>
                        <h5 class="card-title">Examen de conocimientos 83% : Aceptado</h5>

                    </div>
                    <div class="vermas col-sm-12  d-flex justify-content-around">
                        <a href="#" class="btn btn-primary col-sm-10">Ver perfil completo</a>
                    </div>
                </div>
            </div>
            <div class="registro">
                <h1 class="card-title mt-5">Registros</h1>
            </div>
            <div class=" mt-5">
                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Puesto</th>
                            <th>Ciudad</th>
                            <th>Año de Ingreso</th>
                            <th>Salario</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>Arquitecto</td>
                            <td>Edinburgh</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                        </tr>
                        <tr>
                            <td>Garrett Winters</td>
                            <td>Contador</td>
                            <td>Tokyo</td>
                            <td>2011/07/25</td>
                            <td>$170,750</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <?php  require_once("../modules/footer.php") ?>
    </div>

</body>
<?php require_once("../modules/scriptsAdm.php") ?>

</html>