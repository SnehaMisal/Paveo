<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-template="vertical-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Paveo | Pending Approval List</title>
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
                            Pending Approval List
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
                                        <table class="datatables-users table border-top table-hover table-striped" id="data_table">
                                            <thead>
                                                <tr>
                                                    <th>SR NO</th>
                                                    <th>Vendor</th>
                                                    <th>Shop Name</th>
                                                    <th>Register Date</th>
                                                    <th>Mobile Number</th>
                                                    <!-- <th>Billing</th> -->
                                                    <th>Status</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>
                                                        <div
                                                            class="d-flex justify-content-center align-items-center user-name">
                                                            <div class="avatar-wrapper">
                                                                <div class="avatar avatar-sm me-3">
                                                                    <img src="<?php echo base_url() ?>assets/images/profile.png"
                                                                        alt="Avatar" class="rounded-circle">
                                                                </div>
                                                            </div>
                                                            <div class="d-flex flex-column">
                                                            <span class="fw-semibold text-primary">Wesley Burland</span>
                                                                <small class="text-muted">wburlandj@uiuc.edu</small>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><span class="fw-semibold">ABC Shop</span></td>
                                                    <td class="text-nowrap">09 May 2020, 10:10AM</td>
                                                    <td>+91 9876543210</td>
                                                    <td><span class="badge bg-label-info">New</span>
                                                        <button class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                                                            data-bs-toggle="dropdown" aria-expanded="false"><i
                                                                class="bx bx-dots-vertical-rounded"></i></button>
                                                        <div class="dropdown-menu dropdown-menu-end m-0" style="">
                                                            <!-- <button type="button" class="btn btn-primary"
                                                                data-bs-toggle="modal" data-bs-target="#approve_vendor">
                                                                <i class="bx bx-plus"></i>Add New Color
                                                            </button> -->
                                                            <a href="#" class="dropdown-item" data-bs-toggle="modal"
                                                                data-bs-target="#approve_vendor">Approve</a>
                                                            <a href="#" class="dropdown-item">Disapproved</a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-inline-block text-nowrap">
                                                            <a href="<?php echo base_url('pending_vendor_profile') ?>"
                                                                class="btn btn-sm btn-icon btn-default"><i
                                                                    class='bx bx-show'></i></a>
                                                            <button class="btn btn-sm btn-icon delete-record btn-danger"
                                                                id="delete_1" onclick="delete_fun(this)"><i
                                                                    class="bx bx-trash"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>
                                                        <div
                                                            class="d-flex justify-content-center align-items-center user-name">
                                                            <div class="avatar-wrapper">
                                                                <div class="avatar avatar-sm me-3">
                                                                    <img src="<?php echo base_url() ?>assets/images/profile.png"
                                                                        alt="Avatar" class="rounded-circle">
                                                                </div>
                                                            </div>
                                                            <div class="d-flex flex-column">
                                                            <span class="fw-semibold text-primary">Wesley Burland</span>
                                                                <small class="text-muted">wburlandj@uiuc.edu</small>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><span class="fw-semibold">PQR Shop</span></td>
                                                    <td class="text-nowrap">09 May 2020, 10:10AM</td>
                                                    <td>+91 9876543210</td>
                                                    <td><span class="badge bg-label-warning">Pending</span>
                                                        <button class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                                                            data-bs-toggle="dropdown" aria-expanded="false"><i
                                                                class="bx bx-dots-vertical-rounded"></i></button>
                                                        <div class="dropdown-menu dropdown-menu-end m-0" style="">
                                                            <a href="#" class="dropdown-item">Approve</a>
                                                            <a href="#" class="dropdown-item">Disapproved</a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-inline-block text-nowrap">
                                                            <a href="<?php echo base_url('pending_vendor_profile') ?>"
                                                                class="btn btn-sm btn-icon btn-default"><i
                                                                    class='bx bx-show'></i></a>
                                                            <button class="btn btn-sm btn-icon delete-record btn-danger"
                                                                id="delete_1" onclick="delete_fun(this)"><i
                                                                    class="bx bx-trash"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>
                                                        <div
                                                            class="d-flex justify-content-center align-items-center user-name">
                                                            <div class="avatar-wrapper">
                                                                <div class="avatar avatar-sm me-3">
                                                                    <img src="<?php echo base_url() ?>assets/images/profile.png"
                                                                        alt="Avatar" class="rounded-circle">
                                                                </div>
                                                            </div>
                                                            <div class="d-flex flex-column">
                                                            <span class="fw-semibold text-primary">Wesley Burland</span>
                                                                <small class="text-muted">wburlandj@uiuc.edu</small>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><span class="fw-semibold">LMN Shop</span></td>
                                                    <td class="text-nowrap">09 May 2020, 10:10AM</td>
                                                    <td>+91 9876543210</td>
                                                    <td><span class="badge bg-label-secondary">Reject</span>
                                                        <button class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                                                            data-bs-toggle="dropdown" aria-expanded="false"><i
                                                                class="bx bx-dots-vertical-rounded"></i></button>
                                                        <div class="dropdown-menu dropdown-menu-end m-0" style="">
                                                            <a href="#" class="dropdown-item">Approve</a>
                                                            <a href="#" class="dropdown-item">Disapproved</a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-inline-block text-nowrap">
                                                            <a href="<?php echo base_url('pending_vendor_profile') ?>"
                                                                class="btn btn-sm btn-icon btn-default"><i
                                                                    class='bx bx-show'></i></a>
                                                            <button class="btn btn-sm btn-icon delete-record btn-danger"
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
    <!--Assign Sale Staff Modal -->
    <div class="modal fade" id="approve_vendor" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="" method="post" class="needs-validation" novalidate>
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel1">Assign Sale Staff</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="col mb-3">
                            <label for="" class="form-label">Assign Sale Staff<span class="text-danger">*</span></label>
                            <select class="form-select" id="assign_vendor" required="" name="">
                                <option selected="" disabled="" value="">Choose...</option>
                                <option value="1">Melody Macy</option>
                                <option value="2">Emma Smith </option>
                                <option value="3">Francis Mitcham </option>
                            </select>
                            <div class="invalid-feedback"> Please select your Sale Staff Name. </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Approved Vendor</button>
                    </div>
                </form>
            </div>
        </div>
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
    <script>
    $('#assign_vendor').select2({
        dropdownParent: $('#approve_vendor'),
        minimumResultsForSearch: Infinity,
        width: "100%",
    });
    </script>
</body>

</html>