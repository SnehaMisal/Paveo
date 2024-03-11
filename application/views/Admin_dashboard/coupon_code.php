<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-template="vertical-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Paveo | Coupon Code</title>
    <?php $this->load->view('link/css'); ?>
</head>

<body>
    <?php
    $y="";
    $x="coupon_code";
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
                        Coupon Code 
                        </h4>
                        <div class="row ">
                            <div class="col-md-12">
                                <div class=" card">
                                    <div class="card-header header-elements">
                                        <div class="card-title-elements">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#create_coupon">
                                                <i class="bx bx-plus"></i>Generate Coupon Code   
                                            </button>
                                        </div>
                                        <div class="card-header-elements ms-auto">
                                            <input type="text" class="form-control w-auto" placeholder="Search">
                                            <button type="button" class="btn btn-md btn-primary"><i
                                                    class="bx bx-search"></i></button>
                                        </div>
                                    </div>
                                    <div class="card-datatable table-responsive">
                                        <table class="datatables-users table border-top table-hover table-striped" id="data_table">
                                            <thead>
                                                <tr>
                                                    <th>SR NO</th>
                                                    <th>Title</th>
                                                    <th>Coupon Code</th>
                                                    <th>Start Date</th>
                                                    <th>End Date</th>
                                                    <th>Minimum Amount</th>
                                                    <th>Offer</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Coupon</td>
                                                    <td><span class="fw-semibold text-primary">PAVEO23</span></td>
                                                    <td class="text-nowrap">09 May 2023, 10:10AM</td>
                                                    <td class="text-nowrap">19 May 2023, 10:10AM</td>
                                                    <td><i class="bx bx-rupee"></i> 2000</td>
                                                    <td>10%</td>
                                                    <td>
                                                    <input type="checkbox" checked data-toggle="toggle" data-on="Active"
                                                            data-off="Deactive" data-onstyle="success"
                                                            data-offstyle="danger" data-size="sm">
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-sm btn-icon btn-primary"
                                                            data-bs-toggle="modal" data-bs-target="#edit_coupon">
                                                            <i class="bx bx-edit"></i>
                                                        </button>
                                                        <button class="btn btn-sm btn-icon delete-record btn-danger" id="delete_1"
                                                            onclick="delete_fun(this)"><i
                                                                class="bx bx-trash"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Coupon2</td>
                                                    <td><span class="fw-semibold text-primary">PAVEO23</span></td>
                                                    <td class="text-nowrap">09 May 2023, 10:10AM</td>
                                                    <td class="text-nowrap">19 May 2023, 10:10AM</td>
                                                    <td><i class="bx bx-rupee"></i> 2000</td>
                                                    <td>10%</td>
                                                    <td>
                                                    <input type="checkbox" checked data-toggle="toggle" data-on="Active"
                                                            data-off="Deactive" data-onstyle="success"
                                                            data-offstyle="danger" data-size="sm">
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-sm btn-icon btn-primary"
                                                            data-bs-toggle="modal" data-bs-target="#edit_coupon">
                                                            <i class="bx bx-edit"></i>
                                                        </button>
                                                        <button class="btn btn-sm btn-icon delete-record btn-danger" id="delete_1"
                                                            onclick="delete_fun(this)"><i
                                                                class="bx bx-trash"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Coupon3</td>
                                                    <td><span class="fw-semibold text-primary">PAVEO23</span></td>
                                                    <td class="text-nowrap">09 May 2023, 10:10AM</td>
                                                    <td class="text-nowrap">19 May 2023, 10:10AM</td>
                                                    <td><i class="bx bx-rupee"></i> 2000</td>
                                                    <td>10%</td>
                                                    <td>
                                                    <input type="checkbox" data-toggle="toggle" data-on="Active"
                                                            data-off="Deactive" data-onstyle="success"
                                                            data-offstyle="danger" data-size="sm">
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-sm btn-icon btn-primary"
                                                            data-bs-toggle="modal" data-bs-target="#edit_coupon">
                                                            <i class="bx bx-edit"></i>
                                                        </button>
                                                        <button class="btn btn-sm btn-icon delete-record btn-danger" id="delete_1"
                                                            onclick="delete_fun(this)"><i
                                                                class="bx bx-trash"></i></button>
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
    <!--Create coupon Modal -->
    <div class="modal fade cust_modal" id="create_coupon" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="" method="post" class="needs-validation" novalidate>
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel1">Create coupon</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col mb-3">
                                <label for="" class="form-label">Title<span class="text-danger">*</span></label>
                                <input type="text" id="" class="form-control" placeholder="Enter Title" value=""
                                    required>
                                <div class="invalid-feedback"> Please enter your Title. </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label for="" class="form-label">Generate Coupon Code <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    
                                    <input class="form-control" id="coupon_code" type="text" maxlength="8" placeholder="Enter Coupon Code" name="coup_code" value="" required="">
                                    <button class="btn btn-sm btn-primary" type="button" onclick="generateCouponCode()">Generate
                                        Coupon</button>
                                    <div class="invalid-feedback">Please Enter Coupon Code.</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label for="" class="form-label">Coupon Start Date<span class="text-danger">*</span></label>
                                <input type="text" id="start_date-format" class="form-control"  placeholder="Enter Start Date" value=""
                                    required>
                                <div class="invalid-feedback"> Please Enter Coupon Start Date</div>
                            </div>
                            <div class="col mb-3">
                                <label for="" class="form-label">Coupon End Date<span class="text-danger">*</span></label>
                                <input type="text" id="end_date-format" class="form-control"  placeholder="Enter  End Date" value=""
                                    required>
                                <div class="invalid-feedback"> Please Enter Coupon End Date</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label for="" class="form-label">Minimum Amount<span class="text-danger">*</span></label>
                                <input type="number"  class="form-control" min="0" placeholder="Enter Minimum Amount" value=""
                                    required>
                                <div class="invalid-feedback"> Please Enter Minimum Amount  </div>
                            </div>
                            <div class="col mb-3">
                                <label for="" class="form-label">Offers %<span class="text-danger">*</span></label>
                                <input type="number" id="" class="form-control" min="0" max="100" placeholder="Enter Offers %" value=""
                                    required>
                                <div class="invalid-feedback"> Please Enter Offers % </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-default">Save Size</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--Edit Coupon Code Modal -->
    <div class="modal fade  " id="edit_coupon" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="" method="post" class="needs-validation" novalidate>
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel1">Edit Coupon Code</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col mb-3">
                                <label for="" class="form-label">Title<span class="text-danger">*</span></label>
                                <input type="text" id="" class="form-control" placeholder="Enter Title" value="Coupon 1"
                                    required>
                                <div class="invalid-feedback"> Please enter your Title. </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label for="" class="form-label">Generate Coupon Code <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    
                                    <input class="form-control" id="coupon_code" type="text" maxlength="8" placeholder="Enter Coupon Code" name="coup_code" value="JH&ANfxM" required="">
                                    <button class="btn btn-sm btn-primary" type="button" onclick="generateCouponCode()">Generate
                                        Coupon</button>
                                    <div class="invalid-feedback">Please Enter Coupon Code.</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label for="" class="form-label">Coupon Start Date<span class="text-danger">*</span></label>
                                <input type="text" id="start_date-format" class="form-control"  placeholder="Enter Start Date" value="2023-12-23 12:03:00"
                                    required>
                                <div class="invalid-feedback"> Please Enter Coupon Start Date</div>
                            </div>
                            <div class="col mb-3">
                                <label for="" class="form-label">Coupon End Date<span class="text-danger">*</span></label>
                                <input type="text" id="end_date-format" class="form-control"  placeholder="Enter  End Date" value="2023-12-30 12:03:00"
                                    required>
                                <div class="invalid-feedback"> Please Enter Coupon End Date</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label for="" class="form-label">Minimum Amount<span class="text-danger">*</span></label>
                                <input type="number"  class="form-control" min="0" placeholder="Enter Minimum Amount" value="10000"
                                    required>
                                <div class="invalid-feedback"> Please Enter Minimum Amount  </div>
                            </div>
                            <div class="col mb-3">
                                <label for="" class="form-label">Offers %<span class="text-danger">*</span></label>
                                <input type="number" id="" class="form-control" min="0" max="100" placeholder="Enter Offers %" value="10"
                                    required>
                                <div class="invalid-feedback"> Please Enter Offers % </div>
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
        dropdownParent: $('#create_coupon'),
        minimumResultsForSearch: Infinity,
        width: "100%",
    });
    $('.create_coupon').select2({
        dropdownParent: $('#edit_coupon'),
        minimumResultsForSearch: Infinity,
        width: "100%",
    });
    </script>
    <script>
         $(document).ready(function() {
            $('#start_date-format').daterangepicker({
          autoUpdateInput: false,
            minDate: new Date(),
            singleDatePicker: true,
            timePicker: true,
            locale: {
                format: 'YYYY-MM-DD HH:mm:ss'
            }
        });
        $('#end_date-format').daterangepicker({
          autoUpdateInput: false,
            //minDate: new Date(),
            singleDatePicker: true,
            timePicker: true,
            locale: {
                format: 'YYYY-MM-DD HH:mm:ss'
            },
            // useCurrent: false
        });
    $("#start_date-format").on('apply.daterangepicker', function(ev, picker) {
          $(this).val(picker.startDate.format('YYYY-MM-DD HH:mm:ss'));
          $('#end_date-format').data('daterangepicker').minDate = picker.startDate;
          $('#end_date-format').data('daterangepicker').setStartDate(picker.startDate);
        });
        $("#end_date-format").on('apply.daterangepicker', function(ev, picker) {
          $(this).val(picker.startDate.format('YYYY-MM-DD HH:mm:ss'));
        });
        
    })
    function generateCouponCode() {
            var length = 8; // Minimum length of 8 characters
            var characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()";
            var coupon_code = "";
            
            for (var i = 0; i < length; i++) {
                var randomIndex = Math.floor(Math.random() * characters.length);
                coupon_code += characters.charAt(randomIndex);
            }
            
            document.getElementById("coupon_code").value = coupon_code;
            }
    </script>
</body>

</html>