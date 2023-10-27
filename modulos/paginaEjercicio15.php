<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body class="bg-dark">
    <textarea class="form-control w-50 mx-auto mt-5 " placeholder="Leave a comment here" id="floatingTextarea2" style="height: 500px">
    function verificarClaves($cla1, $cla2)
    {
        if ($cla1 != $cla2)
            echo "Las claves ingresadas son distintas";
    }

    verificarClaves($_REQUEST['clave1'], $_REQUEST['clave2']);
    <?php

    function verificarClaves($cla1, $cla2)
    {
        if ($cla1 != $cla2)
            echo "Las claves ingresadas son distintas";
    }

    verificarClaves($_REQUEST['clave1'], $_REQUEST['clave2']);

    ?>
<h2>Se verificaron las claves ingresadas.</h2>

</textarea>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>