<?php
require 'connection.php';
session_start();
$isAuthenticated = isset($_SESSION['username']);
if (!$isAuthenticated) {
  header('Location: index.php');
}

$userId = $_SESSION['id'];

$sql = "SELECT username, email, imagen FROM users WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $userId);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 1) {
  $user = $result->fetch_assoc();
} else {
  exit;
}

$stmt->close();
$conn->close();
?>
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <script src="https://unpkg.com/feather-icons"></script>
  <link rel="stylesheet" href="styles/user.css" />
  <title>Administrador ⚙️</title>
</head>

<body>

  <div class="sidebar">
    <div class="top">
      <div class="logo">
        <img src="assets/logo2.png" alt="Logo" width="auto" height="100%">
        <a href="index.php">EcoScapes</a>
      </div>
      <i class="bx bx-menu" id="btn"></i>
    </div>
    <div class="user">
      <img src="<?php echo htmlspecialchars($user['imagen']); ?>" alt="me" class="user-img">
      <div>
        <p class="bold"><?php echo htmlspecialchars($user['username']); ?></p>
        <p><?php echo htmlspecialchars($user['email']); ?></p>
      </div>
    </div>

    <ul>
      <li>
        <a onclick="showContent('user')">
          <i class='bx bx-package'></i>
          <span class="nav-item">Nuevo</span>
        </a>
        <span class="tooltip">Nuevo</span>
      </li>
      <li>
        <a onclick="showContent('viajes')">
          <i class='bx bx-landscape'></i>
          <span class="nav-item">Viajes</span>
        </a>
        <span class="tooltip">Viajes</span>
      </li>
      <li>
        <a href="logout.php">
          <i class="bx bx-log-out"></i>
          <span class="nav-item">Salir</span>
        </a>
        <span class="tooltip">Salir</span>
      </li>
    </ul>
  </div>

  <div class="main-content">

    <div class="logo-section">
      <a href="index.php">
        <img src="assets/logo2.png" alt="EcoScape" class="eco">
      </a>
    </div>

    <div id="user" class="content-section">
      <h1>Nuevo paquete</h1>
      <form enctype="multipart/form-data" id="paquete-form">
        <label for="name">Nombre: <i class='bx bx-package'></i></label>
        <input type="text" name="name" id="name" required><br><br>
        <label for="name">Descripcion: <i class='bx bx-message-square-detail'></i></label>
        <input type="text" name="desc" id="desc" required><br><br>
        <label for="image">Imagen: <i class='bx bx-image bx-tada'></i></label>
        <input type="file" name="image" id="image" accept="image/*" required><br><br>
        <label for="price">Precio: <i class='bx bx-dollar bx-tada'></i></label>
        <input type="text" name="price" id="price" required><br><br>
        <label for="details">Detalles: <i class='bx bx-list-ol'></i></label>
        <input type="text" name="details" id="details" required><br><br>
        <button type="submit">Crear <i class='bx bx-check'></i></button>
      </form>
      <div id="message" style="display: none;"></div>
    </div>

    <div id="viajes" class="content-section">

    </div>

  </div>

  <script src="js/new_package.js"></script>
  <script src="js/get_admin_paquetes.js"></script>
</body>

</html>