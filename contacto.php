<?php
// Detectar idioma seleccionado o usar español por defecto
$lang_code = $_GET['lang'] ?? 'es';

// Ruta del archivo de idioma
$file = "languages/" . $lang_code . ".php";

// Incluir el archivo de idioma correspondiente
if (file_exists($file)) {
    include($file);
} else {
    include("languages/es.php");
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $lang["contact_title"] ?></title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>🐾 Adoptify</h1>
    <nav class="menu">
      <ul>
      <li><a href="index.php?lang=<?= $lang_code ?>"><?= $lang["home"] ?? "Inicio" ?></a></li>
      <li><a href="adopciones.php?lang=<?= $lang_code ?>"><?= $lang["pets"] ?? "Mascotas" ?></a></li>
      <li><a href="historias.php?lang=<?= $lang_code ?>"><?= $lang["stories"] ?? "Historias" ?></a></li>
      <li><a href="formulario_adopcion.php?lang=<?= $lang_code ?>"><?= $lang["form"] ?? "Formulario" ?></a></li>
     </ul>
    </nav>

    <!-- Selector de idioma -->
  <form method="get" id="languageForm">
    <label for="lang">🌐</label>
    <select name="lang" id="lang" onchange="document.getElementById('languageForm').submit();">
      <option value="es" <?= ($lang_code == 'es') ? 'selected' : '' ?>>🇪🇸 Español</option>
      <option value="en" <?= ($lang_code == 'en') ? 'selected' : '' ?>>🇬🇧 English</option>
      <option value="pt" <?= ($lang_code == 'pt') ? 'selected' : '' ?>>🇧🇷 Português</option>
    </select>
  </form>
  </header>

  <main>
    <h2><?= $lang["contact_heading"] ?></h2>
    <p><?= $lang ["contact_description"] ?></p>
    <p><strong><?= $lang["email"]?></strong><?= $lang["contact_email"]?></p>
    <p><strong><?= $lang ["phone"]?></strong><?= $lang["contact_phone"]?></p>
  </main>

  <footer>
    <p>© 2025 Adoptify</p>
  </footer>
</body>
</html>
