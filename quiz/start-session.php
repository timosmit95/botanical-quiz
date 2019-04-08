<?php
	session_start();
	include('db.php');
 
	$username=$_POST['username'];
 
	$query=mysqli_query($conn, "SELECT * FROM users,clue WHERE username='$username'");
	$numrows=mysqli_num_rows($query);
 
	if ($numrows==0){
		$_SESSION['message']="User not found!";
		header('location:walkthrough.php');
	}
	else{
		$row=mysqli_fetch_array($query);
		$_SESSION['username']=$row['username'];
		$_SESSION['id']=$row['id'];
		$_SESSION['image']=$row['image'];
		header('location:clue.php?id='.$row['clueid']);
	}
?>