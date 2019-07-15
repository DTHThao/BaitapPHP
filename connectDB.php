<?php
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$databasename = "baitap1";

	$con = mysqli_connect($hostname, $username, $password, $databasename);

		// if($con){
		//     echo 'ok';
		// }else{
		//     echo 'loi';
		// }

	mysqli_query($con, "SET NAMES 'utf8'");
?>