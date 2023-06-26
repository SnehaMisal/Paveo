<!DOCTYPE html>
<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default"
    data-assets-path="../../assets/" data-template="vertical-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Paveo | Login</title>
    <?php $this->load->view('link/css'); ?>
</head>

<body>
    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">

            <div class="authentication-inner">
                <!-- Login -->
                <div class="card">
                    <div class="row">
                        <div class="col-md-6 bg-login d-lg-flex d-md-flex d-none  align-items-center justify-content-center">
                            
                            <img src="<?php echo base_url() ?>assets/images/login-img.jpg" class="img-fluid" alt="">
                           
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <!-- Logo -->
                                <div class="app-brand justify-content-center">
                                    <a href="index-2.html" class="app-brand-link gap-2">
                                        <span class="app-brand-logo demo">
                                        </span>
                                        <span class="app-brand-text demo text-body fw-bolder">Paveo</span>
                                    </a>
                                </div>
                                <!-- /Logo -->
                                <h4 class="mb-2 text-center">Welcome to Paveo! 👋</h4>
                                <p class="mb-4 text-center">Please sign-in to your account and start the adventure</p>

                                <form id="formAuthentication" class="mb-3" action="<?php echo base_url('dashboard') ?>"
                                    method="POST">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email or Username</label>
                                        <input type="text" class="form-control" id="email" name="email-username"
                                            placeholder="Enter your email or username" autofocus>
                                    </div>
                                    <div class="mb-3 form-password-toggle">
                                        <div class="d-flex justify-content-between">
                                            <label class="form-label" for="password">Password</label>

                                        </div>
                                        <div class="input-group input-group-merge">
                                            <input type="password" id="password" class="form-control" name="password"
                                                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                                aria-describedby="password" />
                                            <!-- <span class="input-group-text cursor-pointer"><i
                                                    class="bx bx-hide"></i></span> -->
                                        </div>
                                    </div>
                                    <div class="mb-3 text-end">
                                        <a href="<?php echo base_url('forgot_password') ?>">
                                            <small>Forgot Password?</small>
                                        </a>
                                    </div>
                                    <div class="mb-3">
                                        <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /Login -->
            </div>
        </div>

    </div>

    <?php $this->load->view('link/js'); ?>
</body>

</html>