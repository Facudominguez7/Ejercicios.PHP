<div class="form-floating mt-5 ms-5">
    <h3 style="color: white;" class="text-center mb-3">13 - Lectura Archivo de texto</h3>
    <textarea name="contrato" class="form-control w-50 mx-auto " placeholder="Leave a comment here" id="floatingTextarea2" style="height: 500px">
        DESARROLLO
        $ar = fopen("archivo/datos.txt", "r") or
            die("No se pudo abrir el archivo");
        while (!feof($ar)) {
            $linea = fgets($ar);
            $lineasalto = nl2br($linea);
            echo $lineasalto;
        }
        fclose($ar);
        <?php
        echo ("RESULTADO:");
        echo ("
        ");
        $ar = fopen("archivo/datos.txt", "r") or
            die("No se pudo abrir el archivo");
        while (!feof($ar)) {
            $linea = fgets($ar);
            $lineasalto = nl2br($linea);
            echo $lineasalto;
        }
        fclose($ar);
        ?>
        </textarea>
    <input type="submit" value="confirmar" name="enviar">
</div>