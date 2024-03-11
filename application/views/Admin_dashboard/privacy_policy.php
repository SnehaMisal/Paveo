<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-template="vertical-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Paveo | Privacy Policy</title>
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
                            Privacy Policy
                        </h4>
                        <form action="" method="post" class="needs-validation" novalidate>
                            <div class="card card-action mb-4 content_card">
                                <div class="card-header">
                                    <div class="card-action-title">Update Privacy Policy</div>
                                    <!-- <div class="card-action-element">
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item">
                                                <a href="javascript:void(0);" class="card-expand"><i
                                                        class="tf-icons bx bx-fullscreen"></i></a>
                                            </li>
                                        </ul>
                                    </div> -->
                                </div>
                                <div class="card-body">
                                <textarea id="summernote" class="summernote mb-0" name="example"
                                        required="required">
                                                        Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi.
                                    </textarea>
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
    $('.summernote').summernote({
        height: 380,
        minHeight: 380,
        maxHeight: 380,
        disableResizeEditor: true,
    })
    </script>
</body>

</html>