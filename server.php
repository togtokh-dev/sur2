<?php
  include('db.php');
  function isLoggedIn()
  {
    if (isset($_SESSION['user'])) {
      return true;
    }else{
      return false;
    }
  }

  function isAdmin()
  {
    if (isset($_SESSION['user']) && $_SESSION['user']['user_role'] == 'admin' || isset($_SESSION['user']) && $_SESSION['user']['user_role'] == 'god' ) {
      return true;
    }else{
      return false;
    }
  }
  function isGOD()
  {
    if (isset($_SESSION['user']) && $_SESSION['user']['user_role'] == 'god' ) {
      return true;
    }else{
      return false;
    }
  }

?>
