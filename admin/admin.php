<?php 

session_start(); 

	$login=$_POST['login1'];
	$pass=$_POST['pass1'];
	// echo $login.'<hr>'.$pass;
	include '../dbcconn.php';
	$sql="SELECT * FROM `admin` WHERE `login`='$login' AND `password`='$pass' ";
	$query=mysqli_query($conn,$sql);
	$tox=mysqli_num_rows($query);
	if ($tox>0) {
		// echo 'ka tenc meky';
		$_SESSION['log']=true;
		echo '<script>window.location.href="../index_admin.php"</script>';
	}else{
		echo 'Nobody found';
	}
	
 ?>