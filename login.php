<?php
session_start();

if(isset($_SESSION['use']))   // Checking whether the session is already there or not if
                              // true then header redirect it to the home page directly
 {
    header("Location:page2.php");
 }

if(isset($_POST['login']))   // it checks whether the user clicked login button or not
{
     $user = $_POST['user'];
     $pass = $_POST['pass'];

      if($user == "admin" && $pass == "123")  // username is  set to "Ank"  and Password
         {                                   // is 1234 by default

          $_SESSION['use']=$user;


         echo '<script type="text/javascript"> window.open("page2.php","_self");</script>'; //  On Successful Login redirects to home.php

        }

        else
        {
            echo "invalid Login or Password";
        }
}
   echo "<div class='form-group'>
          <div class='col-sm-offset-2 col-sm-10'>
            <a href='index.php' style='float:right; margin-right:10px;'><input type='submit' class='btn btn-danger btn-sm' style='display:block;' value='Выход'></a>
          </div>
        </div>";

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/aos.css" rel="stylesheet">

    <title></title>
  </head>
  <style media="screen">
   .form form {
      width: 300px;
      margin: 0 auto;
      padding-top: 20px;
    }
  </style>
  <body>
    <div class="form">
      <form class="form-horizontal" role="form" method="POST" action="">
        <div class="form-group">
          <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Логин</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Логин" name="user">
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Пароль</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" placeholder="Пароль" name="pass">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <input type="submit" class="btn btn-default btn-sm" style="display:block;" name="login" value="Войти">
          </div>
        </div>
      </form>
    </div>
  </body>
</html>
