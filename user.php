<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/user.css">
    <title>Usuario 🪴</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li>Info</li>
                <li>Pacotes</li>
                <li>Carrito</li>
            </ul>
        </nav>
    </header>
    <br>
    <br>
    <br>
    Esto es el usuario y su info 🍆🥵
    <?php
        session_start();
        echo '<h1>hello '.$_SESSION['username'].'🍆🥵</h1>';
    ?>
</body>
</html>