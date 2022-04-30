<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Log In</title>
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

    $id=$_POST["username"];
    $password=$_POST["password"];

    $sn="localhost";
    $un="archit";
    $pass="archit123";
    $db="ism";
    // make connection to mysql server
    $con=mysqli_connect($sn,$un,$pass,$db);
    if(!$con){
      die("Cannot cannot to database ".$db);
    }

    $query="select * from register where mail='$id' and password='$password'";
    $flag=true;
    if($result=mysqli_query($con,$query)){

        if($row=mysqli_fetch_array($result)){
            $flag=false;
            $_SESSION["uid"]=$row[0];
            $_SESSION["name"]=$row[1];
            $_SESSION["pass"]=$row[2];
            echo "<h1 id='s'>Succesfully Logged in<h1>";
            header("Location:home.php");
        }
          else{
            echo "<h1 id='f'>Bad authencation<h1>";
          }
    }
    if($flag){
        echo "<h1 id='f'>Wrong Password / Mail id try again<h1>";
    }
     ?>
  </body>
</html>
