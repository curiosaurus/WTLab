<?php
if(isset($_GET["submit"])){
    $eid=$_GET["email"];
    $valid = preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $eid) ? FALSE : TRUE;   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>
    <form action="premail.php" method="GET" style="margin-top:13%">
    <input type="text" name="email" id="email" value="<?php 
    if(isset($_GET["submit"])){
        echo $eid;
    }
    ?>">
    <input type="submit" name="submit" value="submit" id="submit" style="background-color:green;">
    </form>
    <h3>
    <?php 
    if (isset($_GET["submit"])) {
        if($valid){
            echo "<p style='color:red ;'>Invalid email address.</p>";
        }
        else{
            echo "<p style='color:green ;'>Valid email address.</p>";
        }
    }
    ?>
    </h3>
    </center>
</body>
</html>