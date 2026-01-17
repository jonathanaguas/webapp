<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Cliente</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="../assets/js/script.js"></script>
</head>
<body>
    <h1>Editar Cliente</h1>
    <form name="form" action="../public/router.php?action=update" method="POST" onsubmit="return validarFormulario()">
        <input type="hidden" name="id" value="<?= $cliente['id'] ?>">

        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre" value="<?= htmlspecialchars($cliente['nombre']) ?>" required>

        <label for="correo">Correo</label>
        <input type="email" id="correo" name="correo" value="<?= htmlspecialchars($cliente['correo']) ?>" required>

        <label for="telefono">Teléfono</label>
        <input type="text" id="telefono" name="telefono" value="<?= htmlspecialchars($cliente['telefono']) ?>">

        <button type="submit" class="btn">Actualizar</button>
    </form>
</body>
</html>