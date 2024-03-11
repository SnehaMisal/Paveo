<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-template="vertical-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Paveo | Admin Profile</title>
    <?php $this->load->view('link/css'); ?>
</head>

<body>
    <?php
    $y="";
    $x="dashboard";
    $z="";
    ?>
    <div class="layout-wrapper layout-content-navbar  ">
        <div class="layout-container">
            <!-- Menu -->
            <?php include 'common_file/sidemenu.php'?>
            <!-- / Menu -->
            <!-- Layout container -->
            <div class="layout-page">
                <?php include 'common_file/header.php'?>
                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="fw-bold py-2 mb-2 text-primary">
                            Admin Profile
                        </h4>
                        <div class="row">
                            <!-- User Sidebar -->
                            <div class="col-xl-4 col-lg-5 col-md-5 order-1 order-md-0">
                                <!-- User Card -->
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="user-avatar-section">
                                            <div class=" d-flex align-items-center flex-column">
                                                <img class="img-fluid rounded my-4"
                                                    src="<?php echo base_url() ?>assets/images/profile.png" height="110"
                                                    width="110" alt="User avatar" />
                                                <div class="user-info text-center">
                                                    <h4 class="mb-2">Violet Mendoza</h4>
                                                    <span class="badge bg-label-secondary">Admin</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="d-flex justify-content-around flex-wrap my-4 py-3">
                                            <div class="d-flex align-items-start me-4 mt-3 gap-3">
                                                <span class="badge bg-label-primary p-2 rounded"><i
                                                        class='bx bx-check bx-sm'></i></span>
                                                <div>
                                                    <h5 class="mb-0">1.23k</h5>
                                                    <span>Tasks Done</span>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-start mt-3 gap-3">
                                                <span class="badge bg-label-primary p-2 rounded"><i
                                                        class='bx bx-customize bx-sm'></i></span>
                                                <div>
                                                    <h5 class="mb-0">568</h5>
                                                    <span>Projects Done</span>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                                <!-- /User Card -->
                            </div>
                            <!--/ User Sidebar -->


                            <!-- User Content -->
                            <div class="col-xl-8 col-lg-7 col-md-7 order-0 order-md-1">
                                <div class="nav-align-top mb-4">
                                    <ul class="nav nav-tabs nav-fill" role="tablist">
                                        <li class="nav-item">
                                            <button type="button" class="nav-link p-3 active" role="tab"
                                                data-bs-toggle="tab" data-bs-target="#navs-justified-profile"
                                                aria-controls="navs-justified-profile" aria-selected="false"><i
                                                    class="tf-icons bx bx-user me-1"></i> Profile</button>
                                        </li>
                                        <li class="nav-item">
                                            <button type="button" class="nav-link p-3" role="tab" data-bs-toggle="tab"
                                                data-bs-target="#navs-justified-password"
                                                aria-controls="navs-justified-password" aria-selected="true"><i
                                                    class="tf-icons bx bx-lock me-1"></i> Change Password </button>
                                        </li>

                                    </ul>
                                    <div class="tab-content">

                                        <div class="tab-pane fade show active" id="navs-justified-profile"
                                            role="tabpanel">
                                            <form action="" method="post" class="needs-validation" novalidate>
                                                <div class="row mb-1">
                                                    <div class="mb-1  col form-password-toggle">
                                                        <label class="form-label" for="">Full Name</label>
                                                        <input class="form-control" type="text" id="" name=""
                                                            value="Violet Mendoza" required=""
                                                            placeholder="Enter your Full Name" />
                                                        <div class="invalid-feedback"> Please enter your Full Name.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col mb-3">
                                                        <label for="" class="form-label">Email Id<span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" id="" class="form-control"
                                                            placeholder="Enter  Email Id" value="demo@gmail.com"
                                                            required="">
                                                        <div class="invalid-feedback"> Please enter your Email Id.
                                                        </div>
                                                    </div>
                                                    <div class="col mb-3">
                                                        <label for="" class="form-label">Mobile No. <span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" id="" class="form-control"
                                                            placeholder="Enter  Mobile No." value="9876543210"
                                                            required="">
                                                        <div class="invalid-feedback"> Please enter your Mobile
                                                            No..
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-2">
                                                    <div class="col mb-3">
                                                        <label for="" class="form-label">Profile Image <span
                                                                class="text-danger">*</span></label>
                                                        <input type="file" id="" class="form-control" name=""
                                                            required />
                                                        <div class="invalid-feedback">Please Enter Profile
                                                            Image.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-center">
                                                    <button type="submit" class="btn btn-default me-2">Save
                                                        Changes</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade " id="navs-justified-password" role="tabpanel">
                                            <form method="POST" class="needs-validation" novalidate>
                                                <div class="alert alert-warning" role="alert">
                                                    <h6 class="alert-heading fw-bold mb-1">Ensure that these
                                                        requirements
                                                        are met</h6>
                                                    <span>Minimum 8 characters long, uppercase & symbol</span>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 col-sm-6 mb-3 form-password-toggle">
                                                        <label class="form-label"
                                                            for="bs-validation-password">Password</label>
                                                        <div class="input-group input-group-merge">
                                                            <input type="password" id="bs-validation-password"
                                                                class="form-control" value="" placeholder="*****" minlength="8"
                                                                required />
                                                            <span class="input-group-text cursor-pointer"
                                                                id="basic-default-password4"><i
                                                                    class="bx bx-hide"></i></span>
                                                        </div>
                                                        <div class="invalid-feedback"> Please enter your password.
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 col-12 col-sm-6 form-password-toggle">
                                                        <label class="form-label" for="confirmPassword">Confirm New
                                                            Password</label>
                                                        <div class="input-group input-group-merge">
                                                            <input class="form-control" type="password"
                                                                name="confirmPassword" id="confirmPassword" minlength="8" required
                                                                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                                                            <span class="input-group-text cursor-pointer"><i
                                                                    class="bx bx-hide"></i></span>
                                                        </div>
                                                        <div class="invalid-feedback"> Please enter your Confirm
                                                            password.
                                                        </div>
                                                    </div>
                                                    <div class="text-center">
                                                        <button type="submit" class="btn btn-default me-2">Change
                                                            Password</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ User Content -->
                        </div>
                    </div>
                    <!-- Footer -->
                    <?php include 'common_file/footer.php'?>
                    <!-- / Footer -->
                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>
        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
        <div class="drag-target"></div>
    </div>
    <?php $this->load->view('link/js'); ?>
</body>

</html>