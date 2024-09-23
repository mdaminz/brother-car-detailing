@extends('admin.adminbase')

@section('content')


<div class="header">
    <h1 class="header-title">
        Manage Bookings
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="">Bookings</a></li>
            <li class="breadcrumb-item active" aria-current="page">Booking Table</li>
        </ol>
    </nav>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
            </div>
            <div class="card-body">
                <table id="datatables-basic" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Phone Number</th>
                            <th>License Plate</th>
                            <th>Booking Date</th>
                            <th>Time Slot</th>
                            <th>Service</th>
                            <th>Payment Status</th>
                            <th>Complete Status</th>
                            <th style="width: 40px;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $data)
                            <tr>
                                <td>{{$data->name}}</td>
                                <td>{{$data->phone}}</td>
                                <td>{{$data->license_plate}}</td>
                                <td>{{$data->booking_date}}</td>
                                <td>{{$data->time_slot}}</td>
                                <td>{{$data->service->name}}</td>
                                <td>
                                    @if ($data->payment_status == 'Unpaid')
                                        <span class="badge badge-danger">Unpaid</span>
                                    @else
                                        <span class="badge badge-success">Paid</span>

                                    @endif
                                </td>
                                <td>
                                    @if ($data->complete_status == 'In Progress')
                                        <span class="badge badge-danger">In Progress</span>
                                    @else
                                        <span class="badge badge-success">Completed</span>

                                    @endif
                                </td>
                                <td class="table-action">
                                    <a href="{{url('update_booking', $data->id)}}"><i
                                            class="align-middle fas fa-fw fa-pen"></i></i></a>
                                    <a href="{{url('delete_booking', $data->id)}}"><i
                                            class="align-middle fas fa-fw fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

@endsection