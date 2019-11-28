
<?php
$username = $_POST['username'];
$password = $_POST['password'];

$exists = false;

foreach ($usersMatrix as $credential) {
  if ($credential["username_usr"] == $username and $credential["password_usr"] == $password) {
    $exists = true;
  }
}

if ($exists == true) {
  session_start();
  $_SESSION['username']=$username;
  header('Location: ../view/index.php');
} else {
  echo '<script type="text/javascript">
            alert("No se encuentra en nuestra base de datos.");
            window.location.href="../index.php";
          </script>';
}
?>