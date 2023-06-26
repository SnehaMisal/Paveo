"use strict";
var KTAppEcommerceReportCustomerOrders = (function() {
    var t, e;
    return {
        init: function() {
            (t = document.querySelector("#myTable")) &&
            (t.querySelectorAll("tbody tr").forEach((t) => {
                    const e = t.querySelectorAll("td"),
                        r = moment(e[3].innerHTML, "DD MMM YYYY, LT").format();
                    e[3].setAttribute("data-order", r);
                }),
                (e = $(t).DataTable({ paging: false, info: false, order: false, })),
                (() => {
                    const e = "Vendor Sales Report";
                    new $.fn.dataTable.Buttons(t, {
                            buttons: [
                                { extend: "excelHtml5", title: e },
                            ],
                        })
                        .container()
                        .appendTo($("#vendor_report")),
                        document.querySelectorAll("#vendor_report_menu").forEach((t) => {
                            t.addEventListener("click", (t) => {
                                t.preventDefault();
                                const e = t.target.getAttribute("data-kt-ecommerce-export");
                                document.querySelector(".dt-buttons .buttons-" + e).click();
                            });
                        });
                })());
        },
    };
})();
KTUtil.onDOMContentLoaded(function() {
    KTAppEcommerceReportCustomerOrders.init();
});