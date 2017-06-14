<?php $title = 'Ace in the Hole Multisport Events | Registration'; ?>
<?php $currentPage = 'register'; ?>
<?php include('../includes/head.php'); ?>
 <link rel="stylesheet" href="../styles/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Athiti|Cabin+Sketch:700|Julius+Sans+One" rel="stylesheet">
<body>
    
<header>
    <span><h1><img src="../images/acelogo.gif" alt="ace in the hole multisport events logo red white black" class="logo"/></h1></span>
    <div id="nav-icon4">
      <span></span>
      <span></span>
      <span></span>
    </div>
    </header>
      
  <div class="menu" id="menuExpand">
    <ul>
        <li <?php if ($currentPage === 'Ace in the Hole Multisport Events | Home') {echo 'class="active"';} ?>><a href="../contact.php">Contact</a></li>
      <li <?php if ($currentPage === 'Home') {echo 'class="active"';} ?>><a href="../faqs.php">FAQs</a></li>
        <li <?php if ($currentPage === 'Home') {echo 'class="active"';} ?>><a href="../prepare.php">Prepare</a></li>
        <li <?php if ($currentPage === 'Home') {echo 'class="active"';} ?>><a href="../course.php">Details</a></li>
        <li <?php if ($currentPage === 'Home') {echo 'class="active"';} ?>><a href="../index.php">Home</a></li>
    </ul>
  </div>


    <main><br>
<h3>⇧ Head back to Ace in the Hole ⇧</h3>
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
    
$con = @mysql_connect('localhost', 'shoshish_S9PxACE','7d4-nGs-Evk-Axe');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
    
mysql_select_db("shoshish_S9Px_ace_dev", $con);
 
$sql="INSERT INTO registration (name, birthdate, gender, address, phone, email, course, shirt, type, disclaimer)
VALUES
('$_POST[name]','$_POST[birthdate]','$_POST[gender]','$_POST[address]','$_POST[phone]','$_POST[email]','$_POST[course]','$_POST[shirt]','$_POST[type]','$_POST[disclaimer]')";

    
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "<div style ='font:1.3em Athiti,sans-serif;color:#992727'> Thank you " . htmlspecialchars($name) . " for registering!<a href='../index.php'>HOME</a></div>";
 
mysql_close($con)
?>
        
</main>


    <footer>
        <p class="footer"><a href="http://www.twitter.com/pcccas222"><img src="../images/tweetfooter.png" alt="facebook logo icon social media" class="pics"></a>    <a href="http://www.facebook.com/cas222cascade"><img src="../images/facefooter.png" alt="facebook logo icon social media" class="pics"></a><br><br>
        Ace in the Hole Multisport Events<br>
    Copyright &copy; Shoshi Small 2017</p>

    </footer>

  <script type="text/javascript" src="../scripts/scripts2.js"></script>
</body>
</html>