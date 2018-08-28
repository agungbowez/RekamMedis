<?php
  require_once "_config/config.php"; 

  if(isset($_SESSION['user'])){
    echo "hello. <a href=\"auth/logout.php\">logout</a>";
  }else{ 
  	echo "<script> window.location='".base_url('auth/login.php')."'; </script>";
  }
 ?>

