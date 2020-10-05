<html>
 <head>
  <title>Mi grupo favorito <?php echo $_GET['grupofavorito'];?></title>
 </head>
 <body>
<?php
$variable = NULL;
$valor = 'pruebadelacookie';
echo "Bienvenido,". $_POST["user"];
echo "<br />";
echo $_SESSION["user"];
echo "<br />";
echo "La fecha de hoy es\t", date("d\t"), date("m\t"), date("y\t");
echo "<br />";
echo "<br />";
$valor = 'pruebadelacookie';
echo $_COOKIE["Pruebacookie"];
echo "<br />";
echo "<br />";
echo "En esta página no hay nada importante que ofrecer, pero aprovecho para decirte que mi grupo favorito es Extremoduro.";
echo "<a href='https://youtu.be/e4Qm4L6pKI4=$siguientepagina'>";
echo "<br />";
echo "Este link te llevará a un video de YouTube donde suena el que creo que es el mejor álbum de este grupo!!!"; 
echo "</a>";

$var = NULL;

if($var == NULL){
    echo  "<br />";
    echo "Este valor es NULO";
}
unset($_SESSION["user"]);
?>
    <form method="post" action="Ejercicio1.php">
        <p>Salir de la sesión: 
    <input type="submit" name="submit" value="Submit"/>
   </p>
  </form>
 </body>
</html>
