<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-template="vertical-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Paveo | Create Size</title>
    <?php $this->load->view('link/css'); ?>
</head>

<body>
    <?php
    $y="setting";
    $x="create_size"
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
                        <h4 class="fw-bold py-2 mb-2">
                            Create Size
                        </h4>
                        <div class="row ">
                            <div class="col-md-12">
                                <div class=" card">
                                    <div class="card-header header-elements">
                                        <div class="card-title-elements">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#create_size">
                                                <i class="bx bx-plus"></i>Add New Size
                                            </button>
                                        </div>
                                        <div class="card-header-elements ms-auto">
                                            <input type="text" class="form-control w-auto" placeholder="Search">
                                            <button type="button" class="btn btn-md btn-primary"><i
                                                    class="bx bx-search"></i></button>
                                        </div>
                                    </div>
                                    <div class="card-datatable table-responsive">
                                        <table class="datatables-users table border-top" id="data_table">
                                            <thead>
                                                <tr>
                                                    <th>SR NO</th>
                                                    <th>Category Name</th>
                                                    <th>Size Name</th>
                                                    <th>Status</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Shirts</td>
                                                    <td><span class="fw-semibold">S</span></td>
                                                    <td><input type="checkbox" checked data-toggle="toggle"
                                                            data-on="Active" data-off="Deactive" data-onstyle="success"
                                                            data-offstyle="danger" data-size="sm">
                                                    </td>
                                                    <td>
                                                        <div class="d-inline-block text-nowrap">
                                                            <button class="btn btn-sm btn-icon"><i
                                                                    class="bx bx-show"></i></button>
                                                            <button type="button" class="btn btn-sm btn-icon"
                                                                data-bs-toggle="modal" data-bs-target="#edit_size">
                                                                <i class="bx bx-edit"></i>
                                                            </button>
                                                            <button class="btn btn-sm btn-icon delete-record"
                                                                id="delete_1" onclick="delete_fun(this)"><i
                                                                    class="bx bx-trash"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Jeans</td>
                                                    <td><span class="fw-semibold">M</span></td>
                                                    <td>
                                                        <input type="checkbox" data-toggle="toggle" data-on="Active"
                                                            data-off="Deactive" data-onstyle="success"
                                                            data-offstyle="danger" data-size="sm">
                                                    </td>
                                                    <td>
                                                        <div class="d-inline-block text-nowrap">
                                                            <button class="btn btn-sm btn-icon"><i
                                                                    class="bx bx-show"></i></button>
                                                            <button class="btn btn-sm btn-icon"><i
                                                                    class="bx bx-edit"></i></button>
                                                            <button class="btn btn-sm btn-icon delete-record"
                                                                id="delete_2" onclick="delete_fun(this)"><i
                                                                    class="bx bx-trash"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Shorts</td>
                                                    <td><span class="fw-semibold">L</span></td>
                                                    <td>
                                                        <input type="checkbox" checked data-toggle="toggle"
                                                            data-on="Active" data-off="Deactive" data-onstyle="success"
                                                            data-offstyle="danger" data-size="sm">
                                                    </td>
                                                    <td>
                                                        <div class="d-inline-block text-nowrap">
                                                            <button class="btn btn-sm btn-icon"><i
                                                                    class="bx bx-show"></i></button>
                                                            <button class="btn btn-sm btn-icon"><i
                                                                    class="bx bx-edit"></i></button>
                                                            <button class="btn btn-sm btn-icon delete-record"
                                                                id="delete_3" onclick="delete_fun(this)"><i
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
    <!--Create Size Modal -->
    <div class="modal fade" id="create_size" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="" method="post" class="needs-validation" novalidate>
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel1">Create Size</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="col mb-3">
                            <label for="cat_name" class="form-label">Category Name <span
                                    class="text-danger">*</span></label>
                            <select class="form-select" id="cat_name" required="" name="">
                                <option selected="" disabled="" value="">Choose...</option>
                                <option value="1">Shirts</option>
                                <option value="2">Jeans </option>
                                <option value="3">Shorts </option>
                            </select>
                            <div class="invalid-feedback"> Please enter your Category Name. </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label for="" class="form-label">Size Name <span class="text-danger">*</span></label>
                                <input type="text" id="" class="form-control" placeholder="Enter Size Name" value=""
                                    required>
                                <div class="invalid-feedback"> Please enter your Size Name. </div>
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
    <!--Edit Size Modal -->
    <div class="modal fade" id="edit_size" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="" method="post" class="needs-validation" novalidate>
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel1">Edit Size</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col mb-3">
                                <label for="cat_name" class="form-label">Category Name <span
                                        class="text-danger">*</span></label>
                                <select class="form-select" id="cat_name" required="" name="">
                                    <option selected="" disabled="" value="">Choose...</option>
                                    <option value="1">Shirts</option>
                                    <option value="2" selected>Jeans </option>
                                    <option value="3">Shorts </option>
                                </select>
                                <div class="invalid-feedback"> Please enter your Category Name. </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label for="" class="form-label">Size Name <span class="text-danger">*</span></label>
                                <input type="text" id="" class="form-control" placeholder="Enter Size Name" value="S"
                                    required>
                                <div class="invalid-feedback"> Please enter your Size Name. </div>
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