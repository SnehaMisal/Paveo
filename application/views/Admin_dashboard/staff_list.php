<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-template="vertical-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Paveo | Staff List</title>
    <?php $this->load->view('link/css'); ?>
</head>

<body>
    <?php
    $y="staff_management";
    $x="staff_list";
    $z="other_staff_list"
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
                            Staff List
                        </h4>
                        <div class="row ">
                            <div class="col-md-12">
                                <div class=" card">
                                    <div class="card-header header-elements">
                                        <!-- <div class="input-group  w-auto">
                                            <input type="text" name="daterange" value="" class="form-control w-auto">
                                            <button class="btn btn-md btn-primary" type="button">Go</button>
                                        </div> -->
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
                                                    <th>Staff</th>
                                                    <th>Joined Date</th>
                                                    <th>Mobile Number</th>
                                                    <th>Assign Roles </th>
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
                                                    <td class="text-nowrap">09 May 2020, 10:10AM</td>
                                                    <td>+91 9876543210</td>
                                                    <td>
                                                        <a href="#" class="btn btn-icon btn-label-primary">
                                                            <i class='bx bx-task'></i>
                                                        </a>
                                                    </td>
                                                    <td><input type="checkbox" checked data-toggle="toggle"
                                                            data-on="Active" data-off="Deactive" data-onstyle="success"
                                                            data-offstyle="danger" data-size="sm">
                                                    </td>
                                                    <td>
                                                        <div class="d-inline-block text-nowrap">
                                                            <!-- <button class="btn btn-sm btn-icon btn-default"><i
                                                                    class="bx bx-show"></i></button> -->
                                                            <button type="button" class="btn btn-sm btn-icon btn-primary"
                                                                data-bs-toggle="modal" data-bs-target="#edit_profile">
                                                                <i class="bx bx-edit"></i>
                                                            </button>
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
                                                    <td class="text-nowrap">09 May 2020, 10:10AM</td>
                                                    <td>+91 9876543210</td>
                                                    <td>
                                                        <a href="#" class="btn btn-icon btn-label-primary">
                                                            <i class='bx bx-task'></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <input type="checkbox" data-toggle="toggle" data-on="Active"
                                                            data-off="Deactive" data-onstyle="success"
                                                            data-offstyle="danger" data-size="sm">
                                                    </td>
                                                    <td>
                                                        <div class="d-inline-block text-nowrap">
                                                            <!-- <button class="btn btn-sm btn-icon"><i
                                                                    class="bx bx-show"></i></button> -->
                                                            <button type="button" class="btn btn-sm btn-icon btn-primary"
                                                                data-bs-toggle="modal" data-bs-target="#edit_profile">
                                                                <i class="bx bx-edit"></i>
                                                            </button>
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
                                                            <span class="fw-semibold text-primary">Wesley Burland</span>
                                                                <small class="text-muted">wburlandj@uiuc.edu</small>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-nowrap">09 May 2020, 10:10AM</td>
                                                    <td>+91 9876543210</td>
                                                    <td>
                                                        <a href="#" class="btn btn-icon btn-label-primary">
                                                            <i class='bx bx-task'></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <input type="checkbox" checked data-toggle="toggle"
                                                            data-on="Active" data-off="Deactive" data-onstyle="success"
                                                            data-offstyle="danger" data-size="sm">
                                                    </td>
                                                    <td>
                                                        <div class="d-inline-block text-nowrap">
                                                            <!-- <button class="btn btn-sm btn-icon"><i
                                                                    class="bx bx-show"></i></button> -->
                                                            <button type="button" class="btn btn-sm btn-icon btn-primary"
                                                                data-bs-toggle="modal" data-bs-target="#edit_profile">
                                                                <i class="bx bx-edit"></i>
                                                            </button>
                                                            <button class="btn btn-sm btn-icon delete-record btn-danger"
                                                                id="delete_3" onclick="delete_fun(this)"><i
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
    <!--Edit Staff Profile Modal -->
    <div class="modal fade" id="edit_profile" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="" method="post" class="needs-validation" novalidate>
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel1">Edit Staff Profile</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="col mb-3">
                            <label for="" class="form-label">Staff Name <span class="text-danger">*</span></label>
                            <input type="text" id="" class="form-control" placeholder="Enter Staff Name"
                                value="Wesley Burland" required>
                            <div class="invalid-feedback"> Please enter your Staff Name.
                            </div>
                        </div>
                        <div class="row">

                            <div class="col mb-3">
                                <label for="" class="form-label">Email Id<span class="text-danger">*</span></label>
                                <input type="text" id="" class="form-control" placeholder="Enter Staff Email Id"
                                    value="wburlandj@uiuc.edu" required>
                                <div class="invalid-feedback"> Please enter your Staff Email Id.
                                </div>
                            </div>
                            <div class="col mb-3">
                                <label for="" class="form-label">Mobile No. </label>
                                <input type="text" id="" class="form-control" placeholder="Enter Staff Mobile No."
                                    value="+91 9876543210" >
                                <div class="invalid-feedback"> Please enter your Staff Mobile No..
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label for="" class="form-label">Staff Assign Panel Type<span
                                        class="text-danger">*</span></label>
                                <select class="form-select select2" id="" required="" name="">
                                    <option disabled="" value="">Choose...</option>
                                    <option value="1" selected>Other Staff</option>
                                    <option value="2">Sales Staff</option>
                                </select>
                                <div class="invalid-feedback"> Please enter your Panel Type.
                                </div>
                            </div>

                            <div class="col mb-3">
                                <label for="" class="form-label">Password <span class="text-danger">*</span></label>
                                <input type="text" id="" class="form-control" placeholder="Enter Staff Password"
                                    value="ABF^@3FO" minlength="8" required>
                                <div class="invalid-feedback"> Please enter Staff Password.
                                </div>
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="col mb-3">
                                <label for="" class="form-label">Profile Image </label>
                                <div class="control-group file-upload" id="file-upload1">
                                    <div class="image-box text-center">
                                        <img src="<?php echo base_url() ?>assets/images/profile.png" alt="img">
                                    </div>
                                    <div class="controls" style="display: none;">
                                        <input type="file" name="image" accept="image/*" />
                                    </div>
                                </div>
                                <div class="invalid-feedback">Please Enter Profile Image.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-default">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php $this->load->view('link/js'); ?>
    <script>
    $(function() {
        $('input[name="daterange"]').daterangepicker({
            opens: 'right'
        }, function(start, end, label) {
            console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end
                .format('YYYY-MM-DD'));
        });
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

    <script>
    $('.select2').select2({
        dropdownParent: $('#edit_profile'),
        minimumResultsForSearch: Infinity,
        width: "100%",
    });
    </script>
</body>

</html>