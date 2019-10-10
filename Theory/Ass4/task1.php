<?php
if(isset($_GET["submit"])){
    $a = $_GET['a'];
    $b = $_GET['b'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <style>
    button{
        background: "green";
    }
    </style>
</head>
<body>
    <center>
    <form action="task1.php" method="GET">
        <b> a:</b><input type="number" name="a" value=<?php 
        if(isset($_GET["submit"])){ 
            echo $a;
        }
        else{
            echo "0";
        } ?>>
        <br>
        <b> b:</b><input type="number" name="b" 
        value=<?php 
        if(isset($_GET["submit"])){
             echo $b;
            }
        else{
            echo "0";
        } 
        ?>>
        <br>
        <button type="submit" name="submit" style="background-color:green;">submit</button>
        <br><br>
        <h4><?php 
            if(isset($_GET["submit"])){
             echo "a+b : &nbsp;  ".($a + $b);
            }
            else{
                echo "a+b : 0";
        } ?></h4>
        <h4><?php 
        if(isset($_GET["submit"])){
            echo "a-b : &nbsp; ".($a - $b);
            }
        else{
            echo "a-b : 0";
        } ?></h4>
        <h4><?php 
            if(isset($_GET["submit"])){ 
                echo "a*b : &nbsp; ".($a * $b);
            }else{
                echo "a*b : 0";
            } ?></h4>
        <h4><?php 
            if(isset($_GET["submit"])){ 
                if ($b==0){
                    echo "b is zero cannot divide by zero";
                }
                else {
                echo "a/b : &nbsp; ".($a / $b);
                }
            }
            else{
                echo "a/b : 0";
                } ?></h4>
        <h4><?php 
            if(isset($_GET["submit"]))
            { 
                if ($b==0) {
                    echo "cannot divide by zero";
                }
                else{
                echo "a%b : &nbsp; ".($a % $b);
                }
            }
                else{
                    echo "a%b : 0";
                } ?></h4>
        <h4><?php 
        if(isset($_GET["submit"])){ 
            echo "Average of a and b : &nbsp; ".(($a + $b)/2);
        }
            else{
                echo "Average of a and b : 0";
                } ?></h4>
        <h4><?php 
        if(isset($_GET["submit"])){ 
            echo "Greatest of them: &nbsp; ".max($a,$b);
            }
            else{
                echo "Greatest of them: 0";
            }?></h4>
        <h4><?php if(isset($_GET["submit"])){
            echo "Square of a : &nbsp; ".pow($a,2);
            }
            else{
                echo "Square of a : 0";
            } ?></h4>
        <h4><?php 
        if(isset($_GET["submit"])){ 
            echo "Square of  b : &nbsp; ".pow($b,2);
        }
        else{
            echo "Square of b : 0";
        } ?></h4>
    </form>
    </center>
</body>
</html>