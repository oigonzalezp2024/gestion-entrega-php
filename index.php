<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Contenido</title>
    <link rel="stylesheet" href="styles.css"> </head>
<body>

    <div class="form-container">
        <h2 class="form-title">Datos de Usuario</h2>
        <form action="./src/controller/AgregarContenidoController.php" method="POST" enctype="multipart/form-data" class="form">
            
            <div class="form-control">
                <label for="nombre_y_apellido">Nombre y Apellido :</label>
                <input type="text" id="nombre_y_apellido" name="nombre_y_apellido" required>
            </div>

            <div class="form-control">
                <label for="numero_de_cedula">Numero de Cedula:</label>
                <input type="number" id="numero_de_cedula" name="numero_de_cedula" required>
            </div>

            <div class="form-control">
                <label for="numero_de_telefono">Numero de Telefono:</label>
                <input type="number" id="numero_de_telefono" name="numero_de_telefono" required>
            </div>

            <div class="form-control">
                <label for="numero_de_segundo_telefono">Numero de segundo Telefono:</label>
                <input type="number" id="numero_de_segundo_telefono" name="numero_de_segundo_telefono" >
            </div>

            <div class="form-control">
                <label for="direccion">Direccion:</label>
                <input type="text" id="direccion" name="direccion" required>
            </div>

            <div class="form-control">
                <label for="direccion_de_correo_electronico">Direccion de Correo Electronico:</label>
                <input type="text" id="direccion_de_correo_electronico" name="direccion_de_correo_electronico" required>
            </div>

            <button type="submit" class="btn-submit">Agregar Contenido</button>
        </form>
    </div>

</body>
</html>
