<!DOCTYPE html>
<html>
<body>

<h1>Ejercicio 5</h1>
<?php
// Este ejercicio corresponde a utilizacion de Ciclos en PHP
header ("Content-type: text/html;charset=\"utf-8\"");

for ($i=1;$i<=10;$i++)
{
    echo "<p>$i</p>"; 
}
echo "<p> Finaliza el ciclo for</p>"; 

for ($i=10;$i>=0;$i--)
{
    echo "<p>$i</p>"; 
}
echo "<p>Finaliza el ciclo for</p>";

$familia = array("Maria", "Ana", "Jose", "Pedro");
for($i=0;$i<=sizeof($familia);$i++)
{
    echo"<h2>$familia[$i] numero de elemento $i </h2>";
    echo "<br>";
}
echo "<h2> Ciclo while </h2>";
$i =0;
 while ($i < count($familia)){
     $i++; //aumenta en uno cada vez que pasa el ciclo
     echo $familia[$i];
     echo "<br>";
 }
?>
</body>
</html>