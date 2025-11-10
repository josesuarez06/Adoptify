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
<html lang="<?= $lang_code ?>">
<head>
    <meta charset="UTF-8">
    <title><?= $lang["title"] ?? "Adoptify" ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1><?= $lang["welcome"] ?? "Bienvenido a Adoptify" ?></h1>

    <!-- 🌐 Selector de idioma -->
    <form method="get" id="languageForm" class="selector-idioma">
      <label for="lang"><?= $lang["select_lang"] ?? "Seleccionar idioma:" ?></label>
      <select name="lang" id="lang" onchange="document.getElementById('languageForm').submit();">
        <option value="es" <?= ($lang_code == 'es') ? 'selected' : '' ?>>🇪🇸 Español</option>
        <option value="en" <?= ($lang_code == 'en') ? 'selected' : '' ?>>🇬🇧 English</option>
        <option value="pt" <?= ($lang_code == 'pt') ? 'selected' : '' ?>>🇧🇷 Português</option>
      </select>
    </form>

    <!-- 🌍 Menú de navegación -->
    <nav class="menu">
      <ul>
        <li><a href="index.php?lang=<?= $lang_code ?>"><?= $lang["home"] ?? "Inicio" ?></a></li>
        <li><a href="adopciones.php?lang=<?= $lang_code ?>"><?= $lang["pets"] ?? "Mascotas" ?></a></li>
        <li><a href="formulario_adopcion.php?lang=<?= $lang_code ?>"><?= $lang["form"] ?? "Formulario" ?></a></li>
        <li><a href="historias.php?lang=<?= $lang_code ?>"><?= $lang["stories"] ?? "Historias" ?></a></li>
        <li><a href="contacto.php?lang=<?= $lang_code ?>"><?= $lang["contact"] ?? "Contacto" ?></a></li>
      </ul>
    </nav>
  </header>

  

  <footer>
    <p>© 2025 Adoptify 🐾</p>
  </footer>
</body>
</html>

