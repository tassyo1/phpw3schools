
<?php 
//Operadores aritiméticos
// exponenciação
$x = 10;
echo "<br>";
echo $x%2;
?>

<?php 
// exponenciação
$x = 2;
echo "<br>";
echo $x**3;
?>

<?php
// operadores de atribuição
echo "<br>";
echo "<h1>operadores de atribuição</h1>";
$x = 2;
$y = 3;

$x*=$y; // multiplicação

echo $x;
?>

<?php
$x = 10;
$y = 5;

$x /= $y;
echo "<br>";
echo $x;
?>


<?php
// operadores de comparação
echo "<br>";
echo "<h1>Operadores de comparação</h1>";

$a = 100;
$b = "100";

var_dump($a === $b); // operador identico: A igual a B e do mesmo tipo
var_dump($a !== $b);
echo "<br>";
var_dump($a == $b); // retorna true se ambas as variáveis apresentarem o mesmo valor, indiferente quanto ao tipo
?>

<?php
//operadores de incremento/decremento
echo "<br>";
echo "<h1>operadores de incremento/decremento</h1>";
$x = 2;
$y = 15;
++$x; //pré-incremental

echo $x;
echo $y++; // //pós-incremental, retorna 15, em seguida acrescenta 1
?>

<?php
//operadores lógicos
echo "<br>";
echo "<h1>operadores lógicos</h1>";

//xor: retorna true se a condição 1 ou condição 2, forem verdadeiras, mas falso se ambas forem verdadeiras
$a = 10;
$b = 5;

var_dump($a > 9 xor $b > 6);
var_dump($a > 9 xor $b > 4); //xor
var_dump($b != 5); // Not
var_dump($a > 9 && $b > 1); //and
?>


<?php
//operadores string
echo "<br>";
echo "<h1>operadores string</h1>";

$txt = "Hello";
$txt2 = "World";
$txt3 = "!!!!";

echo $txt." - ".$txt2;

echo "<br>";

$txt.=$txt2.$txt3;
echo $txt;


?>

