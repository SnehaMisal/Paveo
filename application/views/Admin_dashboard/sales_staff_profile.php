<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-template="vertical-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Paveo | Sales Staff Profile</title>
    <?php $this->load->view('link/css'); ?>
</head>

<body>
    <?php
     $y="staff_management";
     $x="staff_list";
     $z="sales_staff_list"
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
                            Sales Staff Profile
                        </h4>
                        <div class="row justify-content-center">
                            <div class="col-md-4">
                                <div class="card radius-10 mb-3 ">
                                    <div class="card-body ">
                                        <div class="user-avatar-section">
                                            <div class=" d-flex align-items-center flex-column">
                                                <img class="img-fluid rounded my-4"
                                                    src="<?php echo base_url() ?>assets/images/profile.png" height="110"
                                                    width="110" alt="User avatar">
                                                <div class="user-info text-center">
                                                    <h4 class="mb-2">Violet Mendoza</h4>
                                                    <!-- <span class="badge bg-label-secondary">Author</span> -->
                                                    <ul class="list-unstyled mb-2 mt-3">
                                                        <li
                                                            class="d-flex align-items-center justify-content-center mb-1">
                                                            <i class="bx bx-phone"></i>
                                                            <span>(123)
                                                                456-7890</span>
                                                        </li>

                                                        <li
                                                            class="d-flex align-items-center justify-content-center mb-3">
                                                            <i class="bx bx-envelope"></i>
                                                            <span>john.doe@example.com</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card border shadow-none radius-10 mb-3 ">
                                    <div class="card-body ">
                                        <div class="d-flex align-items-start me-4  gap-3">
                                            <span class="badge bg-label-primary p-2 rounded"><i
                                                    class="bx bx-check bx-sm"></i></span>
                                            <div>
                                                <h5 class="mb-0">123</h5>
                                                <span>Assign Vendor</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card border shadow-none radius-10 mb-3 ">
                                    <div class="card-body ">
                                        <div class="d-flex align-items-start me-4  gap-3">
                                            <span class="badge bg-label-primary p-2 rounded"><i
                                                    class="bx bx-check bx-sm"></i></span>
                                            <div>
                                                <h5 class="mb-0">123K</h5>
                                                <span> Vendor Sales</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card border shadow-none radius-10 mb-3 ">
                                    <div class="card-body ">
                                        <div class="d-flex align-items-start me-4  gap-3">
                                            <span class="badge bg-label-primary p-2 rounded"><i
                                                    class="bx bx-check bx-sm"></i></span>
                                            <div>
                                                <h5 class="mb-0">23</h5>
                                                <span> Vendor Total Orders</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                                                    <!-- <th>Shop Name</th> -->
                                                    <th>Joined Date</th>
                                                    <th>Mobile Number</th>
                                                    <th>Order</th>
                                                    <!-- <th>Status</th> -->
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
                                                    <!-- <td><span class="fw-semibold">ABC Shop</span></td> -->
                                                    <td class="text-nowrap">09 May 2020, 10:10AM</td>
                                                    <td>+91 9876543210</td>
                                                    <td><span class="badge badge-center bg-label-primary">14</span></td>
                                                    <!-- <td><input type="checkbox" checked data-toggle="toggle"
                                                            data-on="Active" data-off="Deactive" data-onstyle="success"
                                                            data-offstyle="danger" data-size="sm">
                                                    </td> -->
                                                    <td>
                                                        <div class="d-inline-block text-nowrap">
                                                            <a href="<?php echo base_url('vendor_profile') ?>"
                                                                class="btn btn-sm btn-icon btn-default"><i
                                                                    class='bx bx-show'></i></a>
                                                            <!-- <button class="btn btn-sm btn-icon delete-record"
                                                                id="delete_1" onclick="delete_fun(this)"><i
                                                                    class="bx bx-trash"></i></button> -->
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
                                                            <span class="fw-semibold text-primary">
                                                                        Stu Delamaine</span>
                                                                <small class="text-muted">sdelamainek@who.int</small>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <!-- <td><span class="fw-semibold">PQR Shop</span></td> -->
                                                    <td class="text-nowrap">09 May 2020, 10:10AM</td>
                                                    <td>+91 9876543210</td>
                                                    <td><span class="badge badge-center bg-label-primary">10</span></td>
                                                    <!-- <td>
                                                        <input type="checkbox" data-toggle="toggle" data-on="Active"
                                                            data-off="Deactive" data-onstyle="success"
                                                            data-offstyle="danger" data-size="sm">
                                                    </td> -->
                                                    <td>
                                                        <div class="d-inline-block text-nowrap">
                                                            <a href="<?php echo base_url('vendor_profile') ?>"
                                                                class="btn btn-sm btn-icon btn-default"><i
                                                                    class='bx bx-show'></i></a>
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
                                                            <span class="fw-semibold text-primary">Kare Skitterel</span>
                                                                <small class="text-muted">
                                                                    jwharltona@oakley.com
                                                                </small>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <!-- <td><span class="fw-semibold">LMN Shop</span></td> -->
                                                    <td class="text-nowrap">09 May 2020, 10:10AM</td>
                                                    <td>+91 9876543210</td>
                                                    <td><span class="badge badge-center bg-label-primary">8</span></td>
                                                    <!-- <td>
                                                        <input type="checkbox" checked data-toggle="toggle"
                                                            data-on="Active" data-off="Deactive" data-onstyle="success"
                                                            data-offstyle="danger" data-size="sm">
                                                    </td> -->
                                                    <td>
                                                        <div class="d-inline-block text-nowrap">
                                                            <a href="<?php echo base_url('vendor_profile') ?>"
                                                                class="btn btn-sm btn-icon btn-default"><i
                                                                    class='bx bx-show'></i></a>

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
    <script>
    function delete_fun(idd) {
        var id = idd.id;
        console.log("id", id);
        Swal.fire({
            title: 'Are you sure?',
            text: "Once deleted, you will not be able to recover this  file!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                )
            }
        })
    };
    </script>
</body>

</html>