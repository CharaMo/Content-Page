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
 <h2>Edit Content</h2>
 <form action="" method=post id='frmedit'>
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
      <input type='text' pattern="https://.*" class="form-control" id="url" placeholder="Enter url" name="url" required>
    </div>
	
		<input type=hidden name='idc' value='<?php echo $_GET['id']; ?>'>
      <input type="submit" name="Save" class='btn btn-primary btn1' value='Save'> 
	  <br><br>
  </form>
  </div>
  <div id= "msg2">
  </div>

  <script>getEdit(<?php echo $_GET['id']; ?>);</script>