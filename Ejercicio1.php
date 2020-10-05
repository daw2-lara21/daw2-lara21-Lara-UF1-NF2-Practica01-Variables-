<?php
    session_start();
    $valor= "pruebadelacookie";
    setcookie("Pruebacookie", $valor, time()+3600);
    $invitado = "user";
    $contraseña= "password";
    $usuariocorrecto = $_POST["user"];
    $contraseñacorrecta = $_POST["password"];
    $_GET = $invitado;
    echo("Hola, para poder entrar a la siguiente página, coloca un usuario y una contraseña. Se registrará automáticamente");
     if ($invitado === $usuariocorrecto && $contraseña === $contraseñacorrecta) {
    
        $_SESSION["user"] = $invitado;
        header("Ejercicio1_1.php");
     }
    echo "<br />";

    
    $siguientepagina = urlencode("Pagina");
    echo "<a href='Ejercicio1_1.php?favgrupo=$siguientepagina'>";
    echo "También puedes intentar darle al link, te llevará a la siguiente página!"; 
    echo "</a>";
 ?>
<html>
 <head>
  <title>Inicio de sesión <?php echo $_GET['favmovie'];?></title>
 </head>
 <body>
     <html>
 <head>
  <title>Conéctate</title>
 </head>
 <body>
  <form method="post" action="Ejercicio1_1.php">
   <p>Introduce tu usuario
    <input type="usuario" name="user"/>
   </p>
   <p>Introduce tu contraseña
    <input type="contraseña" name="pass"/>
   </p>
   <p>
    <input type="submit" name="submit" value="Submit"/>
   </p>
  </form>
 </body>
</html>

 </form>
 </body>
</html>
