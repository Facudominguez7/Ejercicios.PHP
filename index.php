<!DOCTYPE html>
<html lang="es">

<head>
  <meta name="viewport" content="width=device-width , initial-scale=1.0" />
  <meta charset="UTF-8" />
  <title>HOLA</title>
  <link rel="stylesheet" href="estilos.css" />
</head>

<body class="bg-dark">
  <nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand">Navbar</a>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </nav>
  <header></header>
  <main>
    <div class="d-flex justify-content-center mt-5">
      <div class="list-group w-50">
        <a href="index.php?pagina=1" class="list-group-item list-group-item-action active" aria-current="true">
          Ejercicio 1
        </a>
        <a href="index.php?pagina=2" class="list-group-item list-group-item-action">Ejercicio 2</a>
        <a href="index.php?pagina=3" class="list-group-item list-group-item-action">Ejercicio 3</a>
        <a href="index.php?pagina=4" class="list-group-item list-group-item-action">Ejercicio 4</a>
        <a href="index.php?pagina=5" class="list-group-item list-group-item-action" aria-disabled="true">Ejercicio 5</a>
        <div>
          <?php
          if (!empty($_GET['pagina'])) {
            include('modulos/' . $_GET['pagina'] . ".php");
          }
          ?>
        </div>


      </div>
    </div>
  </main>
  <footer></footer>
</body>

</html>