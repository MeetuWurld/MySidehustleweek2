<?php

    // session
    if(isset($_POST["name"])){

        session_start();

        $_SESSION["name"] = $_POST["name"];

    }


?>
<!DOCTYPE html>
<html>
<head>
<h1>PaperWorld<h1>
    <title>Document</title>
</head>
<body>

    <form action="LittleHustle.php" method="POST">
    <input name="name" name="name" required placeholder="Enter your name">
    <br>
    <input name="text" name="password" required placeholder="Enter your password">
    <br>
    <button type="Log in" name="Log in">Log In</button>

</form>
<br>


Hello <?php echo $_POST["name"] ?>
 <br>
</body>
</html>



















