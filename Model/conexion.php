<?php 

$conexion = new mysqli ("localhost","root","","login" );
$conexion -> set_charset("utf8")

/*
Cuando se tiene un servidor diferente al entorno local se pone es la IP de ese server sea el de mi dominio u otro lugar

root hace en verdad referencia al usuario con el que accedo a la BD, como no hay nada congiurado basta con decir que accede 
es windows, por eso se one root que seria C://Win/xampp y así 

el espacio vacio es la constraseña de la BD

el cuarto es el nombre de la BD que estoy usando 

despues podría ponerse otro parametro (un 5to), sería el puerto, usualmente por defecto xampp usa el 3306
y en general casi todo lo que se hace en local usa ese puerto, pero si uno lo cambia por algun motivo sí debe expresarce acá en la conexión

$conexion -> set_charset("utf8") utf8 hace que la BD interprete tildes y otros acentos
*/

?>