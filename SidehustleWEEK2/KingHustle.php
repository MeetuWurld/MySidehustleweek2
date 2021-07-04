<?php
 // session
    if(isset($_POST["name"])){

        session_start();

        $_SESSION["name"] = $_POST["name"];

    }


?>

<html>

<h1>PaperWorld<h1>
<hr>
<h2>Welcome user<h2>
<pr>
<h3>Register<h3>
<h5> <form action="KingHustle.php" method="POST"> <h5>
    Name: 
    <input name="name" name="name" required placeholder="Enter your name"> 
    <br>
    Email: <input name="email" name="email" required placeholder="Enter your email">
    <br>
    CellNo:<input name="number" name="PhoneNo." required placeholder="Enter your phone number">
    <br>
    Pword: <input name="text" name="password" required placeholder="Enter your password">   
    <br>
    <button type="submit" name= "submit">submit</button>
</form>
<br>
Registeration complete <?php echo $_POST["name"] ?>
<br>
<a href="LittleHustle.php">Click here to Log In</a>


</html>
