<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="../../assets/" data-template="vertical-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Paveo | Push Notification</title>
    <?php $this->load->view('link/css'); ?>
</head>

<body>
    <?php
    $y="";
    $x="push_notification";
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
                        <h4 class="fw-bold py-3 mb-2 text-primary">
                            Push Notification
                        </h4>
                        <div class="row justify-content-center">
                            <div class="col-md-8 mb-4">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-action-title">Send Notification</div>
                                    </div>
                                    <form action="" method="post" class="needs-validation" novalidate>
                                        <div class="card-body">
                                            <div class="row mb-3">
                                                <div class="col-3">
                                                    <label for="" class="form-label">Send To <span
                                                            class="text-danger">*</span></label>
                                                </div>
                                                <div class="col-9">
                                                    <select class="form-select select2" id="" required="" name=""
                                                        multiple>
                                                        <option value="1">All</option>
                                                        <option value="2">Stu Delamaine </option>
                                                        <option value="3">Kare Skitterel </option>
                                                        <option value="4">Wesley Burland</option>
                                                    </select>
                                                    <div class="invalid-feedback"> Please enter your vendor.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-3">
                                                    <label for="" class="form-label">Notification Type <span
                                                            class="text-danger">*</span></label>
                                                </div>
                                                <div class="col-9">
                                                    <select class="form-select select2" id="" required="" name=""
                                                        multiple>
                                                        <option value="1">Email Notification</option>
                                                        <option value="2">SMS Notification</option>
                                                        <option value="3">Push Notification</option>
                                                    </select>
                                                    <div class="invalid-feedback"> Please enter your Notification Type.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-3">
                                                    <label for="" class="form-label">Subject<span
                                                            class="text-danger">*</span></label>
                                                </div>
                                                <div class="col-9">
                                                    <input type="text" id="" class="form-control"
                                                        placeholder="Enter Subject here" value="" required>
                                                    <div class="invalid-feedback"> Please enter your Subject.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-3">
                                                    <label for="" class="form-label">Message<span
                                                            class="text-danger">*</span></label>
                                                </div>
                                                <div class="col-9">
                                                    <div id="full-editor">
                                                        <h6>Quill Rich Text Editor</h6>
                                                    </div>
                                                    <div class="invalid-feedback"> Please enter your Message.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer text-center">
                                            <button type="submit" class="btn btn-default">Send Notification</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                            <div class="col-md-12">
                                <div class=" card">
                                    <div class="card-header header-elements">
                                        <div class="card-action-title">Sended Notification</div>
                                    </div>
                                    <div class="card-datatable table-responsive">
                                        <table class="datatables-users table border-top table-hover table-striped" id="data_table">
                                            <thead>
                                                <tr>
                                                    <th>SR NO</th>
                                                    <th>Date & Time</th>
                                                    <th>NOTIFICATION TYPE </th>
                                                    <th>Subject</th>
                                                    <th>Message</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td class="nowrap">30 Jun 2022, 11:30 am </td>
                                                    <td><span class="badge bg-success">SMS</span></td>
                                                    <td>Notification Title</td>
                                                    <td>
                                                        <button type="button" class="btn btn-sm btn-icon btn-secondary"
                                                            data-bs-toggle="modal" data-bs-target="#view_msg">
                                                            <i class='bx bx-message-square-dots'></i>
                                                        </button>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-sm btn-icon delete-record btn-danger" id="delete_1"
                                                            onclick="delete_fun(this)"><i
                                                                class="bx bx-trash"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td class="nowrap">30 May 2022, 11:30 am </td>
                                                    <td><span class="badge bg-success">Push</span></td>
                                                    <td>Notification Title</td>
                                                    <td>
                                                        <div class="d-inline-block text-nowrap">
                                                            <button type="button" class="btn btn-sm btn-icon btn-secondary"
                                                                data-bs-toggle="modal" data-bs-target="#view_msg">
                                                                <i class='bx bx-message-square-dots'></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-sm btn-icon delete-record btn-danger" id="delete_2"
                                                            onclick="delete_fun(this)"><i
                                                                class="bx bx-trash"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td class="nowrap">3 Feb 2022, 11:30 am </td>
                                                    <td>
                                                        <span class="badge bg-success">Push</span>
                                                        <span class="badge bg-success">SMS</span>
                                                    </td>
                                                    <td>Notification Title</td>
                                                    <td>
                                                        <div class="d-inline-block text-nowrap">
                                                            <button type="button" class="btn btn-sm btn-icon btn-secondary"
                                                                data-bs-toggle="modal" data-bs-target="#view_msg">
                                                                <i class='bx bx-message-square-dots'></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-sm btn-icon delete-record btn-danger" id="delete_3"
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
        <!--View Massage Modal -->
        <div class="modal fade  " id="view_msg" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="" method="post" class="needs-validation" novalidate>
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel1">View Massage</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col mb-3">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit esse quasi, impedit suscipit praesentium alias maxime eveniet fugiat fuga aspernatur id dolore autem eum qui quis aliquam error repudiandae tenetur.</p>
                            </div>
                        </div>
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
        placeholder: "Select Send To"
    });
    </script>
    <script>
    new Quill("#full-editor", {
        bounds: "#full-editor",
        placeholder: "Type Something...",
        modules: {
            formula: !0,
            toolbar: [
                [{
                    size: []
                }],
                ["bold", "italic", "underline", "strike"],
                [{
                    color: []
                }, {
                    background: []
                }],
                [{
                    script: "super"
                }, {
                    script: "sub"
                }],
                ["code-block"],
                [{
                    list: "ordered"
                }, {
                    list: "bullet"
                }],
                ["link"]
            ]
        },
        theme: "snow"
    });
    </script>
</body>

</html>