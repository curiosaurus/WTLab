<?php 
 if (isset($_POST["name"])){
    $name=$_POST["name"];
    $email=$_POST["email"];
    $phno=$_POST["phno"];
    $password=$_POST["password"];
    $dob=$_POST["dob"];
    $gender=$_POST["gender"];
    $slot=$_POST["slot"];
    $add=$_POST["add"];
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "prwt";
    $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
    $sql = "INSERT INTO registered (name, email, password, ph_num, gender, yob, time_slot, address)
VALUES ('".$name."', '".$email."', '".$password."','".$phno."','".$gender."','".$dob."','".$slot."','".$add."')";
 if ($conn->query($sql) === TRUE) {
    ?><script type="text/javascript"> alert(<?php echo "New record created successfully"; ?>);</script><?php
} else {
?><script type="text/javascript"> alert(<?php echo "Error: " . $sql . "<br>" . $conn->error; ?>);</script> <?php
}
 }
?>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Registration</title>
<style>
form > p{
    color: hsl(7, 100%, 50%);
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-size: 20px;
}
#submit{
  width: 100px;
  background-color:#24d842;
  color: white;
  padding: 14px 20px 15px 15px;
  margin: 8px 0;
  margin-right: 12cm;
  border-radius: 4px;
}
#reset{
    background-color: crimson;
    width: 100px;
    color: white;
    padding: 14px 20px 15px 15px;
    margin: 8px 0;
    margin-right: 12cm;
    border-radius: 4px;
}
#password{
    -webkit-text-security: disc ;
}
label{
    color: cornsilk;
    text-align: center
}
</style>
</head>
<body background="background.png">
        <div class="header">  
          <h1>Paintball warz</h1>
        </div>  
        <div class="hornav">
              <div id="horitem">
                <a  href="home.html">&nbsp; Home</a>
              </div>
              <div id="horitem">
                <a href="Abstract.html">About</a>
              </div> 
              <div id="horitem">
                <a href="Registration.html">Registration</a>
              </div>
              <div id="horitem">
                  <a href="show.php">Registration</a>
                </div>
          </div>
<div style="color:red">
   <h3>Register fast <br> Limited Spots left! </h3>
</div>
<form action="#" method="Post" name="myform" id="myform" onsubmit="return validateForm()">
    <table>
    <label for="name">Name</label>
    <input type="text" name="name" id="name" placeholder="Name"><br>

    <p id="errname"></p>
    <label for="email">Email</label>
    <input type="text" name="email" id="email" value="" placeholder="Email"><br>
    
    <p id="erremail"></p>    
    <label for="phno">Phone Number</label>
    <input type="text" name="phno" id="phno" placeholder="Phone Number"><br>
    <p id="errphn" ></p><br>
    <label for="gender">Gender:</label>
    <input type="radio" name="gender" value="male" id="male"> Male
    
    <input type="radio" name="gender" value="female" id="female">Female<br>
        
    <p id="check" ></p><br>
    <label for="password">Password</label>
    <input type="text" name="password" id="password" placeholder="Enter your Password"><br>
    <p id="pass"></p> 
    <label for="dob">Year of Birth</label>
    <input type="text" name="dob" id="dob" placeholder="yyyy">
    <p id="errdob"></p>
    <label for="Time slot">Time slot</label>
    <select name="slot" id="slot">
        <option value="Morning">Morning</option>
        <option value="Afternoon">Afternoon</option>
        <option value="Evening">Evening</option>
    </select><br>
    
    <label for="add">Address:</label>
    <textarea name="add" id="add" cols="25" rows="5" placeholder="Write your Address Here"></textarea><br>
    
    <p id="a"></p><br>
    
    <input type="checkbox" name="agree" id="agree">I confirm above information is true<br>
    
    <p id="terms"></p><br><br>
    
    <input type="submit" value="Register" id="submit"> <input type="submit" id="reset" value="Reset" name="" onclick="resetForm();">
</table>
</form>
</div>
<script>
function validateForm(){
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var e = document.myform.email.value;
    var yob = parseInt(document.getElementById("dob").value)
    var add = document.getElementById("add").value;
    var male = document.getElementById("male").checked;
    var fmale = document.getElementById("female").checked;
    if(!isNaN(name) || name.length < 2 || name.length > 20){
        document.getElementById('errname').innerHTML = "Please enter valid Name";
        return false;
    }
    //console.log(type(2019-yob))
    if((2019-yob)<17){
        document.getElementById('errdob').innerHTML = "Sorry you are not eligible";
        return false;
    }
     if(document.getElementById("slot").value == ""){
        document.getElementById('a').innerHTML = "Please select a time Slot";
        return false;
    }    
    if(add.length < 5 || add.length > 225){
        document.getElementById('a').innerHTML = "Please enter valid Address";
        return false;
    }
    if(document.getElementById("password").value==""){
        document.getElementById('pass').innerHTML = "Please enter valid Key";
        return false;
    }
    if((male == "") && (fmale == "")){
        document.getElementById('check').innerHTML = "Please enter valid Gender";
        return false;
     }
    if(document.getElementById("agree").checked==""){
        document.getElementById('terms').innerHTML = "Please Acccept Terms & Conditions";
        return false;
    }
    if(document.getElementById("phno").value.length !=10 ){
        console.log("lol")
        console.log(document.getElementById("phno").value.length)
        document.getElementById('errphn').innerHTML = "Please enter valid Number";
        return false;
    }
    return true;
}
function resetForm() {
    document.getElementById("myform").reset();
}
</script>
</body>
</html>