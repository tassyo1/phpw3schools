<h2>For</h2>
<?php
    for($x = 1 ; $x <=5; $x++){
        echo "O número é $x<br>";
    }
?>

<h2>Foreach</h2>
<?php 
$cores = array("vermelho","azul","verde","cinza");
    foreach( $cores as $cor){
        echo $cor."<br>";
    }


$numeros = array(1,2,4,5,6,7,8);

foreach($numeros as $num){
    echo $num."<br>";
}
?>

