<!-- Creamos el menu para navegar por las diferentes paginas y volver usamos el boostrap -->
<!-- color de la barra y creamos el nombre fondo para la clase de css-->
<nav class="navbar navbar-expand-lg navbar-light fondo"> 
<div class="container-fluid">
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
                  <creamos los apartados del menu y con href donde queremos que navegen y entren>
                    <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="informacion.php">Informacion</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="productos.php">Productos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="presupuesto.php">Presupuesto</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="cita.php">Cita</a>
                  </li>
                 </ul>
      <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
          <input type="search" class="form-control form-control-dark" placeholder="Buscar..." aria-label="Search" >
      </form>
      
      <form class="d-flex" action="registro.php" method="POST">
        <button class="btn btn-warning mb-3 mb-lg-0"  type="submit">Registro</button>
      </form>
      
      <form class="d-flex" action="login.php" method="POST">
        <button class="btn btn-warning mb-3 mb-lg-0" type="submit">Iniciar Sesión</button>
      </form>
    

    </div>
  </div>
</nav>
         
         

             

                
