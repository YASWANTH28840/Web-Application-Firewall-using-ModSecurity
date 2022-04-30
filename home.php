<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Home</title>
  </head>
  <style media="screen">
    #f{
      color: red;
    }
    #s{
      color: green;
    }
  </style>
  <body>
    <?php

    $ID=$_SESSION["uid"];
    $NAME=$_SESSION["name"];
    $PASSWORD=$_SESSION["pass"];
   
    $flag=true;
   
    if($flag){
        echo "<h1 style='margin-left: 10px;'>ISM Project Review <h1>";
        echo "<h2 id='f' style='margin-left: 10px;'>Vulnerability : SQL Injection attack<h2><br>";
        echo "<h2 id='s' style='margin-left: 10px;'>Succesfully Logged in<h2>";
        echo "<h2 id='s' style='margin-left: 10px;'>Mail Id : $ID<h1>";
        echo "<h2 id='s' style='margin-left: 10px;'>Name : $NAME<h1>";
        echo "<h2 id='s' style='margin-left: 10px;'>Password : $PASSWORD<h1>";
    }
     ?>
     <br>
     <button type="button" class="btn btn-dark  " style="margin-left: 10px;" onclick=logout() > Logout</button>
  </body>
  <script>
      function logout(){
          window.location.href="login.html";
      }
  </script>
</html>
