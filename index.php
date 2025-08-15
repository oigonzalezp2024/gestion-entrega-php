<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Datos</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>

    <div class="form-container">
        <h2 class="form-title">Completa tus datos</h2>
        <p class="form-description">¡Ya casi terminas! Llena estos campos para finalizar tu compra de forma segura.</p>
        <form action="./src/controller/AgregarContenidoController.php" method="POST" enctype="multipart/form-data" class="form">
            
            <div class="form-group">
                <label for="nombre_y_apellido">Nombre y Apellido</label>
                <input type="text" id="nombre_y_apellido" name="nombre_y_apellido" required>
            </div>

            <div class="form-group">
                <label for="numero_de_cedula">Número de Cédula</label>
                <input type="number" id="numero_de_cedula" name="numero_de_cedula" required>
            </div>

            <div class="form-group">
                <label for="numero_de_telefono">Número de Teléfono</label>
                <input type="number" id="numero_de_telefono" name="numero_de_telefono" required>
            </div>

            <div class="form-group">
                <label for="numero_de_segundo_telefono">Número de segundo Teléfono (Opcional)</label>
                <input type="number" id="numero_de_segundo_telefono" name="numero_de_segundo_telefono">
            </div>

            <div class="form-group">
                <label for="direccion">Dirección</label>
                <input type="text" id="direccion" name="direccion" required>
            </div>

            <div class="form-group">
                <label for="direccion_de_correo_electronico">Dirección de Correo Electrónico</label>
                <input type="email" id="direccion_de_correo_electronico" name="direccion_de_correo_electronico" required>
            </div>

            <button type="submit" class="btn-submit">Finalizar Compra</button>
        </form>
    </div>

</body>
</html>