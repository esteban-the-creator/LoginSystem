<?php
session_start(); // por qué se llama en tantas partes?

// si está vacio el valor id de la var session, me llevará siempre a la vista de login
if (empty($_SESSION["id"])){
    header("location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Ingresaste!</h1>
    <br>
    <div>
        bienvenido, <?php echo $_SESSION["username"]." ".$_SESSION["userlastname"];?>
    </div>
    <div>
        <a href="Controller/logoutController.php"> salir </a>  <!-- llamo al controlador cuando quiero cerrar sesión -->
    </div>
    
    
</body>
</html>