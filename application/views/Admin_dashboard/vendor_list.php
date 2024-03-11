<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-template="vertical-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Paveo | Vendor List</title>
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
            <?php include 'common_file/sidemenu.php'?>
            <!-- / Menu -->
            <!-- Layout container -->
            <div class="layout-page">
                <?php include 'common_file/header.php'?>
                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="fw-bold py-2 mb-2 text-primary">
                            Vendor List
                        </h4>
                        <div class="row ">
                            <div class="col-md-12">
                                <div class=" card">
                                    <div class="card-header header-elements">
                                        <div class="input-group  w-auto">
                                        <p type="button" class="btn btn-md btn-primary mb-0"
                                                onclick="exportexcel()">
                                                Export </p>
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
                                        <table class="datatables-users table border-top table-striped table-hover" id="data_table">
                                            <thead>
                                                <tr>
                                                    <th>SR NO</th>
                                                    <th>Vendor</th>
                                                    <th>Shop Name</th>
                                                    <th>Joined Date</th>
                                                    <th>Mobile Number</th>
                                                    <th>Sales Name</th>
                                                    <th>Order</th>
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
                                                    <td>Travus Bruntjen</td>
                                                    <td><span class="badge badge-center bg-label-primary">14</span></td>
                                                    <td><input type="checkbox" checked data-toggle="toggle"
                                                            data-on="Active" data-off="Deactive" data-onstyle="success"
                                                            data-offstyle="danger" data-size="sm">
                                                    </td>
                                                    <td>
                                                        <div class="d-inline-block text-nowrap">
                                                            <a href="<?php echo base_url('vendor_profile') ?>"
                                                                class="btn btn-sm btn-icon btn-default"><i
                                                                    class='bx bx-show'></i></a>
                                                            <!-- <button class="btn btn-sm btn-icon btn-primary"><i
                                                                    class="bx bx-edit"></i></button> -->
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
                                                            <span class="fw-semibold text-primary">
                                                                        Stu Delamaine</span>
                                                                <small class="text-muted">sdelamainek@who.int</small>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><span class="fw-semibold">PQR Shop</span></td>
                                                    <td class="text-nowrap">09 May 2020, 10:10AM</td>
                                                    <td>+91 9876543210</td>
                                                    <td>Saunder Offner</td>
                                                    <td><span class="badge badge-center bg-label-primary">10</span></td>
                                                    <td>
                                                        <input type="checkbox" data-toggle="toggle" data-on="Active"
                                                            data-off="Deactive" data-onstyle="success"
                                                            data-offstyle="danger" data-size="sm">
                                                    </td>
                                                    <td>
                                                        <div class="d-inline-block text-nowrap">
                                                            <a href="<?php echo base_url('vendor_profile') ?>"
                                                                class="btn btn-sm btn-icon btn-default"><i
                                                                    class='bx bx-show'></i></a>
                                                            <!-- <button class="btn btn-sm btn-icon btn-primary"><i
                                                                    class="bx bx-edit"></i></button> -->
                                                            <button class="btn btn-sm btn-icon delete-record btn-danger"
                                                                id="delete_2" onclick="delete_fun(this)"><i
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
                                                            <span class="fw-semibold text-primary">Kare Skitterel</span>
                                                                <small class="text-muted">
                                                                    jwharltona@oakley.com
                                                                </small>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><span class="fw-semibold">LMN Shop</span></td>
                                                    <td class="text-nowrap">09 May 2020, 10:10AM</td>
                                                    <td>+91 9876543210</td>
                                                    <td>
                                                        Jameson Lyster</td>
                                                    <td><span class="badge badge-center bg-label-primary">8</span></td>
                                                    <td>
                                                        <input type="checkbox" checked data-toggle="toggle"
                                                            data-on="Active" data-off="Deactive" data-onstyle="success"
                                                            data-offstyle="danger" data-size="sm">
                                                    </td>
                                                    <td>
                                                        <div class="d-inline-block text-nowrap">
                                                            <a href="<?php echo base_url('vendor_profile') ?>"
                                                                class="btn btn-sm btn-icon btn-default"><i
                                                                    class='bx bx-show'></i></a>
                                                            <!-- <button class="btn btn-sm btn-icon btn-primary"><i
                                                                    class="bx bx-edit"></i></button> -->
                                                            <button class="btn btn-sm btn-icon delete-record btn-danger"
                                                                id="delete_3" onclick="delete_fun(this)"><i
                                                                    class="bx bx-trash"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <table class="datatables-users  d-none table border-top table-striped table-hover" id="excel_table">
                                            <thead>
                                                <tr>
                                                    <th>SR NO</th>
                                                    <th>Vendor</th>
                                                    <th>Email Id</th>
                                                    <th>Shop Name</th>
                                                    <th>Joined Date</th>
                                                    <th>Mobile Number</th>
                                                    <th>Sales Name</th>
                                                    <th>Order</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Wesley Burland</td>
                                                    <td>wburlandj@uiuc.edu</td>
                                                    <td><span class="fw-semibold">ABC Shop</span></td>
                                                    <td class="text-nowrap">09 May 2020, 10:10AM</td>
                                                    <td>+91 9876543210</td>
                                                    <td>Travus Bruntjen</td>
                                                    <td><span class="badge badge-center bg-label-primary">14</span></td>
                                                    <td>Active</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Wesley Burland</td>
                                                    <td>wburlandj@uiuc.edu</td>
                                                    <td><span class="fw-semibold">PQR Shop</span></td>
                                                    <td class="text-nowrap">09 May 2020, 10:10AM</td>
                                                    <td>+91 9876543210</td>
                                                    <td>Saunder Offner</td>
                                                    <td><span class="badge badge-center bg-label-primary">10</span></td>
                                                    <td>Deactive</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Wesley Burland</td>
                                                    <td>wburlandj@uiuc.edu</td>
                                                    <td><span class="fw-semibold">LMN Shop</span></td>
                                                    <td class="text-nowrap">09 May 2020, 10:10AM</td>
                                                    <td>+91 9876543210</td>
                                                    <td>
                                                        Jameson Lyster</td>
                                                    <td><span class="badge badge-center bg-label-primary">8</span></td>
                                                    <td>Active</td>
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
         <script type="text/javascript">
    function exportexcel() {
        $("#excel_table").table2excel({
            exclude: ".noExl",
            name: "Table2Excel",
            filename: "Vendor_List",
            exclude_img: true,
            exclude_links: true,
            exclude_inputs: false,
        });
    }
    </script>
</body>

</html>