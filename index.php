<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Eco Scapes 🍃</title>
  <link rel="stylesheet" href="styles/style.css">
  <link rel="stylesheet" href="styles/login.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <script src="https://unpkg.com/feather-icons"></script>
  <script src="js/slider.js"></script>
</head>

<body>
  <header>
    <nav>
      <div class="logo">
        <img src="assets/logo.png" alt="Logo" width="10%" height="100%">
      </div>
      <p><a href="index.php">EcoScapes</a></p>
    
      <ul>
        <li><a href="#slider">Inicio</a></li>
        <li><a href="#pacotes">Paquetes</a></li>
        <li><a href="#servicos">Servicios</a></li>
        <li><a href="#contato">Contacto</a></li>
      </ul>
    </nav>

    <div id="slider" class="slider">
      <div class="slide active" style="background-image: url('http://localhost/EcoScape/assets/marruecos.jpg');">
        <div class="header-content">
          <h1>Marruecos</h1>
          <p>Viaje a Marruecos. En familia. En grupo. Cultura y naturaleza en el corazón del Rif</p>
          <button>Saber Mas</button>
        </div>
      </div>
      <div class="slide" style="background-image: url('http://localhost/EcoScape/assets/los_cabos.jpg');">
        <div class="header-content">
          <h1>Los Cabos</h1>
          <p>7 días en los Cabos.</p>
          <button>Saber Mas</button>
        </div>
      </div>
      <div class="slide" style="background-image: url('http://localhost/EcoScape/assets/grand_canyon.jpg');">
        <div class="header-content">
          <h1>Gran Cañon</h1>
          <p>Paquete de 14 días en el Gran Cañon
          </p>
          <button>Saber Mas</button>
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
        <img class="card-image" src="assets/nepal.jpg" alt="Paris">
        <div class="card-content">
          <h1>Viaje a Nepal. Grupo verano. Sonrisas en el Himalaya</h1>
          <ul>
            <li><i data-feather="coffee"></i>Café</li>
            <li><i data-feather="wifi"></i>Wi-Fi</li>
            <li><i data-feather="map"></i>Recorrido</li>
          </ul>
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
        </div>
      </div>

      <div class="card">
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
        </div>
      </div>
    </div>
  </section>

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
        <li><i data-feather="map-pin"></i>Rua central</li>
        <li><i data-feather="mail"></i>contato@ecoscapes</li>
        <li><i data-feather="phone"></i>(85) 3100-4455</li>
      </ul>
    </div>
    <!--The div element for the map -->
    <div id="map"></div>
  </section>


  <script>
    // feather icons
    feather.replace();

    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
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
      var uluru = { lat: 19.70078, lng: -101.18443 };
      // The map, centered at Uluru
      var map = new google.maps.Map(
        document.getElementById('map'), { zoom: 4, center: uluru });
      // The marker, positioned at Uluru
      var marker = new google.maps.Marker({ position: uluru, map: map });
    }
  </script>

  <script async defer src="https://maps.googleapis.com/maps/api/js?callback=initMap">
  </script>
</body>

</html>