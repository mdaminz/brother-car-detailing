<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Brother - Car Detailing and Coating</title>
    <!-- Icon -->
    <link rel="icon" href="img/brother-logo.jpg" type="image/x-icon" />

    <!-- PICK ONE OF THE STYLES BELOW -->
    <link href="admin/css/modern.css" rel="stylesheet">
    <!-- <link href="css/classic.css" rel="stylesheet"> -->
    <!-- <link href="css/dark.css" rel="stylesheet"> -->
    <!-- <link href="css/light.css" rel="stylesheet"> -->

    <!-- BEGIN SETTINGS -->
    <!-- You can remove this after picking a style -->

    <script src="admin/js/settings.js"></script>
    <!-- END SETTINGS -->
</head>

<body>


    <div class="splash active">
        <div class="splash-icon"></div>
    </div>

    <div class="wrapper">
        <nav id="sidebar" class="sidebar">
            <a class="sidebar-brand" href="index.html">
                <img style="width: 40px; margin-right: 10px;" src="img/brother-logo.jpg" alt="">
                Brother
            </a>
            <div class="sidebar-content">
                <div class="sidebar-user">
                    <img src="admin/img/avatars/avatar.jpg" class="img-fluid rounded-circle mb-2" alt="Linda Miller" />
                    <div class="font-weight-bold">{{ Auth::user()->name }}</div>
                    <small>Admin Dashboard</small>
                </div>

                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Main
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="/home">
                            <i class="align-middle mr-2 fas fa-fw fa-home"></i> <span
                                class="align-middle">Dashboard</span>
                        </a>
                    </li>
                    <li class="sidebar-header">
                        Data
                    </li>
                    <li class="sidebar-item">
                        <a href="#pages" data-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle mr-2 fas fa-fw fa-solid fa-car"></i> <span
                                class="align-middle">Services</span>
                        </a>
                        <ul id="pages" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                            <li class="sidebar-item"><a class="sidebar-link" href="{{url('create_service')}}">Add
                                    Service</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="{{(' view_service ')}}">View
                                    Service</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="#auth" data-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle mr-2 fas fa-fw fa-solid fa-calendar"></i> <span
                                class="align-middle">Bookings</span>
                        </a>
                        <ul id="auth" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                            <li class="sidebar-item"><a class="sidebar-link" href="{{url('view_bookings')}}">View
                                    Bookings</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="#ui" data-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle mr-2 fas fa-fw fa-envelope-open"></i> <span
                                class="align-middle">Message</span>
                        </a>
                        <ul id="ui" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                            <li class="sidebar-item"><a class="sidebar-link" href="{{url('view_message')}}">View
                                    Message</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="#documentation" data-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle mr-2 fas fa-fw fa-solid fa-user"></i> <span class="align-middle">User</span>
                        </a>
                        <ul id="documentation" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                            <li class="sidebar-item"><a class="sidebar-link" href="{{url('view_user')}}">View User</a>
                            </li>
                        </ul>
                    </li>
                    <!-- <li class="sidebar-item">
                        <a href="#layouts" data-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle mr-2 fas fa-fw fa-desktop"></i> <span
                                class="align-middle">Layouts</span>
                        </a>
                        <ul id="layouts" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                            <li class="sidebar-item"><a class="sidebar-link" href="layouts-sidebar-left.html">Left
                                    Sidebar</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="layouts-sidebar-right.html">Right
                                    Sidebar</a></li>
                        </ul>
                    </li> -->
                </ul>
            </div>
        </nav>
        <div class="main">
            <nav class="navbar navbar-expand navbar-theme">
                <a class="sidebar-toggle d-flex mr-2">
                    <i class="hamburger align-self-center"></i>
                </a>


                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown active">
                            <a class="nav-link dropdown-toggle position-relative" href="#" id="messagesDropdown"
                                data-toggle="dropdown">
                                <i class="align-middle fas fa-envelope-open"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right py-0"
                                aria-labelledby="messagesDropdown">
                                <div class="dropdown-menu-header">
                                    <div class="position-relative">
                                        4 New Messages
                                    </div>
                                </div>
                                <div class="list-group">
                                    <a href="#" class="list-group-item">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-2">
                                                <img src="admin/img/avatars/avatar-5.jpg"
                                                    class="avatar img-fluid rounded-circle" alt="Michelle Bilodeau">
                                            </div>
                                            <div class="col-10 pl-2">
                                                <div class="text-dark">Michelle Bilodeau</div>
                                                <div class="text-muted small mt-1">Nam pretium turpis et arcu. Duis arcu
                                                    tortor.</div>
                                                <div class="text-muted small mt-1">5m ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-2">
                                                <img src="admin/img/avatars/avatar-3.jpg"
                                                    class="avatar img-fluid rounded-circle" alt="Kathie Burton">
                                            </div>
                                            <div class="col-10 pl-2">
                                                <div class="text-dark">Kathie Burton</div>
                                                <div class="text-muted small mt-1">Pellentesque auctor neque nec urna.
                                                </div>
                                                <div class="text-muted small mt-1">30m ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-2">
                                                <img src="img/avatars/avatar-2.jpg"
                                                    class="avatar img-fluid rounded-circle" alt="Alexander Groves">
                                            </div>
                                            <div class="col-10 pl-2">
                                                <div class="text-dark">Alexander Groves</div>
                                                <div class="text-muted small mt-1">Curabitur ligula sapien euismod
                                                    vitae.</div>
                                                <div class="text-muted small mt-1">2h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-2">
                                                <img src="admin/img/avatars/avatar-4.jpg"
                                                    class="avatar img-fluid rounded-circle" alt="Daisy Seger">
                                            </div>
                                            <div class="col-10 pl-2">
                                                <div class="text-dark">Daisy Seger</div>
                                                <div class="text-muted small mt-1">Aenean tellus metus, bibendum sed,
                                                    posuere ac, mattis non.</div>
                                                <div class="text-muted small mt-1">5h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="dropdown-menu-footer">
                                    <a href="#" class="text-muted">Show all messages</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown ml-lg-2">
                            <a class="nav-link dropdown-toggle position-relative" href="#" id="alertsDropdown"
                                data-toggle="dropdown">
                                <i class="align-middle fas fa-bell"></i>
                                <span class="indicator"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right py-0"
                                aria-labelledby="alertsDropdown">
                                <div class="dropdown-menu-header">
                                    4 New Notifications
                                </div>
                                <div class="list-group">
                                    <a href="#" class="list-group-item">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-2">
                                                <i class="ml-1 text-danger fas fa-fw fa-bell"></i>
                                            </div>
                                            <div class="col-10">
                                                <div class="text-dark">Update completed</div>
                                                <div class="text-muted small mt-1">Restart server 12 to complete the
                                                    update.</div>
                                                <div class="text-muted small mt-1">2h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-2">
                                                <i class="ml-1 text-warning fas fa-fw fa-envelope-open"></i>
                                            </div>
                                            <div class="col-10">
                                                <div class="text-dark">Lorem ipsum</div>
                                                <div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate
                                                    hendrerit et.</div>
                                                <div class="text-muted small mt-1">6h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-2">
                                                <i class="ml-1 text-primary fas fa-fw fa-building"></i>
                                            </div>
                                            <div class="col-10">
                                                <div class="text-dark">Login from 192.186.1.1</div>
                                                <div class="text-muted small mt-1">8h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-2">
                                                <i class="ml-1 text-success fas fa-fw fa-bell-slash"></i>
                                            </div>
                                            <div class="col-10">
                                                <div class="text-dark">New connection</div>
                                                <div class="text-muted small mt-1">Anna accepted your request.</div>
                                                <div class="text-muted small mt-1">12h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="dropdown-menu-footer">
                                    <a href="#" class="text-muted">Show all notifications</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown ml-lg-2">
                            <a class="nav-link dropdown-toggle position-relative" href="#" id="userDropdown"
                                data-toggle="dropdown">
                                <i class="align-middle fas fa-cog"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="{{ route('profile.show') }}"><i
                                        class="align-middle mr-1 fas fa-fw fa-user"></i>
                                    View Profile</a>
                                <div class="dropdown-divider"></div>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                        this.closest('form').submit(); " role="button">
                                        <i class="align-middle mr-1 fas fa-fw fa-arrow-alt-circle-right"></i>

                                        {{ __('Sign Out') }}
                                    </a>

                                </form>
                            </div>
                        </li>
                    </ul>
                </div>

            </nav>
            <div class="wrapper">
                <div class="main">
                    <main class="content">
                        <div class="container-fluid">
                            @yield('content')
                        </div>
                    </main>
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-muted">
                        <div class="col-8 text-left">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a class="text-muted" href="#">Support</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-muted" href="#">Privacy</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-muted" href="#">Terms of Service</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-muted" href="#">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-4 text-right">
                            <p class="mb-0">
                                &copy; 2024 - <a href="dashboard-default.html" class="text-muted">Brother - Car
                                    Detailing & Coating</a>
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <svg width="0" height="0" style="position:absolute">
        <defs>
            <symbol viewBox="0 0 512 512" id="ion-ios-pulse-strong">
                <path
                    d="M448 273.001c-21.27 0-39.296 13.999-45.596 32.999h-38.857l-28.361-85.417a15.999 15.999 0 0 0-15.183-10.956c-.112 0-.224 0-.335.004a15.997 15.997 0 0 0-15.049 11.588l-44.484 155.262-52.353-314.108C206.535 54.893 200.333 48 192 48s-13.693 5.776-15.525 13.135L115.496 306H16v31.999h112c7.348 0 13.75-5.003 15.525-12.134l45.368-182.177 51.324 307.94c1.229 7.377 7.397 11.92 14.864 12.344.308.018.614.028.919.028 7.097 0 13.406-3.701 15.381-10.594l49.744-173.617 15.689 47.252A16.001 16.001 0 0 0 352 337.999h51.108C409.973 355.999 427.477 369 448 369c26.511 0 48-22.492 48-49 0-26.509-21.489-46.999-48-46.999z">
                </path>
            </symbol>
        </defs>
    </svg>
    <script src="admin/js/app.js"></script>

    <script>
        $(function () {
            // Line chart
            new Chart(document.getElementById("chartjs-dashboard-line"), {
                type: 'line',
                data: {
                    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                    datasets: [{
                        label: "Orders",
                        fill: true,
                        backgroundColor: window.theme.primary,
                        borderColor: window.theme.primary,
                        borderWidth: 2,
                        data: [3, 2, 3, 5, 6, 5, 4, 6, 9, 10, 8, 9]
                    },
                    {
                        label: "Sales ($)",
                        fill: true,
                        backgroundColor: "rgba(0, 0, 0, 0.05)",
                        borderColor: "rgba(0, 0, 0, 0.05)",
                        borderWidth: 2,
                        data: [5, 4, 10, 15, 16, 12, 10, 13, 20, 22, 18, 20]
                    }
                    ]
                },
                options: {
                    maintainAspectRatio: false,
                    legend: {
                        display: false
                    },
                    tooltips: {
                        intersect: false
                    },
                    hover: {
                        intersect: true
                    },
                    plugins: {
                        filler: {
                            propagate: false
                        }
                    },
                    elements: {
                        point: {
                            radius: 0
                        }
                    },
                    scales: {
                        xAxes: [{
                            reverse: true,
                            gridLines: {
                                color: "rgba(0,0,0,0.0)"
                            }
                        }],
                        yAxes: [{
                            ticks: {
                                stepSize: 5
                            },
                            display: true,
                            gridLines: {
                                color: "rgba(0,0,0,0)",
                                fontColor: "#fff"
                            }
                        }]
                    }
                }
            });
        });
    </script>
    <script>
        $(function () {
            // Bar chart
            new Chart(document.getElementById("chartjs-dashboard-bar-alt"), {
                type: "bar",
                data: {
                    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                    datasets: [{
                        label: "Last year",
                        backgroundColor: window.theme.primary,
                        borderColor: window.theme.primary,
                        hoverBackgroundColor: window.theme.primary,
                        hoverBorderColor: window.theme.primary,
                        data: [54, 67, 41, 55, 62, 45, 55, 73, 60, 76, 48, 79],
                        barPercentage: .75,
                        categoryPercentage: .5
                    }, {
                        label: "This year",
                        backgroundColor: "#E8EAED",
                        borderColor: "#E8EAED",
                        hoverBackgroundColor: "#E8EAED",
                        hoverBorderColor: "#E8EAED",
                        data: [69, 66, 24, 48, 52, 51, 44, 53, 62, 79, 51, 68],
                        barPercentage: .75,
                        categoryPercentage: .5
                    }]
                },
                options: {
                    maintainAspectRatio: false,
                    legend: {
                        display: false
                    },
                    scales: {
                        yAxes: [{
                            gridLines: {
                                display: false
                            },
                            stacked: false,
                            ticks: {
                                stepSize: 20
                            }
                        }],
                        xAxes: [{
                            stacked: false,
                            gridLines: {
                                color: "transparent"
                            }
                        }]
                    }
                }
            });
        });
    </script>
    <script>
        $(function () {
            $("#usa_map").vectorMap({
                map: "us_aea",
                backgroundColor: "transparent",
                zoomOnScroll: false,
                normalizeFunction: "polynomial",
                hoverOpacity: .7,
                hoverColor: false,
                regionStyle: {
                    initial: {
                        fill: "#DCE3E8"
                    }
                },
                markerStyle: {
                    initial: {
                        "r": 9,
                        "fill": window.theme.primary,
                        "fill-opacity": .9,
                        "stroke": "#fff",
                        "stroke-width": 7,
                        "stroke-opacity": .4
                    },
                    hover: {
                        "stroke": "#fff",
                        "fill-opacity": 1,
                        "stroke-width": 1.5
                    }
                },
                markers: [{
                    latLng: [37.77, -122.41],
                    name: "San Francisco: 375"
                }, {
                    latLng: [40.71, -74.00],
                    name: "New York: 350"
                }, {
                    latLng: [39.09, -94.57],
                    name: "Kansas City: 250"
                }, {
                    latLng: [36.16, -115.13],
                    name: "Las Vegas: 275"
                }, {
                    latLng: [32.77, -96.79],
                    name: "Dallas: 225"
                }]
            });
            setTimeout(function () {
                $(window).trigger('resize');
            }, 350)
        })
    </script>
    <script>
        $(function () {
            $('#datatables-dashboard-products').DataTable({
                pageLength: 6,
                lengthChange: false,
                bFilter: false,
                autoWidth: false
            });
        });
    </script>

    <script>
        $(function () {
            // Datatables basic
            $('#datatables-basic').DataTable({
                responsive: true
            });
        });
    </script>

</body>

</html>