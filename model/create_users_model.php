<?php
include("connect.php");
$base = connect::connection();

try {
	$sql = "INSERT INTO users VALUES (null, :username_usr, :email_usr, :password_usr)";
	$result = $base->prepare($sql);
	$result->execute(array(":username_usr" => $username, ":email_usr" => $email, ":password_usr" => $password1));
} catch (Exception $e) {
	if ($e->getcode() == 23000) {
		echo '<script type="text/javascript">
    				alert("El usuario ya existe.");
    				window.location.href="../view/signup.php";
    			</script>';
	}
}
