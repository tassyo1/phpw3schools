<?php 
    $cars = array(
        array("Volvo",22,18),
        array("BMW",15,13),
        array("Saab",5,2),
        array("Land Rover",17,15)

    );

    echo $cars[0][0]. " In stock ".$cars[0][1].", sold ".$cars[0][2]."<br>";
    echo $cars[1][0]. " In stock ".$cars[1][1].", sold ".$cars[1][2]."<br>";
    echo $cars[2][0]. " In stock ".$cars[2][1].", sold ".$cars[2][2]."<br>";
    echo $cars[3][0]. " In stock ".$cars[3][1].", sold ".$cars[3][2]."<br>";

    echo "<br>";
    echo "<br>";

    //for loop
    for ($row = 0; $row < 4; $row ++){
        echo "<p><b>Row number $row</b></p>";
        echo "<ul>";
        for($colum = 0; $colum < 3; $colum ++){
            echo "<li>".$cars[$row][$colum]. "</li>";
        }
        echo "</ul>";
    }


    echo "<br>";
    echo "<h2>foreach</h2>";
    
    //foreach
    for($linha = 0; $linha < 4; $linha++){
        echo "linha $linha";
        echo "<select >";
        foreach($cars[$linha] as $col){
            echo "<option >".$col."</option >";
        }
        echo "</select >";
    }
?>

