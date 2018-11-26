<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Monitoreo ESP Wghjgh</title>
</head>
<body>


<?php
$conexion = mysql_connect("localhost", "espeurek_dbb", "juegos123");
mysql_select_db("espeurek_dbb", $conexion);
mysql_query("SET NAMES 'utf8'");

$resultado = mysql_query("SELECT DISTINCT `chipId` FROM `tabla` WHERE 1");


?>
<form action="respuesta.php" method="POST">

  <select name="chipId">
  <?php
    while ($row=mysql_fetch_array($resultado))
      {
       echo "<option>";
        echo $row[0];
        echo "</option>";
      }
    mysql_close();
  ?>
  </select><br>

Establecer Fecha de Consulta Medidor de Consumo Electrico : <input type="date" name="fecha" ><br>
Establecer Hora1 de Consulta Medidor de Consumo Electrico : <input  type="time"  name="hora1" id='hora1'><br>
Establecer Hora2 de Consulta Medidor de Consumo Electrico : <input  type="time"  name="hora2" id='hora2'><br>
  <input type="submit" name="Enviar" >  <br>



</form>

</form>

    
 

</body> 
</html>









