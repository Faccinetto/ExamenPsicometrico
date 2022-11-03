<header class="encabezado row col-sm-12">
  <div class="divPrincipal col-sm-12">
    <div class="divLog col-sm-4">
      <img src="../resources/img/Logo sobre moda femenina minimalista neutral.png" alt="" class="img-fluid imglogos">
    </div>
    <div class="divParte2 col-sm-8">
      <div class="titulo col-sm-6">
        <h3 class="textit text-left">Reclutamiento Especializado IT Outsourcing</h3>
      </div>
      <div class="busqueda col-sm-6">
        <nav class="navbar navbar-light bg-light busPrinciss col-sm-12">
          <form class="form-inline busPrinciss">
            <input class="form-control mr-sm-2 sea" type="search" placeholder="Buscar" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
          </form>
        </nav>
      </div>
    </div>
  </div>
  <div class="divNavheader col-sm-12 d-flex justify-content-around">
    <nav class="navbar navbar-expand-lg navbar-light bg-light nadVardsHeader d-flex justify-content-around">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse navPincil" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Dropdown
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>

        </ul>
        <div class="collapse navbar-collapse elPerfile" id="navbarNavDropdown">
          <a class="navbar-brand" href="#">Bienvenido: <?php echo $_SESSION["nombre"] ?></a>
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Perfil
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="../modules/logut.php">Cerrar sesion</a>
                <a class="dropdown-item" href="#"><?php echo $_SESSION["nombre"] ?></a>
                <a class="dropdown-item" href="#">Perfil</a>

              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
</header>