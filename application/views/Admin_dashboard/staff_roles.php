<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-template="vertical-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Paveo | Staff Roles</title>
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
                            Staff Roles
                        </h4>
                        <div class="row ">
                            <div class="col-md-12">
                                <form action="" method="post">
                                    <div class=" card">
                                        <div class="card-header header-elements">
                                            <h5>Set The Permission</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="card card-body">
                                                <div class="row mb-1 align-items-center justify-content-center ">
                                                    <label class="col-lg-3 col-12 fw-bold text-gray-800 m-menu">
                                                        Inventory Management</label>
                                                    <div class="col-lg-2 col-12">
                                                        <label class="d-block" for="read_1">
                                                            <input class="checkbox_animated" id="read_1" type="checkbox"
                                                                name="" value="1">
                                                            Allow Access
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card card-body mt-3">
                                                <div class="row mb-1 align-items-center justify-content-center ">
                                                    <label class="col-lg-3 col-12 fw-bold text-gray-800 m-menu">
                                                        Product Management</label>
                                                    <div class="col-lg-2 col-12">
                                                        <label class="d-block" for="read_2">
                                                            <input class="checkbox_animated" id="read_2" type="checkbox"
                                                                name="" value="1">
                                                            Allow Access
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card card-body mt-3">
                                                <div class="row mb-1 align-items-center justify-content-center ">
                                                    <label class="col-lg-3 col-12 fw-bold text-gray-800 m-menu">
                                                        Order Management</label>
                                                    <div class="col-lg-2 col-12">
                                                        <label class="d-block" for="read_3">
                                                            <input class="checkbox_animated" id="read_3" type="checkbox"
                                                                name="" value="1">
                                                            Allow Access
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer text-center">
                                            <button class="btn btn-secondary" type="reset">Cancel</button>
                                            <button class="btn btn-primary" type="submit">Save Permission</button>
                                        </div>
                                    </div>
                                </form>
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
                                    value="+91 9876543210">
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