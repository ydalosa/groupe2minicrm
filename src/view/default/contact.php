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

</body>

</html>