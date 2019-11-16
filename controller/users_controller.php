<?php
	include("../model/users_model.php");
	$users= new users_model();
	$usersMatrix = $users->get_users();
	include("../view/index.php");
  ?>
