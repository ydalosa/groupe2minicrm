

<!DOCTYPE html>
<html lang="fr" class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Interface CRM ABI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="dashboard/apple-icon.png">
    <link rel="shortcut icon" href="dashboard/favicon.ico">

    <link rel="stylesheet" href="dashboard/vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="dashboard/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="dashboard/vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="dashboard/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="dashboard/vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="dashboard/vendors/jqvmap/dist/jqvmap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="dashboard/assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>
<body>

    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
               
                    <h3 class="menu-title">Recherche</h3>

<!-- /.menu-title -->

<li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-search"></i>Recherche particulière</a>
                        <ul class="sub-menu children dropdown-menu">
                            <form method="get" action="search.php" class="search-form">

                                    <p>RECHERCHE PAR CLIENT</p>
                                    <div>
                                        <input type="radio" id="case1" name="groupe1" value="case 1" checked>
                                        <label for="case1">
                                            <p>Raison sociale</p>
                                        </label>
                                    </div>
                                    <div>
                                        <input type="radio" id="case2" name="groupe1" value="case 2">
                                        <label for="case2">
                                            <p>ID</p>
                                        </label>
                                    </div>

                                    <div>
                                        <input type="radio" id="case3" name="groupe1" value="case 3">
                                        <label for="case3">
                                            <p>Ville</p>
                                        </label>
                                    </div>

                                    <input class="form-control" type="text" aria-label="recherche">
                                    <input type="submit" value="Rechercher"/>
                                </li>   
                            </form>     
                            <br>

                            <form method="get" action="search.php" class="search-form">
                                <li>
                                <p>RECHERCHE PAR CONTACT</p>
                                    <div>
                                        <input type="radio" id="case4" name="groupe2" value="case 4" checked>
                                        <label for="case4">
                                            <p>Nom</p>
                                        </label>
                                    </div>
                                    <div>
                                        <input type="radio" id="case5" name="groupe2" value="case 5">
                                        <label for="case5">
                                            <p>Prénom</p>
                                        </label>
                                    </div>

                                    <div>
                                        <input type="radio" id="case6" name="groupe2" value="case 6">
                                        <label for="case6">
                                            <p>ID</p>
                                        </label>
                                    </div>
                                    <input class="form-control" type="text" aria-label="recherche">
                                    <input type="submit" value="Rechercher"/>
                                </li>
                                
                            </form>
                        </ul>
                    </li>    
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
<!-- Right Panel -->

<div id="right-panel" class="right-panel">

<!-- Header-->
<header id="header" class="header">

    <div class="header-menu">
        <div class="col-sm-12">
            <div class="user-area dropdown float-right">
                    <h3>Nom de l'utilisateur</h3>
                </a>
                    <a class="nav-link" href="#"><i class="fa fa-user"></i> Mon Profil</a>
                    <a class="nav-link" href="#"><i class="fa fa-power-off"></i> Déconnexion</a>
            </div>
        </div>
    </div>

</header>  <!-- /header -->

<!-- Header-->


<div class="breadcrumbs">
            <div class="col-sm-12">
                <div class="page-title">
                    <h1 class="titrepage">Clients et contacts clients</h1>
                </div>
            </div>
        </div>
        <div>
            <button type="button" class="ajout btn btn-info">Ajout d'un nouveau Client</button>
        </p>


        <div class="content my-3">

            <div class="tab col-sm-6 col-lg-6">
                <div class="card text-white bg-flat-color-4">
                    <div class="card-body">

<!-- ---------------------------- DEBUT TABLEAU ---------------------------- --> 

<?php try
                                {
                                    // On se connecte à MySQL
                                    $mysqlClient = new PDO('mysql:host=localhost;dbname=groupe2minicrm;charset=utf8', 'root', 'root');
                                }
                                catch(Exception $e)
                                {
                                    // En cas d'erreur, on affiche un message et on arrête tout
                                        die('Erreur : '.$e->getMessage());
                                }
                                // Si tout va bien, on peut continuer
                                // On récupère tout le contenu de la table clients
                                $sqlQuery = 'SELECT * FROM clients';
                                $clientsStatement = $mysqlClient->prepare($sqlQuery);
                                $clientsStatement->execute();
                                $clients = $clientsStatement->fetchAll();
                                                
                                // On récupère tout le contenu de la table contacts
                                $sqlQueryContact = 'SELECT * FROM contacts';
                                $contactsStatement = $mysqlClient->prepare($sqlQueryContact);
                                $contactsStatement->execute();
                                $contacts = $contactsStatement->fetchAll();
                            ?>
                        <table>
                            <thead>
                                <tr>
                                    <th colspan="4" height="100">Clients</th>
                                </tr>
                                <tr>
                                    <td height="100">ID</td>
                                    <td height="100">Raison Sociale</td>
                                    <td height="100">Ville</td>
                                    <td height="100">+ d'infos</td>
                                </tr>
                            </thead>
                        <tbody>
                                
                            <?php
                            // On affiche chaque client un à un
                            foreach ($clients as $client) {
                            ?>
                                <tr>
                                    <td height="100"><?php echo $client['id_client'];?></td>
                                    <td height="100"><?php echo $client['raison_sociale'];?></td>
                                    <td height="100"><?php echo $client['ville_client'];?></td>
                                    <td height="100">
                                        <div class="dropdown float-right">
                                            <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton2" data-toggle="dropdown">
                                                <i class="fa fa-plus-square"></i>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                                <div class="dropdown-menu-content">
                                                    <a class="dropdown-item" href="#">Fiche client</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                        </table>
                        
                    </div>
                </div>
            </div>
        
            <div class="tab col-sm-6 col-lg-6">
                <div class="card text-white bg-flat-color-4">
                    <div class="card-body">

                        <table>
                            <thead>
                                <tr>
                                    <th colspan="4" height="100">Contacts clients</th>
                                </tr>
                                <tr>
                                    <td height="100">ID</td>
                                    <td height="100">Nom</td>
                                    <td height="100">Prénom</td>
                                    <td height="100">+ d'infos</td>
                                </tr>
                            </thead>
                            <tbody>
                            
                            <?php
                            // On affiche chaque contact client un à un
                            foreach ($contacts as $contact) {
                            ?>
                                <tr>
                                    <td height="100"><?php echo $contact['id_contact'];?></td>
                                    <td height="100"><?php echo $contact['nom_contact'];?></td>
                                    <td height="100"><?php echo $contact['prenom_contact'];?></td>
                                    <td height="100">
                                        <div class="dropdown float-right">
                                            <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton2" data-toggle="dropdown">
                                                <i class="fa fa-plus-square"></i>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                                <div class="dropdown-menu-content">
                                                    <a class="dropdown-item" href="#">Fiche contact client</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                                
                            </tbody>
                        </table>
<!-- ---------------------------- FIN TABLEAU ---------------------------- -->                     

                    </div>
                </div>
            </div>

           
        </div> <!-- .content -->
    </div><!-- /#right-panel -->

<style>

    .titrepage{
        text-align: center;
    }

    /* espacement */

.tab{
    padding: 0;
}

table {
    border: 2px solid black;
    table-layout: fixed;
    width: 100%;
}
 
th,td {
    border-collapse: collapse;
    border: 2px solid grey;
    border-radius: 5px;
}

table, thead, th {
    color: #5B5A59;
}

th, td {
    padding: 10px;
}


  /* typographie */

html {
  font-family: 'helvetica neue', helvetica, arial, sans-serif;
}

th {
  letter-spacing: 2px;
  color: #454545;
}

td {
  letter-spacing: 1px;
}

thead th {
    font-size: x-large;
    text-align: left;
}

tbody td {
  text-align: left;
}



</style> 

    <!-- Right Panel -->

    <script src="dashboard/vendors/jquery/dist/jquery.min.js"></script>
    <script src="dashboard/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="dashboard/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="dashboard/assets/js/main.js"></script>


    <script src="dashboard/vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="dashboard/assets/js/dashboard.js"></script>
    <script src="dashboard/assets/js/widgets.js"></script>
    <script src="dashboard/vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="dashboard/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="dashboard/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>

</body>

</html>
