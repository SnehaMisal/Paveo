<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-template="vertical-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Paveo | Top Banner Management</title>
    <?php $this->load->view('link/css'); ?>
</head>

<body>
    <?php
    $y="";
    $x="top_banner_management";
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
                            Top Banner Management
                        </h4>
                        <form action="" method="post" class="needs-validation" novalidate>
                            <div class="card card-action mb-4 content_card">
                                <div class="card-header">
                                    <div class="card-action-title">Update Banner Image</div>
                                </div>
                                <div class="card-body">
                                <input type="file" id="dropify_img" class="dropify" name="" data-default-file="<?php echo base_url() ?>assets/images/02.png"
                                    data-height="250" required data-allowed-file-extensions="png jpg mp4" />
                                    <div class="invalid-feedback">Please Enter Privacy Policy.</div>
                                </div>
                                <div class="card-footer text-center">
                                    <button type="submit" class="btn btn-default">Save Changes</button>
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
    $('#cat_name').select2({
        dropdownParent: $('#add_banner'),
        minimumResultsForSearch: Infinity,
        width: "100%",
    });
    $('#subcat_name').select2({
        dropdownParent: $('#add_banner'),
        minimumResultsForSearch: Infinity,
        width: "100%",
    });
    $('.cat_name').select2({
        dropdownParent: $('#edit_banner'),
        minimumResultsForSearch: Infinity,
        width: "100%",
    });
    $('.subcat_name').select2({
        dropdownParent: $('#edit_banner'),
        minimumResultsForSearch: Infinity,
        width: "100%",
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