<!-- Aqui empieza el php donde te redirige si ya hay una sesion iniciada -->
<?php
     session_start();                                                                               //Iniciamos la sesion

     if(isset($_SESSION['usuario'])){
         header("location: ../html/index.html");                                                   //Si existe una sesion no sera necesario volver a logearnos, este codigo nos mandara a la pagina principal
     }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
    <script src="https://kit.fontawesome.com/c243e15e46.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <form class="formulario" action="../php/login_usuario.php" method="post"> 
        <img src="../Imagenes/logop.jpg">
        <h1>Inicio de sesión</h1>
        <div class="contenedor">
            <div class="input-contenedor">
                <i class="fa-solid fa-user icon"></i>
                <input class="input" type="text" name = "nombre_completo" placeholder="Nombre de Usuario">
            </div>

            <div class="input-contenedor">
                <i class="fa-solid fa-key icon"></i>
                <input class="input" type="password" name = "contrasena" placeholder="Contraseña">
            </div>
            <input type="submit" value="Ingresar" class="button">
            <p>¿No tienes cuenta? <a class="link" href="singup.php">Registrate</a></p>
        </div>
    </form>      
</body>
</html>