<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-template="vertical-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Paveo | Product Details</title>
    <?php $this->load->view('link/css'); ?>
</head>

<body>
    <?php
     $y="";
    $x="term_condition";
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
                            Product Details
                        </h4>
                        <div class="card">
                            <div class="row g-0">
                                <div class="col-md-4 border-end product_img text-center">
                                    <img src="<?php echo base_url() ?>assets/images/blazer.jpg"
                                        class="img-fluid prod_primary" alt="..." id="largeImage">

                                    <div class="row mb-3 row-cols-auto g-2 justify-content-center mt-3">
                                        <div class="col text-center"><img
                                                src="<?php echo base_url() ?>assets/images/blazer.jpg" width="70"
                                                class="border rounded cursor-pointer prod_other" alt=""></div>
                                        <div class="col text-center"><img
                                                src="<?php echo base_url() ?>assets/images/jeans.jpg" width="70"
                                                class="border rounded cursor-pointer prod_other" alt=""></div>
                                        <div class="col text-center"><img
                                                src="<?php echo base_url() ?>assets/images/shirt.jpg" width="70"
                                                class="border rounded cursor-pointer prod_other" alt=""></div>
                                        <!-- <div class="col text-center"><img
                                                src="<?php echo base_url() ?>assets/images/blazer.jpg" width="70"
                                                class="border rounded cursor-pointer prod_other" alt=""></div> -->
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h4 class="card-title mb-0">Off-White Odsy-1000 Men Half T-Shirt</h4>
                                        <div class="d-flex gap-3 py-3">

                                            <div>Summer Wear Shirt for Men</div>
                                        </div>
                                        <div class="mb-3">
                                            <span class="price h4"><i class="bx bx-rupee"></i>999.00</span>
                                            <span class="text-muted">/per Set</span>
                                        </div>
                                        <dl class="row">
                                            <dt class="col-sm-3">Category</dt>
                                            <dd class="col-sm-9">:Shirt</dd>
                                            <dt class="col-sm-3">Margin</dt>
                                            <dd class="col-sm-9">:20%</dd>
                                            <dt class="col-sm-3">Pcs In 1 Set</dt>
                                            <dd class="col-sm-9">:10 Pcs</dd>
                                        </dl>
                                        <hr>
                                        <div class="row row-cols-auto ">
                                            <div class="col">
                                                <label class="form-label fw-bold">Size</label>
                                                <div class="d-flex prod_box">
                                                    <div class="border">
                                                        <p class="mb-0">Small</p>
                                                    </div>
                                                    <div class="border">
                                                        <p class="mb-0">Medium</p>
                                                    </div>
                                                    <div class="border">
                                                        <p class="mb-0">Large</p>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col">
                                                <label class="form-label fw-bold">Color</label>
                                                <div class="d-flex prod_box">
                                                    <div class="border d-flex">
                                                        <div class="color-indigator-item bg-primary"></div>
                                                        <p class="mb-0">Blue</p>
                                                    </div>
                                                    <div class="border d-flex">
                                                        <div class="color-indigator-item bg-success"></div>
                                                        <p class="mb-0">Green</p>
                                                    </div>
                                                    <div class="border d-flex">
                                                        <div class="color-indigator-item bg-danger"></div>
                                                        <p class="mb-0">Red</p>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="card-body">
                                <!-- <ul class="nav nav-tabs nav-primary mb-0" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#primaryhome" role="tab"
                                            aria-selected="true">
                                            <div class="d-flex align-items-center">
                                                <div class="tab-icon"><i class="bx bx-comment-detail font-18 me-1"></i>
                                                </div>
                                                <div class="tab-title"> Product Description </div>
                                            </div>
                                        </a>
                                    </li>

                                </ul> -->
                                <div class="tab-content pt-3">
                                    <div class="table-responsive">
                                        <table class="border table align-middle mb-0 product_des">
                                            <thead>
                                                <tr >
                                                    <th colspan="2">Product Details</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Type</td>
                                                    <td>Slim Fit</td>
                                                </tr>
                                                <tr>
                                                    <td>Neck</td>
                                                    <td>Polo</td>
                                                </tr>
                                                <tr>
                                                    <td>Sleeve Type</td>
                                                    <td>Full Sleeve</td>
                                                </tr>
                                                <tr>
                                                    <td>Fabric</td>
                                                    <td>160 GMS</td>
                                                </tr>
                                            </tbody>
                                        </table>
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
    $('.prod_other').click(function() {
        $('#largeImage').attr('src', $(this).attr('src').replace('thumb', 'large'));
        // $('#description').html($(this).attr('alt'));
    });
    </script>

</body>

</html>