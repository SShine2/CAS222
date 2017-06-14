<?php $title = 'Ace in the Hole Multisport Events | Contact Us'; ?>
<?php $currentPage = 'contact'; ?>
<?php include('cas222.shoshishinedesign.com/includes/head.php'); ?> <!-- subfolder of that location -->

<body>
    
<?php include('cas222.shoshishinedesign.com/includes/navbar.php'); ?> 
    
    <main>
<?php
    
error_reporting(E_ALL);
ini_set('display_errors', 1);
    
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$comments = $_POST['comments'];  
    
$con = @mysql_connect('localhost', 'shoshish_S9PxACE','7d4-nGs-Evk-Axe');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
    
mysql_select_db("shoshish_S9Px_ace_dev", $con);
 
$sql="INSERT INTO contact (name, phone, email, comments)
VALUES
('$_POST[name]','$_POST[phone]','$_POST[email]','$_POST[comments]')";

    
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
    
    
echo "<p>Thank you " . htmlspecialchars($name) . " for contacting Ace in the Hole MultiSport Events. We will get back to you shortly!</p><a href='../index.php'>HOME</a>";

 
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