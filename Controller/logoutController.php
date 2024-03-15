<?php

session_start(); // para qué llamaré esta funión aca y en logincontroller?
session_destroy(); // despues del session destroy lo mando a la vista de login 
header("location: ../login.php");

?>