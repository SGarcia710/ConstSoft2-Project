<?php

  include("../model/login_model.php");
  $users= new login_model();
  $usersMatrix = $users->get_users();
  include("../view/check_login.php");
  ?>