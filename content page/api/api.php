<?php
include "connect.php";

if($_GET['q']==1)
{
	$s1="insert into user set email='$_POST[email]', password='$_POST[pwd]', 
					fullname='$_POST[flname]', phone='$_POST[phone]', sex='$_POST[sex]'";
					
	if(mysqli_query($conn,$s1))
	{
		echo "ok";
	}
	else
	{
		echo "error";
	}


}

if($_GET['q']==2)
{
	$s2="select * from user where email='$_POST[email]' and password='$_POST[pwd]'";
	
	$q=mysqli_query($conn, $s2);
	
	if(mysqli_num_rows($q)>0)
	{
		$r=mysqli_fetch_array($q);
	    $_SESSION['idu']=$r['id'];
		
		echo "ok";
	}
	
	else {
		$_SESSION['idu']='';
		
		echo "error";
	}
}

if($_GET['q']==3)
{

	$d=htmlentities($_POST['descr'],ENT_QUOTES);
	$s3="insert into content set id_user='$_SESSION[idu]', title='$_POST[title]',
				description='$d', url='$_POST[url]', date1=now()";
	if(mysqli_query($conn,$s3))
	{
			echo "ok";
	}
	else{
		echo "error";
	}
}

if($_GET['q']==4)
{
	$s5="select *,content.id as idc from content, user  where content.id_user=user.id and user.id='$_SESSION[idu]'";
	
	$q=mysqli_query($conn, $s5);
	$A=[];
	while($r=mysqli_fetch_assoc($q))
	{
		$A[]=$r;
	}
	
	
	echo json_encode($A);
	
}
	

if($_GET['q']==5)
{
	$s5="select * from user where id='$_SESSION[idu]'";
	
	$q=mysqli_query($conn, $s5);
	
	$r=mysqli_fetch_assoc($q);
	
	
	echo json_encode($r);
	
}

if($_GET['q']==6){
	
	$s6="select * from content inner join user on content.id_user = user.id where content.id='$_GET[id]'";
	
	$q=mysqli_query($conn, $s6);
	$r=mysqli_fetch_assoc($q);
	
	echo json_encode($r);
}

if($_GET['q']==7){
	
	$s7="update user set email='$_POST[email]', password='$_POST[pwd]', 
					fullname='$_POST[flname]', phone='$_POST[phone]', sex='$_POST[sex]' where id='$_SESSION[idu]'";
		
	if(mysqli_query($conn,$s7))
	{
			echo "ok";
	}
	else{
		echo "error";
	}

}	

if($_GET['q']==8){
	
	$s8="delete from content where id='$_GET[id]'";
	$q=mysqli_query($conn, $s8);
}

if($_GET['q']==9){
	$d=htmlentities($_POST['descr'],ENT_QUOTES);
	$s9="update content set id_user='$_SESSION[idu]', title='$_POST[title]', description='$d', url='$_POST[url]', date1=now() where id='$_POST[idc]'";
	
	if(mysqli_query($conn, $s9))
	{
		echo "ok";
	}
	else{
		echo "error";
	}
}

if($_GET['q']==10){
	$s10="select *,content.id as idc from content, user where content.id_user=user.id";
 
	
	$q=mysqli_query($conn, $s10);
	$A=[];
	while($r=mysqli_fetch_assoc($q))
	{
		$A[]=$r;
	}
	
	
	echo json_encode($A);
}


if($_GET['q']==11)
{
	$s11="select * from user";
	$q=mysqli_query($conn, $s11);
	$A=[];
	while($r=mysqli_fetch_assoc($q))
	{
		$A[]=$r;
	}
	
	
	echo json_encode($A);
}
	
	
	
	
	
	


?>