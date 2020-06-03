<!DOCTYPE html>
<html>
<body>

<h1>Ejercicio 8</h1>
<?php

// EJERCICIO 7
header ("Content-type: text/html;charset =\"utf-8\"");

/*EVALUAR SI UN NUMERO ES:
 PRIMO O NO */
 

 if (is_numeric($_GET['numero']) && $_GET ['numero']=>1)
 {
    $valor= (int) $_GET['numero'];
    $n=0;
    do {
        if (n > 1)
          if (EsPrimo(n)){
            echo  "ES PRIMO";
          }
          else   
          {     
          echo  "NOOOOOO ES PRIMO";
            }
}
 else
 {
    echo "Ingrese un numero valido";
 }
//fUNCION
int EsPrimo ($num)
{
  int $i;
  int $primo; /* Variable lógica que guarda si es primo o no */

  $primo = true; /* Mientras no encontremos un un divisor es primo */
  $i = 2;
  while ($i < $valingres && $num) 
    if ($num%$i == 0){
      $primo = False; /* Si tiene un divisor no es primo */
    $i++;
  }
  return $primo; /* Devuelve resultado: primo */
}









?>

<form>
Ingrese un numero valido:
<input name="numero" type="text" placeholder="INGRESE NUMERO" >
<input type="submit" value="Evaluar">
</form>

</body>
</html>