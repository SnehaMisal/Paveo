<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-template="vertical-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Paveo | Vendor Profile</title>
    <?php $this->load->view('link/css'); ?>
</head>

<body>
    <?php
    $y="vendor_managment";
    $x="vendor_list";
    $z="";
    ?>
    <div class="layout-wrapper layout-content-navbar  ">
        <div class="layout-container">
            <!-- Menu -->
            <?php include 'application/views/Sales_dashboard/common_file/sidemenu.php'?>
            <!-- / Menu -->
            <!-- Layout container -->
            <div class="layout-page">
                <?php include 'application/views/Sales_dashboard/common_file/header.php'?>
                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="fw-bold py-2 mb-2 text-primary">
                            Vendor Profile
                        </h4>
                        <!-- Header -->
                        <?php include 'vendor_profile_header.php'?>
                        <!--/ Header -->

                        <!-- Navbar pills -->
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="nav nav-pills flex-column flex-sm-row mb-4 nav-justified profile_tab">
                                    <li class="nav-item"><a class="nav-link active"
                                            href="<?php echo base_url('sales_vendor_profile') ?>"><i
                                                class='bx bx-user me-1'></i> Profile</a></li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="<?php echo base_url('sales_vendor_new_order') ?>"><i
                                                class='bx bx-star me-1'></i> New Order</a></li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="<?php echo base_url('sales_vendor_inprocess_order') ?>">
                                            <i class='bx bxs-hourglass-top me-1'></i> In-Process Order</a></li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="<?php echo base_url('sales_vendor_completed_order') ?>"><i
                                                class='bx bx-check me-1'></i> Completed Order</a></li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="<?php echo base_url('sales_vendor_cancelled_order') ?>"><i class='bx bx-x me-1'></i>
                                            Cancelled Order</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--/ Navbar pills -->

                        <!-- User Profile Content -->
                        <div class="row">
                            
                            <div class="col-xl-4 col-lg-4 col-md-4">
                                <div class="card card-action mb-4">
                                    <div class="card-body">
                                        <ul class="list-unstyled mb-0">
                                            <li class="mb-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="d-flex align-items-center gap-3">
                                                        <span class="badge bg-label-primary p-2 rounded">
                                                        <i
                                                                class="bx bx-rupee bx-sm"></i></span>
                                                        <div class="me-2">
                                                            <h6 class="mb-0">Total Revenue</h6>
                                                        </div>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <span class="badge bg-label-danger">100k</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="mb-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="d-flex align-items-center gap-3">
                                                        <span class="badge bg-label-primary p-2 rounded"><i
                                                                class="bx bx-star  bx-sm"></i></span>
                                                        <div class="me-2">
                                                            <h6 class="mb-0">New Order</h6>

                                                        </div>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <span class="badge bg-label-danger">10</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="mb-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="d-flex align-items-center gap-3">
                                                        <span class="badge bg-label-primary p-2 rounded"><i
                                                                class="bx bxs-hourglass-top bx-sm"></i></span>
                                                        <div class="me-2">
                                                            <h6 class="mb-0">IN-process Order</h6>
                                                        </div>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <span class="badge bg-label-danger">10</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="mb-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="d-flex align-items-center gap-3">
                                                        <span class="badge bg-label-primary p-2 rounded"><i
                                                                class="bx bx-check bx-sm"></i></span>
                                                        <div class="me-2">
                                                            <h6 class="mb-0">Completed Order</h6>
                                                        </div>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <span class="badge bg-label-danger">10</span>
                                                    </div>
                                                </div>
                                            <li class="mb-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="d-flex align-items-center gap-3">
                                                        <span class="badge bg-label-primary p-2 rounded"><i
                                                                class="bx bx-x bx-sm"></i></span>
                                                        <div class="me-2">
                                                            <h6 class="mb-0">Cancelled Order</h6>
                                                        </div>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <span class="badge bg-label-danger">10</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <small class="text-muted text-uppercase">About</small>
                                        <ul class="list-unstyled mb-4 mt-3">
                                            <li class="d-flex align-items-center mb-3"><i class="bx bx-user"></i><span
                                                    class="fw-semibold mx-2">Full Name:</span> <span>John Doe</span>
                                            </li>
                                            <li class="d-flex align-items-center mb-3"><i class="bx bx-check"></i><span
                                                    class="fw-semibold mx-2">Status:</span> <span>Active</span></li>
                                            <li class="d-flex align-items-center mb-3"><i class="bx bx-star"></i><span
                                                    class="fw-semibold mx-2">Role:</span> <span>Vendor</span></li>
                                        </ul>
                                        <small class="text-muted text-uppercase">Contacts</small>
                                        <ul class="list-unstyled mb-4 mt-3">
                                            <li class="d-flex align-items-center mb-3"><i class="bx bx-home"></i><span
                                                    class="fw-semibold mx-2">Shop Name:</span> <span>ABC Shop</span>
                                            </li>
                                            <li class="d-flex align-items-center mb-3"><i class="bx bx-money"></i><span
                                                    class="fw-semibold mx-2">GST No:</span>
                                                <span>4567890123</span>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                                <!--/ About User -->
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4">
                                <div class="card mb-4 height_set">
                                    <div class="card-body">
                                        <small class="text-muted text-uppercase"> Address</small>
                                        <ul class="list-unstyled mt-3 mb-0">
                                            <li class="d-flex  mb-3"><i class='bx bx-home-alt'></i><span
                                                    class="fw-semibold mx-2">Home:</span> <span>Clover Park, Viman
                                                    Nagar, Pune, Maharashtra 411014</span>
                                            </li>
                                            <li class="d-flex  mb-3"><i class='bx bx-building-house'></i><span
                                                    class="fw-semibold mx-2">Office:</span> <span>F15, East Court
                                                    Phoenix Market City, Clover Park, Viman Nagar, Pune, Maharashtra
                                                    411014</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card border radius-10 mb-3 ">
                                    <div class="card-body ">
                                        <h6 class="mb-2">Udyam Aadhar</h6>
                                        <div class="card border shadow-none">
                                            <div class="card-body p-2">
                                                <div class="text-center">
                                                    <div class="product-box doc_img">
                                                        <a href="<?php echo base_url() ?>assets/images/adhar_card.jpg"
                                                            data-exthumbimage="<?php echo base_url() ?>assets/images/adhar_card.jpg"
                                                            data-src="<?php echo base_url() ?>assets/images/adhar_card.jpg"
                                                            class=" mb-4">
                                                            <img src="<?php echo base_url() ?>assets/images/adhar_card.jpg"
                                                                alt="" />
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card border radius-10 mb-3 ">
                                    <div class="card-body ">
                                        <h6 class="mb-2">GST Certificate</h6>
                                        <div class="card border shadow-none">
                                            <div class="card-body p-2">
                                                
                                                <div class="text-center">
                                                    <div class="product-box doc_img">
                                                        <a href="<?php echo base_url() ?>assets/images/adhar_card.jpg"
                                                            data-exthumbimage="<?php echo base_url() ?>assets/images/adhar_card.jpg"
                                                            data-src="<?php echo base_url() ?>assets/images/adhar_card.jpg"
                                                            class=" mb-4">
                                                            <img src="<?php echo base_url() ?>assets/images/adhar_card.jpg"
                                                                alt="" />
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ User Profile Content -->
                    </div>
                    <!-- Footer -->
                    <?php $this->load->view('Sales_dashboard/common_file/footer.php'); ?>
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