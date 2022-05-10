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
<div class='col-md-12 ' id=main1>

	<h1> Welcome to your Content Page</h1>
		
	</div>


<?php
include "down.php";
?>
	