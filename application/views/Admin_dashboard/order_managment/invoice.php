<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-template="vertical-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Paveo | Invoice</title>
    <?php $this->load->view('link/css'); ?>
</head>

<body>
    <?php
    $y="order_managment";
    $x="completed_order";
    $z="";
    ?>
    <div class="layout-wrapper layout-content-navbar  ">
        <div class="layout-container">
            <!-- Menu -->
            <?php include 'application/views/Admin_dashboard/common_file/sidemenu.php'?>
            <!-- / Menu -->
            <!-- Layout container -->
            <div class="layout-page">
                <?php include 'application/views/Admin_dashboard/common_file/header.php'?>
                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row invoice-preview">
                            <!-- Invoice -->
                            <div class="col-xl-12 col-md-12 col-12 mb-md-0 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="invoice-print p-5" id="div_print">
                                            <div class="d-flex justify-content-between flex-row">
                                                <div class="mb-4">
                                                    <div class="d-flex svg-illustration mb-3 gap-2">
                                                    <img src="<?php echo base_url() ?>assets/images/logo-color.png" alt="" width="150">
                                                       
                                                    </div>
                                                    <p class="mb-1">Office 149, 450 South Brand Brooklyn</p>
                                                    <p class="mb-1">San Diego County, CA 91905, USA</p>
                                                    <p class="mb-0">+1 (123) 456 7891, +44 (876) 543 2198</p>
                                                </div>
                                                <div>
                                                    <h4>Invoice #3492</h4>
                                                    <div class="">
                                                        <span>Order Date:</span>
                                                        <span class="fw-semibold">April 25, 2021</span>
                                                    </div>
                                                    <div>
                                                        <span>Completed Date :</span>
                                                        <span class="fw-semibold">May 25, 2021</span>
                                                    </div>
                                                    <div>
                                                        <span>Paid Amount :</span>
                                                        <span class="fw-semibold"><i class="bx bx-rupee"></i>10000</span>
                                                    </div>
                                                    <div>
                                                        <span>Remaing Amount :</span>
                                                        <span class="fw-semibold"><i class="bx bx-rupee"></i>5000</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row d-flex justify-content-between mb-4">
                                                <div class="col-sm-6 w-50">
                                                    <h6>Invoice To:</h6>
                                                    <p class="mb-1">Thomas shelby</p>
                                                    <p class="mb-1">Shelby Company Limited</p>
                                                    <p class="mb-1">Small Heath, B10 0HF, UK</p>
                                                    <p class="mb-1">718-986-6062</p>
                                                    <p class="mb-0">peakyFBlinders@gmail.com</p>
                                                </div>
                                            </div>
                                            <div class="table-responsive">
                                                <table class="table border-top m-0">
                                                    <thead>
                                                        <tr>
                                                            <th>Item</th>
                                                            <th>Cost</th>
                                                            <th>Qty</th>
                                                            <th>Price</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Men White Polo T-shirt</td>
                                                            <td><i class="bx bx-rupee"></i>32</td>
                                                            <td>1</td>
                                                            <td><i class="bx bx-rupee"></i>32.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Formal Black Coat Pant</td>
                                                            <td><i class="bx bx-rupee"></i>22</td>
                                                            <td>1</td>
                                                            <td><i class="bx bx-rupee"></i>22.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Blue Shade Jeans</td>
                                                            <td><i class="bx bx-rupee"></i>17</td>
                                                            <td>2</td>
                                                            <td><i class="bx bx-rupee"></i>34.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Yellow  Winter Jacket for Men</td>
                                                            <td><i class="bx bx-rupee"></i>66</td>
                                                            <td>1</td>
                                                            <td><i class="bx bx-rupee"></i>66.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="3" class="text-end px-4 py-3">
                                                                <p class="mb-2">Subtotal:</p>
                                                                <p class="mb-2">Discount:</p>
                                                                <p class="mb-2">Tax:</p>
                                                                <p class="mb-0">Total:</p>
                                                            </td>
                                                            <td class="px-4 py-3">
                                                                <p class="fw-semibold mb-2"><i class="bx bx-rupee"></i>154.25</p>
                                                                <p class="fw-semibold mb-2"><i class="bx bx-rupee"></i>00.00</p>
                                                                <p class="fw-semibold mb-2"><i class="bx bx-rupee"></i>50.00</p>
                                                                <p class="fw-semibold mb-0"><i class="bx bx-rupee"></i>204.25</p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 text-center">
                                                    <!-- <span class="fw-semibold">Note:</span> -->
                                                    <span>THANK YOU FOR YOUR BUSINESS</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center justify-content-center">
                                            <a class="btn btn-primary text-white w-25  text-center"
                                                onclick="printdiv('div_print')">
                                                Print
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- Footer -->
                    <?php $this->load->view('Admin_dashboard/common_file/footer.php'); ?>
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
    function printdiv(printpage) {
        var headstr = "<html><head><title></title></head><body>";
        var footstr = "</body>";
        var newstr = document.all.item(printpage).innerHTML;
        var oldstr = document.body.innerHTML;
        document.body.innerHTML = headstr + newstr + footstr;
        window.print();
        document.body.innerHTML = oldstr;
        return false;
    }
    </script>
</body>

</html>