<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-template="vertical-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Paveo | Add Staff</title>
    <?php $this->load->view('link/css'); ?>
    
</head>

<body>
    <?php
    $y="staff_management";
    $x="add_staff";
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
                            Add Staff
                        </h4>
                        <div class="row ">
                            <div class="col-md-12">
                                <div class=" card">
                                    <form action="" method="post" class="needs-validation" novalidate>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col mb-3">
                                                    <label for="" class="form-label">Staff Name <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" id="" class="form-control"
                                                        placeholder="Enter Staff Name" value="" required>
                                                    <div class="invalid-feedback"> Please enter your Staff Name.
                                                    </div>
                                                </div>
                                                <div class="col mb-3">
                                                    <label for="" class="form-label">Email Id<span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" id="" class="form-control"
                                                        placeholder="Enter Staff Email Id" value="" required>
                                                    <div class="invalid-feedback"> Please enter your Staff Email Id.
                                                    </div>
                                                </div>
                                                <div class="col mb-3">
                                                    <label for="" class="form-label">Mobile No. </label>
                                                    <input type="text" id="" class="form-control"
                                                        placeholder="Enter Staff Mobile No." value="" >
                                                    <div class="invalid-feedback"> Please enter your Staff Mobile No..
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col mb-3">
                                                    <label for="" class="form-label">Staff Assign Panel Type<span
                                                            class="text-danger">*</span></label>
                                                    <select class="form-select select2" id="" required="" name="">
                                                        <option selected="" disabled="" value="">Choose...</option>
                                                        <option value="1">Other Staff</option>
                                                        <option value="2">Sales Staff</option>
                                                    </select>
                                                    <div class="invalid-feedback"> Please enter your Panel Type.
                                                    </div>
                                                </div>
                                                
                                                <div class="col mb-3">
                                                    <label for="" class="form-label">Password <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" id="" class="form-control"
                                                        placeholder="Enter Staff Password" value="" minlength="8" required>
                                                    <div class="invalid-feedback"> Please enter Staff Password.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row g-2">
                                                
                                                <div class="col mb-3">
                                                    <label for="" class="form-label">Profile Image</label>
                                                    <input type="file" id="dropify_img" class="dropify" name=""
                                                        data-default-file="" data-height="190" 
                                                        data-allowed-file-extensions="png jpg jpeg" />
                                                    <div class="invalid-feedback" id="invalid-feedback">Please Enter Profile Image.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer text-center">
                                            <button type="submit" class="btn btn-default"><i class="bx bx-plus"></i>Add
                                                Staff</button>
                                        </div>
                                    </form>
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
        $('.select2').select2({
        minimumResultsForSearch: Infinity,
        width: "100%",
    });
   </script>
</body>

</html>