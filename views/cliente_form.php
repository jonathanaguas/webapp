<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nuevo Registro</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="../assets/js/script.js"></script>
</head>
<body>
    <h1>Nuevo Registro</h1>
    <form name="form" action="../public/router.php?action=store" method="POST" onsubmit="return validarFormulario()">
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre" placeholder="Ingrese nombre" required>

        <label for="correo">Correo</label>
        <input type="email" id="correo" name="correo" placeholder="Ingrese correo" required>

        <label for="telefono">Teléfono</label>
        <input type="text" id="telefono" name="telefono" placeholder="Ingrese teléfono">

        <button type="submit" class="btn">Guardar</button>
    </form>
</body>
</html>