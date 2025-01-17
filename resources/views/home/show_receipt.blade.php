@extends('userbase')

<base href="/public">


@section('head')



<style>
    body {
        background: #eee;
    }

    .invoice {
        background: #fff;
        padding: 20px
    }

    .invoice-company {
        font-size: 20px
    }

    .invoice-header {
        margin: 0 -20px;
        background: #f0f3f4;
        padding: 20px
    }

    .invoice-date,
    .invoice-from,
    .invoice-to {
        display: table-cell;
        width: 1%
    }

    .invoice-from,
    .invoice-to {
        padding-right: 20px
    }

    .invoice-date .date,
    .invoice-from strong,
    .invoice-to strong {
        font-size: 16px;
        font-weight: 600
    }

    .invoice-date {
        text-align: right;
        padding-left: 20px
    }

    .invoice-price {
        background: #f0f3f4;
        display: table;
        width: 100%
    }

    .invoice-price .invoice-price-left,
    .invoice-price .invoice-price-right {
        display: table-cell;
        padding: 20px;
        font-size: 20px;
        font-weight: 600;
        width: 75%;
        position: relative;
        vertical-align: middle
    }

    .invoice-price .invoice-price-left .sub-price {
        display: table-cell;
        vertical-align: middle;
        padding: 0 20px
    }

    .invoice-price small {
        font-size: 12px;
        font-weight: 400;
        display: block
    }

    .invoice-price .invoice-price-row {
        display: table;
        float: left
    }

    .invoice-price .invoice-price-right {
        width: 25%;
        background: #2d353c;
        color: #fff;
        font-size: 28px;
        text-align: right;
        vertical-align: bottom;
        font-weight: 300
    }

    .invoice-price .invoice-price-right small {
        display: block;
        opacity: .6;
        position: absolute;
        top: 10px;
        left: 10px;
        font-size: 12px
    }

    .invoice-footer {
        border-top: 1px solid #ddd;
        padding-top: 10px;
        font-size: 10px
    }

    .invoice-note {
        color: #999;
        margin-top: 80px;
        font-size: 85%
    }

    .invoice>div:not(.invoice-footer) {
        margin-bottom: 20px
    }

    .btn.btn-white,
    .btn.btn-white.disabled,
    .btn.btn-white.disabled:focus,
    .btn.btn-white.disabled:hover,
    .btn.btn-white[disabled],
    .btn.btn-white[disabled]:focus,
    .btn.btn-white[disabled]:hover {
        color: #2d353c;
        background: #fff;
        border-color: #d9dfe3;
    }

    @media print {

        body * {
            visibility: hidden;
        }

        .invoice,
        .invoice * {
            visibility: visible;
        }

        .invoice {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            width: 100%;
            transform: scale(1.0);
            /* Adjust the scale as needed */
            transform-origin: middle;
        }

        .footer {
            display: none;
            /* Hide the footer when printing */
        }

        .print-button {
            display: none;
        }
    }
</style>

@endsection

@section('content')

<div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-bg-1.jpg);">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Receipt</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="#">Booked Slot</a></li>
                    <li class="breadcrumb-item"><a href="#">Order {{$data->id}}</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Receipt</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<div class="container">
    <div class="col-md-12">
        <div class="invoice">
            <!-- begin invoice-company -->
            <div class="invoice-company text-inverse f-w-600 d-flex justify-content-between align-items-center">
                <span>Brother - Car Detailing and Coating</span>
                <div class="btn-group pull-right hidden-print">
                    <a href="javascript:;" onclick="window.print()"
                        class="btn btn-sm btn-white m-b-10 p-l-5 print-button"><i
                            class="fa fa-print t-plus-1 fa-fw fa-lg"></i> Print</a>
                </div>
            </div>

            <!-- end invoice-company -->
            <!-- begin invoice-header -->
            <div class="invoice-header">
                <div class="invoice-from">
                    <small>from</small>
                    <address class="m-t-5 m-b-5">
                        <strong class="text-inverse">Brother - Car Detailing and Coating</strong><br>
                        11, Jalan Ampang Baru 6C,<br>
                        Pusat Perdagangan Ampang Baru,<br>
                        Ipoh, 31350<br>
                        Phone: +60 17-423 1367<br>
                        Fax: +60 17-423 1367
                    </address>
                </div>
                <div class="invoice-to">
                    <small>to</small>
                    <address class="m-t-5 m-b-5">
                        <strong class="text-inverse">{{$data->name}}</strong><br>
                        {{$user->address}}<br>
                        Phone: {{$user->phone}}<br>
                        Email: {{$user->email}}
                    </address>
                </div>
                <div class="invoice-date">
                    <small>Invoice / {{ \Carbon\Carbon::parse($data->created_at)->format('F j, Y') }}</small>
                    <div class="date text-inverse m-t-5">
                        {{ \Carbon\Carbon::parse($data->created_at)->format('F j, Y') }}
                    </div>
                    <div class="invoice-detail">
                        #ORDER{{$data->id}}<br>
                        Status: {{$data->payment_status}}
                    </div>
                </div>

            </div>
            <!-- end invoice-header -->
            <!-- begin invoice-content -->
            <div class="invoice-content">
                <!-- begin table-responsive -->
                <div class="table-responsive">
                    <table class="table table-invoice">
                        <thead>
                            <tr>
                                <th>SERVICE NAME</th>
                                <th class="text-right" width="20%">PRICE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div style="width: 80%;">
                                        <span class="text-inverse">{{$service->name}}</span><br><br>
                                        <small>{{$service->description}}</small>
                                    </div>
                                </td>
                                <td class="text-right">RM {{$service->price}}.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- end table-responsive -->
                <!-- begin invoice-price -->
                <div class="invoice-price">
                    <div class="invoice-price-left">
                        <div class="invoice-price-row">
                            <div class="sub-price">
                                <small>SUBTOTAL</small>
                                <span class="text-inverse">RM {{$service->price}}.00</span>
                            </div>
                            <div class="sub-price">
                                <i class="fa fa-plus text-muted"></i>
                            </div>
                            <div class="sub-price">
                                <small>GST FEE</small>
                                <span class="text-inverse">RM 0.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="invoice-price-right">
                        <small>TOTAL</small> <span class="f-w-600">RM {{$service->price}}.00</span>
                    </div>
                </div>
                <!-- end invoice-price -->
            </div>
            <!-- end invoice-content -->
            <!-- begin invoice-note -->
            <div class="invoice-note">
                * All prices are quoted in [RM].<br>
                * This invoice is electronically generated and does not require a signature.<br>
                * If you have any questions concerning this invoice, contact [Syafiq Azim, +60 17-423 1367
                , brothercarpolish88@gmail.com]
            </div>
            <!-- end invoice-note -->
            <!-- begin invoice-footer -->
            <div class="invoice-footer">
                <p class="text-center m-b-5 f-w-600">
                    THANK YOU FOR YOUR BUSINESS
                </p>
                <p class="text-center">
                    <span class="m-r-10"><i class="fa fa-fw fa-lg fa-globe"></i> brother_carcenter.com</span>
                    <span class="m-r-10"><i class="fa fa-fw fa-lg fa-phone-volume"></i> T:+60 17-423 1367
                    </span>
                    <span class="m-r-10"><i class="fa fa-fw fa-lg fa-envelope"></i> brothercarpolish88@gmail.com</span>
                </p>
            </div>
            <!-- end invoice-footer -->
        </div>
    </div>
</div>


@endsection