<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<?php
if (isset($_GET["submit"])) {
    $timezone=$_GET["timezone"];
    date_default_timezone_set($timezone);
    $h = date("h");        
}
else{
    date_default_timezone_set("Asia/Kolkata");
    $timezone="Asia/Kolkata";
    $h = date("h");
}
switch ($h) {
    case 1:
        $backgr="blue";
        break;
    case 2:
    $backgr="red";
        break;
    case 3:
    $backgr="yellow";
        break;
    case 4:
    $backgr="lime";
        break;
    case 5:
    $backgr="grey";
        break;
    case 6:
    $backgr="cyan";
        break;
    case 7:
    $backgr="pink";
        break;
    case 8:
    $backgr="purple";
        break;
    case 9:
    $backgr="brown";
        break;
    case 10:
    $backgr="orange";
        break;
    case 11:
    $backgr="green";
        break;
    case 12:
    $backgr="lightblue";
        break;
    default:
        $backgr="white";
        break;
}
?>
<body bgcolor="<?php echo $backgr; ?>">
<center>
    <form action="prback.php" method="get" style="margin-top: 13%">
    <h5>Select timezone:</h5>
    <select name="timezone">
        <option value="Asia/Tokyo">Japan</option>
        <option value="Asia/Kolkata">India</option>
        <option value="Europe/London">UK</option>
        <option value="America/Los_Angeles">America (LA)</option>
        <option value="Europe/Paris">France</option>
    </select>
    <input type="submit" value="submit" name="submit" style="background-color:green;">
    </form>
    <h4>Time in <?php echo $timezone ?><h4>
    <h5> <?php echo date("h:i:s") ?></h5>
</center>
</body>
</html>