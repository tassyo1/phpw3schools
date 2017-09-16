<?php 
// if.. else..elseif
$t = date("H");


if ($t < "10"){
    echo "bom dia";
} elseif ($t < "20") {
    echo "Have a good day!";
}
else {
    echo "Have a good night!";
}
?>

<?php 
$color = "red";

echo "<br>";
switch ($color){
    case "red":
        echo "vermelho";
        break;
    case "azul":
        echo "azul";
        break;
    default:
        echo "default";
}
?>


