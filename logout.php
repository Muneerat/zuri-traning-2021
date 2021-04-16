<?php
  session_start();

  $_SESSION["full_name"] = null;
  $_SESSION["username"] = null;
  $_SESSION["password"] = null;
  
  echo "Logout";
?>