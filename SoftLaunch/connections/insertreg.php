<html>
<body>
 
 
<?php
    
error_reporting(E_ALL);
ini_set('display_errors', 1);
    
$name = $_POST['name'];
$birthdate = $_POST['birthdate'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$course = $_POST['course'];
$shirt = $_POST['shirt']; 
$type = $_POST['type'];
$disclaimer = $_POST['disclaimer']; 
    
$con = @mysql_connect('localhost', 'shoshish_sshine', 'orange862!', 'shoshish_shine');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
    
mysql_select_db("shoshish_shine", $con);
 
$sql="INSERT INTO registration (name, birthdate, gender, address, phone, email, course, shirt, type, disclaimer)
VALUES
('$_POST[name]','$_POST[birthdate]','$_POST[gender]','$_POST[address]','$_POST[phone]','$_POST[email]','$_POST[course]','$_POST[shirt]','$_POST[type]','$_POST[disclaimer]')";

    
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "Thank you " . htmlspecialchars($name) . " for registering!<a href='../index.php'>HOME</a>";
 
mysql_close($con)
?>
</body>
</html>
