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
      <img id='pull-left' src="./public/assets/images/Logo-abi.png"></img>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
     
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

  <!-- lllllllllllllllllllllllll -->
   <!--Actualités-->
   <div class="divider-custom divider-light">
    <div class="divider-custom-line"></div>
    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
    <div class="divider-custom-line"></div>
  </div>
  <section class="page-section bg-primary text-white mb-0" id="about">
    <div class="container">

      <h2 class="masthead-heading mb-0 text-center">ACTUALITES
      </h2>

      <br>
      <div class="row">
        <p class ="align-center"> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? <br>
          <br>
        </p>

      </div>
    </div>

    <!--formulaire - Nous Concter-->
    <section class="page-section" id="contact">
      <div class="container">
        <!-- Contact Section Heading-->
        <h2 p class="text-capitalize text-center">
          N’hésitez pas à nous contacter</h2>
        <br>
        <!-- Icon Divider-->
        <div class="divider-custom">
          <div class="divider-custom-line"></div>
          <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
          <div class="divider-custom-line"></div>
        </div>
        <!-- Contact Section Form-->
        <div class="row justify-content-center">
          <div class="col-lg-8 col-xl-7">

            <form id="contactForm" data-sb-form-api-token="API_TOKEN">
              <!-- Name input-->
              <div class="form-floating mb-3">
                <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                <label for="name">Nom</label>
                <div class="invalid-feedback" data-sb-feedback="name:required">A name is
                  required.
                </div>
              </div>
              <!-- Email address input-->
              <div class="form-floating mb-3">
                <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                <label for="email">Mail</label>
                <div class="invalid-feedback" data-sb-feedback="email:required">An email is
                  required.</div>
                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not
                  valid.
                </div>
              </div>
              <!-- Sujet input-->
              <div class="form-floating mb-3">
                <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                <label for="phone">Sujet de la demande</label>
                <div class="invalid-feedback" data-sb-feedback="phone:required">Sujet de la
                  demande is
                  required.
                </div>
              </div>
              <!-- Message input-->
              <div class="form-floating mb-3">
                <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                <label for="message">Message</label>
                <div class="invalid-feedback" data-sb-feedback="message:required">A message
                  is
                  required.
                </div>
              </div>

              <div class="d-none" id="submitSuccessMessage">
                <div class="text-center mb-3">
                  <div class="fw-bolder">Form submission successful!</div>
                  To activate this form, sign up at
                  <br />
                  <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                </div>
              </div>

              <div class="d-none" id="submitErrorMessage">
                <div class="text-center text-danger mb-3">Error sending message!</div>
              </div>
              <!-- Submit Button-->
              <button class="btn btn-primary btn-xl activated" id="submitButton" type="submit">Envoyer</button>
              <br>
              <br>


              <!--Qui sommes nous-->
              <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
              </div>
              <section class="page-section bg-primary text-white mb-0" id="about">
                <div class="container">

                  <h2 class="masthead-heading mb-0 text-center">Qui sommes nous
                  </h2>

                  <br>
                  <div class="row">
                    <p class="align-center"> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? <br>
                      <br>
                    </p>

                  </div>
                </div>

                <!--deuxième option voir Formulaire de contact--Voir page formulaire.php-->




  <!-- Footer -->
  <footer class="py-5 bg-black">
    
      <p class="m-0 text-center text-white small">Copyright &copy; CRM 2022 Groupe 2</p>
    
    <!-- /.container -->
  </footer>

  <!-- Bootstrap  JavaScript -->
  

</body>

</html>
