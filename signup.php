<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registartion</title>
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
    $mailid=$_POST["mail"];
    $name=$_POST["un"];
    $ps=$_POST["ps"];

    $sn="localhost";
    $un="archit";
    $pass="archit123";
    $db="ism";
    // make connection to mysql server
    $con=mysqli_connect($sn,$un,$pass,$db);
    if(!$con){
      die("Cannot cannot to database ".$db);
    }
    //succesfully connected to database
    $query="insert into register values('$mailid','$name','$ps')";
    if($result=mysqli_query($con,$query)){
      echo "<h1 id='s'>Succesfully Registered<h1>";
      header("location:login.html");
    }
    else{
      echo "<h1 id='f'>User already exitsts<h1>";
    }

     ?>
     <br>
     <br>
     <button type="button" name="button" class="btn btn-dark" onclick="op()">Log In</button>
     <script type="text/javascript">
       function op() {
         window.location.href="login.html";
       }
     </script>
  </body>
</html>
