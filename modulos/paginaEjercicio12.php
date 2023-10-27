<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body class="bg-dark">
    <textarea class="form-control w-50 mx-auto mt-5 " placeholder="Leave a comment here" id="floatingTextarea2" style="height: 500px">
        DESARROLLO:
        echo "
        ";
        echo "RESULTADO: ";
        echo "
        ";
        echo $_POST["contrato"];
        <?php
              $ar = fopen("../archivo/datos.txt", "a") or
              die("Problemas en la creacion");
            fputs($ar, "Nombre:");
            fputs($ar, $_POST['nombre']);
            fputs($ar, "\n");
            fputs($ar, "Dirección:");
            fputs($ar, $_POST['direccion']);
            fputs($ar, "\n");
            if (isset($_POST['jamonqueso'])) {
              fputs($ar, "Cantidad de Jamón y Queso:");
              fputs($ar, $_POST['cantjamonqueso']);
              fputs($ar, "\n");
            }
            if (isset($_POST['napolitana'])) {
              fputs($ar, "Cantidad de Napolitana:");
              fputs($ar, $_POST['cantnapolitana']);
              fputs($ar, "\n");
            }
            if (isset($_POST['muzzarella'])) {
              fputs($ar, "Cantidad de Muzzarella:");
              fputs($ar, $_POST['cantmuzzarella']);
              fputs($ar, "\n");
            }
          
            fputs($ar, "--------------------------------------------------------");
            fputs($ar, "\n");
            fclose($ar);
            echo "El pedido se cargó correctamente.";
        ?>
    </textarea>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>