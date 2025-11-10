<?php include("includes/header.php"); ?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Panel de administración | Adoptify</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Panel de administración</h1>
  </header>

  <main>
    <h2>Solicitudes recibidas</h2>
    <table>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Teléfono</th>
        <th>Mascota</th>
        <th>Mensaje</th>
        <th>Fecha</th>
      </tr>
      <?php
        $sql = "SELECT * FROM solicitudes ORDER BY fecha DESC";
        $resultado = $conn->query($sql);
        if ($resultado->num_rows > 0) {
          while ($fila = $resultado->fetch_assoc()) {
            echo "<tr>
                    <td>{$fila['id']}</td>
                    <td>{$fila['nombre']}</td>
                    <td>{$fila['email']}</td>
                    <td>{$fila['telefono']}</td>
                    <td>{$fila['mascota']}</td>
                    <td>{$fila['mensaje']}</td>
                    <td>{$fila['fecha']}</td>
                  </tr>";
          }
        } else {
          echo "<tr><td colspan='7'>No hay solicitudes todavía.</td></tr>";
        }
      ?>
    </table>
  </main>

  <footer>
    <p>© 2025 Adoptify</p>
  </footer>
</body>
</html>
