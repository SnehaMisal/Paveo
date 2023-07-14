// "use strict";
! function() {
    var e = [].slice.call(document.querySelectorAll(".card-collapsible")),
        l = [].slice.call(document.querySelectorAll(".card-expand")),
        s = [].slice.call(document.querySelectorAll(".card-close")),
        t = document.getElementById("sortable-4");
    e && e.map(function(l) { l.addEventListener("click", e => { e.preventDefault(), new bootstrap.Collapse(l.closest(".card").querySelector(".collapse")), l.closest(".card-header").classList.toggle("collapsed"), Helpers._toggleClass(l.firstElementChild, "bx-chevron-down", "bx-chevron-up") }) }), l && l.map(function(l) { l.addEventListener("click", e => { e.preventDefault(), Helpers._toggleClass(l.firstElementChild, "bx-fullscreen", "bx-exit-fullscreen"), l.closest(".card").classList.toggle("card-fullscreen") }) }), document.addEventListener("keyup", e => { e.preventDefault(), "Escape" === e.key && (e = document.querySelector(".card-fullscreen")) && (Helpers._toggleClass(e.querySelector(".card-expand").firstChild, "bx-fullscreen", "bx-exit-fullscreen"), e.classList.toggle("card-fullscreen")) }), s && s.map(function(l) { l.addEventListener("click", e => { e.preventDefault(), l.closest(".card").classList.add("d-none") }) }), null !== t && Sortable.create(t, { animation: 500, handle: ".card" })
}(), $(function() {
    var e = $(".card-reload");
    e.length && e.on("click", function(e) {
        e.preventDefault();
        var l = $(this);
        l.closest(".card").block({ message: '<div class="sk-fold sk-primary"><div class="sk-fold-cube"></div><div class="sk-fold-cube"></div><div class="sk-fold-cube"></div><div class="sk-fold-cube"></div></div><h5>LOADING...</h5>', css: { backgroundColor: "transparent", border: "0" }, overlayCSS: { backgroundColor: $("html").hasClass("dark-style") ? "#000" : "#fff", opacity: .55 } }), setTimeout(function() { l.closest(".card").unblock(), l.closest(".card").find(".card-alert").length && l.closest(".card").find(".card-alert").html('<div class="alert alert-danger alert-dismissible fade show" role="alert"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button><strong>Holy grail!</strong> Your success/error message here.</div>') }, 2500)
    })
});
(function() {
    'use strict';
    window.addEventListener('load', function() {
        var forms = document.getElementsByClassName('needs-validation');
        var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();
$(document).ready(function() {
        // Datatable Js
        $('#data_table').DataTable({
            "paging": false,
            "info": false,
            "searching": false
        });
        // Dropify image
        $('.dropify').dropify();
        jQuery(".product-box").length > 0 && $(".product-box").lightGallery({
            loop: !0,
            thumbnail: !0,
            exThumbImage: "data-exthumbimage",
            download: false,
            share: false,
        });
        // Image preview
        $(".image-box").click(function(event) {
            var previewImg = $(this).children("img");

            $(this)
                .siblings()
                .children("input")
                .trigger("click");

            $(this)
                .siblings()
                .children("input")
                .change(function() {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        var urll = e.target.result;
                        $(previewImg).attr("src", urll);
                        previewImg.parent().css("background", "#efefef");
                        previewImg.show();
                        previewImg.siblings("p").hide();
                    };
                    reader.readAsDataURL(this.files[0]);
                });
        });
    })
    // Magnify Image
    // $('.image-popup-vertical-fit').magnificPopup({
    //     type: 'image',
    //     mainClass: 'mfp-with-zoom',
    //     gallery: {
    //         enabled: true
    //     },

//     zoom: {
//         enabled: true,

//         duration: 300, // duration of the effect, in milliseconds
//         easing: 'ease-in-out', // CSS transition easing function

//         opener: function(openerElement) {

//             return openerElement.is('img') ? openerElement : openerElement.find('img');
//         }
//     }

// });
// Active Sidemenu
// $(".aside-menu .menu-item a").each(function() {
//     var pageUrl = window.location.href.split(/[?#]/)[0];
//     if (this.href == pageUrl) {
//         $(this).addClass("active");
//         $(this).parent().addClass("active"); // add active to li of the current link
//         // $(this).parent().parent().prev().addClass("active"); // add active class to an anchor
//         $(this).parent().parent().prev().click(); // click the item to make it drop
//         $(this).parent().parent().parent().parent().prev().click();
//         // $('.aside-menu .menu-item.active').parents('li').addClass('active');
//     }
// });

// Search Table
// $("#myInput").keyup(function() {
//     var searchTerm = $("#myInput").val();
//     var listItem = $('#myTable tbody').children('tr');
//     var searchSplit = searchTerm.replace(/ /g, "'):containsi('")

//     $.extend($.expr[':'], {
//         'containsi': function(elem, i, match, array) {
//             return (elem.textContent || elem.innerText || '').toLowerCase().indexOf(
//                 (match[3] || "").toLowerCase()) >= 0;
//         }
//     });

//     $("#myTable tbody tr").not(":containsi('" + searchSplit + "')").each(function(e) {
//         $(this).attr('visible', 'false');
//     });

//     $("#myTable tbody tr:containsi('" + searchSplit + "')").each(function(e) {
//         $(this).attr('visible', 'true');
//     });

//     var jobCount = $('#myTable tbody tr[visible="true"]').length;

//     if (jobCount == '0') {
//         $('#founder').show();
//     } else {
//         $('#founder').hide();
//     }
// });

// $('.dropify').dropify();