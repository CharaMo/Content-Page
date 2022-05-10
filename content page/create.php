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
 <h2>Create Content</h2>
 <form action="" method=post id='frmcreate'>
    <div class="form-group" >
      <label for="title">Title:</label>
      <input type="text" class="form-control" id="title" placeholder="Enter title" name="title" required>
    </div>
    <div class="form-group">
      <label for="descr">Description:</label>
      <textarea class="form-control" id="descr" placeholder="Enter description" name="descr" required></textarea>
    </div>
	<div class="form-group">
      <label for="url">Url:</label>
      <input type='url' class="form-control" id="url"  placeholder="Enter url" name="url" required>
    </div>
	
      <input type="submit" name="crtbtn" class='btn btn-primary btn1' value='Save'> 
	  <br><br>
  </form>
  </div>
  <div class= "msg2">
  </div>
  
  <?php
include "down.php";
?>