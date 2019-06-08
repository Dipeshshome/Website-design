 <?php

session_start();
include 'login.php';

 if(isset($_SESSION['Name'])){

         header("location:Showcart.php");

      }
      else{
      header("location:loginForm.php");

     }


     ?>