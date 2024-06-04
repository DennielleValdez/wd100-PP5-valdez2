<?php
    if(!isset($_SESSION['level'])){
      header("Location: ../User/user_login_setter.php");
    }elseif(($_SESSION['level']) != 1){
      header("Location: ../User/user_login_setter.php");
    }
?>