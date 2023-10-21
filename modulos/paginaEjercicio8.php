<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body class="bg-dark">
    <textarea class="form-control w-50 mx-auto mt-5 " placeholder="Leave a comment here" id="floatingTextarea2" style="height: 500px">
    echo "
    ";
    echo "Desarrollo: ";
    echo "
    ";
    $nombre = ($_REQUEST["nombre"]);
    echo "Nombre: $nombre";
    echo "
    ";
    if(isset($_REQUEST["enviar"])){
        if ($_REQUEST["radio1"] == "No tiene"){
            echo "Esta persona no tiene estudios";
        }
        if($_REQUEST["radio1"] == "Tiene p")
        {
            echo "Esta persona tiene estudios primarios";
        }
        if($_REQUEST["radio1"] == "tiene s")
        {
            echo "Esta persona tiene estudios secundarios";
        }
    }  
<?php
    echo "
    ";
    echo "Resultado: ";
    echo "
    ";
    $nombre = ($_POST["nombre"]);
    $cant = 0;
    if(isset($_POST["enviar"])){
        if (isset($_POST["check1"])){
            $cant++;
        }
        if (isset($_POST["check2"]))
        {
            $cant++;
        }
        if (isset($_POST["check3"]))
        {
            $cant++;
        }
        if (isset($_POST["check4"])){
            $cant++;
        }
    }
    echo "$nombre practica $cant deportes";
?>
</textarea>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>