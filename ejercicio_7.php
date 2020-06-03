<!DOCTYPE html>
<html>
<body>

<h1>Ejercicio 7.2</h1>
<?php

// Para determinar si un Numero es Primo o no
header ("Content-type: text/html;charset =\"utf-8\"");

// Funcion Primo
function primo($numero)
{
    $contador=0;

    for ($i=2;$i<=$numero;$i++)

    {
        if($numero%$i==0)
        {
        if(++$contador>1)
        return false;
        }

    }
return true;
}



if (ctype_digit($_GET['numero']) && $_GET ['numero']>0)
{
    echo "El numero es valido";
    $numeroprimo= (int) $_GET['numero'];
    echo "<h1>$numeroprimo</h1>";
    if (primo($numeroprimo))
        {
        echo "Es un numero primo";
        }
    else
        {
        echo .$numeroprimo. "NO ES numero primo";   
        }
}
else
{
    echo "<h3> No es un numero valido</h3>";
}





?>

<form>
Escribe un numero:

<input name="numero" type="text" placeholder="Ingrese numero" >
<input type="submit" value="Evaluar">
</form>

</body>
</html>