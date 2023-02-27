<!-- App Include Here -->
<?php include 'inc/app.php'; ?>
<!-- App Include Here -->

<!-- Style Here -->
<link rel="stylesheet" href="assets/css/auth.css">
<!-- End Here -->
<section class="auth-section">
    <div class="container-fluid px-0">
        <div class="auth-start">
            <div class="row mx-0">
                <div class="col-md-7 ps-0">
                    <div class="col-md-9 mx-auto h-100">
                        <div class="from-start h-100 d-flex flex-column justify-content-center position-relative">
                            <div class="banner-content pt-0 pb-3">
                                <div class="hedadingDiv">
                                    <h3>Welcome To Asset Registry</h3>
                                    <h1>lOGIN</h1>
                                    <p class="w-100 mb-0 pb-2">The best place to register your assets
                                    </p>
                                </div>
                            </div>
                            <form method="post">
                                <div class="col-md-8 px-0">
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <input type="text" name="" value="" class="form-control" placeholder="Email">
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <input type="password" name="" value="" class="form-control" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <label for="remember">
                                            <input type="checkbox" name="" id="remember">
                                            <span class="ps-2">Remember Me</span>
                                        </label>
                                        <a href="">Forgot Password ?</a>
                                    </div>
                                    <div class="d-flex justify-content-end mt-3">
                                        <button class="btn primary-btn w-100 d-block">Join Now <i class="fa-solid fa-arrow-right"></i></button>
                                    </div>
                                </div>
                                <div class="terms-line w-100 text-center pt-3 position-absolute bottom-0">
                                    <p>By Joining as authenticator you agree to our <a href="">Terms & conditions</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 pe-0">
                    <div class="auth-background">

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Footer Include Here -->
<?php include 'inc/footer.php'; ?>
<!-- Footer Include Here -->