"use strict";
var KTAppEcommerceSaveProduct = (function() {
    const t = () => {
        document.querySelectorAll('[data-kt-ecommerce-catalog-add-product="product_option"]').forEach((e) => {
            $(e).hasClass("select2-hidden-accessible") || $(e).select2({ minimumResultsForSearch: -1 });
        });
    };
    return {
        init: function() {
            var o, a;
            ["#kt_ecommerce_add_product_description", "#kt_ecommerce_add_product_meta_description"].forEach((e) => {
                    let t = document.querySelector(e);
                    t && (t = new Quill(e, {
                        modules: {
                            toolbar: [
                                [{ header: [1, 2, !1] }],
                                ["bold", "italic", "underline"],
                                ["image", "code-block"]
                            ]
                        },
                        placeholder: "Type your text here...",
                        theme: "snow"
                    }));
                }),
                (o = document.querySelector("#kt_ecommerce_add_product_discount_slider")),
                (a = document.querySelector("#kt_ecommerce_add_product_discount_label")),
                noUiSlider.create(o, { start: [10], connect: !0, range: { min: 1, max: 100 } }),
                o.noUiSlider.on("update", function(e, t) {
                    (a.innerHTML = Math.round(e[t])), t && (a.innerHTML = Math.round(e[t]));
                }),
                t(),
                (() => {
                    const e = document.querySelectorAll('input[name="discount_option"]'),
                        t = document.getElementById("kt_ecommerce_add_product_discount_percentage"),
                        o = document.getElementById("kt_ecommerce_add_product_discount_fixed");
                    e.forEach((e) => {
                        e.addEventListener("change", (e) => {
                            switch (e.target.value) {
                                case "2":
                                    t.classList.remove("d-none"), o.classList.add("d-none");
                                    break;
                                case "3":
                                    t.classList.add("d-none"), o.classList.remove("d-none");
                                    break;
                                default:
                                    t.classList.add("d-none"), o.classList.add("d-none");
                            }
                        });
                    });
                })();
        },
    };
})();
KTUtil.onDOMContentLoaded(function() {
    KTAppEcommerceSaveProduct.init();
});