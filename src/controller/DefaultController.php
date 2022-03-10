<?php
// project-name/src/controller/DefaultController.php

declare(strict_types=1);
namespace App\controller;
use App\core\Controller;

class DefaultController extends Controller
{
    public function accueil(){
        //...

        $this->renderView('default/accueil');
       
    } 
    public function dashboard(){
        //...

        $this->renderView('default/dashboard');
       
    }
    public function contact(){
        //...

        $this->renderView('default/contact');
       
    } 
    public function about(){
        //...

        $this->renderView('default/about');
       
    }
    public function form(){
        //...
/* Connexion Database */

    $servername='localhost';
    $username='root';
    $password='root';
    $dbname = "groupe2minicrm";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Could not Connect MySql Server:');
        }

/* Equivalent au fichier config.ini */


        /* Insertion des données entrées dans le formulaire, dans la Database */
        
        if(isset($_POST['submit']))
        {    
             $id_sect = $_POST['id_sect'];
             $raison_sociale = $_POST['raison_sociale'];
             $adresse_client = $_POST['adresse_client'];
             $code_postal_client = $_POST['code_postal_client'];
             $ville_client = $_POST['ville_client'];
             $ca = $_POST['ca'];
             $effectif = $_POST['effectif'];
             $telephone_client = $_POST['telephone_client'];
             $type_client = $_POST['type_client'];
             $nature_client = $_POST['nature_client'];
             $commentaire_client = $_POST['commentaire_client'];
             $sql = "INSERT INTO clients (id_sect,raison_sociale,adresse_client,code_postal_client,ville_client,ca,effectif,telephone_client,type_client,nature_client,commentaire_client)
             VALUES ('$id_sect','$raison_sociale','$adresse_client','$code_postal_client','$ville_client','$ca','$effectif','$telephone_client','$type_client','$nature_client','$commentaire_client')";
             
             /* Envoi des données à la BDD */
        
             if (mysqli_query($conn, $sql)) {
                echo "New record has been added successfully !";
             } else {
                echo "Error: " . $sql . ":-" . mysqli_error($conn);
             }
             mysqli_close($conn);
        }
        $this->renderView('default/form');
       
    }

    public function login(){
        //...

        $this->renderView('default/login');

    }

    public function news(){
        //...

        $this->renderView('default/news');

    }
    public function connexion(){
        //...

        $this->renderView('default/connexion');

    }
    public function user(){

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


        /* Insertion des données entrées dans le formulaire, dans la Database */
        
        if(isset($_POST['submit']))
        {    
             $login_user = $_POST['login_user'];
             $pass_user = $_POST['pass_user'];
             $rol = $_POST['rol'];
             $sql = "INSERT INTO users (login_user,pass_user,rol)
             VALUES ('$login_user','$pass_user','$rol')";
             
             /* Envoi des données à la BDD */
        
             if (mysqli_query($conn, $sql)) {
                echo "Votre compte a été créé !";
             } else {
                echo "Error: " . $sql . ":-" . mysqli_error($conn);
             }
             mysqli_close($conn);
        }

        $this->renderView('default/user');

    }

}
