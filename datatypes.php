<?php
//String
    $x = "Hello world";
    $y = 'Hello world';

    echo $x;
    echo "<br>";
    echo $y;
    echo "<br>";
?>

<?php
//Integer
    $x = 5985;
    var_dump($x);
?>

<?php  
echo "<br>";
$x = 10.365;
var_dump($x);
echo "<br>";
?>

<?php
//Array
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
echo "<br>";
echo "<br>";
?> 

<?php

//Object
    class Car {
        function Car(){
            $this->model = "VW";
        }
    }
    
    $herbie = new Car();

    echo $herbie->model;

    echo "<br>";
    echo "<br>";
?>

<?php
$x = "Hello world!";
$x = null;
var_dump($x);
?> 