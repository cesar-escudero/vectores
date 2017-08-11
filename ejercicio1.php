
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 1</title>
  </head>
  <body>
    <h4>calcular al paga neta de un trabajador sabiendo que:<br>

      <br>
+ horas trabajadas: 100.000<br>
+ tarifa horaria:200.000<br>
+ tasa de impuesto:60.000<br>

    </h4>
<?php

$trabajador=array(100.000,200.000,60.000);


   $pagatotal=($trabajador[0]*$trabajador[1]-$trabajador[2]);

   echo "las paga total es: $pagatotal";

 ?>
  </body>
</html>
