<?php
include "up.php";
?>

<div class='row'>
 <h2>Sign Up </h2>
 <form action="" method=post id='frmsign'>
	<div class="form-group" >
	<label for="flname">Fullname: <span class="glyphicon glyphicon-user"></span></label>
      <input type="text" class="form-control" id="flname" required placeholder="Enter Fullname" name="flname">
    </div>
	<div class="form-group">
      <label for="pwd">Password: <span class="glyphicon glyphicon-alert"></span></label>
      <input type="password" class="form-control" id="pwd" required placeholder="Enter password" name="pwd">
    </div>
    <div class="form-group" >
      <label for="email">Email: <span class="glyphicon glyphicon-envelope"></span></label>
      <input type="email" class="form-control" id="email" required placeholder="Enter email" name="email">
    </div>
	<div class="form-group">
      <label for="phone">Phone Number: <span class="glyphicon glyphicon-earphone"></span></label>
      <input type="text" class="form-control" id="phone" required placeholder="Enter Phone Number" name="phone">
    </div>
	<div class="form-group">
	<label for"sex">Choose your sex<span class="glyphicon glyphicon-gender"></span><span class="glyphicon glyphicon-female"></span></label>
	<select class="form-control" id='sex' name='sex' required>
	<option value=''>-Select Male or Female-</option>
	<option>Male</option>
	<option>Female</option>
	</select>
	</div>
	
	<div class="form-group">
    
      <input type="submit" name="Save" class='btn btn-primary btn1' value='Save'> 
	  <br><br>
	<div class='sgn' > <a href='index.php'>Back to Login Page</a></div>
	</div>
  </form>
  </div>
  <div class= "msg">
  
</div>

<?php
include "down.php";
?>