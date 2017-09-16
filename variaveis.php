<?php
$txt = "Hello";
$x = 5;

echo $txt;
echo $x;
?>
<br>


<?php
// interpolação
    $txt = "Teste";
    echo "meu exemplo de $txt";
?>

<br>
<?php
// concatenação
    $txt = "Teste";
    echo "meu exemplo de ". $txt;
?>
<br>


<?php
//escopo global - não é possivel acessar dentro
// da função
$x = 5;

function myTest(){
    echo "<p>Variable x inside function is: $x</p>"; //erro ocorre
}

myTest();
?>

<br>
<?php 
    function Teste(){
        $x2 = 5; // escopo local - só é possível acessar a variável dentro da função
        echo "<p>Variable x2 inside function is: $x2</p>";
    }

    Teste();

    echo "<p>Variable x2 outside function is: $x2</p>"; //erro
?>


<br>
<?php 
//palavra reservada global
echo "<br>";

$x3 = 5;
$y = 10;

function teste2(){
    global $x3, $y;
    $y = $y + $x3;

}
teste2();
echo $y;
//



//testando $GLOBALS
echo "<br>";
$novo = 5;
$novo2 = 10;

function teste3(){
    $GLOBALS['novo'] = $GLOBALS['novo'] + $GLOBALS['novo2'];

}

teste3();
echo $novo;
// 
?>


<?php 
echo "<br>";
    //palavra static
    function myTest4() {
        static $x = 0;
        echo $x;
        $x++;
        
    }
    
    myTest4();
    myTest4();
    myTest4();
?>