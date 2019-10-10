<?php
if(isset($_GET['submit'])){
    $lim = $_GET['limit'];
    $number1 = 0;
    $number2 = 1;
    $str="0,1";
    $n = 2 ;
    while($n < $lim){
        $number3 = $number1+$number2;
        $str =$str.",".$number3;
        $number1 = $number2;
        $number2 = $number3;
        $n++;
    }
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
    <form action="prfib.php" method="get" style="align-self:'center'">
        <input type="number" name="limit" id="limit" value=<?php if(isset($_GET['submit'])){echo $lim ;}?>>
        <input type="submit" value="submit" name="submit">
        <?php
            if(isset($_GET['submit']) and $lim>1){
                echo "<h2>Fibonacci Series <br>";
                echo $str;
                echo"</h2>";
            }
            elseif (isset($_GET['submit']) and $lim==1) {
                echo "<h2>Fibonacci Series <br>";
                echo "0";
                echo"</h2>";
            }

        ?>
    </form>
    </center>
</body>
</html>