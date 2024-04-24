<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Eco Scapes 🍃</title>
  <script src="https://unpkg.com/feather-icons"></script>
  <link rel="stylesheet" href="styles/style.css">
  <link rel="stylesheet" href="styles/login.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
  <header>
    <nav>
      <p><a href="index.php">EcoScapes</a></p>
      <ul>
        <li><a href="#home">Inicio</a></li>
        <li><a href="#pacotes">Paquetes</a></li>
        <li><a href="#servicos">Servicios</a></li>
        <li><a href="#contato">Contacto</a></li>
        <li><a href="#" class="btnLogin-popup">Iniciar sesion</a></li>
      </ul>
    </nav>

    <div id="home" class="header-content">
      <h1>Marruecos</h1>
      <p>Viaje a Marruecos. En familia. En grupo.Cultura y naturaleza en el corazón del Rif
      </p>
      <button>Saber más</button>
    </div>
  </header>

  <section class="section">
    <div class="wrapper">
      <span class="icon-close">
        <i class='bx bx-x'></i>
      </span>
      <div class="logreg-box">
        <!-- login form -->
        <div class="form-box login">
          <div class="logreg-title">
            <h2>Login</h2>
            <p>Please login to use the platform</p>
          </div>
          <form id="login-form">
            <div class="input-box">
              <!-- <span class="icon"><i class='bx bxs-envelope'></i></span> -->
              <span class="icon"><i class='bx bxs-user'></i></span>
              <input type="text" name="username" required>
              <label>Username</label>
            </div>

            <div class="input-box">
              <span class="icon"><i class='bx bxs-lock-alt'></i></span>
              <input type="password" name="password" required>
              <label>Password</label>
            </div>

            <div class="remember-forgot">
              <label><input type="checkbox">
                Remember me</label>
              <a href="#">Forgot password ?</a>
            </div>

            <button type="submit" class="btn">Login</button>

            <div class="logreg-link">
              <p>Don't have an account ? <a href="#" class="register-link">Register</a></p>
            </div>
          </form>
          <p id="error-message" style="display: none;"></p>
        </div>
        <!-- register form -->
        <div class="form-box register">
          <div class="logreg-title">
            <h2>Registration</h2>
            <p>Please provide the following to verify your identity</p>
          </div>
          <form id="signup-form">
            <div class="input-box">
              <span class="icon"><i class='bx bxs-user'></i></span>
              <input type="text" name="username" required>
              <label>Username</label>
            </div>

            <div class="input-box">
              <span class="icon"><i class='bx bxs-envelope'></i></span>
              <input type="email" name="email" required>
              <label>Email</label>
            </div>

            <div class="input-box">
              <span class="icon"><i class='bx bxs-lock-alt'></i></span>
              <input type="password" name="password" required>
              <label>Password</label>
            </div>

            <div class="remember-forgot">
              <label><input type="checkbox">
              I agree to the terms & conditions</label>
            </div>

            <button type="submit" class="btn">Register</button>

            <div class="logreg-link">
              <p>Already have an account ? <a href="#" class="login-link">Login</a></p>
            </div>
          </form>
          <p id="error-message" style="display: none;"></p>
        </div>
      </div>

      <div class="media-options">
        <a href="#">
          <i class='bx bxl-google'></i>
          <span>Login with Google</span>
        </a>
        <a href="#">
          <i class='bx bxl-facebook-circle'></i>
          <span>Login with Facebook</span>
        </a>
      </div>
    </div>
  </section>

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
          <h1>Viaje a Marruecos.Cultura y naturaleza en el corazón del Rif</h1>
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
        <li><i data-feather="map-pin"></i>Morelia</li>
        <li><i data-feather="mail"></i>contato@ecoscapes</li>
        <li><i data-feather="phone"></i>443-261-4050</li>
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
  <script src="js/script.js"></script>
</body>

</html>