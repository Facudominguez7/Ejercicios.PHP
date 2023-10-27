<?php
include('includes/conexion.php');
conectar();
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta name="viewport" content="width=device-width , initial-scale=1.0" />
  <meta charset="UTF-8" />
  <title>Ejercicios PHP</title>
  <link rel="stylesheet" href="estilos.css" />
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OwFVZ9J6A" crossorigin="anonymous"></script>
</head>


<body class="bg-dark">
  <main>
    <div class="dropdown px-5 mt-5 ms-5">
      <button class="btn btn-primary btn-lg p-3 fs-4 dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        Ejercicios
      </button>
      <ul class="dropdown-menu">
        <li>
          <a class="dropdown-item" type="button" href="index.php">
            Inicio
          </a>
        </li>
        <?php
        $sql = "SELECT * FROM menu";
        $sql = mysqli_query($con, $sql);
        if (mysqli_num_rows($sql) != 0) {
          while ($r = mysqli_fetch_array($sql)) {
        ?>
            <li>
              <a class="dropdown-item" type="button" href="index.php?pagina=<?php echo $r['archivoItem'] ?>" class="nav-link active" aria-current="true">
                <?php echo $r['nombreItem'] ?>
              </a>
            </li>
        <?php
          }
        }
        ?>
      </ul>
    </div>
    <div>
      <?php
      if (!empty($_GET['pagina'])) {
        include('modulos/' . $_GET['pagina'] . ".php");
      }
      ?>
    </div>
  </main>
  <footer></footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>