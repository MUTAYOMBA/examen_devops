<?php 
if(isset($_POST['submit'])){ 
$dbconn=mysqli_connect("mysql","root","","schooldb"); // Database connetion 
// inserting in Database 
$firstname=$_POST['firstname']; 
$lastname=$_POST['lastname']; 
$regno=$_POST['regno']; 

$sql="INSERT INTO student SET firstname='$firstname',  
lastname='$lastname',regno='$regno'"; 
$quer =mysqli_query($dbconn,$sql); 
header("location:table.php"); 
} ?> 
<!DOCTYPE html> <html> <head>  <title> Form to Register</title> 
<body>


</head><H2><CENTER>welcome to student MIS</H2> </CENTER> <body><center>  <table> <form action="" method="POST"> 
<tr><td>First Name</b></td><td><input type="text" name="firstname"  class="y"></td></tr> 


<tr><td>Last Name</b></td><td><input type="text" name="lastname" class="y"></td></tr> 
<tr><td>Registration Number</b></td><td><input type="text" name="regno" class="y"></td></tr> 

<tr><td><input type="submit" name="submit" id="p"></td> 
<td><a  href="login.php" id="p">View</a></td></tr>
<td><a  href="registration.php" id="p">View</a></td></tr>


</div>
</form> </table></center></body> </html> 
  