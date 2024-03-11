<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-template="vertical-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Paveo | Contact No</title>
    <?php $this->load->view('link/css'); ?>
</head>

<body>
    <?php
    $y="";
    $x="privacy_policy";
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
                            Contact No
                        </h4>
                        <form action="" method="post" class="needs-validation" novalidate>
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                <div class="card card-action mb-4 content_card">
                                <div class="card-header">
                                    <div class="card-action-title">Update Contact No</div>
                                </div>
                                <div class="card-body">
                                    <input type="text" id="" class="form-control" placeholder="Enter Contact No" value="" pattern="[789][0-9]{9}" minlength="10" maxlength="10" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                        required>
                                        <div class="invalid-feedback">Please Enter Contact No. start with 7, 8, 9</div>
                                    </div>
                                <div class="card-footer text-center">
                                    <button type="submit" class="btn btn-default">Save Changes</button>
                                </div>
                            </div>
                                </div>
                            </div>
                            
                        </form>
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
    $('.summernote').summernote({
        height: 380,
        minHeight: 380,
        maxHeight: 380,
        disableResizeEditor: true,
    })
    </script>
</body>

</html>