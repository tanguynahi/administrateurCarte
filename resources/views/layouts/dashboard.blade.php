<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Plateforme des personnels de BMI ">
    <meta name="keyword" content="Plateforme des personnels de BMI-WFS">
    <link rel="icon" href="{{asset('assets/img/favicon.ico')}}" type="image/x-icon"> <!-- Favicon-->
    <title>{{ $title ?? 'Tableau de bord' }}</title>
    <!-- Application vendor css url -->
    {{-- <link rel="stylesheet" href="{{asset('assets/cssbundle/dataTables.min.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('assets/cssbundle/daterangepicker.min.css')}}">
    <!-- project css file  -->
    <link rel="stylesheet" href="{{asset('assets/css/luno-style.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/mystyle.css') }}">
    <!-- Jquery Core Js -->
    <script src="{{asset('assets/js/plugins.js')}}"></script>
</head>

<body class="layout-1" data-luno="theme-indigo">
    <!-- start: sidebar -->
    @include('partials.siderbar')
    <!-- start: body area -->
    <div class="wrapper">
        @include('partials.hearder')
        <div class="page-body px-xl-4 px-sm-2 px-0 py-lg-2 py-1 mt-0 mt-lg-3">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
        @include('partials.footer')
    </div>

    <script src="{{asset('assets/js/theme.js')}}"></script>
    <!-- Plugin Js -->
    <script src="{{asset('assets/js/bundle/apexcharts.bundle.js')}}"></script>
    <script src="{{asset('assets/js/bundle/dataTables.bundle.js')}}"></script>
    <!-- Vendor Script -->
    <script src="{{asset('assets/js/bundle/apexcharts.bundle.js')}}"></script>


    {{-- @include('sweetalert::alert') --}}
    <script>
        // project data table
        $('.myDataTable').addClass('nowrap');
        $('.myDataTable').dataTable({
            responsive: true,
            searching: false,
            paging: false,
            ordering: false,
            info: false,
        });
        $('a[data-bs-toggle="tab"]').on('shown.bs.tab', function(e) {
            $($.fn.dataTable.tables(true)).DataTable().columns.adjust().responsive.recalc();
        });
        // top sparklines
        var randomizeArray = function(arg) {
            var array = arg.slice();
            var currentIndex = array.length,
                temporaryValue, randomIndex;
            while (0 !== currentIndex) {
                randomIndex = Math.floor(Math.random() * currentIndex);
                currentIndex -= 1;
                temporaryValue = array[currentIndex];
                array[currentIndex] = array[randomIndex];
                array[randomIndex] = temporaryValue;
            }
            return array;
        }
        // data for the sparklines that appear below header area
        var sparklineData = [47, 45, 54, 38, 56, 24, 65, 31];
        // topb big chart
        var spark5 = {
            chart: {
                type: 'line',
                height: 50,
                sparkline: {
                    enabled: true
                },
            },
            stroke: {
                width: 3
            },
            colors: ['var(--chart-color4)'],
            series: [{
                data: randomizeArray(sparklineData)
            }],
            series: [{
                data: randomizeArray(sparklineData)
            }],
        }
        var spark5 = new ApexCharts(document.querySelector("#apexspark5"), spark5);
        spark5.render();
        // Total Revenue
        var options = {
            chart: {
                height: 300,
                type: 'line',
                toolbar: {
                    show: false,
                },
            },
            colors: ['var(--chart-color1)', 'var(--chart-color2)'],
            series: [{
                name: 'Fees',
                type: 'column',
                data: [440, 505, 414, 671, 227, 413, 201, 352, 752, 320, 257, 160]
            }, {
                name: 'Donation',
                type: 'line',
                data: [23, 42, 35, 27, 43, 22, 17, 31, 22, 22, 12, 16]
            }],
            stroke: {
                width: [0, 4]
            },
            // labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            labels: ['01 Jan 2001', '02 Jan 2001', '03 Jan 2001', '04 Jan 2001', '05 Jan 2001', '06 Jan 2001',
                '07 Jan 2001', '08 Jan 2001', '09 Jan 2001', '10 Jan 2001', '11 Jan 2001', '12 Jan 2001'
            ],
            xaxis: {
                type: 'datetime'
            },
            yaxis: [{
                title: {
                    text: 'Fees',
                },
            }, {
                opposite: true,
                title: {
                    text: 'Donation'
                }
            }]
        }
        var chart = new ApexCharts(document.querySelector("#apex-TotalRevenue"), options);
        chart.render();
        // Students by Level
        var options = {
            chart: {
                height: 180,
                type: 'bar',
                toolbar: {
                    show: false,
                },
            },
            colors: ['var(--chart-color1)'],
            grid: {
                yaxis: {
                    lines: {
                        show: false,
                    }
                },
                padding: {
                    top: 0,
                    right: 0,
                    bottom: 0,
                    left: 0
                },
            },
            plotOptions: {
                bar: {
                    horizontal: true,
                }
            },
            dataLabels: {
                enabled: false
            },
            series: [{
                data: [400, 430, 248, 470, ]
            }],
            xaxis: {
                categories: ['Undergraduate', 'Masters', 'Doctoral', 'Post-Bac'],
            }
        }
        var chart = new ApexCharts(document.querySelector("#apex-StudentsbyLevel"), options);
        chart.render();
        // Students by College
        var options = {
            chart: {
                height: 180,
                type: 'bar',
                toolbar: {
                    show: false,
                },
            },
            colors: ['var(--chart-color2)'],
            grid: {
                yaxis: {
                    lines: {
                        show: false,
                    }
                },
                padding: {
                    top: 0,
                    right: 0,
                    bottom: 0,
                    left: 0
                },
            },
            plotOptions: {
                bar: {
                    horizontal: true,
                }
            },
            dataLabels: {
                enabled: false
            },
            series: [{
                data: [400, 430, 248, 470, ]
            }],
            xaxis: {
                categories: ['Business', 'Sciences', 'Arts', 'Architecture'],
            }
        }
        var chart = new ApexCharts(document.querySelector("#apex-StudentsbyCollege"), options);
        chart.render();
        // Device use by Student
        var options = {
            chart: {
                height: 270,
                type: 'donut',
            },
            dataLabels: {
                enabled: false,
            },
            legend: {
                position: 'top',
                horizontalAlign: 'center',
                show: false,
            },
            colors: ['var(--chart-color1)', 'var(--chart-color2)', 'var(--chart-color3)'],
            series: [55, 35, 10],
            responsive: [{
                breakpoint: 480,
                options: {
                    chart: {
                        width: 200
                    },
                    legend: {
                        position: 'bottom'
                    }
                }
            }]
        }
        var chart = new ApexCharts(document.querySelector("#apex-DeviceusebyStudent"), options);
        chart.render();
    </script>
    <!-- Toast script -->
    <script>
        @if (Session::has('success'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true,
                "positionClass": "toast-top-center",
                "showDuration": "200",
                "hideDuration": "1000",
                "timeOut": "3000",
            }
            toastr.success("{{ session('success') }}");
        @endif

        @if (Session::has('error'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true,
                "positionClass": "toast-top-center",
                "showDuration": "200",
                "hideDuration": "1000",
                "timeOut": "3000",
            }
            toastr.error("{{ session('error') }}");
        @endif

        @if (Session::has('info'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true,
                "positionClass": "toast-top-center",
            }
            toastr.info("{{ session('info') }}");
        @endif

        @if (Session::has('warning'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true,
                "positionClass": "toast-top-center",
            }
            toastr.warning("{{ session('warning') }}");
        @endif
    </script>


</body>

</html>
