<?php
include("connect.php");
$base = connect::connection();

try {
  $sql = "INSERT INTO clients VALUES (null, :fname_clt, :lname_clt, :sex_clt, :id_clt, :email_clt, :phone_clt)";
  $result = $base->prepare($sql);
  $result->execute(array(":fname_clt" => $clientFirstName, ":lname_clt" => $clientLastName, ":sex_clt" => $clientSex, ":id_clt" => $clientId, ":email_clt" => $clientEmail, ":phone_clt" => $clientPhone));
} catch (Exception $e) {
  if ($e->getcode() == 23000) {
    echo '<script type="text/javascript">
    				alert("El cliente ya existe.");
    				window.location.href="../view/addClients.php";
    			</script>';
  }
}
