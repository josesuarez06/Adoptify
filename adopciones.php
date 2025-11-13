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
  <title>Mascotas disponibles | Adoptify</title>
  <link rel="stylesheet" href="style.css">
  <style>
    .galeria {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 20px;
      padding: 20px;
    }

    .tarjeta {
      background-color: rgba(255, 255, 255, 0.9);
      border-radius: 15px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      overflow: hidden;
      text-align: center;
      padding-bottom: 15px;
      transition: transform 0.3s;
    }

    .tarjeta:hover {
      transform: scale(1.03);
    }

    .tarjeta img {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }

    .info {
      text-align: left;
      padding: 0 15px;
      font-size: 0.95rem;
      color: #2b6777;
    }

    .info strong {
      color: #233fdaff;
    }

    .info p{
      color: #050000ff
    }
  </style>
</head>
<body>
  <header>
    <h1><?= $lang["adoptions_heading"]?></h1>
    <nav class="menu">
      <ul>
      <li><a href="index.php?lang=<?= $lang_code ?>"><?= $lang["home"] ?? "Inicio" ?></a></li>
      <li><a href="formulario_adopcion.php?lang=<?= $lang_code ?>"><?= $lang["form"] ?? "Formulario" ?></a></li>
      <li><a href="historias.php?lang=<?= $lang_code ?>"><?= $lang["stories"] ?? "Historias" ?></a></li>
      <li><a href="contacto.php?lang=<?= $lang_code ?>"><?= $lang["contact"] ?? "Contacto" ?></a></li>
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

  <main class="mascotas">
    <h2><?= $lang["available_pets"] ?></h2>
    <div class="galeria">

      
      <div class="tarjeta">
        <img src="https://blog.mascotaysalud.com/wp-content/uploads/2019/09/LABRADOR-RETRIEVER-TUMBADO.jpg" alt="Perro">
        <h3>Tony</h3>
        <div class="info">
          <p><strong><?= $lang["breed"] ?></strong><?= $lang["breed_1"]?></p>
          <p><strong><?= $lang["age"]?></strong> <?= $lang["age_1"]?></p>
          <p><strong><?= $lang["gender"]?></strong> <?= $lang["gender_1"]?></p>
          <p><strong><?= $lang["size"]?></strong> <?= $lang["size_1"]?></p>
          <p><strong><?= $lang["personality"]?></strong> <?= $lang["personality_1"]?></p>
          <p><strong><?= $lang["vaccines"]?></strong> <?= $lang["vaccines_1"]?></p>
          <p><strong><?= $lang["location"]?></strong> <?= $lang["location_1"]?></p>
        </div>
      </div>

      <div class="tarjeta">
        <img src="https://cdn.shopify.com/s/files/1/0268/6861/files/dog-1919406_960_720_grande.jpg?v=1530792114" alt="Perro">
        <h3>Max</h3>
        <div class="info">
          <p><strong><?= $lang["breed"] ?></strong><?= $lang["breed_2"]?></p>
          <p><strong><?= $lang["age"]?></strong><?= $lang["age_2"]?></p>
          <p><strong><?= $lang["gender"]?></strong> <?= $lang["gender_2"]?></p>
          <p><strong><?= $lang["size"]?></strong> <?= $lang["size_2"]?></p>
          <p><strong><?= $lang["personality"]?></strong> <?= $lang["personality_2"]?></p>
          <p><strong><?= $lang["vaccines"]?></strong> <?= $lang["vaccines_2"]?></p>
          <p><strong><?= $lang["location"]?></strong> <?= $lang["location_2"]?></p>
        </div>
      </div>

      <div class="tarjeta">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSb8NQUsi6g1u2tDWD-3DAtfn9MS0_gih3a2A&s" alt="Perro">
        <h3>Bruna</h3>
        <div class="info">
          <p><strong><?= $lang["breed"] ?></strong><?= $lang["breed_3"]?></p>
          <p><strong><?= $lang["age"]?></strong> <?= $lang["age_3"]?></p>
          <p><strong><?= $lang["gender"]?></strong> <?= $lang["gender_3"]?></p>
          <p><strong><?= $lang["size"]?></strong> <?= $lang["size_3"]?></p>
          <p><strong><?= $lang["personality"]?></strong> <?= $lang["personality_3"]?></p>
          <p><strong><?= $lang["vaccines"]?></strong> <?= $lang["vaccines_3"]?></p>
          <p><strong><?= $lang["location"]?></strong> <?= $lang["location_3"]?></p>
        </div>
      </div>

   
      <div class="tarjeta">
        <img src="https://i.pinimg.com/736x/fb/ac/2a/fbac2a1c579a80ee732fc31ce970238f.jpg" alt="Gato">
        <h3>Luna</h3>
        <div class="info">
          <p><strong><?= $lang["breed"] ?></strong><?= $lang["breed_4"]?></p>
          <p><strong><?= $lang["age"]?></strong> <?= $lang["age_4"]?></p>
          <p><strong><?= $lang["gender"]?></strong> <?= $lang["gender_4"]?></p>
          <p><strong><?= $lang["color"]?></strong> <?= $lang["color_4"]?></p>
          <p><strong><?= $lang["personality"]?></strong> <?= $lang["personality_4"]?></p>
          <p><strong><?= $lang["vaccines"]?></strong> <?= $lang["vaccines_4"]?></p>
          <p><strong><?= $lang["location"]?></strong> <?= $lang["location_4"]?></p>
        </div>
      </div>

      <div class="tarjeta">
        <img src="https://www.mundodeportivo.com/files/og_thumbnail/uploads/2018/03/30/60e76fe1d7dc2.jpeg" alt="Gato">
        <h3>Simba</h3>
        <div class="info">
          <p><strong><?= $lang["breed"] ?></strong><?= $lang["breed_5"]?></p>
          <p><strong><?= $lang["age"]?></strong> <?= $lang["age_5"]?></p>
          <p><strong><?= $lang["gender"]?></strong> <?= $lang["gender_5"]?></p>
          <p><strong><?= $lang["color"]?></strong> <?= $lang["color_5"]?></p>
          <p><strong><?= $lang["personality"]?></strong> <?= $lang["personality_5"]?></p>
          <p><strong><?= $lang["vaccines"]?></strong> <?= $lang["vaccines_5"]?></p>
         <p><strong><?= $lang["location"]?></strong> <?= $lang["location_5"]?></p>
        </div>
      </div>

      <div class="tarjeta">
        <img src="https://www.elespectador.com/resizer/v2/FSM63KGF5BF3XMX6FMNRFQIHJY.jpg?auth=c1284085f3dba7c3662130b3780e3549f13948a0016b7e82e3e6b056b89edd37&width=920&height=613&smart=true&quality=60" alt="Gato">
        <h3>Nina</h3>
        <div class="info">
          <p><strong><?= $lang["breed"] ?></strong><?= $lang["breed_6"]?></p>
          <p><strong><?= $lang["age"]?></strong> <?= $lang["age_6"]?></p>
          <p><strong><?= $lang["gender"]?></strong> <?= $lang["gender_6"]?></p>
          <p><strong><?= $lang["color"]?></strong> <?= $lang["color_6"]?></p>
          <p><strong><?= $lang["personality"]?></strong> <?= $lang["personality_6"]?></p>
          <p><strong><?= $lang["vaccines"]?></strong> <?= $lang["vaccines_6"]?></p>
         <p><strong><?= $lang["location"]?></strong> <?= $lang["location_6"]?></p>
        </div>
      </div>

     
      <div class="tarjeta">
        <img src="https://frescorganico.com/wp-content/uploads/2024/08/Compra-Conejo-Mini-Rex-en-Venta-Criado-en-Granja-Frescorganico.jpg" alt="Conejo">
        <h3>Copito</h3>
        <div class="info">
          <p><strong><?= $lang["breed"] ?></strong><?= $lang["breed_7"]?></p>
          <p><strong><?= $lang["age"]?></strong> <?= $lang["age_7"]?></p>
          <p><strong><?= $lang["gender"]?></strong> <?= $lang["gender_7"]?></p>
          <p><strong><?= $lang["color"]?></strong> <?= $lang["color_7"]?></p>
          <p><strong><?= $lang["personality"]?></strong> <?= $lang["personality_7"]?></p>
          <p><strong><?= $lang["vaccines"]?></strong> <?= $lang["vaccines_7"]?></p>
          <p><strong><?= $lang["location"]?></strong> <?= $lang["location_7"]?></p>
        </div>
      </div>

      <div class="tarjeta">
        <img src="https://www.tiendanimal.es/articulos/wp-content/uploads/2018/01/Conejo-Holland-Lop-1200x900.jpg" alt="Conejo">
        <h3>Pelusa</h3>
        <div class="info">
          <p><strong><?= $lang["breed"] ?></strong><?= $lang["breed_8"]?></p>
          <p><strong><?= $lang["age"]?></strong> <?= $lang["age_8"]?></p>
          <p><strong><?= $lang["gender"]?></strong> <?= $lang["gender_8"]?></p>
          <p><strong><?= $lang["color"]?></strong> <?= $lang["color_8"]?></p>
          <p><strong><?= $lang["personality"]?></strong> <?= $lang["personality_8"]?></p>
          <p><strong><?= $lang["vaccines"]?></strong> <?= $lang["vaccines_8"]?></p>
          <p><strong><?= $lang["location"]?></strong> <?= $lang["location_8"]?></p>
        </div>
      </div>

      <div class="tarjeta">
        <img src="https://lacasitadelosanimales.com/blog/wp-content/uploads/2021/11/gato-angora-02.jpg" alt="Conejo">
        <h3>Bruno</h3>
        <div class="info">
          <p><strong><?= $lang["breed"] ?></strong> <?= $lang["breed_9"]?></p>
          <p><strong><?= $lang["age"]?></strong> <?= $lang["age_9"]?></p>
          <p><strong><?= $lang["gender"]?></strong> <?= $lang["gender_9"]?></p>
          <p><strong><?= $lang["color"]?></strong> <?= $lang["color_9"]?></p>
          <p><strong><?= $lang["personality"]?></strong> <?= $lang["personality_9"]?></p>
          <p><strong><?= $lang["vaccines"]?></strong> <?= $lang["vaccines_9"]?></p>
          <p><strong><?= $lang["location"]?></strong> <?= $lang["location_9"]?></p>
        </div>
      </div>

    </div>
  </main>

  <footer>
    <p>© 2025 Adoptify</p>
  </footer>
</body>
</html>
