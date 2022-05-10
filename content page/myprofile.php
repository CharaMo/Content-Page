<?php
session_start();
if(@$_SESSION['idu']=='')
{
	echo 'error';
	die();
}
include "up.php";
include "menu.php";
?>


<div class='row'>
 <h2>My Profile </h2>
 <form action="" method=post id='frmprof'>
	<div class="form-group" >
	<label for="flname">Fullname:</label>
      <input type="text" class="form-control" id="flname" required placeholder="Enter Fullname" name="flname">
    </div>
	<div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" required placeholder="Enter password" name="pwd">
    </div>
    <div class="form-group" >
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" required placeholder="Enter email" name="email">
    </div>
	<div class="form-group">
      <label for="phone">Phone Number: </span></label>
      <input type="text" class="form-control" id="phone" required placeholder="Enter Phone Number" name="phone">
    </div>
	<div class="form-group">
	<label for"sex">Choose your sex</label>
	<select class="form-control" id='sex' name='sex' required>
	<option value=''>-Select Male or Female-</option>
	<option>Male</option>
	<option>Female</option>
	</select>
	</div>
	
	<div class="form-group">
    
      <input type="submit" name="Save" class='btn btn-primary btn1' value='Save'> 
	  
  </form>
  </div>
 </div>
  <div class= "msg">
  
</div>
<script>getmyData();</script>

<?php
include "down.php";
?>