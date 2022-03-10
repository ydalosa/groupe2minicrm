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
                        <input class="form-control" id="name" type="text" placeholder="Enter your name..."
                               data-sb-validations="required"/>
                        <label for="name">Nom</label>
                        <div class="invalid-feedback" data-sb-feedback="name:required">A name is
                            required.
                        </div>
                    </div>
                    <!-- Email address input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="email" type="email" placeholder="name@example.com"
                               data-sb-validations="required,email"/>
                        <label for="email">Mail</label>
                        <div class="invalid-feedback" data-sb-feedback="email:required">An email is
                            required.
                        </div>
                        <div class="invalid-feedback" data-sb-feedback="email:email">Email is not
                            valid.
                        </div>
                    </div>
                    <!-- Sujet input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890"
                               data-sb-validations="required"/>
                        <label for="phone">Sujet de la demande</label>
                        <div class="invalid-feedback" data-sb-feedback="phone:required">Sujet de la
                            demande is
                            required.
                        </div>
                    </div>
                    <!-- Message input-->
                    <div class="form-floating mb-3">
                            <textarea class="form-control" id="message" type="text"
                                      placeholder="Enter your message here..." style="height: 10rem"
                                      data-sb-validations="required"></textarea>
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
                            <br/>
                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>

                    <div class="d-none" id="submitErrorMessage">
                        <div class="text-center text-danger mb-3">Error sending message!</div>
                    </div>
                    <!-- Submit Button-->
                    <button class="btn btn-primary btn-xl activated" id="submitButton" type="submit">Envoyer
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>