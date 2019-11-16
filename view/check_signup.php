<?php 
  $username=$_POST['username'];
  $password1=$_POST['password1'];
  $password2=$_POST['password2'];
  $email=$_POST['email'];

  if($password1 == $password2){
    require_once("../model/create_model.php");
    header("Location: ../index.php");
    // require_once("../index.php");
  }else{
    echo'<script type="text/javascript">
          alert("Las contraseñas no coinciden.");
          window.location.href="./signup.php";
        </script>';
  }
  ?>