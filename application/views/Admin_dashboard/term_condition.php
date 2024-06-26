<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-template="vertical-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Paveo | Terms & Conditions</title>
    <?php $this->load->view('link/css'); ?>
</head>

<body>
    <?php
     $y="";
    $x="term_condition";
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
                            Terms & Conditions
                        </h4>
                        <form action="" method="post" class="needs-validation" novalidate>
                            <div class="card card-action mb-4 content_card">
                                <div class="card-header">
                                    <div class="card-action-title">Update Terms & Conditions</div>
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
                                        <p> Cupcake ipsum dolor sit amet. Halvah cheesecake chocolate bar gummi bears
                                            cupcake. Pie macaroon bear claw. Soufflé I love candy canes I love cotton
                                            candy
                                            I love.
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque aliquid ab porro, adipisci praesentium, consectetur culpa ex magnam rerum, consequatur labore quibusdam iusto officia temporibus ipsum maxime quod sit autem.
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Soluta consectetur perferendis, aliquam quasi et natus dolorem autem officia error aperiam modi, tempore animi iure! Odio iure veniam quod voluptatibus. Molestias.
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque aliquid ab porro, adipisci praesentium, consectetur culpa ex magnam rerum, consequatur labore quibusdam iusto officia temporibus ipsum maxime quod sit autem.
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Soluta consectetur perferendis, aliquam quasi et natus dolorem autem officia error aperiam modi, tempore animi iure! Odio iure veniam quod voluptatibus. Molestias.
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque aliquid ab porro, adipisci praesentium, consectetur culpa ex magnam rerum, consequatur labore quibusdam iusto officia temporibus ipsum maxime quod sit autem.
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Soluta consectetur perferendis, aliquam quasi et natus dolorem autem officia error aperiam modi, tempore animi iure! Odio iure veniam quod voluptatibus. Molestias.</p>
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque aliquid ab porro, adipisci praesentium, consectetur culpa ex magnam rerum, consequatur labore quibusdam iusto officia temporibus ipsum maxime quod sit autem.
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Soluta consectetur perferendis, aliquam quasi et natus dolorem autem officia error aperiam modi, tempore animi iure! Odio iure veniam quod voluptatibus. Molestias.
                                </textarea>
                                <div class="invalid-feedback">Please Enter Terms and condition.</div>
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