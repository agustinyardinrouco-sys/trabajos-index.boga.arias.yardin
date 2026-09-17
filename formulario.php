    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    <form action="index.php" method="post">
        <div>

            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre">

        </div>
        <br>

        <label for="Verduras"> Verduras</label>
        <select name="Verduras" id="Verduras">
        <option value="Lechuga">Lechuga</option>
        <option value="Acelga">Acelga</option>
        <option value="Broccoli">Broccoli</option>
        <option value="Manzana">Manzana</option>
</select>

<br><br>

<label for="opcion-1">
<input type="checkbox" value="Efectivo" id="opcion-1" name="Forma de Pago">
Efectivo

</label>

<label for="opcion-2">
<input type="checkbox" value="Tarjeta" id="opcion-2" name="Forma de Pago">
Tarjeta

</label>
<button type="submit"> Enviar Formulario</button>

    </form>
    </body>
    </html>