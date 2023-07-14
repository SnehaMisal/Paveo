<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-template="vertical-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Paveo | Bill Management</title>
    <?php $this->load->view('link/css'); ?>
</head>

<body>
    <?php
    $y="";
    $x="bill_management";
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
                            Bill Management
                        </h4>
                        <div class="row ">
                            <div class="col-md-12">
                                <div class=" card">
                                    <div class="card-header header-elements">

                                        <div class="card-header-elements ms-auto">
                                            <input type="text" class="form-control w-auto" placeholder="Search">
                                            <button type="button" class="btn btn-md btn-primary"><i
                                                    class="bx bx-search"></i></button>
                                        </div>
                                    </div>
                                    <div class="card-datatable table-responsive">
                                        <table class="datatables-users table border-top table-hover table-striped"
                                            id="data_table">
                                            <thead>
                                                <tr>
                                                    <th>SR NO</th>
                                                    <th>Order Id</th>
                                                    <th>Order Date</th>
                                                    <th>Completed Date</th>
                                                    <th>Vendor Name</th>
                                                    <th>Payment Type</th>
                                                    <th>Total Amount</th>
                                                    <th>Pending Amount</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>#PVO1</td>
                                                    <td class="text-nowrap">09 May 2020, 10:10AM</td>
                                                    <td class="text-nowrap">20 May 2020, 10:10AM</td>
                                                    <td><span class="fw-semibold">Wesley Burland</span></td>
                                                    <td>
                                                        <span class="badge  bg-label-warning ">COD</span>
                                                    </td>
                                                    <td>10,000</td>
                                                    <td>5,000</td>
                                                    <td>
                                                        <div class="d-inline-block text-nowrap">
                                                            <a href="<?php echo base_url('sales_vendor_order_details') ?>"
                                                                class="btn btn-sm btn-icon btn-default"><i
                                                                    class="bx bx-show"></i></a>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>#PVO2</td>
                                                    <td class="text-nowrap">03 May 2020, 10:10AM</td>
                                                    <td class="text-nowrap">13 May 2020, 10:10AM</td>
                                                    <td><span class="fw-semibold">Stu Delamaine</span></td>
                                                    <td>
                                                        <span class="badge  bg-label-warning ">COD</span>
                                                    </td>
                                                    <td>50,000</td>
                                                    <td>50,000</td>
                                                    
                                                    <td>
                                                        <div class="d-inline-block text-nowrap">
                                                            <a href="<?php echo base_url('sales_vendor_order_details') ?>"
                                                                class="btn btn-sm btn-icon btn-default"><i
                                                                    class="bx bx-show"></i></a>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>#PVO3</td>
                                                    <td class="text-nowrap">01 May 2020, 10:10AM</td>
                                                    <td class="text-nowrap">19 May 2020, 10:10AM</td>
                                                    <td><span class="fw-semibold">Kare Skitterel</span></td>
                                                    <td>
                                                        <span class="badge  bg-label-primary ">Online</span>
                                                    </td>
                                                    <td>20,000</td>
                                                    <td>20,000</td>
                                                    
                                                    <td>
                                                        <div class="d-inline-block text-nowrap">
                                                            <a href="<?php echo base_url('sales_vendor_order_details') ?>"
                                                                class="btn btn-sm btn-icon btn-default"><i
                                                                    class="bx bx-show"></i></a>
                                                            </button>
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
    <!--Paid Payment Modal -->
    <div class="modal fade" id="paid_payment" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="" method="post" class="needs-validation" novalidate>
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel1">Paid Payment (Order Id: #PVO1)</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col mb-3">
                                <label for="" class="form-label">Total Amount</label>
                                <input type="text" id="" class="form-control" placeholder="Enter Category Name"
                                    value="10000" required readonly>
                            </div>
                            <div class="col mb-3">
                                <label for="" class="form-label">Pending Amount</label>
                                <input type="text" id="" class="form-control" placeholder="Enter Category Name"
                                    value="10000" required readonly>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label for="" class="form-label">Paid Amount</label>
                                <input type="number" id="" class="form-control" placeholder="Enter Paid Amount"
                                    value="5000" required>
                                <div class="invalid-feedback"> Please enter your Paid Amount. </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label for="" class="form-label">Remaining Amount</label>
                                <input type="number" id="" class="form-control" placeholder="Enter Paid Amount"
                                    value="5000" required Readonly>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-default">Save Amount</button>
                    </div>
                </form>
            </div>
        </div>
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
</body>

</html>