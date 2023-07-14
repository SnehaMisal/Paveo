<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-template="vertical-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Paveo | Pending Vendor Profile</title>
    <?php $this->load->view('link/css'); ?>
</head>

<body>
    <?php
    $y="vendor_managment";
    $x="pending_approval";
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
                            Pending Vendor Profile
                        </h4>
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <div class="card border radius-10 mb-3 ">
                                    <div class="card-body ">
                                        <div class="row ">
                                            <div class="col-md-6">
                                                <div class="info">
                                                    <h6 class="mb-2">Profile Details </h6>
                                                    <p class="mb-1"><strong>Vendor Name :</strong>Jhon
                                                        Michle</p>
                                                    <p class="mb-1"><strong>Mobile No.: </strong>987654321
                                                    </p>
                                                    <p class="mb-1"><strong>Email Id: </strong>info@gmail.com
                                                    </p>
                                                    <p class="mb-1"><strong>Address: </strong>F15, East Court Phoenix
                                                        Market City, Clover Park, Viman Nagar, Pune, Maharashtra 411014
                                                    </p>
                                                </div>

                                            </div>
                                            <div class="col-md-6">
                                                <h6 class="mb-2">Profile Photo </h6>
                                                <div class="card border shadow-none">
                                                    <div class="card-body p-2">
                                                        <div class="d-flex justify-content-between">
                                                            <span class="badge bg-label-primary">Pending</span>
                                                            <div class="dropdown">
                                                                <button type="button"
                                                                    class="btn p-0 dropdown-toggle hide-arrow"
                                                                    data-bs-toggle="dropdown"><i
                                                                        class="bx bx-dots-vertical-rounded"></i></button>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item text-success"
                                                                        href="javascript:void(0);"><i
                                                                            class='bx bx-check me-1'></i></i>
                                                                        Verify</a>
                                                                    <a class="dropdown-item text-danger"
                                                                        href="javascript:void(0);"><i
                                                                            class='bx bx-x me-1'></i>
                                                                        Reject</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="text-center">
                                                            <div class="product-box doc_img">
                                                                <a href="<?php echo base_url() ?>assets/images/profile.png"
                                                                    data-exthumbimage="<?php echo base_url() ?>assets/images/profile.png"
                                                                    data-src="<?php echo base_url() ?>assets/images/profile.png"
                                                                    class=" mb-4">
                                                                    <img src="<?php echo base_url() ?>assets/images/profile.png"
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
                            </div>
                            <div class="col-md-6">
                                <div class="card border radius-10 mb-3 ">
                                    <div class="card-body ">
                                        <div class="row ">
                                            <!-- <div class="col-md-6">
                                                <div class="info">
                                                    <h6 class="mb-2">Shop Details </h6>
                                                    <p class="mb-1"><strong>Shop Name :</strong>Jhon
                                                        Michle</p>
                                                    <p class="mb-1"><strong>Mobile No.: </strong>987654321
                                                    </p>
                                                    <p class="mb-1"><strong>Email Id: </strong>info@gmail.com
                                                    </p>
                                                    <p class="mb-1"><strong>Address: </strong>F15, East Court Phoenix
                                                        Market City, Clover Park, Viman Nagar, Pune, Maharashtra 411014
                                                    </p>
                                                </div>
                                            </div> -->
                                            <div class="col-md-6">
                                                <h6 class="mb-2">Address Proof </h6>
                                                <div class="card border shadow-none">
                                                    <div class="card-body p-2">
                                                        <div class="d-flex justify-content-between">
                                                            <span class="badge bg-label-primary">Pending</span>
                                                            <div class="dropdown">
                                                                <button type="button"
                                                                    class="btn p-0 dropdown-toggle hide-arrow"
                                                                    data-bs-toggle="dropdown"><i
                                                                        class="bx bx-dots-vertical-rounded"></i></button>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item text-success"
                                                                        href="javascript:void(0);"><i
                                                                            class='bx bx-check me-1'></i></i>
                                                                        Verify</a>
                                                                    <a class="dropdown-item text-danger"
                                                                        href="javascript:void(0);"><i
                                                                            class='bx bx-x me-1'></i>
                                                                        Reject</a>
                                                                </div>
                                                            </div>
                                                        </div>
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
                                            <div class="col-md-6">
                                                <h6 class="mb-2">Shopact </h6>
                                                <div class="card border shadow-none">
                                                    <div class="card-body p-2">
                                                        <div class="d-flex justify-content-between">
                                                            <span class="badge bg-label-primary">Pending</span>
                                                            <div class="dropdown">
                                                                <button type="button"
                                                                    class="btn p-0 dropdown-toggle hide-arrow"
                                                                    data-bs-toggle="dropdown"><i
                                                                        class="bx bx-dots-vertical-rounded"></i></button>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item text-success"
                                                                        href="javascript:void(0);"><i
                                                                            class='bx bx-check me-1'></i></i>
                                                                        Verify</a>
                                                                    <a class="dropdown-item text-danger"
                                                                        href="javascript:void(0);"><i
                                                                            class='bx bx-x me-1'></i>
                                                                        Reject</a>
                                                                </div>
                                                            </div>
                                                        </div>
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
                            </div>
                            <div class="col-md-6">
                                <div class="card border radius-10 mb-3 ">
                                    <div class="card-body ">
                                        <div class="align-items-center gap-3">
                                            <div class="info">
                                                <h6 class="mb-2">Adhaar Card </h6>
                                                <p class="mb-1"><strong> Holder Name :</strong>Jhon
                                                    Michle</p>
                                                <p class="mb-1"><strong> Card No : </strong>987654321
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row ">
                                            <div class="col-md-6">
                                                <div class="card border shadow-none ">
                                                    <div class="card-body p-2">
                                                        <div class="d-flex justify-content-between">
                                                            <span class="badge bg-label-primary">Pending</span>
                                                            <div class="dropdown">
                                                                <button type="button"
                                                                    class="btn p-0 dropdown-toggle hide-arrow"
                                                                    data-bs-toggle="dropdown"><i
                                                                        class="bx bx-dots-vertical-rounded"></i></button>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item text-success"
                                                                        href="javascript:void(0);"><i
                                                                            class='bx bx-check me-1'></i></i>
                                                                        Verify</a>
                                                                    <a class="dropdown-item text-danger"
                                                                        href="javascript:void(0);"><i
                                                                            class='bx bx-x me-1'></i>
                                                                        Reject</a>
                                                                </div>
                                                            </div>
                                                        </div>
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
                                            <div class="col-md-6">
                                                <div class="card border shadow-none">
                                                    <div class="card-body p-2">
                                                        <div class="d-flex justify-content-between">
                                                            <span class="badge bg-label-primary">Pending</span>
                                                            <div class="dropdown">
                                                                <button type="button"
                                                                    class="btn p-0 dropdown-toggle hide-arrow"
                                                                    data-bs-toggle="dropdown"><i
                                                                        class="bx bx-dots-vertical-rounded"></i></button>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item text-success"
                                                                        href="javascript:void(0);"><i
                                                                            class='bx bx-check me-1'></i></i>
                                                                        Verify</a>
                                                                    <a class="dropdown-item text-danger"
                                                                        href="javascript:void(0);"><i
                                                                            class='bx bx-x me-1'></i>
                                                                        Reject</a>
                                                                </div>
                                                            </div>
                                                        </div>
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
                            </div>
                            <div class="col-md-6">
                                <div class="card border  radius-10 mb-3 ">
                                    <div class="card-body ">
                                        <div class="align-items-center gap-3">
                                            <div class="info">
                                                <h6 class="mb-2">Pan Card</h6>
                                                <p class="mb-1"><strong> Holder Name :</strong>Jhon
                                                    Michle</p>
                                                <p class="mb-1"><strong> Card No : </strong>987654321
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row ">
                                            <div class="col-md-6">
                                                <div class="card border shadow-none ">
                                                    <div class="card-body p-2">
                                                        <div class="d-flex justify-content-between">
                                                            <span class="badge bg-label-success">Verified</span>
                                                            <div class="dropdown">
                                                                <button type="button"
                                                                    class="btn p-0 dropdown-toggle hide-arrow"
                                                                    data-bs-toggle="dropdown"><i
                                                                        class="bx bx-dots-vertical-rounded"></i></button>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item text-success"
                                                                        href="javascript:void(0);"><i
                                                                            class='bx bx-check me-1'></i></i>
                                                                        Verify</a>
                                                                    <a class="dropdown-item text-danger"
                                                                        href="javascript:void(0);"><i
                                                                            class='bx bx-x me-1'></i>
                                                                        Reject</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="text-center">
                                                            <div class="product-box doc_img">
                                                                <a href="<?php echo base_url() ?>assets/images/pan_card.jpg"
                                                                    data-exthumbimage="<?php echo base_url() ?>assets/images/pan_card.jpg"
                                                                    data-src="<?php echo base_url() ?>assets/images/pan_card.jpg"
                                                                    class=" mb-4">
                                                                    <img src="<?php echo base_url() ?>assets/images/pan_card.jpg"
                                                                        alt="" />
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="card shadow-none">
                                                    <div class="card-body p-2">
                                                        <div class="d-flex justify-content-between">
                                                            <span class="badge bg-label-danger">Rejected</span>
                                                            <div class="dropdown">
                                                                <button type="button"
                                                                    class="btn p-0 dropdown-toggle hide-arrow"
                                                                    data-bs-toggle="dropdown"><i
                                                                        class="bx bx-dots-vertical-rounded"></i></button>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item text-success"
                                                                        href="javascript:void(0);"><i
                                                                            class='bx bx-check me-1'></i></i>
                                                                        Verify</a>
                                                                    <a class="dropdown-item text-danger"
                                                                        href="javascript:void(0);"><i
                                                                            class='bx bx-x me-1'></i>
                                                                        Reject</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="text-center">
                                                            <div class="product-box doc_img">
                                                                <a href="<?php echo base_url() ?>assets/images/pan_card.jpg"
                                                                    data-exthumbimage="<?php echo base_url() ?>assets/images/pan_card.jpg"
                                                                    data-src="<?php echo base_url() ?>assets/images/pan_card.jpg"
                                                                    class=" mb-4">
                                                                    <img src="<?php echo base_url() ?>assets/images/pan_card.jpg"
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
                            </div>
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
    <script>
    $(function() {
        var start = moment();
        var end = moment();
        var max_date = moment();

        function cb(start, end) {
            $('#daterange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format(
                'MMMM D, YYYY'));
        }
        $('#daterange').daterangepicker({
            startDate: start,
            endDate: end,
            maxDate: max_date,
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment()
                    .subtract(1, 'month').endOf('month')
                ]
            }
        }, cb);
        cb(start, end);
    });
    </script>
</body>

</html>