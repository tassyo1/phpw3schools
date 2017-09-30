<html>
<body>
<h2>PHP Form Validation Example</h2>

    <form method = "post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Name: <input type="text" name ="name"><br><br>
    E-mail: <input type="text" name="email" ><br><br>
    Website: <input type="text" name="website"><br><br>
    Comment: <textarea name="comment" rows="5" cols="40"></textarea><br><br>
    Gender: 
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">Male

    <br>
    <br>
    <input type="submit" >
    </form>

    <h2>Your Input:</h2>
</body>
</html>

<?php 
$name = $email = $gender =$comment =$website ="";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $website = test_input($_POST["website"]);
    $comment = test_input($_POST["comment"]);
    $gender = test_input($_POST["gender"]);
}

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data); // remove contrabarras (\)
    $data = htmlspecialchars($data);// converte caracteres especiais em entidades HTML
    return $data;
}
?>