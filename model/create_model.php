<?php 
	include("connect.php");
	$base = connect::connection();

	try {
		$sql = "INSERT INTO users VALUES (:username, :email, :password)";
    	$result = $base->prepare($sql);
    	$result->execute(array(":username"=>$username, ":email"=>$email, ":password"=>$password1));
	} catch (Exception $e) {
		if ($e->getcode() == 23000) {
			echo'<script type="text/javascript">
    				alert("El usuario ya existe.");
    				window.location.href="../view/signup.php";
    			</script>';
		}
	}

 ?>