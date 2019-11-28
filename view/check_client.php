<?php
$clientFirstName = $_POST['clientFirstName'];
$clientLastName = $_POST['clientLastName'];
$clientSex = $_POST['clientSex'];
$clientId = $_POST['clientId'];
$clientEmail = $_POST['clientEmail'];
$clientPhone = $_POST['clientPhone'];

function checkEmpty($clientFirstName, $clientLastName, $clientSex, $clientId, $clientEmail, $clientPhone)
{
  $emptySpace = false;
  if ($clientFirstName == null || $clientFirstName == '') {
    $emptySpace = true;
  }
  if ($clientLastName == null || $clientLastName == '') {
    $emptySpace = true;
  }
  if ($clientSex == null || $clientSex == '') {
    $emptySpace = true;
  }
  if ($clientId == null || $clientId == '') {
    $emptySpace = true;
  }
  if ($clientEmail == null || $clientEmail == '') {
    $emptySpace = true;
  }
  if ($clientPhone == null || $clientPhone == '') {
    $emptySpace = true;
  }
  return $emptySpace;
}

if (checkEmpty($clientFirstName, $clientLastName, $clientSex, $clientId, $clientEmail, $clientPhone) == false) {
  require_once("../model/create_clients_model.php");
  header("Location: ./clients.php");
} else {
  echo '<script type="text/javascript">
          alert("Todos los campos deben ser llenados.");
          window.location.href="./addClients.php";
        </script>';
}
