
<!DOCTYPE html>
<html lang="en">


<?php require_once("../modules/headAdmin.php") ?>
<?php require_once("../modules/momentanio.php") ?>
<body>
    <div class="container row ">
        <div class="divInstrucciones col-sm-12 ">
            <h1 class="ml-4 mb-4">Resultados generales</h1>
            <p class="ml-4">Acontinuacion se precentan los resultados generales</p>
        </div>
        <div class="exams col-sm-12 ">
            <div class="table-responsive">
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
