<div class="form-floating mt-5 ms-5">
    <h3 style="color: white;" class="text-center mb-3">6 - Envío de datos de un FORMULARIO (controles text y submit)</h3>
    <form method="post" action="modulos/paginaEjercicio6.php" style="color: white;" class="col-md-6 offset-md-3 text-center mb-3">
        Ingrese el nombre:
        <br>
        <input type="text" name="nombre" class="mb-2">
        <br>
        Ingrese la edad:
        <br>
        <input type="text" name="edad" class="mb-2">
        <br>
        <input type="submit" value="confirmar">
    </form>
    <textarea class="form-control w-50 mx-auto " placeholder="Leave a comment here" id="floatingTextarea2" style="height: 500px">

        <?php
         
            echo $_REQUEST['nombre'];
            echo "
            ";
            if ($_REQUEST['edad'] >= 18){
                echo "Es mayor de edad";
            } else {
                echo "No es mayor de edad";
            }
         
        ?>
    </textarea>
</div>