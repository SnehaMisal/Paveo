<!DOCTYPE html>
<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default"
    data-assets-path="../../assets/" data-template="vertical-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Paveo | Login</title>
    <?php $this->load->view('link/css'); ?>
    <style>
    /* .light-style .authentication-wrapper .authentication-bg {
    background-color: #008080;
} */
    </style>
</head>

<body>
    <!-- <div class="container-xxl"> -->
    <div class="authentication-wrapper authentication-cover">
        <div class="authentication-inner row m-0">
            <!-- /Left Text -->
            <div class="d-none d-lg-flex col-lg-7 col-xl-8 align-items-center p-5">
                <div class="w-100 d-flex justify-content-center">
                    <img src="<?php echo base_url() ?>assets/images/boy-with-rocket-light.png" class="img-fluid"
                        alt="Login image" width="700" data-app-dark-img="illustrations/boy-with-rocket-dark.png"
                        data-app-light-img="illustrations/boy-with-rocket-light.html">
                </div>
            </div>
            <!-- /Left Text -->

            <!-- Login -->
            <div class="d-flex col-12 col-lg-5 col-xl-4 align-items-center authentication-bg p-sm-5 p-4">
                <div class="w-px-400 mx-auto">
                    <!-- Logo -->
                    <div class="app-brand mb-5 justify-content-center">
                        <img src="<?php echo base_url() ?>assets/images/logo-color.png" class="img-fluid" alt="">
                    </div>
                    <!-- /Logo -->
                    <h4 class="mb-2 text-primary text-center">Welcome to Paveo! 👋</h4>
                    <p class="mb-4 ">Please sign-in to your account and start the adventure</p>

                    <form id="formAuthentication" class="needs-validation mb-3" novalidate
                        action="<?php echo base_url('dashboard') ?>" method="POST">
                        <div class="mb-3">
                            <label for="email" class="form-label ">Email or Username</label>
                            <input type="email" class="form-control" id="email" name="email-username"
                                placeholder="Enter your email or username" autofocus required>
                            <div class="invalid-feedback"> Please enter your Currect Email or Username. </div>
                        </div>
                        <div class="mb-3 form-password-toggle">
                            <div class="d-flex justify-content-between">
                                <label class="form-label " for="password">Password</label>

                            </div>
                            <div class="input-group input-group-merge">
                                <input type="password" id="password" class="form-control" name="password" required
                                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                    aria-describedby="password" />
                                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                <div class="invalid-feedback"> Please enter your Currect Password. </div>
                            </div>
                           
                        </div>
                        <div class="mb-3 text-end">
                            <a href="<?php echo base_url('forgot_password') ?>" class="">
                                <small>Forgot Password?</small>
                            </a>
                        </div>
                        <button class="btn btn-default d-grid w-100">
                            Sign in
                        </button>
                    </form>
                </div>
            </div>
            <!-- /Login -->
        </div>
    </div>

    <!-- </div> -->

    <?php $this->load->view('link/js'); ?>
</body>

</html>