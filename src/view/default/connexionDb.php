<?php

/* Connexion Database */

    $servername='localhost';
    $username='root';
    $password='';
    $dbname = "groupe2minicrm";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Could not Connect MySql Server:');
        }

/* Equivalent au fichier config.ini */

?>

