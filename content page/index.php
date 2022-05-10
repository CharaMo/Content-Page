<?php
include "up.php";
?>
 <div class='row'>
 <h2> Login or Sign Up to your Content Page </h2>
 <form action="" method=post id='frmlogin'>
    <div class="form-group" >
      <label for="email">Email:</label>
      <input type="email" pattern="[^ @]*@[^ @]*" class="form-control" id="email" placeholder="Enter email" name="email" required>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" required>
    </div>
      <input type="submit" name="login" class='btn btn-primary btn1' value='Login'> 
	  <br><br>
	<div class='sgn' > <a href='signup.php'>Sign Up</a></div>
  </form>
  </div>
  <div class= "msg1">
  
</div>


</div>












<?php
include "down.php";
?>