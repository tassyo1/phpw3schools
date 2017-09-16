<?php 
//Constants - por padrão é case-sensitive
define("GREETING","Welcome to the jungle");
echo GREETING;
?>


<?php 
define("GREETINGS","Welcome to the jungle",true);
echo greetings;
?>

<?php 
    define("GREETING2", "Welcome to W3Schools.com!");
    echo "<br>";
    function myTest(){
        echo GREETING2;
    }

    myTest();
?>
