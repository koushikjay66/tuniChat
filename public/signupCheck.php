<?php 
	require_once("../includes/users.php");
	require_once("../includes/database.php");



	if (isset($_POST["checkEmail"])) {
		$status=$user->find_users_by_email($_POST["checkEmail"]);
		if ($status==null) {

			echo "false";
		}else {

			echo "true";
		}
	}



else if(isset($_POST["submit"])){
			$status=$user->find_users_by_email($_POST["Email"]);
		if ($status==null) {
			$user->Email=$_POST["Email"];
			$user->First_Name=$_POST["FirstName"];
			$user->Last_Name=$_POST["LastName"];
			$user->Gender=$_POST["sex"];
			$user->Password=$_POST["Password"];
			$user->signUp();
			
		}else {

			echo "<script>alert('Email Exists!');</script>";
			header("refresh:3; url='login.php'");
		}


	//header("Location:https://www.google.com");
}


else{
	echo "<script>alert('You sure you want to be here?');</script>";
	header("refresh:3; url='login.php'");
}
/*
$user->Email="koushikjay66@gmail.com";
$user->First_Name="Koushik";
$user->Last_Name="Jay";
$user->Gender="1";
$user->Password="haha";
*/

 ?>