<!DOCTYPE html>
<html lang="FR">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Création Client</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>

<!-- Formulaire de création du client avec POST et envoi de données à la Database -->

    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Création de compte client</h2>
                    </div>
                    <p>Entrez les données du client</p>
                    <form action="insert.php" method="post">
                        <div class="form-group">
                            <label>Raison sociale</label>
                            <input type="text" name="raison_sociale" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Adresse</label>
                            <input type="adresse" name="adresse_client" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Code postal</label>
                            <input type="code_postal" name="code_postal_client" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Ville</label>
                            <input type="ville_client" name="ville_client" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>CA</label>
                            <input type="ca" name="ca" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Effectif</label>
                            <input type="effectif" name="effectif" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Téléphone</label>
                            <input type="telephone" name="telephone_client" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Type de client</label>
                            <input type="type_client" name="type_client" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Nature du client</label>
                            <input type="nature_client" name="nature_client" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Ajouter un commentaire au client</label>
                            <input type="commentaire" name="commentaire_client" class="form-control">
                        </div>
                        <input type="submit" class="btn btn-primary" name="submit" value="Envoyer">
                    </form>
                </div>
            </div>        
        </div>
    </div>
    </br>
</body>
</html>