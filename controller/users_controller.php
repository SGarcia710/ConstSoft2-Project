<?php
include("../model/users_model.php");
$user = new users_model();
$usersMatrix = $user->get_users();
include("../view/check_login.php");
