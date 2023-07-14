<!DOCTYPE html>
<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default"
    data-assets-path="../../assets/" data-template="vertical-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Paveo | Forgot Password</title>
    <?php $this->load->view('link/css'); ?>
</head>

<body>

    <div class="authentication-wrapper authentication-cover">
        <div class="authentication-inner row m-0">

            <!-- /Left Text -->
            <div class="d-none d-lg-flex col-lg-7 col-xl-8 align-items-center p-5">
                <div class="w-100 d-flex justify-content-center">
                    <img src="<?php echo base_url() ?>assets/images/girl-unlock-password-light.png" class="img-fluid"
                        alt="Login image" width="600" data-app-dark-img="illustrations/girl-unlock-password-dark.png"
                        data-app-light-img="illustrations/girl-unlock-password-light.html">
                </div>
            </div>
            <!-- /Left Text -->

            <!-- Forgot Password -->
            <div class="d-flex col-12 col-lg-5 col-xl-4 align-items-center authentication-bg p-sm-5 p-4">
                <div class="w-px-400 mx-auto">
                    <!-- Logo -->
                    <div class="app-brand mb-5 justify-content-center">
                    <img src="<?php echo base_url() ?>assets/images/logo-color.png" class="img-fluid" alt="">
                    </div>
                    <!-- /Logo -->
                    <h4 class="mb-2 text-primary text-center">Forgot Password? 🔒</h4>
                    <p class="mb-4 text-center">Enter your email and we'll send you instructions to reset your password</p>
                    <form id="formAuthentication" class="mb-3 needs-validation" novalidate
                        action=""
                        method="POST">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" name="email"
                                placeholder="Enter your email" autofocus required>
                                <div class="invalid-feedback"> Please enter your Email. </div>
                        </div>
                        <button class="btn btn-default d-grid w-100">Send Reset Link</button>
                    </form>
                    <div class="text-center">
                        <a href="<?php echo base_url() ?>" class="d-flex align-items-center justify-content-center">
                            <i class="bx bx-chevron-left scaleX-n1-rtl bx-sm"></i>
                            Back to login
                        </a>
                    </div>
                </div>
            </div>
            <!-- /Forgot Password -->
        </div>
    </div>
    <?php $this->load->view('link/js'); ?>
</body>

</html>