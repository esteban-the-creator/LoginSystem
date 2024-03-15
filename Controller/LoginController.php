<?php
include("Model/conexion.php");


session_start();


// si el post No está vacio (al menos respecto a los datos de "btnIngresar", es decir, si ha sido o no presionado)
if (!empty($_POST["btnIngresar"])){
    // si la variable post no está vacia respecto a los datos obtenidos de los campos (se hace referencia a ellos con el name) user y pass
    if(!empty($_POST["userfield"]) AND !empty($_POST["passfield"])){
        $usuario=$_POST["userfield"];
        $contraseña=$_POST["passfield"];
        echo $usuario;
        echo $contraseña;
        $sql=$conexion -> query("SELECT * FROM usuarios WHERE user='$usuario' AND pass='$contraseña' "); // user y pass son nombres de columnas en 
        if ($datos=$sql->fetch_object()) { // con el objeto datos le entregamos partes de la info a session 
            $_SESSION["id"]=$datos->id ;
            $_SESSION["username"]=$datos-> name; // estoy guardando en una var nueva llamada "username", el name del usuario, haciendo referencia al campo de la BD
            $_SESSION["userlastname"]=$datos-> lastname; 

            header("location: home.php"); // al acceder me lleva al home
        } else {
            echo("<div> Acesso Denegado </div>");
        }
        
    }
    // si no ha introducido nada
    else{
        echo "campos vacios";
    }
}


?>