<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-template="vertical-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Paveo | Product List</title>
    <?php $this->load->view('link/css'); ?>
</head>

<body>
    <?php
    $y="vendor_managment";
    $x="pending_approval"
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
                        <h4 class="fw-bold py-2 mb-2">
                            Product List
                        </h4>
                        <div class="row g-4 mb-4">
                            <div class="col-sm-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start justify-content-between">
                                            <div class="content-left">
                                                <span>Total Request</span>
                                                <div class="d-flex align-items-end mt-2">
                                                    <h4 class="mb-0 me-2">21,459</h4>
                                                </div>
                                            </div>
                                            <span class="badge bg-label-success rounded p-2">
                                                <i class="bx bx-user bx-sm"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start justify-content-between">
                                            <div class="content-left">
                                                <span>New Request</span>
                                                <div class="d-flex align-items-end mt-2">
                                                    <h4 class="mb-0 me-2">21,459</h4>
                                                </div>
                                            </div>
                                            <span class="badge bg-label-primary rounded p-2">
                                                <i class="bx bx-user-plus bx-sm"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start justify-content-between">
                                            <div class="content-left">
                                                <span>Pending Request</span>
                                                <div class="d-flex align-items-end mt-2">
                                                    <h4 class="mb-0 me-2">4,567</h4>
                                                </div>
                                            </div>
                                            <span class="badge bg-label-warning rounded p-2">
                                                <i class="bx bx-user-voice bx-sm"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start justify-content-between">
                                            <div class="content-left">
                                                <span>Rejected Request</span>
                                                <div class="d-flex align-items-end mt-2">
                                                    <h4 class="mb-0 me-2">19,860</h4>
                                                </div>
                                            </div>
                                            <span class="badge bg-label-danger rounded p-2">
                                                <i class="bx bx-group bx-sm"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-12">
                                <div class=" card">
                                    <div class="card-header header-elements">
                                        <div class="input-group  w-auto">
                                            <input type="text" name="daterange" id="daterange" value=""
                                                class="form-control w-auto">
                                            <button class="btn btn-md btn-primary" type="button">Go</button>
                                        </div>
                                        <!-- <input type="text" name="daterange" value="" class="form-control w-auto" /> -->
                                        <div class="card-header-elements ms-auto">
                                            <input type="text" class="form-control w-auto" placeholder="Search">
                                            <button type="button" class="btn btn-md btn-primary">Go</button>
                                        </div>
                                    </div>
                                    <div class="card-datatable table-responsive">
                                        <table class="datatables-users table border-top" id="data_table">
                                            <thead>
                                                <tr>
                                                    <th>SR NO</th>
                                                    <th>Category Name</th>
                                                    <th>Product Name</th>
                                                    <th>Image</th>
                                                    <th>Price</th>
                                                    <th>Offer</th>
                                                    <th>Status</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td><span class="fw-semibold">Shirts</span></td>
                                                    <td><span class="fw-semibold">Summer Wear Shirt for Men</span></td>
                                                    <td>
                                                        <div class="product-box">
                                                            <a href="<?php echo base_url() ?>assets/images/shirt.jpg"
                                                                data-exthumbimage="<?php echo base_url() ?>assets/images/shirt.jpg"
                                                                data-src="<?php echo base_url() ?>assets/images/shirt.jpg"
                                                                class=" mb-4">
                                                                <img src="<?php echo base_url() ?>assets/images/shirt.jpg"
                                                                    class="img-thumbnail" alt="" />
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td>1,999</td>
                                                    <td>86%</td>
                                                    <td>
                                                        <input type="checkbox" checked data-toggle="toggle"
                                                            data-on="Active" data-off="Deactive" data-onstyle="success"
                                                            data-offstyle="danger" data-size="sm">
                                                    </td>
                                                    <td>
                                                        <div class="d-inline-block text-nowrap">
                                                            <button class="btn btn-sm btn-icon"><i
                                                                    class="bx bx-show"></i></button>
                                                            <button class="btn btn-sm btn-icon"><i
                                                                    class="bx bx-edit"></i></button>
                                                            <button class="btn btn-sm btn-icon delete-record"
                                                                id="delete_1" onclick="delete_fun(this)"><i
                                                                    class="bx bx-trash"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td><span class="fw-semibold">Jeans</span></td>
                                                    <td><span class="fw-semibold">Ben Martin Men's Relaxed Fit Jeans</span></td>
                                                    <td>
                                                        <div class="product-box">
                                                            <a href="<?php echo base_url() ?>assets/images/jeans.jpg"
                                                                data-exthumbimage="<?php echo base_url() ?>assets/images/jeans.jpg"
                                                                data-src="<?php echo base_url() ?>assets/images/jeans.jpg"
                                                                class=" mb-4">
                                                                <img src="<?php echo base_url() ?>assets/images/jeans.jpg"
                                                                    class="img-thumbnail" alt="" />
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td>2,499</td>
                                                    <td>75%</td>
                                                    <td>
                                                        <input type="checkbox" checked data-toggle="toggle"
                                                            data-on="Active" data-off="Deactive" data-onstyle="success"
                                                            data-offstyle="danger" data-size="sm">
                                                    </td>
                                                    <td>
                                                        <div class="d-inline-block text-nowrap">
                                                            <button class="btn btn-sm btn-icon"><i
                                                                    class="bx bx-show"></i></button>
                                                            <button class="btn btn-sm btn-icon"><i
                                                                    class="bx bx-edit"></i></button>
                                                            <button class="btn btn-sm btn-icon delete-record"
                                                                id="delete_1" onclick="delete_fun(this)"><i
                                                                    class="bx bx-trash"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td><span class="fw-semibold">Suits & Blazers</span></td>
                                                    <td><span class="fw-semibold">Peter England Men Blazer</span></td>
                                                    <td>
                                                        <div class="product-box">
                                                            <a href="<?php echo base_url() ?>assets/images/blazer.jpg"
                                                                data-exthumbimage="<?php echo base_url() ?>assets/images/blazer.jpg"
                                                                data-src="<?php echo base_url() ?>assets/images/blazer.jpg"
                                                                class=" mb-4">
                                                                <img src="<?php echo base_url() ?>assets/images/blazer.jpg"
                                                                    class="img-thumbnail" alt="" />
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td>2,499</td>
                                                    <td>75%</td>
                                                    <td>
                                                        <input type="checkbox" checked data-toggle="toggle"
                                                            data-on="Active" data-off="Deactive" data-onstyle="success"
                                                            data-offstyle="danger" data-size="sm">
                                                    </td>
                                                    <td>
                                                        <div class="d-inline-block text-nowrap">
                                                            <button class="btn btn-sm btn-icon"><i
                                                                    class="bx bx-show"></i></button>
                                                            <button class="btn btn-sm btn-icon"><i
                                                                    class="bx bx-edit"></i></button>
                                                            <button class="btn btn-sm btn-icon delete-record"
                                                                id="delete_1" onclick="delete_fun(this)"><i
                                                                    class="bx bx-trash"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <nav aria-label="Page navigation" class="page_navigation">
                                        <ul class="pagination justify-content-end">
                                            <li class="page-item prev">
                                                <a class="page-link" href="javascript:void(0);"><i
                                                        class="tf-icon bx bx-chevrons-left"></i></a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:void(0);">1</a>
                                            </li>
                                            <li class="page-item active">
                                                <a class="page-link" href="javascript:void(0);">2</a>
                                            </li>
                                            <li class="page-item ">
                                                <a class="page-link" href="javascript:void(0);">3</a>
                                            </li>
                                            <li class="page-item next">
                                                <a class="page-link" href="javascript:void(0);"><i
                                                        class="tf-icon bx bx-chevrons-right"></i></a>
                                            </li>
                                        </ul>
                                    </nav>
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