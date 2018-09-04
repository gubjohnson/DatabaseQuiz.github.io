<?php 
	ini_set("displrrors","On");
	error_reporting(E_ALL);
	session_start();
	header('location:login.php');

	$con = mysqli_connect('sql12.freemysqlhosting.net','sql12255101',"NXAER7KBuw");

	if ($con) {
		echo "connection successfull";
	} else {
		echo "no connection";
	}
	
	mysqli_select_db($con, 'sql12255101');

	$name = $_POST['user'];
	$pass = $_POST['password'];

	$q = "select * from signin where name = '$name' && password = '$pass' ";

	$result = mysqli_query($con, $q);

	$num = mysqli_num_rows($result);

	if($num == 1){
		echo "duplicate data";
	} else {
		$qy = "insert into signin(name, password) values('$name', '$pass')";
		mysqli_query($con, $qy);


	}

 ?>