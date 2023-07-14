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
    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">

            <div class="authentication-inner">
                <!-- Forgot Password -->
                <div class="card">
                    <div class="row">
                        <div
                            class="col-md-6 border-end d-lg-flex d-md-flex d-none  align-items-center justify-content-center">

                            <img src="<?php echo base_url() ?>assets/images/forgot-password-frent-img.jpg"
                                class="img-fluid" alt="">

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
                                <h4 class="mb-2 text-center">Forgot Password? 🔒</h4>
                                <p class="mb-4 text-center">Enter your email and we'll send you instructions to reset
                                    your password</p>

                                <form id="formAuthentication" class="mb-3" action="" method="POST">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="text" class="form-control" id="email" name="email"
                                            placeholder="Enter your email" autofocus required>
                                    </div>
                                    <button class="btn btn-primary d-grid w-100" type="submit">Send Reset Link</button>
                                </form>
                                <div class="text-center">
                                    <a href="<?php echo base_url() ?>"
                                        class="d-flex align-items-center justify-content-center">
                                        <i class="bx bx-chevron-left scaleX-n1-rtl bx-sm"></i>
                                        Back to login
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /Forgot Password -->
            </div>
        </div>
    </div>
    <?php $this->load->view('link/js'); ?>
</body>

</html>