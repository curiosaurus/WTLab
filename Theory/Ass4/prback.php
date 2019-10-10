<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<?php
date_default_timezone_set("Asia/Calcutta");
$h = date("h");
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
		<h1>This is the webpage the hour is : <?php echo date("h:m:s"); ?></h1>
		<p style="font-size: 16px;">will refresh in 15 mins <?php echo date("h:m:s"); ?></p>
</center>
<?php
    header("refresh: 900;");	
?>
</body>
</html>