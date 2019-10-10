<?php $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "prwt";
    $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
    $sql = "SELECT name, email, address, ph_num, yob, time_slot FROM registered";
    if ($res = mysqli_query($conn, $sql)) { 
    if (mysqli_num_rows($res) > 0) { 
        echo "<table border='1px'>"; 
        echo "<tr>"; 
        echo "<th>Name</th>"; 
        echo "<th>Email</th>"; 
        echo "<th>Address</th>";
        echo "<th>Phone number</th>";
        echo "<th>Year of Birth</th>";
        echo "<th>Time Slot</th>"; 
        echo "</tr>"; 
        while ($row = mysqli_fetch_array($res)) { 
            echo "<tr>"; 
            echo "<td>".$row['name']."</td>"; 
            echo "<td>".$row['email']."</td>"; 
            echo "<td>".$row['address']."</td>"; 
            echo "<td>".$row['ph_num']."</td>";
            echo "<td>".$row['yob']."</td>";
            echo "<td>".$row['time_slot']."</td>";   
            echo "</tr>"; 
        } 
        echo "</table>"; 
    } 
    else { 
        echo "No matching records are found."; 
    } 
} 
else { 
    echo "ERROR: Could not able to execute $sql. "
                                .mysqli_error($conn); 
} 
mysqli_close($conn); 
?>