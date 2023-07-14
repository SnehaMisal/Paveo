<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-template="vertical-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Paveo | Add Product</title>
    <?php $this->load->view('link/css'); ?>
    <style>
    /* .upload__box {
        padding: 40px;
    } */
    </style>
</head>

<body>
    <?php
    $y="product_managment";
    $x="add_product";
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
                            Add Product
                        </h4>
                        <div class="row ">
                            <div class="col-md-12">
                                <div class=" card">
                                    <!-- <div class="card-header header-elements">
                                        <div class="card-title-elements">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#create_category">
                                                <i class="bx bx-plus"></i>Add New Category
                                            </button>
                                        </div>
                                        <div class="card-header-elements ms-auto">
                                            <input type="text" class="form-control w-auto" placeholder="Search">
                                            <button type="button" class="btn btn-md btn-primary"><i
                                                    class="bx bx-search"></i></button>
                                        </div>
                                    </div> -->
                                    <form action="" method="post" class="needs-validation" novalidate>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col mb-3">
                                                    <label for="" class="form-label">Category Name <span
                                                            class="text-danger">*</span></label>
                                                    <select class="form-select select2" id="" required="" name="">
                                                        <option selected="" disabled="" value="">Choose...</option>
                                                        <option value="1">Shirts</option>
                                                        <option value="2">Jeans </option>
                                                        <option value="3">Shorts </option>
                                                    </select>
                                                    <div class="invalid-feedback"> Please enter your Category Name.
                                                    </div>
                                                </div>
                                                <div class="col mb-3">
                                                    <label for="" class="form-label">Product Name <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" id="" class="form-control"
                                                        placeholder="Enter Product Name" value="" required>
                                                    <div class="invalid-feedback"> Please enter your Product Name.
                                                    </div>
                                                </div>
                                                <div class="col mb-3">
                                                    <label for="" class="form-label">Product Sub-Title <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" id="" class="form-control"
                                                        placeholder="Enter Product Sub-Title" value="" required>
                                                    <div class="invalid-feedback"> Please enter your Product Sub-Title.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col mb-3">
                                                    <label for="" class="form-label">Product Size <span
                                                            class="text-danger">*</span></label>
                                                    <select class="form-select select2" id="" required="" name="" multiple>
                                                        <!-- <option selected="" disabled="" value="">Choose...</option> -->
                                                        <option value="1">Small</option>
                                                        <option value="2">Medium </option>
                                                        <option value="3">Large </option>
                                                    </select>
                                                    <div class="invalid-feedback"> Please enter your Product Size.
                                                    </div>
                                                </div>
                                                <div class="col mb-3">
                                                    <label for="" class="form-label">Product Color <span
                                                            class="text-danger">*</span></label>
                                                    <select class="form-select select2" id="" required="" name="" multiple>
                                                        <!-- <option selected="" disabled="" value="">Choose...</option> -->
                                                        <option value="1">Red</option>
                                                        <option value="2">Green </option>
                                                        <option value="3">Blue </option>
                                                    </select>
                                                    <div class="invalid-feedback"> Please enter your Product Color.
                                                    </div>
                                                </div>
                                                <div class="col mb-3">
                                                    <label for="" class="form-label">Price <span
                                                            class="text-danger">*</span></label>
                                                    <input type="number" id="" class="form-control"
                                                        placeholder="Enter Product Price" value="" required>
                                                    <div class="invalid-feedback"> Please enter your Product Price.
                                                    </div>
                                                </div>
                                                <div class="col mb-3">
                                                    <label for="" class="form-label">Margin % <span
                                                            class="text-danger">*</span></label>
                                                    <input type="number" id="" class="form-control"
                                                        placeholder="Enter Product Margin %" value="" required>
                                                    <div class="invalid-feedback"> Please enter your Product Margin %.
                                                    </div>
                                                </div>
                                                <div class="col mb-3">
                                                    <label for="" class="form-label">Pcs in 1 Set <span
                                                            class="text-danger">*</span></label>
                                                    <input type="number" id="" class="form-control"
                                                        placeholder="Enter Product Pcs in 1 set" value="" required>
                                                    <div class="invalid-feedback"> Please enter your Product Qty in 1 Set.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row g-2">
                                                <div class="col mb-3">
                                                    <label for="" class="form-label">Product Discription <span
                                                            class="text-danger">*</span></label>
                                                    <div id="full-editor">
                                                        <h6>Quill Rich Text Editor</h6>
                                                    </div>
                                                    <div class="invalid-feedback">Please Enter Category Image.</div>
                                                </div>
                                                <div class="col mb-3">
                                                    <label for="" class="form-label">Product Primary Image <span
                                                            class="text-danger">*</span></label>
                                                    <input type="file" id="" class="dropify" name=""
                                                        data-default-file="" data-height="190" required
                                                        data-allowed-file-extensions="png jpg jpeg" />
                                                    <div class="invalid-feedback">Please Enter Product Primary Image.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <!-- <div class="col mb-3">
                                                    <label for="" class="form-label">Product Images <span
                                                            class="text-danger">*</span></label>
                                                    <input id="thefiles" type="file" name="files"
                                                        accept=".jpg, .png, image/jpeg, image/png" multiple>
                                                    <input id="image-uploadify" type="file"
                                                        accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf"
                                                        multiple=""
                                                        value="<?php echo base_url() ?>assets/images/profile.png">
                                                    
                                                    <div class="invalid-feedback">Please Enter Product Images.
                                                    </div>
                                                </div> -->
                                                <!-- <div class="col">
                                                    <label for="" class="form-label">Product Other Images <span
                                                            class="text-danger">*</span></label>
                                                    <div class="upload__box">
                                                        <div class="upload__btn-box">
                                                            <label class="upload__btn">
                                                                <p>Upload Images</p>
                                                                <input type="file" multiple="" data-max_length="3"
                                                                    accept=".png,.jpg,.gif"
                                                                    class="upload__inputfile form-control" required>
                                                            </label>
                                                        </div>
                                                        <div class="upload__img-wrap">
                                                            <div class='upload__img-box'>
                                                                <div style='background-image: url("<?php echo base_url() ?>assets/images/profile.png")'
                                                                    data-number='0' data-file='profile.png'
                                                                    class='img-bg'>
                                                                    <div class='upload__img-close'></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="error_msg">Please Upload Image</div>
                                                    </div>
                                                </div> -->
                                                <div class="col-md-6">
                                                    <label for="" class="form-label">Product Other Images </label>
                                                    <div class="upload__box">
                                                        <input type="file" multiple="" data-max_length="3"
                                                            accept=".png,.jpg,.gif"
                                                            class="upload__inputfile form-control">
                                                        <div class="upload__img-wrap">
                                                            <!-- <div class='upload__img-box'>
                                                                <div style='background-image: url("<?php echo base_url() ?>assets/images/profile.png")'
                                                                    data-number='0' data-file='profile.png'
                                                                    class='img-bg'>
                                                                    <div class='upload__img-close'></div>
                                                                </div>
                                                            </div> -->
                                                        </div>
                                                        <div class="error_msg"></div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="card-footer text-center">
                                            <button type="submit" class="btn btn-default"><i class="bx bx-plus"></i>Add
                                                Product</button>
                                        </div>
                                    </form>
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
    <?php $this->load->view('link/js'); ?>
    <script>
    $('.select2').select2({
        minimumResultsForSearch: Infinity,
        width: "100%",
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
    <script type="text/javascript">
    $(document).ready(function() {
        $('#image-uploadify').imageuploadify();
    })
    </script>
    <script>
    jQuery(document).ready(function() {
        ImgUpload();
    });

    function ImgUpload() {
        var imgWrap = "";
        var imgArray = [];

        $('.upload__inputfile').each(function() {
            $(this).on('change', function(e) {
                imgWrap = $(this).closest('.upload__box').find('.upload__img-wrap');
                var maxLength = $(this).attr('data-max_length');

                var files = e.target.files;
                var filesArr = Array.prototype.slice.call(files);
                var iterator = 0;

                filesArr.forEach(function(f, index) {

                    if (!f.type.match('image.*')) {
                        return;
                    }

                    if (imgArray.length > maxLength) {
                        return false
                    } else {
                        var len = 0;
                        for (var i = 0; i < imgArray.length; i++) {
                            if (imgArray[i] !== undefined) {
                                len++;
                            }
                        }
                        if (len > maxLength) {
                            return false;
                        } else {
                            imgArray.push(f);

                            var reader = new FileReader();
                            reader.onload = function(e) {
                                var html =
                                    "<div class='upload__img-box'><div style='background-image: url(" +
                                    e.target.result + ")' data-number='" + $(
                                        ".upload__img-close").length + "' data-file='" + f
                                    .name +
                                    "' class='img-bg'><div class='upload__img-close'></div></div></div>";
                                imgWrap.append(html);
                                $('.error_msg').text('Please select up to 4 images.');
                                iterator++;
                            }
                            reader.readAsDataURL(f);
                        }
                    }
                });
            });
        });

        $('body').on('click', ".upload__img-close", function(e) {
            var file = $(this).parent().data("file");
            for (var i = 0; i < imgArray.length; i++) {
                if (imgArray[i].name === file) {
                    imgArray.splice(i, 1);
                    break;
                }
            }
            $(this).parent().parent().remove();
        });
    }
    </script>
</body>

</html>