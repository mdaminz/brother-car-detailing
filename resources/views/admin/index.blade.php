@extends('admin.adminbase')

@section('content')
<div class="splash active">
    <div class="splash-icon"></div>
</div>



<div class="header">
    <h1 class="header-title">
        Welcome Back {{ Auth::user()->name }}!
    </h1>
    <p class="header-subtitle">Your Analytics Overview Down Below</p>
</div>

<div class="row">
    <div class="col-md-6 col-lg-3 col-xl">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col mt-0">
                        <h5 class="card-title">Income</h5>
                    </div>

                    <div class="col-auto">
                        <div class="avatar">
                            <div class="avatar-title rounded-circle bg-primary-dark">
                                <i class="align-middle" data-feather="dollar-sign"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <h1 class="display-5 mt-1 mb-3">RM 25.300</h1>
                <div class="mb-0">
                    <span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -2.65%
                    </span>
                    Less sales than usual
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3 col-xl">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col mt-0">
                        <h5 class="card-title">Total Bookings</h5>
                    </div>

                    <div class="col-auto">
                        <div class="avatar">
                            <div class="avatar-title rounded-circle bg-primary-dark">
                                <i class="align-middle" data-feather="shopping-cart"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <h1 class="display-5 mt-1 mb-3"></h1>
                <div class="mb-0">
                    <span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 5.50%
                    </span>
                    More visitors than usual
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3 col-xl">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col mt-0">
                        <h5 class="card-title">Activity</h5>
                    </div>

                    <div class="col-auto">
                        <div class="avatar">
                            <div class="avatar-title rounded-circle bg-primary-dark">
                                <i class="align-middle" data-feather="activity"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <h1 class="display-5 mt-1 mb-3">29.232</h1>
                <div class="mb-0">
                    <span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -4.25%
                    </span>
                    More earnings than usual
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3 col-xl">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col mt-0">
                        <h5 class="card-title">Revenue</h5>
                    </div>

                    <div class="col-auto">
                        <div class="avatar">
                            <div class="avatar-title rounded-circle bg-primary-dark">
                                <i class="align-middle" data-feather="dollar-sign"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <h1 class="display-5 mt-1 mb-3">$83.300</h1>
                <div class="mb-0">
                    <span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 8.35%
                    </span>
                    More earnings than usual
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12 col-md-6 col-xxl-4 d-flex">
        <div class="card flex-fill w-100">
            <div class="card-header">
                <div class="card-actions float-right">
                    <a href="#" class="mr-1">
                        <i class="align-middle" data-feather="refresh-cw"></i>
                    </a>
                    <div class="d-inline-block dropdown show">
                        <a href="#" data-toggle="dropdown" data-display="static">
                            <i class="align-middle" data-feather="more-vertical"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
                <h5 class="card-title mb-0">Sales by State</h5>
            </div>
            <div class="card-body px-4">
                <div id="usa_map" style="height:294px;"></div>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-xxl-8 d-flex">
        <div class="card flex-fill w-100">
            <div class="card-header">
                <div class="card-actions float-right">
                    <a href="#" class="mr-1">
                        <i class="align-middle" data-feather="refresh-cw"></i>
                    </a>
                    <div class="d-inline-block dropdown show">
                        <a href="#" data-toggle="dropdown" data-display="static">
                            <i class="align-middle" data-feather="more-vertical"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
                <h5 class="card-title mb-0">Total Revenue</h5>
            </div>
            <div class="card-body py-3">
                <div class="chart chart-md">
                    <canvas id="chartjs-dashboard-line"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12 col-lg-8 d-flex">
        <div class="card flex-fill">
            <div class="card-header">
                <div class="card-actions float-right">
                    <a href="#" class="mr-1">
                        <i class="align-middle" data-feather="refresh-cw"></i>
                    </a>
                    <div class="d-inline-block dropdown show">
                        <a href="#" data-toggle="dropdown" data-display="static">
                            <i class="align-middle" data-feather="more-vertical"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
                <h5 class="card-title mb-0">Top Selling Products</h5>
            </div>
            <table id="datatables-dashboard-products" class="table table-striped my-0">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th class="d-none d-xl-table-cell">License</th>
                        <th class="d-none d-xl-table-cell">Technology</th>
                        <th class="d-none d-xl-table-cell">Tickets</th>
                        <th>Sales</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>AppStack</td>
                        <td class="d-none d-xl-table-cell">Single license</td>
                        <td><span class="badge badge-success">HTML</span></td>
                        <td class="d-none d-xl-table-cell">50</td>
                        <td class="d-none d-xl-table-cell">720</td>
                    </tr>
                    <tr>
                        <td>Spark</td>
                        <td class="d-none d-xl-table-cell">Single license</td>
                        <td><span class="badge badge-danger">Angular</span></td>
                        <td class="d-none d-xl-table-cell">20</td>
                        <td class="d-none d-xl-table-cell">540</td>
                    </tr>
                    <tr>
                        <td>Milo</td>
                        <td class="d-none d-xl-table-cell">Single license</td>
                        <td><span class="badge badge-warning">React</span></td>
                        <td class="d-none d-xl-table-cell">40</td>
                        <td class="d-none d-xl-table-cell">280</td>
                    </tr>
                    <tr>
                        <td>Ada</td>
                        <td class="d-none d-xl-table-cell">Single license</td>
                        <td><span class="badge badge-info">Vue</span></td>
                        <td class="d-none d-xl-table-cell">60</td>
                        <td class="d-none d-xl-table-cell">610</td>
                    </tr>
                    <tr>
                        <td>Abel</td>
                        <td class="d-none d-xl-table-cell">Single license</td>
                        <td><span class="badge badge-danger">Angular</span></td>
                        <td class="d-none d-xl-table-cell">80</td>
                        <td class="d-none d-xl-table-cell">150</td>
                    </tr>
                    <tr>
                        <td>Spark</td>
                        <td class="d-none d-xl-table-cell">Single license</td>
                        <td><span class="badge badge-success">HTML</span></td>
                        <td class="d-none d-xl-table-cell">20</td>
                        <td class="d-none d-xl-table-cell">480</td>
                    </tr>
                    <tr>
                        <td>Libre</td>
                        <td class="d-none d-xl-table-cell">Single license</td>
                        <td><span class="badge badge-warning">React</span></td>
                        <td class="d-none d-xl-table-cell">30</td>
                        <td class="d-none d-xl-table-cell">280</td>
                    </tr>
                    <tr>
                        <td>Von</td>
                        <td class="d-none d-xl-table-cell">Single license</td>
                        <td><span class="badge badge-danger">Angular</span></td>
                        <td class="d-none d-xl-table-cell">50</td>
                        <td class="d-none d-xl-table-cell">350</td>
                    </tr>
                    <tr>
                        <td>Material Blog</td>
                        <td class="d-none d-xl-table-cell">Single license</td>
                        <td><span class="badge badge-info">Vue</span></td>
                        <td class="d-none d-xl-table-cell">10</td>
                        <td class="d-none d-xl-table-cell">480</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-12 col-lg-4 d-flex">
        <div class="card flex-fill w-100">
            <div class="card-header">
                <div class="card-actions float-right">
                    <a href="#" class="mr-1">
                        <i class="align-middle" data-feather="refresh-cw"></i>
                    </a>
                    <div class="d-inline-block dropdown show">
                        <a href="#" data-toggle="dropdown" data-display="static">
                            <i class="align-middle" data-feather="more-vertical"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
                <h5 class="card-title mb-0">Sales / Revenue</h5>
            </div>
            <div class="card-body d-flex w-100">
                <div class="align-self-center chart chart-lg">
                    <canvas id="chartjs-dashboard-bar-alt"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection