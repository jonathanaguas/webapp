<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Listado de Clientes</title>
  <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
  <h1>Clientes Registrados</h1>

  <!-- Botón Nuevo Cliente -->
  <form action="../views/cliente_form.php" method="GET">
    <button type="submit" class="btn">Nuevo Cliente</button>
  </form>

  <table>
    <tr><th>ID</th><th>Nombre</th><th>Correo</th><th>Teléfono</th><th>Acciones</th></tr>
    <?php foreach($clientes as $c): ?>
      <tr>
        <td><?= $c['id'] ?></td>
        <td><?= htmlspecialchars($c['nombre']) ?></td>
        <td><?= htmlspecialchars($c['correo']) ?></td>
        <td><?= htmlspecialchars($c['telefono']) ?></td>
        <td>
          <!-- Botón Editar -->
          <form action="../public/router.php" method="GET" style="display:inline;">
            <input type="hidden" name="action" value="edit">
            <input type="hidden" name="id" value="<?= $c['id'] ?>">
            <button type="submit" class="btn">Editar</button>
          </form>

          <!-- Botón Eliminar -->
          <form action="../public/router.php?action=delete" method="POST" style="display:inline;">
            <input type="hidden" name="id" value="<?= $c['id'] ?>">
            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Eliminar este cliente?')">Eliminar</button>
          </form>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>
</html>