<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IdentifyUrself</title>
</head>
<body>

    <main>
        <form method="POST" action=""> <!--lo del metodo es el metodo de envio que puede ser get o post (el post no permite ver los datos en la URL) -->
            <h1> WELCOME </h1>

            <?php
                include("Controller/LoginController.php");
            ?>
            <div>
            <h5> usuario </h5>
            <input id="usuario" type="text" class="input" name="userfield"> <!--ojo el name identifica el input-->
            <h5> contraseña </h5>
            <input id="input" type="password" class="input" name="passfield"> 
            <input value="INICIAR SESION" type="submit" class="btn"  name="btnIngresar">
            </div>
        </form>


    </main>
    
</body>
</html>

