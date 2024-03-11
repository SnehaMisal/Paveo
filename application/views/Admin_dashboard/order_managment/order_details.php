<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed " dir="ltr" data-theme="theme-default"
    data-template="vertical-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Paveo | Oder Details</title>
    <?php $this->load->view('link/css'); ?>

</head>

<body>
    <?php
    $y="order_managment";
    $x="";
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
                        <h4 class="fw-bold py-2 mb-2 text-primary">
                            Oder Details
                        </h4>
                        <div class="row">
                            <div class="card">
                                <div class="card-header py-3">
                                    <div class="row g-3 align-items-center">
                                        <div class="col-12 col-lg-4 col-md-6 me-auto">
                                            <h5 class="mb-1">Order Date: Tue, Apr 15, 2020, 8:44PM</h5>
                                            <p class="mb-0">Order ID : <b> #8965327 </b></p>
                                            <p class="mb-0">Sales Name : <b> Kare Skitterel</b></p>
                                        </div>
                                        <div class="col-12 col-lg-3 col-6 col-md-3">
                                            <p class="mb-1"><b>Payment Status: </b>Pending</p>
                                            <p class="mb-0"><b>Payment Type: </b>Online</p>
                                            <p class="mb-0"><b>Remaining Amount: <i class="bx bx-rupee"></i>1000</b></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row row-cols-1 row-cols-xl-2 row-cols-xxl-3">
                                        <div class="col">
                                            <div class="card border shadow-none radius-10 mb-3 oder_card">
                                                <div class="card-body ">
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="icon-box bg-light-primary border-0">
                                                            <i class='bx bx-user text-primary'></i>
                                                        </div>
                                                        <div class="info">
                                                            <h6 class="mb-2">Customer</h6>
                                                            <p class="mb-1">Jhon Michle</p>
                                                            <p class="mb-1">jhon@_78@example.com</p>
                                                            <p class="mb-1">+91-9910XXXXXX</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="card border shadow-none radius-10 mb-3 oder_card">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="icon-box bg-light-success border-0">
                                                            <i class='bx bx-cart-alt text-success' undefined></i>
                                                            <!-- <i class="bi bi-truck "></i> -->
                                                        </div>
                                                        <div class="info">
                                                            <h6 class="mb-2">Order info</h6>

                                                            <p class="mb-1"><strong> Accept</strong> : 10 May 2020,
                                                                10:10AM
                                                            </p>
                                                            <p class="mb-1"><strong> Completed </strong> : 15 May 2020,
                                                                10:10AM</p>
                                                            <p class="mb-1"><strong> Cancelled</strong> : 09 May 2020,
                                                                10:10AM
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="card border shadow-none radius-10 mb-3 oder_card">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="icon-box bg-light-danger border-0">
                                                            <i class='bx bx-map text-danger'></i>
                                                        </div>
                                                        <div class="info">
                                                            <h6 class="mb-2">Deliver to</h6>
                                                            <!-- <p class="mb-1"><strong>City</strong> : Sydney, Australia
                                                            </p> -->
                                                            <!-- <p class="mb-1"><strong>Address</strong> : 47-A, Street
                                                                Name, <br>Sydney Australia</p> -->
                                                            <p class="mb-1"><strong>Address</strong> : F15, East Court
                                                                Phoenix Market City, Clover Park, Viman Nagar, Pune,
                                                                Maharashtra 411014</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end row-->

                                    <div class="row">
                                        <div class="col-12 col-lg-8">
                                            <div class="card border shadow-none radius-10">
                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <table class="table align-middle mb-0 product_table">
                                                            <thead class="table-light">
                                                                <tr>
                                                                    <th>Product</th>
                                                                    <th>Unit Price</th>
                                                                    <th>Quantity</th>
                                                                    <th>Margin</th>
                                                                    <th>Total</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <div class="orderlist">
                                                                            <p class="mb-0 product-title text-primary">
                                                                                #865342 - Men White Polo T-shirt</p>
                                                                            <div
                                                                                class="d-flex align-items-center gap-2">
                                                                                <div class="product-box">
                                                                                    <a href="<?php echo base_url() ?>assets/images/01.png"
                                                                                        data-exthumbimage="<?php echo base_url() ?>assets/images/01.png"
                                                                                        data-src="<?php echo base_url() ?>assets/images/01.png"
                                                                                        class=" mb-4">
                                                                                        <img src="<?php echo base_url() ?>assets/images/01.png"
                                                                                            class="img-thumbnail"
                                                                                            alt="" />
                                                                                    </a>
                                                                                </div>
                                                                                <div>

                                                                                    <p class="mb-0 product-title ">
                                                                                        <b> Men White Polo T-shirt </b>
                                                                                    </p>
                                                                                    <small>
                                                                                        <b>Color: </b>Green <br>
                                                                                        <b>Size: </b> Small,
                                                                                        Medium</small>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td><i class='bx bx-rupee'></i>35.00</td>
                                                                    <td>2 Set</td>
                                                                    <td>10%</td>
                                                                    <td><i class='bx bx-rupee'></i>700.00</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="orderlist">
                                                                            <p class="mb-0 product-title text-primary">
                                                                                #987654 - Formal
                                                                                Black Coat Pant
                                                                            </p>
                                                                            <div
                                                                                class="d-flex align-items-center gap-2">
                                                                                <div class="product-box">
                                                                                    <a href="<?php echo base_url() ?>assets/images/02.png"
                                                                                        data-exthumbimage="<?php echo base_url() ?>assets/images/02.png"
                                                                                        data-src="<?php echo base_url() ?>assets/images/02.png"
                                                                                        class=" mb-4">
                                                                                        <img src="<?php echo base_url() ?>assets/images/02.png"
                                                                                            class="img-thumbnail"
                                                                                            alt="" />
                                                                                    </a>
                                                                                </div>
                                                                                <div>
                                                                                    <p class="mb-0 product-title">
                                                                                        <b> Formal
                                                                                            Black Coat Pant</b>
                                                                                    </p>
                                                                                    <small><b>Color:
                                                                                        </b>Green<br>
                                                                                        <b>Size:
                                                                                        </b>Small</small>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td><i class='bx bx-rupee'></i>25.00</td>
                                                                    <td>100 Set</td>
                                                                    <td>15%</td>
                                                                    <td><i class='bx bx-rupee'></i>2500.00</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="orderlist">
                                                                        <p class="mb-0 product-title text-primary">
                                                                                #987654 - Blue
                                                                                        Shade Casual Jeans
                                                                            </p>
                                                                            <div
                                                                                class="d-flex align-items-center gap-2">
                                                                                <div class="product-box">
                                                                                    <a href="<?php echo base_url() ?>assets/images/03.png"
                                                                                        data-exthumbimage="<?php echo base_url() ?>assets/images/03.png"
                                                                                        data-src="<?php echo base_url() ?>assets/images/03.png"
                                                                                        class=" mb-4">
                                                                                        <img src="<?php echo base_url() ?>assets/images/03.png"
                                                                                            class="img-thumbnail"
                                                                                            alt="" />
                                                                                    </a>
                                                                                </div>
                                                                                <div>
                                                                                    <p
                                                                                        class="mb-0 product-title ">
                                                                                       <b> Blue
                                                                                        Shade Casual Jeans</b>
                                                                                    </p>
                                                                                    <small>
                                                                                        <b>Color: </b>Yellow,
                                                                                        Blue<br>
                                                                                        <b>Size: </b>Medium,
                                                                                        Large</small>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td><i class='bx bx-rupee'></i>65.00</td>
                                                                    <td>20 Set</td>
                                                                    <td>20%</td>
                                                                    <td><i class='bx bx-rupee'></i>3,250.00</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="orderlist">
                                                                        <p class="mb-0 product-title text-primary">
                                                                                #987655 - Blue
                                                                                        Shade Casual Jeans
                                                                            </p>
                                                                            <div
                                                                                class="d-flex align-items-center gap-2">
                                                                                <div class="product-box">
                                                                                    <a href="<?php echo base_url() ?>assets/images/04.png"
                                                                                        data-exthumbimage="<?php echo base_url() ?>assets/images/04.png"
                                                                                        data-src="<?php echo base_url() ?>assets/images/04.png"
                                                                                        class=" mb-4">
                                                                                        <img src="<?php echo base_url() ?>assets/images/04.png"
                                                                                            class="img-thumbnail"
                                                                                            alt="" />
                                                                                    </a>
                                                                                </div>
                                                                                <div>
                                                                                    <p
                                                                                        class="mb-0 product-title ">
                                                                                       <b> Yellow
                                                                                        Winter Jacket for Men </b></p>
                                                                                    <small><b>Color:
                                                                                        </b>Yellow<br>
                                                                                        <b>Size: </b>Small, Medium,
                                                                                        Large</small>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td><i class='bx bx-rupee'></i>55.00</td>
                                                                    <td>5 Set</td>
                                                                    <td>30%</td>
                                                                    <td><i class='bx bx-rupee'></i>2,750.00</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-4">
                                            <div class="card border shadow-none bg-light radius-10 mb-3">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center mb-4">
                                                        <div>
                                                            <h5 class="mb-0">Order Summary</h5>
                                                        </div>
                                                        <div class="ms-auto">
                                                            <button type="button"
                                                                class="btn alert-success radius-30 px-4">Confirmed</button>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center mb-3">
                                                        <div>
                                                            <p class="mb-0">Subtotal</p>
                                                        </div>
                                                        <div class="ms-auto">
                                                            <h5 class="mb-0"><i class='bx bx-rupee'></i>9,200.00</h5>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center mb-3">
                                                        <div>
                                                            <p class="mb-0">Shipping Price</p>
                                                        </div>
                                                        <div class="ms-auto">
                                                            <h5 class="mb-0 text-success">+<i
                                                                    class='bx bx-rupee'></i>0.00</h5>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center mb-3">
                                                        <div>
                                                            <p class="mb-0">Taxes</p>
                                                        </div>
                                                        <div class="ms-auto">
                                                            <h5 class="mb-0 text-success">+<i
                                                                    class='bx bx-rupee'></i>1,656.00</h5>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center mb-3">
                                                        <div>
                                                            <p class="mb-0">Coupon <br>
                                                                <small> (PAVEO23)</small>
                                                            </p>
                                                        </div>
                                                        <div class="ms-auto">
                                                            <h5 class="mb-0 text-warning text-end">-<i
                                                                    class='bx bx-rupee'></i>2,65.00 <br><small> (10%
                                                                    Off)</small></h5>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="d-flex align-items-center mb-3">
                                                        <div>
                                                            <p class="mb-0"><b>Final Amount</b> </p>
                                                        </div>
                                                        <div class="ms-auto">
                                                            <h5 class="mb-0"><b><i class='bx bx-rupee'></i>8,280.00</b>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end row-->
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
    // $('.select2').select2({
    //     minimumResultsForSearch: Infinity
    // });

    function formatText(icon) {
        return $('<span><i class="fas ' + $(icon.element).data('icon') + '"></i> ' + icon.text + '</span>');
    };

    $('.select2').select2({

        minimumResultsForSearch: Infinity,
        width: "100%",
        templateSelection: formatText,
        templateResult: formatText
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

</body>

</html>