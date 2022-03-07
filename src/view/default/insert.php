<?php
include_once 'connexionDb.php';

/* Insertion des données entrées dans le formulaire, dans la Database */

if(isset($_POST['submit']))
{    
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
     $sql = "INSERT INTO clients (raison_sociale,adresse_client,code_postal_client,ville_client,ca,effectif,telephone_client,type_client,nature_client,commentaire_client)
     VALUES ('$raison_sociale','$adresse_client','$code_postal_client','$ville_client','$ca','$effectif','$telephone_client','$type_client','$nature_client','$commentaire_client')";
     
     /* Problème de foreign key avec la table secteur_activite */
     /* Recherche de solution à base de: INSERT INTO secteur_activite (activite) VALUES ('$activite') */

     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>
