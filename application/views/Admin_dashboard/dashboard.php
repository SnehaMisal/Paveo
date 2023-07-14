<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="../../assets/" data-template="vertical-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Paveo | Dashboard</title>
    <?php $this->load->view('link/css'); ?>

</head>

<body>
    <?php
    $y="";
    $z="";
    $x="dashboard"
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
                        <div class="row">
                            <div class="col-lg-3 col-md-4 mb-4 ">
                                <div
                                    class="card rounded-4 bg-gradient-rainbow bubble position-relative overflow-hidden ">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center justify-content-between mb-0">
                                            <div class="">
                                                <h4 class="mb-0 text-white">986</h4>
                                                <p class="mb-0 text-white">New Order</p>
                                            </div>
                                            <div class="fs-1 text-white">
                                                <i class="bx bx-cart"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 mb-4 ">
                                <div
                                    class="card rounded-4 bg-gradient-burning bubble position-relative overflow-hidden">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center justify-content-between mb-0">
                                            <div class="">
                                                <h4 class="mb-0 text-white">485</h4>
                                                <p class="mb-0 text-white">In-Process Order</p>
                                            </div>
                                            <div class="fs-1 text-white">
                                                <i class="bx bxs-hourglass-top"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 mb-4 ">
                                <div
                                    class="card rounded-4 bg-gradient-moonlit bubble position-relative overflow-hidden">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center justify-content-between mb-0">
                                            <div class="">
                                                <h4 class="mb-0 text-white">240</h4>
                                                <p class="mb-0 text-white">Completed Order</p>
                                            </div>
                                            <div class="fs-1 text-white">
                                                <i class='bx bx-like'></i>
                                                <!-- <i class="bx bx-like"></i> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 mb-4 ">
                                <div class="card rounded-4 bg-gradient-cosmic bubble position-relative overflow-hidden">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center justify-content-between mb-0">
                                            <div class="">
                                                <h4 class="mb-0 text-white">22</h4>
                                                <p class="mb-0 text-white">Cancelled Order</p>
                                            </div>
                                            <div class="fs-1 text-white">
                                                <i class="bx bx-x"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-lg-8 mb-4 ">
                                <div class="card">
                                    <div class="d-flex align-items-end row">
                                        <div class="col-sm-7">
                                            <div class="card-body">
                                                <h5 class="card-title text-primary">Congratulations John! 🎉</h5>
                                                <p class="mb-4">You have done <span class="fw-bold">72%</span> more
                                                    sales today. Check your revenue report.</p>

                                                <a href="javascript:;" class="btn btn-sm btn-label-primary">View
                                                    Revenue</a>
                                            </div>
                                        </div>
                                        <div class="col-sm-5 text-center text-sm-left">
                                            <div class="card-body pb-0 px-0 px-md-4">
                                                <img src="<?php echo base_url() ?>assets/images/man-with-laptop-light.png"
                                                    height="140" alt="View Badge User"
                                                    data-app-dark-img="<?php echo base_url() ?>assets/images/man-with-laptop-dark.png"
                                                    data-app-light-img="<?php echo base_url() ?>assets/images/man-with-laptop-light.html">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <div class="col-lg-2 col-md-6 col-6 ">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-title d-flex align-items-start justify-content-between">
                                            <div class="avatar flex-shrink-0">
                                                <span class="avatar-initial rounded bg-label-primary"><i
                                                        class="bx bx-user"></i></span>
                                            </div>
                                        </div>
                                        <span>Total Vendor</span>
                                        <h3 class="card-title text-nowrap mb-1">467K</h3>
                                        <small class="text-success fw-semibold"><i class='bx bx-up-arrow-alt'></i>
                                            +20 Today's</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-6 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-title d-flex align-items-start justify-content-between">
                                            <div class="avatar flex-shrink-0">
                                                <img src="<?php echo base_url() ?>/assets/images/cube-secondary.png"
                                                    alt="Credit Card" class="rounded">
                                            </div>
                                        </div>
                                        <span>TotalOrder</span>
                                        <h3 class="card-title text-nowrap mb-1">49</h3>
                                        <small class="text-success fw-semibold"><i class='bx bx-up-arrow-alt'></i>
                                            +28 Today's</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-6 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-title d-flex align-items-start justify-content-between">
                                            <div class="avatar flex-shrink-0">
                                                <img src="<?php echo base_url() ?>/assets/images/wallet-info.png"
                                                    alt="Credit Card" class="rounded">
                                            </div>
                                        </div>
                                        <span>Total Sales</span>
                                        <h3 class="card-title text-nowrap mb-1"><i class="bx bx-rupee"></i>4,679K</h3>
                                        <small class="text-success fw-semibold"><i class='bx bx-up-arrow-alt'></i>
                                            +20K Today's</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-6 ">
                                <div class="card">
                                    <div class="card-body pb-0">
                                        <span class="d-block fw-semibold mb-1">Revenue</span>
                                        <h3 class="card-title mb-1"><i class="bx bx-rupee"></i>276k</h3>
                                    </div>
                                    <div id="revenue_count" class="mb-3"></div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-6 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-title d-flex align-items-start justify-content-between">
                                            <div class="avatar flex-shrink-0">
                                                <img src="<?php echo base_url() ?>/assets/images/paypal.png"
                                                    alt="Credit Card" class="rounded">
                                            </div>
                                        </div>
                                        <span>Payments </span>
                                        <h3 class="card-title text-nowrap mb-1"><i class="bx bx-rupee"></i>4,679</h3>
                                        <small class="text-danger fw-semibold"><i class='bx bx-down-arrow-alt'></i>
                                        Pending</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-6 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                    <div id="orderStatisticsChart"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- pill table -->
                            <div class="col-md-12  mb-4 mb-lg-0">
                                <div class="card text-center">
                                    <div class="card-header d-flex align-items-center justify-content-between border-1">
                                        <div class="card-title mb-0">
                                            <h5 class="m-0 me-2 text-primary">Total Revenue</h5>
                                        </div>
                                        <ul class="nav nav-pills" role="tablist">
                                            <li class="nav-item">
                                                <button type="button" class="nav-link active" role="tab"
                                                    data-bs-toggle="tab" data-bs-target="#navs-pills-daily"
                                                    aria-controls="navs-pills-daily" aria-selected="true">Daily
                                                </button>
                                            </li>
                                            <li class="nav-item">
                                                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                                                    data-bs-target="#navs-pills-weekly"
                                                    aria-controls="navs-pills-weekly" aria-selected="false">Weekly
                                                </button>
                                            </li>
                                            <li class="nav-item">
                                                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                                                    data-bs-target="#navs-pills-monthly"
                                                    aria-controls="navs-pills-monthly" aria-selected="false">Monthly
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-content pt-0 pb-0">
                                        <div class="tab-pane fade show active" id="navs-pills-daily" role="tabpanel">
                                            <div class="row row-bordered g-0">
                                                <div class="col-md-8">
                                                    <div id="dailyRevenueChart" class="px-2"></div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="card-body">
                                                        <div class="text-center">
                                                            <span class="badge bg-label-primary mb-3">
                                                                <script>
                                                                document.write(new Date().toDateString())
                                                                </script>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div id="dailyRevenueGrowthChart"></div>
                                                    <div
                                                        class="d-flex px-xxl-4 px-lg-2 p-4 gap-xxl-3 gap-lg-1 gap-3 justify-content-between">
                                                        <div class="d-flex">
                                                            <div class="me-2">
                                                                <span class="badge bg-label-primary p-2"><i
                                                                        class="bx bx-wallet text-primary"></i></span>
                                                            </div>
                                                            <div class="d-flex flex-column">
                                                                <small>Today's Revenue</small>
                                                                <h6 class="mb-0"><i class="bx bx-rupee"></i>32.5k</h6>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex">
                                                            <div class="me-2">
                                                                <span class="badge bg-label-info p-2"><i
                                                                        class="bx bx-cart text-info"></i></span>
                                                            </div>
                                                            <div class="d-flex flex-column">
                                                                <small>Today's Orders</small>
                                                                <h6 class="mb-0">10</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="navs-pills-weekly" role="tabpanel">
                                            <div class="row row-bordered g-0">
                                                <div class="col-md-8">
                                                    <div id="weeklyRevenueChart" class="px-2"></div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="card-body">
                                                        <div class="text-center">
                                                            <span class="badge bg-label-primary mb-3"
                                                                id="pay_last_week">

                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div id="weeklyRevenueGrowthChart"></div>
                                                    <div
                                                        class="d-flex px-xxl-4 px-lg-2 p-4 gap-xxl-3 gap-lg-1 gap-3 justify-content-between">
                                                        <div class="d-flex">
                                                            <div class="me-2">
                                                                <span class="badge bg-label-primary p-2"><i
                                                                        class="bx bx-wallet text-primary"></i></span>
                                                            </div>
                                                            <div class="d-flex flex-column">
                                                                <small>Weekly Revenue</small>
                                                                <h6 class="mb-0"><i class="bx bx-rupee"></i>32.5k</h6>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex">
                                                            <div class="me-2">
                                                                <span class="badge bg-label-info p-2"><i
                                                                        class="bx bx-cart text-info"></i></span>
                                                            </div>
                                                            <div class="d-flex flex-column">
                                                                <small>Weekly Orders</small>
                                                                <h6 class="mb-0">10</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="navs-pills-monthly" role="tabpanel">
                                            <div class="row row-bordered g-0">
                                                <div class="col-md-8">
                                                    <div id="monthlyRevenueChart" class="px-2"></div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="card-body">
                                                        <div class="text-center">
                                                            <span class="badge bg-label-primary mb-3"
                                                                id="pay_this_month">
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div id="monthlyRevenueGrowthChart"></div>
                                                    <div
                                                        class="d-flex px-xxl-4 px-lg-2 p-4 gap-xxl-3 gap-lg-1 gap-3 justify-content-between">
                                                        <div class="d-flex">
                                                            <div class="me-2">
                                                                <span class="badge bg-label-primary p-2"><i
                                                                        class="bx bx-wallet text-primary"></i></span>
                                                            </div>
                                                            <div class="d-flex flex-column">
                                                                <small>Monthly Revenue</small>
                                                                <h6 class="mb-0"><i class="bx bx-rupee"></i>32.5k</h6>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex">
                                                            <div class="me-2">
                                                                <span class="badge bg-label-info p-2"><i
                                                                        class="bx bx-cart text-info"></i></span>
                                                            </div>
                                                            <div class="d-flex flex-column">
                                                                <small>Monthly Orders</small>
                                                                <h6 class="mb-0">10</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ pill table -->
                        </div>
                    </div>
                    <!-- / Content -->
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
    <!--  Revenue chart -->
    <script>
    var element = document.getElementById('revenue_count');
    var options = {
        chart: {
            height: 80,
            type: "area",
            toolbar: {
                show: !1
            },
            sparkline: {
                enabled: !0
            }
        },
        markers: {
            size: 6,
            colors: "transparent",
            strokeColors: "transparent",
            strokeWidth: 4,
            discrete: [{
                fillColor: config.colors.white,
                seriesIndex: 0,
                dataPointIndex: 6,
                strokeColor: config.colors.success,
                strokeWidth: 2,
                size: 6,
                radius: 8
            }],
            hover: {
                size: 7
            }
        },
        grid: {
            show: !1,
            padding: {
                right: 8
            }
        },
        colors: [config.colors.success],
        fill: {
            type: "gradient",
            gradient: {
                shadeIntensity: .8,
                opacityFrom: .8,
                opacityTo: .25,
                stops: [0, 85, 100]
            }
        },
        dataLabels: {
            enabled: !1
        },
        stroke: {
            width: 2,
            curve: "smooth"
        },
        series: [{
            data: [180, 175, 275, 140, 205, 190, 295]
        }],
        xaxis: {
            show: !1,
            lines: {
                show: !1
            },
            tooltip: {
                enabled: false
            },
            labels: {
                show: true
            },
            stroke: {
                width: 0
            },
            axisBorder: {
                show: !1
            }
        },
        yaxis: {
            stroke: {
                width: 0
            },
            show: !1
        }
    };
    var chart = new ApexCharts(element, options);
    chart.render();
    </script>
    <!--  All Sales Graph -->
    <script>
    var element = document.getElementById('orderStatisticsChart');
    var options = {
        chart: {
            height: 150,
            width: 130,
            type: "donut"
        },
        labels: ["Paid", "Pending"],
        series: [85, 15],
        colors: ['#008080', '#FFB1A3'],
        stroke: {
            width: 3,
            //colors: config.colors_dark.cardColor
        },
        dataLabels: {
            enabled: !1,
            formatter: function(o, r) {
                return parseInt(o) + "%"
            }
        },
        legend: {
            show: !1
        },
        grid: {
            padding: {
                top: 0,
                bottom: 0,
                right: 15
            }
        },
        plotOptions: {
            pie: {
                donut: {
                    size: "75%",
                    labels: {
                        show: !0,
                        value: {
                            fontSize: "1.5rem",
                            fontFamily: "Public Sans",
                            color: config.colors_dark.headingColor,
                            offsetY: -15,
                            formatter: function(o) {
                                return parseInt(o) + "%"
                            }
                        },
                        name: {
                            offsetY: 20,
                            fontFamily: "Public Sans"
                        },
                        total: {
                            show: !0,
                            fontSize: "0.8125rem",
                            color: config.colors_dark.bodyColor,
                            label: "Completed",
                            formatter: function(o) {
                                return "80%"
                            }
                        }
                    }
                }
            }
        }

    };
    var chart = new ApexCharts(element, options);
    chart.render();
    </script>
    <!-- Daily Revenue chart -->
    <script>
    var element = document.getElementById('dailyRevenueChart');
    var options = {
        series: [{
            name: "Earning Amount",
            data: [0, 80, 80, 60, 60, 45, 0, 80, 0, 80, 70, 90, 90, 80, 80, 1, 60, 60, 50, 60, 45, 90, 80,
                0, 0
            ]
        }, ],
        chart: {
            fontFamily: "inherit",
            type: "area",
            width: '100%',
            height: '300px',
            toolbar: {
                show: !1
            }
        },
        plotOptions: {},
        legend: {
            show: !1
        },
        dataLabels: {
            enabled: !1
        },
        fill: {
            type: "gradient",
            colors: ['#008080'],
            gradient: {
                shadeIntensity: 1,
                opacityFrom: 0.7,
                opacityTo: 0.2,
                stops: [15, 120, 100]
            }
        },
        stroke: {
            curve: "smooth",
            show: !0,
            width: 3,
            colors: ['#008080']
        },

        xaxis: {
            categories: ["", "1 AM", "2 AM", "3 AM", "4 AM", "5 AM", "6 AM", "7 AM", "8 AM", "9 AM", "10 AM",
                "11 AM", "12 PM", "13 PM", "14 PM", "15 PM", "16 PM",
                "17 PM", "18 PM", "19 PM", "20 PM", "21 PM", "22 PM", "23 PM", "24 PM"
            ],
            axisBorder: {
                show: !1
            },
            axisTicks: {
                show: !1
            },
            tickAmount: 6,
            labels: {
                rotate: 0,
                rotateAlways: !0,
                style: {
                    colors: '#A1A5B7',
                    fontSize: "12px"
                }
            },
            crosshairs: {
                position: "front",
                stroke: {
                    colors: '#008080',
                    width: 0,
                    dashArray: 3
                }
            },
            tooltip: {
                enabled: !0,
                formatter: void 0,
                offsetY: 0,
                style: {
                    colors: '#008080',
                    fontSize: "12px"
                }
            },
        },
        yaxis: {
            max: 120,
            min: 0,
            tickAmount: 6,
            labels: {
                style: {
                    colors: '#565674',
                    fontSize: "12px"
                }
            }
        },
        states: {
            normal: {
                filter: {
                    type: "none",
                    value: 0
                }
            },
            hover: {
                filter: {
                    type: "none",
                    value: 0
                }
            },
            active: {
                allowMultipleDataPointsSelection: !1,
                filter: {
                    type: "none",
                    value: 0
                }
            }
        },
        tooltip: {
            // fillSeriesColor: true,
            style: {
                fontSize: "12px"
            }
        },
        colors: ['#008080'],
        grid: {
            borderColor: '#E4E6EF',
            strokeDashArray: 4,
            yaxis: {
                lines: {
                    show: !0
                }
            }
        },
        markers: {
            strokeColor: '#008080',
            strokeWidth: 3
        },
    };
    var chart = new ApexCharts(element, options);
    chart.render();
    </script>
    <!-- Daily Revenue Growth chart -->
    <script>
    var element = document.getElementById('dailyRevenueGrowthChart');
    var options = {
        series: [78],
        labels: ["Growth"],
        chart: {
            height: 240,
            type: "radialBar"
        },
        plotOptions: {
            radialBar: {
                size: 150,
                offsetY: 10,
                startAngle: -150,
                endAngle: 150,
                hollow: {
                    size: "55%"
                },
                track: {
                    background: "#fff",
                    strokeWidth: "100%"
                },
                dataLabels: {
                    name: {
                        offsetY: 15,
                        color: "#697a8d",
                        fontSize: "15px",
                        fontWeight: "600",
                        fontFamily: "Public Sans"
                    },
                    value: {
                        offsetY: -25,
                        color: "#566a7f",
                        fontSize: "22px",
                        fontWeight: "500",
                        fontFamily: "Public Sans"
                    }
                }
            }
        },
        colors: [config.colors.primary],
        fill: {
            type: "gradient",
            gradient: {
                shade: "dark",
                shadeIntensity: .5,
                gradientToColors: [config.colors.primary],
                inverseColors: !0,
                opacityFrom: 1,
                opacityTo: .6,
                stops: [30, 70, 100]
            }
        },
        stroke: {
            dashArray: 5
        },
        grid: {
            padding: {
                top: -35,
                bottom: -10
            }
        },
        states: {
            hover: {
                filter: {
                    type: "none"
                }
            },
            active: {
                filter: {
                    type: "none"
                }
            }
        }
    };
    var chart = new ApexCharts(element, options);
    chart.render();
    </script>
    <!-- Weekly Revenue chart -->
    <script>
    var element = document.getElementById('weeklyRevenueChart');
    var options = {
        series: [{
            name: "Earning Amount",
            data: [0, 80, 80, 60, 60, 45, 0, 80]
        }, ],
        chart: {
            fontFamily: "inherit",
            type: "area",
            height: '300px',
            toolbar: {
                show: !1
            }
        },
        plotOptions: {},
        legend: {
            show: !1
        },
        dataLabels: {
            enabled: !1
        },
        fill: {
            type: "gradient",
            colors: ['#008080'],
            gradient: {
                shadeIntensity: 1,
                opacityFrom: 0.6,
                opacityTo: 0.2,
                stops: [15, 120, 10]
            }
        },
        stroke: {
            curve: "smooth",
            show: !0,
            width: 3,
            colors: ['#008080']
        },
        xaxis: {
            categories: ["", "Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
            axisBorder: {
                show: !1
            },
            axisTicks: {
                show: !1
            },
            tickAmount: 6,
            labels: {
                rotate: 0,
                rotateAlways: !0,
                style: {
                    colors: '#A1A5B7',
                    fontSize: "12px"
                }
            },
            crosshairs: {
                position: "front",
                stroke: {
                    colors: '#008080',
                    width: 0,
                    dashArray: 3
                }
            },
            tooltip: {
                enabled: !0,
                formatter: void 0,
                offsetY: 0,
                style: {
                    fontSize: "12px"
                }
            },
        },
        yaxis: {
            max: 120,
            min: 0,
            tickAmount: 6,
            labels: {
                style: {
                    colors: '#565674',
                    fontSize: "12px"
                }
            }
        },
        states: {
            normal: {
                filter: {
                    type: "none",
                    value: 0
                }
            },
            hover: {
                filter: {
                    type: "none",
                    value: 0
                }
            },
            active: {
                allowMultipleDataPointsSelection: !1,
                filter: {
                    type: "none",
                    value: 0
                }
            }
        },
        tooltip: {
            style: {
                fontSize: "12px"
            }
        },
        colors: ['#008080'],
        grid: {
            borderColor: '#E4E6EF',
            strokeDashArray: 4,
            yaxis: {
                lines: {
                    show: !0
                }
            }
        },
        markers: {
            strokeColor: '#008080',
            strokeWidth: 3
        },
    };
    var chart = new ApexCharts(element, options);
    chart.render();
    </script>
    <!-- Graph Payout last week date -->
    <script>
    $(function() {
        var start = moment().subtract(6, 'days');
        var end = moment();

        function cb_week(start, end) {
            $("#pay_last_week").html(start.format('D MMMM YYYY') + ' &nbsp - &nbsp ' + end.format(
                'D MMMM YYYY'));
        }
        cb_week(start, end);
    });
    </script>
    <!-- Graph this month -->
    <!-- Weekly Revenue Growth chart -->
    <script>
    var element = document.getElementById('weeklyRevenueGrowthChart');
    var options = {
        series: [20],
        labels: ["Growth"],
        chart: {
            height: 240,
            type: "radialBar"
        },
        plotOptions: {
            radialBar: {
                size: 150,
                offsetY: 10,
                startAngle: -150,
                endAngle: 150,
                hollow: {
                    size: "55%"
                },
                track: {
                    background: "#fff",
                    strokeWidth: "100%"
                },
                dataLabels: {
                    name: {
                        offsetY: 15,
                        color: "#697a8d",
                        fontSize: "15px",
                        fontWeight: "600",
                        fontFamily: "Public Sans"
                    },
                    value: {
                        offsetY: -25,
                        color: "#566a7f",
                        fontSize: "22px",
                        fontWeight: "500",
                        fontFamily: "Public Sans"
                    }
                }
            }
        },
        colors: [config.colors.primary],
        fill: {
            type: "gradient",
            gradient: {
                shade: "dark",
                shadeIntensity: .5,
                gradientToColors: [config.colors.primary],
                inverseColors: !0,
                opacityFrom: 1,
                opacityTo: .6,
                stops: [30, 70, 100]
            }
        },
        stroke: {
            dashArray: 5
        },
        grid: {
            padding: {
                top: -35,
                bottom: -10
            }
        },
        states: {
            hover: {
                filter: {
                    type: "none"
                }
            },
            active: {
                filter: {
                    type: "none"
                }
            }
        }
    };
    var chart = new ApexCharts(element, options);
    chart.render();
    </script>
    <!-- monthly Revenue chart -->
    <script>
    var element = document.getElementById('monthlyRevenueChart');
    var options = {
        series: [{
            name: "Earning Amount",
            data: [0, 80, 80, 60, 60, 45, 0, 80, 0, 80, 70, 90, 90, 80, 80, 1, 60, 60, 50, 60, 45, 90, 80,
                0, 0, 80, 0, 80, 70, 90, 90, 80
            ]
        }, ],
        chart: {
            fontFamily: "inherit",
            type: "area",
            height: '300px',
            toolbar: {
                show: !1
            }
        },
        plotOptions: {},
        legend: {
            show: !1
        },
        dataLabels: {
            enabled: !1
        },
        fill: {
            type: "gradient",
            colors: ['#008080'],
            gradient: {
                shadeIntensity: 1,
                opacityFrom: 0.6,
                opacityTo: 0.2,
                stops: [15, 120, 100]
            }
        },
        stroke: {
            curve: "smooth",
            show: !0,
            width: 3,
            colors: ['#008080']
        },
        xaxis: {
            categories: ["", "1 ", "2 ", "3 ", "4 ", "5 ", "6 ", "7 ", "8 ", "9 ", "10 ",
                "11 ", "12 ", "13 ", "14 ", "15 ", "16 ",
                "17 ", "18 ", "19 ", "20 ", "21", "22", "23", "24", "25", "26", "27", "28", "29", "30", "31"
            ],
            axisBorder: {
                show: !1
            },
            axisTicks: {
                show: !1
            },
            tickAmount: 6,
            labels: {
                rotate: 0,
                rotateAlways: !0,
                style: {
                    colors: '#A1A5B7',
                    fontSize: "12px"
                }
            },
            crosshairs: {
                position: "front",
                stroke: {
                    colors: '#008080',
                    width: 0,
                    dashArray: 3
                }
            },
            tooltip: {
                enabled: !0,
                formatter: void 0,
                offsetY: 0,
                style: {
                    colors: '#008080',
                    fontSize: "12px"
                }
            },
        },
        yaxis: {
            max: 120,
            min: 0,
            tickAmount: 6,
            labels: {
                style: {
                    colors: '#565674',
                    fontSize: "12px"
                }
            }
        },
        states: {
            normal: {
                filter: {
                    type: "none",
                    value: 0
                }
            },
            hover: {
                filter: {
                    type: "none",
                    value: 0
                }
            },
            active: {
                allowMultipleDataPointsSelection: !1,
                filter: {
                    type: "none",
                    value: 0
                }
            }
        },
        tooltip: {
            // fillSeriesColor: true,
            style: {
                fontSize: "12px"
            }
        },
        // colors: [KTUtil.getCssVariableValue("#008080")],
        colors: ['#008080'],
        grid: {
            borderColor: '#E4E6EF',
            strokeDashArray: 4,
            yaxis: {
                lines: {
                    show: !0
                }
            }
        },
        markers: {
            strokeColor: '#008080',
            strokeWidth: 3
        },
    };
    var chart = new ApexCharts(element, options);
    chart.render();
    </script>
    <!-- Monthly Revenue Growth chart -->
    <script>
    var element = document.getElementById('monthlyRevenueGrowthChart');
    var options = {
        series: [90],
        labels: ["Growth"],
        chart: {
            height: 240,
            type: "radialBar"
        },
        plotOptions: {
            radialBar: {
                size: 150,
                offsetY: 10,
                startAngle: -150,
                endAngle: 150,
                hollow: {
                    size: "55%"
                },
                track: {
                    background: "#fff",
                    strokeWidth: "100%"
                },
                dataLabels: {
                    name: {
                        offsetY: 15,
                        color: "#697a8d",
                        fontSize: "15px",
                        fontWeight: "600",
                        fontFamily: "Public Sans"
                    },
                    value: {
                        offsetY: -25,
                        color: "#566a7f",
                        fontSize: "22px",
                        fontWeight: "500",
                        fontFamily: "Public Sans"
                    }
                }
            }
        },
        colors: [config.colors.primary],
        fill: {
            type: "gradient",
            gradient: {
                shade: "dark",
                shadeIntensity: .5,
                gradientToColors: [config.colors.primary],
                inverseColors: !0,
                opacityFrom: 1,
                opacityTo: .6,
                stops: [30, 70, 100]
            }
        },
        stroke: {
            dashArray: 5
        },
        grid: {
            padding: {
                top: -35,
                bottom: -10
            }
        },
        states: {
            hover: {
                filter: {
                    type: "none"
                }
            },
            active: {
                filter: {
                    type: "none"
                }
            }
        }
    };
    var chart = new ApexCharts(element, options);
    chart.render();
    </script>
    <!-- Graph this month -->
    <script>
    $(function() {
        var start = moment();
        var end = moment();

        function cb_month(start, end) {
            $('#pay_this_month').html(start.format(' MMMM'));
        }
        cb_month(start, end);
    });
    </script>
</body>

</html>