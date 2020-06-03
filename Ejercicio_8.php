<!DOCTYPE html>
<html>
<body>

<h1>Ejercicio 7.1</h1>
<?php

// EJERCICIO 7
header ("Content-type: text/html;charset =\"utf-8\"");

/*EVALUAR SI UN NUMERO ES:
 PRIMO O NO */
 if (is_numeric($_GET['numero']) && $_GET ['numero']=>1)
 {
 $valingres= (int) $_GET['numero'];
 for($b =2;$b<=$valingres; $b++){
    if($valingres % $b == 0){
        $primo++;
    }
}
 }
if($primo >= 2 ){
    echo "No es primo";
} else {
    echo "Es primo";
}
?>

<form>
Ingrese un numero valido:
<input name="numero" type="text" placeholder="INGRESE NUMERO" >
<input type="submit" value="Evaluar">
</form>

</body>
</html>