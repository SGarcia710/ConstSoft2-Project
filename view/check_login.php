
<?php 

  //Aquí compruebo si el login está bien

  $username=$_POST['username'];
  $password=$_POST['password'];
  $exists=false;

  foreach ($usersMatrix as $credential) {
    if($credential["username"] == $login and $credential["pass"] == $password){
      $exists=true;
    }
  }

  if($exists == true){
    // echo "<h1> BIENVENIDO AL SISTEMA </h1>";
    header('Location: ./index.html');
  }else{
    echo'<script type="text/javascript">
          alert("No se encuentra en nuestra base de datos.");
          window.location.href="../index.php";
        </script>';
  }
?>