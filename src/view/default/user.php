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

<!-- Formulaire de création du compte utilisateur avec POST et envoi de données à la Database -->

    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Création de compte utilisateur</h2>
                    </div>
                    <p>Veuillez entrer vos logins pour vous connecter</p>
    </br>
                    <form method="post">
                        <div class="form-group">
                            <label>Pseudonyme</label>
                            <input type="text" name="login_user" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Mot de passe</label>
                            <input type="text" name="pass_user" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Rôle</label>
                            <input type="adresse" name="rol" class="form-control">
                        </div>
    </br>
                        <input type="submit" class="btn btn-primary" name="submit" value="Envoyer">
                    </form>
                </div>
            </div>        
        </div>
    </div>
    </br>
</body>
</html>
