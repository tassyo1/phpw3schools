<h1>Function</h1>
<?php 
    function escreva(){
        echo "Estou escrevendo.";
    }

    escreva();
?>

<?php
    function nomeFamilia($nome){
        echo "O nome da família é $nome<br>";
    }

    nomeFamilia("Lima");
    nomeFamilia("Silva");
    nomeFamilia("Castro");
    nomeFamilia("Gomes");
?>
<br>
<?php 
    function nomeAnoFamilia($nome,$ano){
        echo "O nome da família é $nome<br>E ela remonta ao ano de $ano<br><br>";
    }

    nomeAnoFamilia("Lima",1880);
    nomeAnoFamilia("Ega",1750);
    nomeAnoFamilia("Castro",1500);

?>
<br>
<h1>Function com parâmetro Default</h1>

<?php 
    function meuPeso($peso = 70){
        echo "Meu peso é ".$peso."<br>";
    }

    meuPeso(50);
    meuPeso(60);
    meuPeso();
    meuPeso(80);
    meuPeso(90);
?>

<br>
<h1>Function com retorno</h1>
<?php 

function soma($x,$y){
    $z = $x + $y;
    return $z;
}

echo "1 + 1 = ".soma(1,1)."<br>";
echo "2 + 2 = ".soma(2,2);

?>