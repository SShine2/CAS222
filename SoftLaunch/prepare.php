<?php $title = 'Ace in the Hole Multisport Events | Prepare'; ?>
<?php $currentPage = 'prepare'; ?>
<?php include('includes/head.php'); ?>

<body>
    
<?php include('includes/navbar.php'); ?>

    <main>
        <h2>Stuff You Should Know</h2>
        <hr class="style">
        <h5>Watch the weather closely.  The show goes on no matter what the weather is doing.</h5>
    <div class="section1 group">
	<div class="col span_1_of_2">
	<p>You must wear your chip timing piece during the entire event! You will be given a band that will hold it around your ankle throughout the entire event. Be sure that it is snapped tightly, that it is on before you start the race, and make sure you step over the timing mats after each segment of the race. If you are wearing a wet-suit, be sure the timing piece goes under your wetsuit, otherwise, you will have a very difficult time getting it off!</p>
	</div>
	<div class="col span_1_of_2">
	<img src="images/placeholder.jpg" alt="placeholder stock photo for slideshow" class="decor">
	</div>
</div>  
        <h5>What To Bring</h5>
<div class="section2 group2">
	<div class="col span_1_of_3">
	<h5>Swim</h5>  Wetsuits are optional for the swim section though they will provide buoyancy and warmth. Many people opt of wearing their wetsuit for the triathlon so if you don't have one you'll be fine.  We will provide you with a swim cap but you will want to bring your own goggles.
	</div>
	<div class="col span_1_of_3">
	<h5>Bike</h5>  A biking helmet is mandatory. You will also receive 2 stickers in your package with your race number on them. The small sticker goes on the front of your helmet and the bigger sticker will wrap around your bike frame. Road or mountain bikes are acceptable. For safety reasons, be sure to have end-caps on the end of your handle-bars.
	</div>
	<div class="col span_1_of_3">
<h5>Run</h5>  You must finish the race with your bib number on the front of you. Some people choose to pin it on at the beginning of the race and have it on for the whole event so they donít have to worry about it, others pin it on a singlet that they put on once they finish the swim and before they head out for the bike. Others use an elastic racing strap that they pin their bib number to and then quickly strap it on before they leave for the run. Use whatever option feels best for you.
	</div>
</div> 
<hr class="style"><h5>Remember to bring a change of clothing so you can enjoy the post-event festivities!</h5><hr class="style">
        
        <!-- I need to work more on this section -->
        
<h2 class="register">Registration</h2>
<div class="section3 group">
	<div class="col span_1_of_2">
	<p class="cost">Long Course: $240</p> 	  	
<p class="cost">Olympic: $110</p>	  	
<p class="cost">10K: $50</p> 	  	
<p class="cost">Half Marathon: $75</p> 	
<p class="cost">Sprint: $90</p> 
<p class="cost">Try-a-Tri: $65</p><br><br>
	</div>
	<div class="cost col span_1_of_2">
        <h5>Cost Includes:</h5><br>
          <p class="cost">Food and Beer</p>
        <p class="cost">Access to the Weekends' Live Entertainment and Fitness Expo</p>
              <p class="cost">Commemorative Finisher Medal</p>
              <p class="cost">Accurate Chip Timing for Competitive Races</p>
              <p class="cost">Ace in the Hole MultiSport Weekend Tech Shirt</p>
              <p class="cost">and Post-Event Party and Entertainment
                  </p>
    <p>NOTE: Tech shirts guaranteed to pre-registered participants only. 
        </p>	</div>
</div>
        <h5>Packet Pick-Up</h5>
        <p>All packet pick up will occur at Why Worry Racing, 123 NW Everett, Portland, OR. Packet pick up hours: Thursday 8-5, Friday 9-Noon.</p><p>No day of event packet pick up.</p>
<div class="form-style">        
    <h3>Sign Up Now!</h3>      
<form method="post" action="connections/insertreg.php">
 <div class="inner-wrap">   
<label>First and Last Name: <input type="varchar" name="name" required/><span class="error">* required </span></label>
      
<label>Birthdate (MM/DD/YYYY): <input type="date" name="birthdate" required/><span class="error">* required </label></span>
      
<label>Gender: <select name="gender" required/> <option value="">Select...</option> <option value="1">Male</option> <option value="2">Female</option><option value="3">Non-Binary</option> <select><span class="error">* required </span></label>
      
<label>Address: <input type="varchar" name="address" required/><span class="error">* required </span></label>
      
<label>Phone Number: <input type="varchar" name="phone" required/><span class="error">* required </span></label>
      
<label>E-Mail: <input type="varchar" name="email" required/><span class="error">* required </span></label>
    
<label>Select Your Course: <select name="course" required> <option value="">Select...</option> 
<option value="1">Long Course, $240</option> 
<option value="2">Olympic, $110</option>
<option value="3">10K, $50</option>
<option value="4">Half Marathon, $75</option> 
<option value="5">Sprint, $90</option>
<option value="6">Try-a-Tri, $65</option> </select><span class="error">* required </span>
 </label>
    
<label>Shirt Size: <select name="shirt"> <option value="">Select...</option> <option value="1">XS</option> <option value="2">S</option><option value="3">M</option><option value="4">L</option><option value="5">XL</option> </select><span class="error">* required </span></label>
    
<label>Participant or Volunteer?: <select name="type" required> <option value="">Select...</option> <option value="1">Participant</option> <option value="2">Volunteer</option></select><span class="error">* required </span></label>
      
<span class="policy">
         I agree to the terms and conditions: <input type="radio" name="disclaimer" <?php if (isset($disclaimer) && $disclaimer=="yes") echo "checked";?>value="Yes">Yes <br></span>
 
<input type="submit" value="Register" />
     </div></div>
</form>
        
</main>
    
<?php include('includes/footer.php'); ?>