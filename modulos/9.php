<div class="form-floating mt-5 ms-5">
    <h3 style="color: white;" class="text-center mb-3">9 - FORMULARIO (control Select)</h3>
    <form method="post" action="modulos/paginaEjercicio9.php" style="color: white;" class="col-md-6 offset-md-3 text-center mb-3">
        Ingrese el nombre:
        <br>
        <input type="text" name="nombre" class="mb-2">
        <br>
        Seleccione sus Ingresos Mensuales
        <br>
        <select name="operacion">
            <option value="">$1 - $1000</option>
            <option value="">$1001 - $3000</option>
            <option value=">3000">Mayor a $3000</option>
        </select>
        <input type="submit" value="confirmar" name="enviar">
    </form>
</div>