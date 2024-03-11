<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-template="vertical-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Paveo | Inventory Management</title>
    <?php $this->load->view('link/css'); ?>
</head>

<body>
    <?php
    $y="inventory_management";
    $x="stock_history";
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
                            Inventory Management
                        </h4>
                        <div class="row ">
                            <div class="col-md-12">
                                <div class=" card">
                                    <div class="card-header header-elements">
                                        <div class="card-title-elements">
                                        <div class="card-action-title">Product Name :- <span class="fw-semibold text-primary">Summer Wear Shirt for Men</span></div>
                                        </div>
                                        <div class="card-header-elements ms-auto">
                                            <input type="text" class="form-control w-auto" placeholder="Search">
                                            <button type="button" class="btn btn-md btn-primary"><i
                                                    class="bx bx-search"></i></button>
                                                    <p type="button" class="btn btn-md btn-primary mb-0" onclick="exportexcel()">
                                            Export </p>
                                        </div>
                                    </div>
                                    <div class="card-datatable table-responsive">
                                        <table class="datatables-users table border-top table-hover table-striped" id="data_table">
                                            <thead>
                                                <tr>
                                                    <th>SR NO</th>
                                                    <th>Product Size</th>
                                                    <th>Product Color</th>
                                                    <th>Total Stock</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Small</td>
                                                    <td>Red</td>
                                                    <td><span class="badge badge-center bg-primary">10</span></td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Medium</td>
                                                    <td>Red</td>
                                                    <td><span class="badge badge-center bg-primary">200</span></td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Medium</td>
                                                    <td>Grey</td>
                                                    <td><span class="badge badge-center bg-primary">500</span></td>
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
    <!--Add New Stock Modal -->
    <div class="modal fade" id="new_stock" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="" method="post" class="needs-validation" novalidate>
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel1">Add New Stock</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="col mb-3">
                            <label for="" class="form-label">Category Name <span class="text-danger">*</span></label>
                            <select class="form-select" id="" required="" name="">
                                <option selected="" disabled="" value="">Choose...</option>
                                <option value="1">Shirts</option>
                                <option value="2">Jeans </option>
                                <option value="3">Shorts </option>
                            </select>
                            <div class="invalid-feedback"> Please enter your Category Name. </div>
                        </div>
                        <div class="col mb-3">
                            <label for="" class="form-label">Product Name <span class="text-danger">*</span></label>
                            <select class="form-select" id="" required="" name="">
                                <option selected="" disabled="" value="">Choose...</option>
                                <option value="1">Summer Wear Shirt for Men</option>
                                <option value="2">Ben Martin Men's Relaxed Fit Jeans </option>
                                <option value="3">Peter England Men Blazer </option>
                            </select>
                            <div class="invalid-feedback"> Please enter your Product Name. </div>
                        </div>
                        <div class="row">
                            <div class="col  mb-3">
                                <label for="" class="form-label">Product Size<span class="text-danger">*</span></label>
                                <select class="form-select" id="" required="" name="">
                                    <option selected="" disabled="" value="">Choose...</option>
                                    <option value="1">S</option>
                                    <option value="2">M</option>
                                    <option value="3">L</option>
                                </select>
                                <div class="invalid-feedback"> Please enter your Product Size. </div>
                            </div>
                            <div class=" col mb-3">
                                <label for="" class="form-label">Product Color<span class="text-danger">*</span></label>
                                <select class="form-select" id="" required="" name="">
                                    <option selected="" disabled="" value="">Choose...</option>
                                    <option value="1">Red</option>
                                    <option value="2">Green</option>
                                    <option value="3">Grey</option>
                                </select>
                                <div class="invalid-feedback"> Please enter your Product Size. </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col mb-3">
                                <label for="" class="form-label">No. Of stock<span class="text-danger">*</span></label>
                                <input type="number" id="" class="form-control" placeholder="Enter No. Of stock"
                                    value="" required>
                                <div class="invalid-feedback"> Please enter your No. Of stock. </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add New Stock</button>
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
            <script type="text/javascript">
    function exportexcel() {
        $("#data_table").table2excel({
            exclude: ".noExl",
            name: "Table2Excel",
            filename: "Stock Details",
            exclude_img: true,
            exclude_links: true,
            exclude_inputs: false,
        });
    }
    </script>
</body>

</html>