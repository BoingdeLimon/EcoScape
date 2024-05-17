<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="shortcut icon" type="image/x-icon" href="assets/logo2.png" />
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Eco Scapes 🍃</title>
  <link rel="stylesheet" href="styles/style.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <script src="https://unpkg.com/feather-icons"></script>
  <script src="js/slider.js"></script>
  <script src="js/modal.js"></script>
  <script src="js/imagen.js"></script>
</head>

<body>
  <header>
    <nav>
      <div class="logo">
        <img src="assets/logo2.png" alt="Logo" width="auto" height="100%">
        <p><a href="index.php">EcoScapes</a></p>
      </div>

      <ul>
        <li><a href="#slider"><i data-feather="home"></i></a></li>
        <li><a href="#pacotes"><i data-feather="package"></i></a></li>
        <li><a href="#servicos"><i data-feather="camera"></i></a></li>
        <li><a href="#contato"><i data-feather="user"></i></a></li>
       
        <?php
          // require 'connection.php';
          session_start();
          if (isset($_SESSION['username'])) {
            echo '<li id="user"><a href="user.php"><i data-feather="user-check"></i></a></li>';
            echo '<li><a href="logout.php"><i data-feather="log-out"></i></a></li>';
          } else {
            echo '<li><a href="session.php"><i data-feather="log-in"></i></a></li>';
          }
        ?>
         <li>
                <input type="text" id="searchInput" placeholder="Buscar paquete...">
                <a href="#pacotes" onclick="searchPackage()">Buscar</a>

              </li>
       

      </ul>
    </nav>

    <div id="slider" class="slider">
      <div class="slide active" style="background-image: url('http://localhost/EcoScape/assets/marruecos.jpg');">
        <div class="header-content">
          <h1>Marruecos</h1>
          <p>Viaje a Marruecos. En familia. En grupo. Cultura y naturaleza en el corazón del Rif</p>
          <button class="openModal" data-target="modal3">Saber más</button>

        </div>
      </div>
      <div class="slide" style="background-image: url('http://localhost/EcoScape/assets/cabos.jpg');">
        <div class="header-content">
          <h1>Los Cabos</h1>
          <p>7 días en los Cabos.</p>
          <button class="openModal" data-target="modal4">Saber más</button>
        </div>
      </div>
      <div class="slide" style="background-image: url('http://localhost/EcoScape/assets/canon.jpg');">
        <div class="header-content">
          <h1>Gran Cañon</h1>
          <p>Paquete de 14 días en el Gran Cañon
          </p>
          <button class="openModal" data-target="modal6">Saber más</button>
        </div>
      </div>
    </div>
  </header>

  <section id="pacotes" class="pacotes">
    <h1 class="pacotes-title">Descubre nuestros paquetes</h1>

    <div class="pacotes-cards">
      <div class="card">
        <div class="card-tag card-tag-top">
          <p>Promoción</p>
        </div>
        <div class="card-tag card-tag-bottom">
          <p>MXN$ 45,744.65</p>
        </div>
        <img class="card-image" src="assets/nepal.jpg" alt="Nepal">
        <div class="card-content">
          <h1>Viaje a Nepal. Grupo verano. Sonrisas en el Himalaya</h1>
          <ul>
            <li><i data-feather="coffee"></i>Café</li>
            <li><i data-feather="wifi"></i>Wi-Fi</li>
            <li><i data-feather="map"></i>Recorrido</li>
          </ul>
          <div class="card-tag card-tag-bottomdos">
          <button class="openModal" data-target="modal1"><i data-feather="maximize-2"></i></button>
          </div>
        </div>
      </div>

      <!-- Modal -->
      <div id="modal1" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <div class="content-wrapper">
      <!-- Galería de imágenes integrada -->
      <div id="gallery" class="gallery">
        <!-- Imagen Principal -->
        <div class="main-image">
          <img src="assets/nepal/nepal1.jpg" alt="Producto Principal" id="mainImage">
        </div>
        <!-- Miniaturas o Imágenes Secundarias -->
        <div class="thumbnails">
          <img src="assets/nepal/nepal1.jpg" alt="Vista 1" onclick="changeImage('assets/nepal/nepal1.jpg')">
          <img src="assets/nepal/nepal2.jpg" alt="Vista 2" onclick="changeImage('assets/nepal/nepal2.jpg')">
          <img src="assets/nepal/nepal3.jpg" alt="Vista 3" onclick="changeImage('assets/nepal/nepal3.jpg')">
          <img src="assets/nepal/nepal4.jpg" alt="Vista 4" onclick="changeImage('assets/nepal/nepal4.jpg')">
        </div>
      </div>
      <!-- Descripción -->
      <div class="description">
        <h2>Viaje a Nepal</h2>
        <p>Un viaje a Nepal es una experiencia envolvente que combina aventura, espiritualidad y una asombrosa diversidad natural y cultural. Desde las impresionantes alturas del Himalaya hasta las ricas planicies subtropicales, este país ofrece un mosaico de atracciones que cautivan a cualquier viajero.</p>
      </div>
      <!-- Apartado para ingresar personas y seleccionar fechas -->
      <div class="booking-details">
        <form id="bookingForm">
          <label for="numPersons">Número de personas:</label>
          <input type="number" id="numPersons" name="numPersons" min="1" max="10" required>

          <label for="selectDate">Fechas disponibles:</label>
          <select id="selectDate" name="selectDate" required>
            <option value="2024-06-01">1 Junio 2024</option>
            <option value="2024-07-15">15 Julio 2024</option>
            <option value="2024-08-20">20 Agosto 2024</option>
            <option value="2024-09-10">10 Septiembre 2024</option>
          </select>

          <button type="submit">Reservar</button>
        </form>
      </div>
    </div>
  </div>
</div>




      <div class="card">
        <div class="card-tag card-tag-top">
          <p>Promoción</p>
        </div>
        <div class="card-tag card-tag-bottom">
          <p>MXN$ 17,451.72</p>
        </div>
        <img class="card-image" src="assets/senegal.jpg" alt="Miami">
        <div class="card-content">
          <h1>Viaje a Senegal. Semana Santa. Tierra de baobabs en grupo</h1>
          <ul>
            <li><i data-feather="coffee"></i>Desayuno incluido</li>
            <li><i data-feather="wifi"></i>Wi-Fi</li>
            <li><i data-feather="map"></i>Tour incluido</li>
          </ul>
          <div class="card-tag card-tag-bottomdos">
          <button class="openModal" data-target="modal2"><i data-feather="maximize-2"></i></button>
          </div>
        </div>
      </div>
       <!-- Modal2 -->
       <div id="modal2" class="modal">
        <div class="modal-content">
          <span class="close">&times;</span>
          <div class="content-wrapper">
            <!-- Galería de imágenes integrada -->
            <div id="gallery" class="gallery">
              <!-- Imagen Principal -->
              <div class="main-image">
                <img src="assets/senegal/senegal1.jpg" alt="Producto Principal" id="mainImage">
              </div>
              <!-- Miniaturas o Imágenes Secundarias -->
              <div class="thumbnails">
                <img src="assets/senegal/senegal1.jpg" alt="Vista 1" onclick="changeImage('assets/senegal/senegal1.jpg', 'mainImage1')">
                <img src="assets/senegal/senegal2.jpg" alt="Vista 2" onclick="changeImage('assets/senegal/senegal2.jpg', 'mainImage1')">
                <img src="assets/senegal/senegal3.jpg" alt="Vista 3" onclick="changeImage('assets/senegal/senegal3.jpg', 'mainImage1')">
                <img src="assets/senegal/senegal4.jpg" alt="Vista 4" onclick="changeImage('assets/senegal/senegal4.jpg', 'mainImage1')">
              </div>
            </div>
            <!-- Descripción -->
            <div class="description">
              <h2>Viaje a Senegal</h2>
              <p>Un viaje a Senegal es una experiencia enriquecedora que combina sostenibilidad, cultura y naturaleza. Desde la vibrante vida urbana de Dakar hasta las tranquilas playas de Saly y los ecosistemas protegidos del delta del Saloum, este viaje ofrece una inmersión en prácticas ecológicas y el apoyo a comunidades locales, todo en un entorno de impresionante belleza natural y diversidad cultural.</p>
            </div>
            <div class="booking-details">
        <form id="bookingForm">
          <label for="numPersons">Número de personas:</label>
          <input type="number" id="numPersons" name="numPersons" min="1" max="10" required>

          <label for="selectDate">Fechas disponibles:</label>
          <select id="selectDate" name="selectDate" required>
            <option value="2024-06-01">10 Junio 2024</option>
            <option value="2024-07-15">17 Julio 2024</option>
            <option value="2024-08-20">30 Agosto 2024</option>
            <option value="2024-09-10">5 Septiembre 2024</option>
          </select>

          <button type="submit">Reservar</button>
        </form>
      </div>
            
          </div>
        </div>
      </div>


      <div class="card">
        <div class="card-tag card-tag-top">
          <p>Promoción</p>
        </div>
        <div class="card-tag card-tag-bottom">
          <p>MXN$ 45,744.65</p>
        </div>
        <img class="card-image" src="assets/marruecos.jpg" alt="Berlim">
        <div class="card-content">
          <h1>Viaje a Marruecos. En familia. En grupo.Cultura y naturaleza en el corazón del Rif</h1>
          <ul>
            <li><i data-feather="coffee"></i>Desayuno incluido</li>
            <li><i data-feather="wifi"></i>Wi-Fi</li>
            <li><i data-feather="map"></i>Recorrido</li>
          </ul>
          <div class="card-tag card-tag-bottomdos">
          <button class="openModal" data-target="modal3"><i data-feather="maximize-2"></i></button>
          </div>
        </div>
      </div>
<!-- Modal-3 -->
<div id="modal3" class="modal">
        <div class="modal-content">
          <span class="close">&times;</span>
          <div class="content-wrapper">
            <!-- Galería de imágenes integrada -->
            <div id="gallery" class="gallery">
              <!-- Imagen Principal -->
              <div class="main-image">
                <img src="assets/marruecos/marruecos1.jpg" alt="Producto Principal" id="mainImage">
              </div>
              <!-- Miniaturas o Imágenes Secundarias -->
              <div class="thumbnails">
                <img src="assets/marruecos/marruecos1.jpg" alt="Vista 1" onclick="changeImage('assets/marruecos/marruecos1.jpg')">
                <img src="assets/marruecos/marruecos2.jpg" alt="Vista 2" onclick="changeImage('assets/marruecos/marruecos2.jpg')">
                <img src="assets/marruecos/marruecos3.jpg" alt="Vista 3" onclick="changeImage('assets/marruecos/marruecos3.jpg')">
                <img src="assets/marruecos/marruecos4.jpg" alt="Vista 4" onclick="changeImage('assets/marruecos/marruecos4.jpg')">
              </div>
            </div>
            <!-- Descripción -->
            <div class="description">
              <h2>Viaje a Marruecos</h2>
              <p>
              Un viaje a Marruecos es una experiencia única que combina sostenibilidad, cultura y naturaleza. Desde los vibrantes mercados de Marrakech hasta las majestuosas montañas del Atlas y los tranquilos paisajes del desierto de Agafay, este viaje ofrece una inmersión en prácticas ecológicas y el apoyo a comunidades locales, todo en un entorno de impresionante belleza natural.
              </p>
            </div>
            <div class="booking-details">
        <form id="bookingForm">
          <label for="numPersons">Número de personas:</label>
          <input type="number" id="numPersons" name="numPersons" min="1" max="10" required>

          <label for="selectDate">Fechas disponibles:</label>
          <select id="selectDate" name="selectDate" required>
            <option value="2024-06-01">11 Junio 2024</option>
            <option value="2024-07-15">15 Julio 2024</option>
            <option value="2024-08-20">29 Agosto 2024</option>
            <option value="2024-09-10">14 Septiembre 2024</option>
          </select>

          <button type="submit">Reservar</button>
        </form>
      </div>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-tag card-tag-top">
          <p>Promoción</p>
        </div>
        <div class="card-tag card-tag-bottom">
          <p>MXN$ 2500,00</p>
        </div>
        <img class="card-image" src="assets/los_cabos.jpg" alt="Los Cabos">
        <div class="card-content">
          <h1>7 días en los Cabos</h1>
          <ul>
            <li><i data-feather="coffee"></i>Desayuno incluido</li>
            <li><i data-feather="wifi"></i>Wi-Fi</li>
            <li><i data-feather="map"></i>Paseo en buggy</li>
          </ul>
          <div class="card-tag card-tag-bottomdos">
          <button class="openModal" data-target="modal4"><i data-feather="maximize-2"></i></button>
          </div>
        </div>
      </div>
<!-- Modal-4 -->
<div id="modal4" class="modal">
        <div class="modal-content">
          <span class="close">&times;</span>
          <div class="content-wrapper">
            <!-- Galería de imágenes integrada -->
            <div id="gallery" class="gallery">
              <!-- Imagen Principal -->
              <div class="main-image">
                <img src="assets/cabos/cabos1.jpg" alt="Producto Principal" id="mainImage">
              </div>
              <!-- Miniaturas o Imágenes Secundarias -->
              <div class="thumbnails">
                <img src="assets/cabos/cabos1.jpg" alt="Vista 1" onclick="changeImage('assets/cabos/cabos1.jpg')">
                <img src="assets/cabos/cabos2.jpg" alt="Vista 2" onclick="changeImage('assets/cabos/cabos2.jpg')">
                <img src="assets/cabos/cabos3.jpg" alt="Vista 3" onclick="changeImage('assets/cabos/cabos3.jpg')">
                <img src="assets/cabos/cabos4.jpg" alt="Vista 4" onclick="changeImage('assets/cabos/cabos4.jpg')">
              </div>
            </div>
            <!-- Descripción -->
            <div class="description">
              <h2>Viaje a Los Cabos</h2>
<p>Un viaje a Los Cabos es una experiencia inolvidable que combina aventura, lujo y naturaleza. Desde las impresionantes playas y formaciones rocosas de El Arco hasta las vibrantes actividades acuáticas y la rica vida marina del Mar de Cortés, este destino ofrece una mezcla perfecta de relajación y emoción en un entorno de belleza natural espectacular.</p>
            </div>
            <div class="booking-details">
        <form id="bookingForm">
          <label for="numPersons">Número de personas:</label>
          <input type="number" id="numPersons" name="numPersons" min="1" max="10" required>

          <label for="selectDate">Fechas disponibles:</label>
          <select id="selectDate" name="selectDate" required>
            <option value="2024-06-01">1 Junio 2024</option>
            <option value="2024-07-15">19 Julio 2024</option>
            <option value="2024-08-20">26 Agosto 2024</option>
            <option value="2024-09-10">12 Septiembre 2024</option>
          </select>

          <button type="submit">Reservar</button>
        </form>
      </div>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-tag card-tag-top">
          <p>Promoción</p>
        </div>
        <div class="card-tag card-tag-bottom">
          <p>MXN$ 200,00</p>
        </div>
        <img class="card-image" src="assets/fuji.jpg" alt="fuji">
        <div class="card-content">
          <h1>Paquete 14 días en Japon</h1>
          <ul>
            <li><i data-feather="coffee"></i>Desayuno incluido</li>
            <li><i data-feather="wifi"></i>Wi-Fi</li>
            <li><i data-feather="map"></i>Recorrido</li>
          </ul>
          <div class="card-tag card-tag-bottomdos">
          <button class="openModal" data-target="modal5"><i data-feather="maximize-2"></i></button>
          </div>
        </div>
       
      </div>
       <!-- Modal-5 -->
      <div id="modal5" class="modal">
        <div class="modal-content">
          <span class="close">&times;</span>
          <div class="content-wrapper">
            <!-- Galería de imágenes integrada -->
            <div id="gallery" class="gallery">
              <!-- Imagen Principal -->
              <div class="main-image">
                <img src="assets/japon/japon1.jpg" alt="Producto Principal" id="mainImage">
              </div>
              <!-- Miniaturas o Imágenes Secundarias -->
              <div class="thumbnails">
                <img src="assets/japon/japon1.jpg" alt="Vista 1" onclick="changeImage('assets/japon/japon1.jpg')">
                <img src="assets/japon/japon2.jpg" alt="Vista 2" onclick="changeImage('assets/japon/japon2.jpg')">
                <img src="assets/japon/japon3.jpg" alt="Vista 3" onclick="changeImage('assets/japon/japon3.jpg')">
                <img src="assets/japon/japon4.jpg" alt="Vista 4" onclick="changeImage('assets/japon/japon4.jpg')">
              </div>
            </div>
            <!-- Descripción -->
            <div class="description">
              <h2>Viaje a Japón</h2>
<p>Un viaje a Japón es una experiencia fascinante que combina tradición, modernidad y una increíble diversidad natural. Desde los templos históricos y jardines tranquilos de Kioto hasta la vibrante vida urbana de Tokio y los paisajes impresionantes del Monte Fuji, este país ofrece un mosaico de atracciones culturales y naturales que cautivan a cualquier viajero.</p>
            </div>
            <div class="booking-details">
        <form id="bookingForm">
          <label for="numPersons">Número de personas:</label>
          <input type="number" id="numPersons" name="numPersons" min="1" max="10" required>

          <label for="selectDate">Fechas disponibles:</label>
          <select id="selectDate" name="selectDate" required>
            <option value="2024-06-01">8 Junio 2024</option>
            <option value="2024-07-15">5 Julio 2024</option>
            <option value="2024-08-20">2 Agosto 2024</option>
            <option value="2024-09-10">1 Septiembre 2024</option>
          </select>

          <button type="submit">Reservar</button>
        </form>
      </div>
          </div>
        </div>
      </div>

      <div class="card">
        <!--  <section id="canon"> -->
        <div class="card-tag card-tag-top">
          <p>Promoción</p>
        </div>
        <div class="card-tag card-tag-bottom">
          <p>MXN$ 1200,00</p>
        </div>
        <img class="card-image" src="assets/grand_canyon.jpg" alt="canyon">
        <div class="card-content">
          <h1>Paquete de 14 días en el Gran Cañon</h1>
          <ul>
            <li><i data-feather="coffee"></i>Desayuno incluido</li>
            <li><i data-feather="wifi"></i>Wi-Fi</li>
            <li><i data-feather="map"></i>Recorrido</li>
          </ul>
          <div class="card-tag card-tag-bottomdos">
          <button class="openModal" data-target="modal6"><i data-feather="maximize-2"></i></button>
          </div>
        </div>
      </div>
         <!-- Modal-6 -->
         <div id="modal6" class="modal">
        <div class="modal-content">
          <span class="close">&times;</span>
          <div class="content-wrapper">
            <!-- Galería de imágenes integrada -->
            <div id="gallery" class="gallery">
              <!-- Imagen Principal -->
              <div class="main-image">
                <img src="assets/cañon/cañon1.jpg" alt="Producto Principal" id="mainImage">
              </div>
              <!-- Miniaturas o Imágenes Secundarias -->
              <div class="thumbnails">
                <img src="assets/cañon/cañon1.jpg" alt="Vista 1" onclick="changeImage('assets/cañon/cañon1.jpg')">
                <img src="assets/cañon/cañon2.jpg" alt="Vista 2" onclick="changeImage('assets/cañon/cañon2.jpg')">
                <img src="assets/cañon/cañon3.jpg" alt="Vista 3" onclick="changeImage('assets/cañon/cañon3.jpg')">
                <img src="assets/cañon/cañon4.jpg" alt="Vista 4" onclick="changeImage('assets/cañon/cañon4.jpg')">
              </div>
            </div>
            <!-- Descripción -->
            <div class="description">
              <h2>Viaje al Gran Cañon</h2>
              <p>Un viaje al Gran Cañón es una experiencia impresionante que combina aventura, geología y naturaleza. Desde las majestuosas vistas de sus acantilados y formaciones rocosas hasta las emocionantes rutas de senderismo y el sereno descenso por el río Colorado, este destino ofrece una inmersión en uno de los paisajes naturales más espectaculares del mundo.</p>
            </div>
            <div class="booking-details">
        <form id="bookingForm">
          <label for="numPersons">Número de personas:</label>
          <input type="number" id="numPersons" name="numPersons" min="1" max="10" required>

          <label for="selectDate">Fechas disponibles:</label>
          <select id="selectDate" name="selectDate" required>
            <option value="2024-06-01">15 Junio 2024</option>
            <option value="2024-07-15">6 Julio 2024</option>
            <option value="2024-08-20">20 Agosto 2024</option>
            <option value="2024-09-10">5 Septiembre 2024</option>
          </select>

          <button type="submit">Reservar</button>
        </form>
      </div>
          </div>
        </div>
  </section>
  </div>
  </section>
  <script>
      function searchPackage() {
  // Obtener el valor del campo de búsqueda
  const searchInput = document.getElementById('searchInput').value.toLowerCase();

  // Obtener todas las tarjetas de paquetes
  const packageCards = document.querySelectorAll('.card');

  // Recorrer todas las tarjetas y ocultar/mostrar según coincida con la búsqueda
  packageCards.forEach(card => {
    const packageName = card.querySelector('.card-content h1').innerText.toLowerCase();

    // Comprobar si el nombre del paquete incluye el término de búsqueda
    if (packageName.includes(searchInput)) {
      card.style.display = 'block'; // Mostrar el paquete
    } else {
      card.style.display = 'none'; // Ocultar el paquete
    }
  });
}

            </script>
  <section id="servicos" class="servicos">
    <h1 class="servicos-title">Servicios</h1>
    <div class="servicos-cards">
      <div class="card">
        <i data-feather="map"></i>
        <div class="card-content">
          <h3>Tour guiados</h3>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing sciunt deserunt, alias illo!</p>
        </div>
        <button>Saber más</button>
        
      </div>

      <div class="card">
        <i data-feather="camera"></i>
        <div class="card-content">
          <h3>Fotográfia Profesional</h3>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing sciunt deserunt, alias illo!</p>
        </div>
        <button>Saber más</button>
      </div>

      <div class="card">
        <i data-feather="navigation"></i>
        <div class="card-content">
          <h3>Alquiler de vehículos</h3>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing sciunt deserunt, alias illo!</p>
        </div>
        <button>Saber más</button>
      </div>
    </div>
  </section>

  <section id="contato" class="contato">
    <div class="contato-card">
      <h1>Entre en contacto</h1>
      <ul>
        <li><i data-feather="map-pin"></i>Morelia</li>
        <li><i data-feather="mail"></i>contato@ecoscapes</li>
        <li><i data-feather="phone"></i>(85) 443-123-4567</li>
      </ul>
    </div>
    <!--The div element for the map -->
    <div id="map"></div>
  </section>
 

  <script>
    // feather icons
    feather.replace();

    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function(e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
          behavior: 'smooth'
        });
      });
    });
    // Initialize and add the map
    function initMap() {
      // The location of Uluru
      // var uluru = {lat: -25.344, lng: 131.036};
      var uluru = {
        lat: 19.70078,
        lng: -101.18443
      };
      // The map, centered at Uluru
      var map = new google.maps.Map(
        document.getElementById('map'), {
          zoom: 4,
          center: uluru
        });
      // The marker, positioned at Uluru
      var marker = new google.maps.Marker({
        position: uluru,
        map: map
      });
    }
  </script>

  <script async defer src="https://maps.googleapis.com/maps/api/js?callback=initMap">
  </script>
</body>

</html>