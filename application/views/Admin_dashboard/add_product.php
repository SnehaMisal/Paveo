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
                                    <form action="" method="post" class="needs-validation" novalidate>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-4 mb-3 col-12">
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
                                                <div class="col-md-4 mb-3 col-12">
                                                    <label for="" class="form-label">Sub-Category Name <span
                                                            class="text-danger">*</span></label>
                                                    <select class="form-select select2" id="" required="" name="">
                                                        <option selected="" disabled="" value="">Choose...</option>
                                                        <option value="1">Formal Shirts</option>
                                                        <option value="2">Formal Jeans </option>
                                                        <option value="3">Sport Shorts </option>
                                                    </select>
                                                    <div class="invalid-feedback"> Please enter your Sub-Category Name.
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-12">
                                                    <label for="" class="form-label">Product Name <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" id="" class="form-control"
                                                        placeholder="Enter Product Name" value="" required>
                                                    <div class="invalid-feedback"> Please enter your Product Name.
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-12">
                                                    <label for="" class="form-label">Product Sub-Title <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" id="" class="form-control"
                                                        placeholder="Enter Product Sub-Title" value="" required>
                                                    <div class="invalid-feedback"> Please enter your Product Sub-Title.
                                                    </div>
                                                </div>
                                                <div class="col-md-2 mb-3 col-6">
                                                    <label for="" class="form-label">Selling Price <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" id="" class="form-control"
                                                        placeholder="Enter  Selling Price" value=""
                                                        min="0" required>
                                                    <div class="invalid-feedback">
                                                        Please enter your Product Selling Price
                                                    </div>
                                                </div>
                                                <div class="col-md-2 mb-3 col-6">
                                                    <label for="" class="form-label">MRP <span
                                                            class="text-danger">*</span></label>
                                                    <input type="number" id="" class="form-control"
                                                        placeholder="Enter Product MRP" value="" min="0" required>
                                                    <div class="invalid-feedback"> Please enter your Product MRP.
                                                    </div>
                                                </div>
                                                <div class="col-md-2 mb-3 col-6">
                                                    <label for="" class="form-label">Margin % <span
                                                            class="text-danger">*</span></label>
                                                    <input type="number" id="" class="form-control"
                                                        placeholder="Enter Product Margin %" value="" min="0" required>
                                                    <div class="invalid-feedback"> Please enter your Product Margin %.
                                                    </div>
                                                </div>
                                                <div class="col-md-2 mb-3 col-6">
                                                    <label for="" class="form-label">Pcs in 1 Set <span
                                                            class="text-danger">*</span></label>
                                                    <input type="number" id="" class="form-control"
                                                        placeholder="Enter Product Pcs in 1 set" value="" min="0"
                                                        required>
                                                    <div class="invalid-feedback"> Please enter your Product Qty in 1
                                                        Set.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row g-2">
                                                <div class="col-md-6 mb-3 col-12">
                                                    <label for="" class="form-label">Product Primary Image <span
                                                            class="text-danger">*</span></label>
                                                    <input type="file" id="dropify_img" class="dropify" name=""
                                                        data-default-file="" data-height="210" required
                                                        data-errors-position="outside"
                                                        data-allowed-file-extensions="png jpg jpeg" />
                                                    <div class="invalid-feedback" id="invalid-feedback">Please Enter
                                                        Product Primary Image
                                                    </div>
                                                </div>
                                                <div class="col mb-3">
                                                    <label for="" class="form-label">Size Chart <span
                                                            class="text-danger">*</span></label>

                                                    <textarea id="summernote" class="summernote mb-0" name="example"
                                                        required="required"></textarea>
                                                    <div class="invalid-feedback">Please Enter Size Chart.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col mb-3">
                                                    <label for="" class="form-label">Product Discription  <span
                                                            class="text-danger">*</span></label>
                                                    <textarea id="summernote" class="summernote mb-0" name="example"
                                                        required="required"></textarea>
                                                    <div class="invalid-feedback">Please Enter Product Discription.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 mb-3 col-12">
                                                    <label for="" class="form-label">Product Details <span
                                                            class="text-danger">*</span></label>

                                                    <div id="add_details" class="d-md-flex align-items-end">
                                                        <div class="form-group inner-repeater">
                                                            <div data-repeater-list="add_details"
                                                                class="d-flex flex-column gap-3">
                                                                <div data-repeater-item=""
                                                                    class="form-group  align-items-center gap-5">
                                                                    <div class="row ">
                                                                        <div class="col-md-5 col-5">
                                                                            <input type="text" class="form-control "
                                                                                name="" placeholder="Details Name"
                                                                                required oninput="this.value = this.value.toUpperCase()"/>
                                                                            <div class="invalid-feedback">Please Enter
                                                                                Product Details Name.
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-5 col-5">
                                                                            <input type="text" class="form-control "
                                                                                name="" placeholder="Details Value"
                                                                                required />
                                                                            <div class="invalid-feedback">Please Enter
                                                                                Product Details Value.
                                                                            </div>

                                                                        </div>
                                                                        <div class="col-md-1 col-1">
                                                                            <button type="button"
                                                                                data-repeater-delete=""
                                                                                class="btn btn-sm btn-danger repeat_btn">
                                                                                <i class="bx bx-x"></i>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group ">
                                                            <button type="button" data-repeater-create=""
                                                                class="btn btn-sm btn-primary repeat_btn">
                                                                <i class="bx bx-plus"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="" class="form-label">Product Other Images </label>
                                                    <div class="upload__box">
                                                        <input type="file" multiple="" accept=".png,.jpg,.gif"
                                                            class="upload__inputfile form-control">
                                                        <div class="upload__img-wrap">
                                                        </div>
                                                        <!-- <div class="error_msg"></div> -->
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label for="" class="form-label">Add Sub-Product <span
                                                            class="text-danger">*</span></label>
                                                    <div
                                                        class="form-group card card-body shadow-none border-1 align-items-center gap-5">
                                                        <div class="row align-items-center">
                                                            <div class="col-md-6 mb-3 col-12">
                                                                <label for="" class="form-label">Product
                                                                    Image <span class="text-danger">*</span></label>
                                                                <input type="file" id="prod_img" class="dropify" name=""
                                                                    data-default-file="" data-height="210" required
                                                                    data-errors-position="outside"
                                                                    data-allowed-file-extensions="png jpg jpeg" />
                                                                <div class="invalid-feedback" id="invalid-feedback">
                                                                    Please Enter
                                                                    Product Image
                                                                </div>
                                                            </div>
                                                            <div class="col-md-5 col-5">
                                                                <div class="row">
                                                                    <div class="col-md-12 mb-3">
                                                                        <label for="" class="form-label">SR. NO. <span
                                                                                class="text-danger">*</span></label>
                                                                        <input type="text" class="form-control " name=""
                                                                            placeholder="Product SR. NO." required />
                                                                        <div class="invalid-feedback">Please
                                                                            Enter
                                                                            Product SR. NO..
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12 mb-3">
                                                                        <label for="" class="form-label">Product
                                                                            Title <span
                                                                                class="text-danger">*</span></label>
                                                                        <input type="text" class="form-control " name=""
                                                                            placeholder="Product Title" required />
                                                                        <div class="invalid-feedback">Please
                                                                            Enter
                                                                            Product Title.
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div class="col-md-12 mb-3">
                                                                        <label for="" class="form-label">Product
                                                                            Color <span
                                                                                class="text-danger">*</span></label>
                                                                                <input type="text" class="form-control " name=""
                                                                            placeholder="Product Color" required />
                                                                        <div class="invalid-feedback">Please
                                                                            Enter
                                                                            Product Color.
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12 mb-3 col-12">
                                                                        <label for="" class="form-label">Product Size
                                                                            <span class="text-danger">*</span></label>
                                                                        <select class="form-select select2" id=""
                                                                            required="" name="" multiple>
                                                                            <option value="1">Small</option>
                                                                            <option value="2">Medium
                                                                            </option>
                                                                            <option value="3">Large
                                                                            </option>
                                                                        </select>
                                                                        <div class="invalid-feedback">
                                                                            Please enter your Product Size.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="multi-field-wrapper"></div>
                                                    <div class="form-group text-center mt-3">
                                                        <button type="button" class="btn btn-sm btn-primary repeat_btn"
                                                            id="addmore">
                                                            <i class="bx bx-plus"></i>Add Another Sub-Product
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer text-center">
                                            <button type="submit" class="btn btn-default"></i>Save
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
    <script src="<?php echo base_url(''); ?>assets/plugins/formrepeater/formrepeater.bundle.js"></script>


    <script>
    $(document).ready(function() {
        $("#addmore").click(function() {
            $(".multi-field-wrapper").append(
                '<div class="form-group card card-body shadow-none border-1 mt-2 align-items-center gap-5 multi-field">' +
                '<div class="row align-items-center "><div class="col-md-6 mb-3 col-12">' +
                '<label for="" class="form-label">Product  Image <span class="text-danger">*</span></label>' +
                '<input type="file" id="prod_img" class="dropify" name="" data-default-file="" data-height="210" required  data-errors-position="outside"  data-allowed-file-extensions="png jpg jpeg" />' +
                '<div class="invalid-feedback" id="invalid-feedback">Please Enter Product Image</div></div>' +
                '<div class="col-md-5 col-5"><div class="row">'+
                '<div class="col-md-12 mb-3">' +
                '<label for="" class="form-label">SR No. <span class="text-danger">*</span></label>' +
                '<input type="text" class="form-control " name="" placeholder="Product SR No." required />' +
                '<div class="invalid-feedback">Please Enter Product SR No..</div></div>' +
                '<div class="col-md-12 mb-3">' +
                '<label for="" class="form-label">Product Title <span class="text-danger">*</span></label>' +
                '<input type="text" class="form-control " name="" placeholder="Product Title" required />' +
                '<div class="invalid-feedback">Please Enter Product Title.</div></div>' +
                '<div class="col-md-12 mb-3"><label for="" class="form-label">Product Color <span class="text-danger">*</span></label>' +
                '<input type="text" class="form-control " name="" placeholder="Product Color" required />' +
                '<div class="invalid-feedback">Please Enter Product Color.</div></div>' +
                '<div class="col-md-12 mb-3 col-12"><label for="" class="form-label">Product Size<span class="text-danger">*</span></label>' +
                '<select class="form-select select2" id="" required="" name="" multiple>' +
                '<option value="1">Small</option><option value="2">Medium</option>' +
                '<option value="3">Large</option></select>' +
                '<div class="invalid-feedback"> Please enter your Product Size.</div></div></div></div>' +
                '<div class="col-md-1 col-1"><button type="button"  class="btn btn-sm btn-danger inputRemove">' +
                '<i class="bx bx-x"></i> </button></div>' +
                '</div></div>');
            $('.select2').select2({
                minimumResultsForSearch: Infinity,
                width: "100%",
            });
            $('.dropify').dropify();
        });
        $('body').on('click', '.inputRemove', function() {
            console.log($(this).parent().parent().parent());
            $(this).parent().parent().parent().remove()
        });
    });
    </script>

    <script>
    $('.select2').select2({
        minimumResultsForSearch: Infinity,
        width: "100%",
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
                                    "<div class='upload__img-box custome_box'><div style='background-image: url(" +
                                    e.target.result + ")' data-number='" + $(
                                        ".upload__img-close").length + "' data-file='" + f
                                    .name +
                                    "' class='img-bg'><div class='upload__img-close'></div></div></div>";
                                imgWrap.append(html);
                                // $('.error_msg').text('Please select up to 4 images.');
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
    <script>
    $(document).ready(function() {
        $('.summernote').summernote({
            toolbar: [
                // [groupName, [list of button]]
                ['style', ['bold', 'italic', 'underline']],
                ['fontsize', ['fontsize']],
                ['table', ['table']],
                ['view', ['codeview']],
            ],
            height: 180,
            minHeight: 180,
            maxHeight: 180,
            disableResizeEditor: true,
        });
        $('#add_details').repeater({
            repeaters: [{
                selector: '.inner-repeater'
            }]
        });
        // Initialize the form repeater
        $('#add_sub_product').repeater({
            repeaters: [{
                selector: '.inner-repeater',
                initEmpty: true,
                show: function() {
                    $(this).slideDown(function() {
                        $(this).find('.select2').select2({
                            placeholder: 'Select an option'
                        });
                    });
                },

                hide: function(deleteElement) {
                    $(this).slideUp(deleteElement);
                },

                ready: function(setIndexes) {
                    $('.select2').select2({
                        placeholder: 'Select an option'
                    });
                },
            }]
        });


        // $('#add_sub_product').repeater({
        //     repeaters: [{
        //         selector: '.inner-repeater',
        //         initEmpty: true,
        //         show: function() {
        //             $('.select2-container').remove();
        //             $('.select2').select2();
        //             $(this).slideDown();
        //         },
        //         hide: function(remove) {
        //             if (confirm('Confirm Question')) {
        //                 $(this).slideUp(remove);
        //             }
        //         }
        //     }]
        // });
        // if (document.getElementById("dropify_img").files.length == 0) {
        //     //  console.log("no files selected");
        // }
    });
    </script>
    <script>
    $(document).ready(function() {
        $('form').submit(function(event) {
            const file = $('#dropify_img').prop('files')[0];
            if (file === undefined) {
                $('#invalid-feedback').show();
                event.preventDefault();
            } else {
                $('#invalid-feedback').hide();
            }
        });
        $('#dropify_img').change(function() {
            const file = $(this).prop('files')[0];
            if (file === undefined) {
                // Display the required message if no file selected
                $('#invalid-feedback').show();
            } else {
                // Hide the required message if a file is selected
                $('#invalid-feedback').hide();
            }
        });
    });
    </script>
</body>

</html>