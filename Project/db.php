<?php 

    $server = "localhost";
    $user = "root";
    $pass = "";
    $name = "15min";
    $conn = "";

   try{
           

         $conn = mysqli_connect($server, $user, $pass,$name);
   }catch(mysqli_sql_exception){

        echo "connexion impossible";

   }

?>
