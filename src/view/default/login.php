<?php
/*****************************************
 *  Constantes et variables
 *****************************************/
define('LOGIN','Rasmus');  // Login correct
define('PASSWORD','lerdorf');  // Mot de passe correct
$message = 'Vous êtes bien connécté ';      // Message à afficher à l'utilisateur

/*****************************************
 *  Vérification du formulaire
 *****************************************/
// Si le tableau $_POST existe alors le formulaire a été envoyé
if(!empty($_POST))
{
    // Le login est-il rempli ?
    if(empty($_POST['login']))
    {
        $message = 'Veuillez indiquer votre login svp !';
    }
    // Le mot de passe est-il rempli ?
    elseif(empty($_POST['motDePasse']))
    {
        $message = 'Veuillez indiquer votre mot de passe svp !';
    }
    // Le login est-il correct ?
    elseif($_POST['login'] !== LOGIN)
    {
        $message = 'Votre login est faux !';
    }
    // Le mot de passe est-il correct ?
    elseif($_POST['motDePasse'] !== PASSWORD)
    {
        $message = 'Votre mot de passe est faux !';
    }
    else
    {
        // L'identification a réussi
        $message = 'Bienvenue '. LOGIN .' !';
    }
}
?>

<!DOCTYPE html>
<html lang="fr" >

<head>
    <title>Formulaire d'authentification</title>
</head>

<body>
<div class="container">
    <?php if (isset($error) && !empty($error)) : ?>
        <div class="alert alert-danger" role="alert">
            <?= $error ?>
        </div>
    <?php endif; ?>
    <?php if(!empty($message)) : ?>
        <div><?php echo $message; ?></div>
    <?php endif; ?>

    <form action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES); ?>" method="post" method="post">
        <div class="mb-3">
            <label for="validationCustomUsername">Nom d'utilisateur</label>
            <input type="text" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required
                   value="<?php if(!empty($_POST['login'])) { echo htmlspecialchars($_POST['login'], ENT_QUOTES); } ?>" />

        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
        </div>

        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</div>

</body>
</html>





