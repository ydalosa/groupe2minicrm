<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>CRM</title>

  <!-- Bootstrap CSS -->
  <link href="<?= $_SERVER["REQUEST_SCHEME"].'://'.$_SERVER["HTTP_HOST"]. BASE_URI ?>/public/assets/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?= $_SERVER["REQUEST_SCHEME"].'://'.$_SERVER["HTTP_HOST"]. BASE_URI ?>/public/assets/css/one-page-wonder.min.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">CRM</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a href="#" id="pull-left" class="aurelie">aaaaa</a>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="registration.php">Actualités</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Nous contacter</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Qui sommes nous ?</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admin/">Se Connecter</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <header class="masthead text-center text-white">
    <div class="masthead-content">
      <div class="container">
        <h1 class="masthead-heading mb-0">CRM</h1>
        <h2 class="masthead-subheading mb-0">ABI</h2>
        <a href="registration.php" class="btn btn-primary btn-xl rounded-pill mt-5">Se Connecter</a>
      </div>
    </div>
    <div class="bg-circle-1 bg-circle"></div>
    <div class="bg-circle-2 bg-circle"></div>
    <div class="bg-circle-3 bg-circle"></div>
    <div class="bg-circle-4 bg-circle"></div>
  </header>
<main class="container">
    <?= $content ?> 
</main>


  <!-- Footer -->
  <footer class="py-5 bg-black">
    <div class="container">
      <p class="m-0 text-center text-white small">Copyright &copy; CRM 2022 Groupe 2</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap  JavaScript -->
  

</body>

</html>