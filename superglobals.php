<h1>$GLOBALS</h1>
<?php
$x = 75;
$y = 25;

function addition(){
    $GLOBALS['z']= $GLOBALS['x'] + $GLOBALS['y'];
}

addition();
echo $z;
?>
<br>


<h1>$_SERVER</h1>
<?php
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";

?> 
<br>
<br>
<h1>$_REQUEST</h1>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"> <!--/w3schools/superglobals.php -->
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_REQUEST['fname'];
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}
?>
<br>
<br>
<h1>$_POST</h1>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['fname'];
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}
?>

<br>
<br>
<h1>$_GET</h1>

<a href="test_get.php?subject=PHP&web=W3schools.com">Test $GET</a>
<br>
