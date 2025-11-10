<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario de Adopción - Adoptify</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      margin: 0;
      padding: 20px;
      background: 
      linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)),
      url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQEWOIfu28LQJhtDK9RYi6DZBiYmtv-gpHsIQ&s');
      background-size: cover;
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-position: center;
    }

    form {
      background: white;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 0 15px rgba(0,0,0,0.3);
      width: 100%;
      max-width: 450px;
      overflow-y: auto;
      max-height: 90vh;
    }

    h2 {
      text-align: center;
      color: #333;
      margin-bottom: 20px;
    }

    label {
      display: block;
      margin-top: 15px;
      font-weight: bold;
      color: #333;
    }

    input, textarea, select {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 14px;
    }

    textarea {
      resize: none;
    }

    button {
      margin-top: 20px;
      width: 100%;
      background-color: #4CAF50;
      color: white;
      padding: 12px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      font-size: 16px;
      font-weight: bold;
    }

    button:hover {
      background-color: #45a049;
    }

    .checkbox-container {
      display: flex;
      align-items: center;
      margin-top: 15px;
    }

    .checkbox-container label {
      margin: 0 0 0 10px;
      font-weight: normal;
    }
  </style>
</head>
<body>

  <form action="guardar_adopcion.php" method="POST">
    <h2>Formulario de Adopción</h2>

    <label for="nombre">Nombre completo:</label>
    <input type="text" id="nombre" name="nombre" required>

    <label for="tipoDocumento">Tipo de Documento:</label>
    <select id="tipoDocumento" name="tipoDocumento" required>
      <option value="">Seleccione</option>
      <option value="Cédula">Cédula</option>
      <option value="Tarjeta de Identidad">Tarjeta de Identidad</option>
      <option value="Pasaporte">Pasaporte</option>
    </select>

    <label for="numeroDocumento">Número de Documento:</label>
    <input type="text" id="numeroDocumento" name="numeroDocumento" placeholder="Ingrese su número" required>

    <label for="estadoCivil">Estado Civil:</label>
    <select id="estadoCivil" name="estadoCivil" required>
      <option value="">Seleccione</option>
      <option value="Soltero">Soltero</option>
      <option value="Casado">Casado</option>
      <option value="Unión libre">Unión libre</option>
      <option value="Divorciado">Divorciado</option>
    </select>

    <label for="nivelEducativo">Nivel Educativo:</label>
    <select id="nivelEducativo" name="nivelEducativo" required>
      <option value="">Seleccione</option>
      <option value="Primaria">Primaria</option>
      <option value="Secundaria">Secundaria</option>
      <option value="Técnico">Técnico</option>
      <option value="Tecnólogo">Tecnólogo</option>
      <option value="Universitario">Universitario</option>
      <option value="Posgrado">Posgrado</option>
    </select>

    <label for="ocupacion">Ocupación:</label>
    <input type="text" id="ocupacion" name="ocupacion" placeholder="Ej: Estudiante, Ingeniero, etc." required>

    <label for="estrato">Estrato:</label>
    <select id="estrato" name="estrato" required>
      <option value="">Seleccione</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
    </select>

    <label for="email">Correo electrónico:</label>
    <input type="email" id="email" name="email" required>

    <label for="telefono">Teléfono:</label>
    <input type="text" id="telefono" name="telefono" required>

    <label for="pais">País:</label>
    <select id="pais" name="pais" required>
      <option value="">Seleccione su país</option>
      <option value="Colombia">Colombia</option>
      <option value="México">México</option>
      <option value="Argentina">Argentina</option>
      <option value="España">España</option>
      <option value="Chile">Chile</option>
      <option value="Perú">Perú</option>
    </select>

    <label for="ciudad">Ciudad:</label>
    <input type="text" id="ciudad" name="ciudad" placeholder="Ciudad" required>

    <label for="direccion">Dirección:</label>
    <input type="text" id="direccion" name="direccion" placeholder="Ej: Calle 10 # 20-30" required>

    <label for="mascota">Mascota que deseas adoptar:</label>
    <select id="mascota" name="mascota" required>
      <option value="">Selecciona una mascota</option>
      <option value="Perro">Perro</option>
      <option value="Gato">Gato</option>
      <option value="Hamster">Hamster</option>
    </select>

    <label for="mensaje">¿Por qué quieres adoptar?</label>
    <textarea id="mensaje" name="mensaje" rows="4" required></textarea>

    <div class="checkbox-container">
      <input type="checkbox" id="terminos" name="terminos" required>
      <label for="terminos">Acepto los términos y condiciones</label>
    </div>

    <button type="submit">Enviar solicitud</button>
  </form>

</body>
</html>
