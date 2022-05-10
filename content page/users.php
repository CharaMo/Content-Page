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

<div class="row">
  <h2>All Users</h2>          
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Fullname</th>
        <th>Email</th>
        <th>Number</th>
      </tr>
    </thead>
    <tbody id='allu'>
      
    </tbody>
  </table>
</div>
<script>getallUsers();</script>



 <?php
include "down.php";
?>