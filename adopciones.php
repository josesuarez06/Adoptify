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
  </style>
</head>
<body>
  <header>
    <h1>🐾 Adoptify</h1>
    <nav class="menu">
       <ul>
     <li> <a href="index.php">Inicio</a></li>
      <li><a href="formulario_adopcion.php">Formulario</a></li>
      <li><a href="contacto.php">Contacto</a></li>
      <li><a href="historias.php">Historias</a></li>
     </ul>
    </nav>
  </header>

  <main class="mascotas">
    <h2>Mascotas disponibles para adopción</h2>
    <div class="galeria">

      
      <div class="tarjeta">
        <img src="https://blog.mascotaysalud.com/wp-content/uploads/2019/09/LABRADOR-RETRIEVER-TUMBADO.jpg" alt="Perro">
        <h3>Tony</h3>
        <div class="info">
          <p><strong>Raza:</strong> Labrador Retriever</p>
          <p><strong>Edad:</strong> 2 años</p>
          <p><strong>Género:</strong> Macho</p>
          <p><strong>Tamaño:</strong> Grande</p>
          <p><strong>Personalidad:</strong> Juguetón, leal y cariñoso</p>
          <p><strong>Vacunas:</strong> Al día</p>
          <p><strong>Ubicación:</strong> Bogotá, Colombia</p>
        </div>
      </div>

      <div class="tarjeta">
        <img src="https://cdn.shopify.com/s/files/1/0268/6861/files/dog-1919406_960_720_grande.jpg?v=1530792114" alt="Perro">
        <h3>Max</h3>
        <div class="info">
          <p><strong>Raza:</strong> Pastor Alemán</p>
          <p><strong>Edad:</strong> 3 años</p>
          <p><strong>Género:</strong> Macho</p>
          <p><strong>Tamaño:</strong> Grande</p>
          <p><strong>Personalidad:</strong> Inteligente y protector</p>
          <p><strong>Vacunas:</strong> Completas</p>
          <p><strong>Ubicación:</strong> Medellín, Colombia</p>
        </div>
      </div>

      <div class="tarjeta">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSb8NQUsi6g1u2tDWD-3DAtfn9MS0_gih3a2A&s" alt="Perro">
        <h3>Bruna</h3>
        <div class="info">
          <p><strong>Raza:</strong> Beagle</p>
          <p><strong>Edad:</strong> 1 año</p>
          <p><strong>Género:</strong> Hembra</p>
          <p><strong>Tamaño:</strong> Mediano</p>
          <p><strong>Personalidad:</strong> Dulce y activa</p>
          <p><strong>Vacunas:</strong> Parciales</p>
          <p><strong>Ubicación:</strong> Cali, Colombia</p>
        </div>
      </div>

   
      <div class="tarjeta">
        <img src="https://i.pinimg.com/736x/fb/ac/2a/fbac2a1c579a80ee732fc31ce970238f.jpg" alt="Gato">
        <h3>Luna</h3>
        <div class="info">
          <p><strong>Raza:</strong> Criolla</p>
          <p><strong>Edad:</strong> 1 año</p>
          <p><strong>Género:</strong> Hembra</p>
          <p><strong>Color:</strong> Gris con blanco</p>
          <p><strong>Personalidad:</strong> Tranquila y amorosa</p>
          <p><strong>Vacunas:</strong> Completas</p>
          <p><strong>Ubicación:</strong> Bogotá, Colombia</p>
        </div>
      </div>

      <div class="tarjeta">
        <img src="https://www.mundodeportivo.com/files/og_thumbnail/uploads/2018/03/30/60e76fe1d7dc2.jpeg" alt="Gato">
        <h3>Simba</h3>
        <div class="info">
          <p><strong>Raza:</strong> Naranja criollo</p>
          <p><strong>Edad:</strong> 2 años</p>
          <p><strong>Género:</strong> Macho</p>
          <p><strong>Color:</strong> Naranja</p>
          <p><strong>Personalidad:</strong> Curioso y sociable</p>
          <p><strong>Vacunas:</strong> Completas</p>
          <p><strong>Ubicación:</strong> Bucaramanga, Colombia</p>
        </div>
      </div>

      <div class="tarjeta">
        <img src="https://www.elespectador.com/resizer/v2/FSM63KGF5BF3XMX6FMNRFQIHJY.jpg?auth=c1284085f3dba7c3662130b3780e3549f13948a0016b7e82e3e6b056b89edd37&width=920&height=613&smart=true&quality=60" alt="Gato">
        <h3>Nina</h3>
        <div class="info">
          <p><strong>Raza:</strong> Atigrado</p>
          <p><strong>Edad:</strong> 4 meses</p>
          <p><strong>Género:</strong> Hembra</p>
          <p><strong>Color:</strong> Blanca</p>
          <p><strong>Personalidad:</strong> Muy juguetona</p>
          <p><strong>Vacunas:</strong> Primera dosis</p>
          <p><strong>Ubicación:</strong> Cartagena, Colombia</p>
        </div>
      </div>

     
      <div class="tarjeta">
        <img src="https://frescorganico.com/wp-content/uploads/2024/08/Compra-Conejo-Mini-Rex-en-Venta-Criado-en-Granja-Frescorganico.jpg" alt="Conejo">
        <h3>Copito</h3>
        <div class="info">
          <p><strong>Raza:</strong> Mini Rex</p>
          <p><strong>Edad:</strong> 1 año</p>
          <p><strong>Género:</strong> Macho</p>
          <p><strong>Color:</strong> Blanco</p>
          <p><strong>Personalidad:</strong> Sociable y dócil</p>
          <p><strong>Vacunas:</strong> Al día</p>
          <p><strong>Ubicación:</strong> Bogotá, Colombia</p>
        </div>
      </div>

      <div class="tarjeta">
        <img src="https://www.tiendanimal.es/articulos/wp-content/uploads/2018/01/Conejo-Holland-Lop-1200x900.jpg" alt="Conejo">
        <h3>Pelusa</h3>
        <div class="info">
          <p><strong>Raza:</strong> Holland Lop</p>
          <p><strong>Edad:</strong> 8 meses</p>
          <p><strong>Género:</strong> Hembra</p>
          <p><strong>Color:</strong> Gris</p>
          <p><strong>Personalidad:</strong> Cariñosa y tranquila</p>
          <p><strong>Vacunas:</strong> Al día</p>
          <p><strong>Ubicación:</strong> Medellín, Colombia</p>
        </div>
      </div>

      <div class="tarjeta">
        <img src="https://lacasitadelosanimales.com/blog/wp-content/uploads/2021/11/gato-angora-02.jpg" alt="Conejo">
        <h3>Bruno</h3>
        <div class="info">
          <p><strong>Raza:</strong> Angora</p>
          <p><strong>Edad:</strong> 2 años</p>
          <p><strong>Género:</strong> Macho</p>
          <p><strong>Color:</strong> Café</p>
          <p><strong>Personalidad:</strong> Tranquilo y curioso</p>
          <p><strong>Vacunas:</strong> Completas</p>
          <p><strong>Ubicación:</strong> Cali, Colombia</p>
        </div>
      </div>

    </div>
  </main>

  <footer>
    <p>© 2025 Adoptify</p>
  </footer>
</body>
</html>

