<h1>Arrays Indexados</h1>
<?php

$carros = array("Volvo", "BMW","Toyota");

echo "Eu gosto de ".$carros[0]." e ".$carros[1]." e ".$carros[2];

//count
echo "<br>";
echo "<br>";
echo "<h3>count</h3>";
echo count($carros);

//loop
echo "<br>";
echo "<br>";
echo "<h3>Loop</h3>";

$arraylen = count($carros);

for($x = 0; $x < $arraylen; $x++ ){
    echo $carros[$x];
    echo "<br>";
}
?>
<h1>Arrays Associativos</h1>
<?php
    /*$age['Peter']= 35;
    $age['John'] = 40;
    $age['Joseph'] = 50;*/
    $age =array("Peter"=>"35","Ben"=>"50","Joseph"=>"60");
    echo "A idade de Peter ".$age['Peter'];

    echo "<br>";

    foreach($age as $x => $valor){
        echo "chave=".$x." valor=".$valor;
        echo "<br>";
    }

?>

