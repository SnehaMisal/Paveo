<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed " dir="ltr" data-theme="theme-default"
    data-template="vertical-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Paveo | Cancelled Order</title>
    <?php $this->load->view('link/css'); ?>

</head>

<body>
    <?php
    $y="order_managment";
    $x="cancelled_order";
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
                            Cancelled Order
                        </h4>
                        <div class="row ">
                            <div class="col-md-12">
                                <div class=" card">
                                    <div class="card-header header-elements">
                                        <div class="input-group  w-auto">
                                            <input type="text" name="daterange" id="daterange" value=""
                                                class="form-control w-auto">
                                            <button class="btn btn-md btn-primary" type="button">Go</button>
                                        </div>
                                        <div class="card-header-elements ms-auto">
                                            <input type="text" class="form-control w-auto" placeholder="Search">
                                            <button type="button" class="btn btn-md btn-primary"><i
                                                    class="bx bx-search"></i></button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                    <div class="card-datatable table-responsive p-0">
                                        <table class="datatables-users table border-top table-hover table-striped" id="data_table">
                                            <thead>
                                                <tr>
                                                    <th>SR NO</th>
                                                    <th>Order Id</th>
                                                    <th>Order Date</th>
                                                    <th>Cancelled Date</th>
                                                    <th>Vendor Name</th>
                                                    <th>Vendor Mobile</th>
                                                    <th>Total Amount</th>
                                                    <th>Payment Type</th>
                                                    <th>Payment Status</th>
                                                    <th>Cancelled By</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>#PVO1</td>
                                                    <td class="text-nowrap">09 May 2020, 10:10AM</td>
                                                    <td class="text-nowrap">20 May 2020, 10:10AM</td>
                                                    <td><span class="fw-semibold text-primary">Francis Mitcham</span></td>
                                                    <td>+91 9876543210</td>
                                                    <td><i class='bx bx-rupee'></i> 2000</td>
                                                    <td>
                                                        <span class="badge  bg-label-primary ">Online</span>
                                                    </td>
                                                    <td><span class="text-primary fw-semibold">Completed</span></td>
                                                    <td>Vendor</td>
                                                    <td>
                                                        <div class="d-inline-block text-nowrap">
                                                        <a href="<?php echo base_url('order_details') ?>"
                                                                class="btn btn-sm btn-icon btn-default"><i
                                                                    class="bx bx-show"></i></a>
                                                            </button>
                                                            <button class="btn btn-sm btn-icon delete-record btn-danger"
                                                                id="delete_1" onclick="delete_fun(this)"><i
                                                                    class="bx bx-trash"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>#PVO2</td>
                                                    <td class="text-nowrap">03 May 2020, 10:10AM</td>
                                                    <td class="text-nowrap">13 May 2020, 10:10AM</td>
                                                    <td><span class="fw-semibold text-primary">Angelica Ramos</span></td>
                                                    <td>+91 9876543210</td>
                                                    <td><i class='bx bx-rupee'></i> 12000</td>
                                                    <td>
                                                        <span class="badge  bg-label-warning ">COD</span>
                                                    </td>
                                                    <td><span class="text-danger fw-semibold">Pending</span></td>
                                                    <td>Vendor</td>
                                                    <td>
                                                        <div class="d-inline-block text-nowrap">
                                                        <a href="<?php echo base_url('order_details') ?>"
                                                                class="btn btn-sm btn-icon btn-default"><i
                                                                    class="bx bx-show"></i></a>
                                                            </button>
                                                            <button class="btn btn-sm btn-icon delete-record btn-danger"
                                                                id="delete_1" onclick="delete_fun(this)"><i
                                                                    class="bx bx-trash"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>#PVO3</td>
                                                    <td class="text-nowrap">01 May 2020, 10:10AM</td>
                                                    <td class="text-nowrap">19 May 2020, 10:10AM</td>
                                                    <td><span class="fw-semibold text-primary">Airi Satou</span></td>
                                                    <td>+91 9876543210</td>
                                                    <td><i class='bx bx-rupee'></i> 5000</td>
                                                    <td>
                                                        <span class="badge  bg-label-primary ">Online</span>
                                                    </td>
                                                    <td><span class="text-primary fw-semibold">Completed</span></td>
                                                    <td>Admin</td>
                                                    <td>
                                                        <div class="d-inline-block text-nowrap">
                                                        <a href="<?php echo base_url('order_details') ?>"
                                                                class="btn btn-sm btn-icon btn-default"><i
                                                                    class="bx bx-show"></i></a>
                                                            </button>
                                                            <button class="btn btn-sm btn-icon delete-record btn-danger"
                                                                id="delete_1" onclick="delete_fun(this)"><i
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
    <!--Cancelled Order Modal -->
    <div class="modal fade" id="create_category" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="" method="post" class="needs-validation" novalidate>
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel1">Cancelled Order</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col mb-3">
                                <label for="" class="form-label">Category Name <span
                                        class="text-danger">*</span></label>
                                <input type="text" id="" class="form-control" placeholder="Enter Category Name" value=""
                                    required>
                                <div class="invalid-feedback"> Please enter your Category name. </div>
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="col mb-3">
                                <label for="" class="form-label">Category Image <span
                                        class="text-danger">*</span></label>
                                <input type="file" id="" class="dropify" name="" data-default-file="" data-height="150"
                                    required data-allowed-file-extensions="png jpg mp4" />
                                <div class="invalid-feedback">Please Enter Category Image.</div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--Edit Category Modal -->
    <div class="modal fade" id="edit_category" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="" method="post" class="needs-validation" novalidate>
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel1">Edit Category</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col mb-3">
                                <label for="" class="form-label">Category Name <span
                                        class="text-danger">*</span></label>
                                <input type="text" id="" class="form-control" placeholder="Enter Category Name"
                                    value="Shirts" required>
                                <div class="invalid-feedback"> Please enter your Category name. </div>
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="col mb-3">
                                <label for="" class="form-label">Category Image <span
                                        class="text-danger">*</span></label>
                                <input type="file" id="" class="dropify" name=""
                                    data-default-file="<?php echo base_url() ?>assets/images/cat_shirt.png"
                                    data-height="150" required data-allowed-file-extensions="png jpg mp4" />
                                <div class="invalid-feedback">Please Enter Category Image.</div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
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
    <script>
    const ps = new PerfectScrollbar('.card-datatable');
    </script>
</body>

</html>