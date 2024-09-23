@extends('admin.adminbase')

<base href="/public">

@section('content')
<div class="header">
    <h1 class="header-title">
        Update Booking
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="dashboard-default.html">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="#">Bookings</a></li>
            <li class="breadcrumb-item active" aria-current="page">Update Booking</li>
        </ol>
    </nav>
</div>

<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <form action="{{ url('edit_booking', $data->id) }}" method="Post">
                @csrf
                <div class="form-group">
                    <label>Customer Name</label>
                    <input type="text" class="form-control" name="name" value="{{$data->name}}" readonly>
                </div>
                <div class="form-group">
                    <label>Email Address</label>
                    <input type="email" class="form-control" name="email" value="{{$data->email}}" readonly>
                </div>
                <div class="form-group">
                    <label>Phone Number</label>
                    <input type="number" class="form-control" name="phone" value="{{$data->phone}}" readonly>
                </div>
                <div class="form-group">
                    <label>Car Model</label>
                    <input type="text" class="form-control" name="car_model" value="{{$data->car_model}}" readonly>
                </div>
                <div class="form-group">
                    <label>License Plate</label>
                    <input type="text" class="form-control" name="license_plate" value="{{$data->license_plate}}"
                        readonly>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Booking Date</label>
                        <input type="text" class="form-control" name="booking_date" value="{{$data->booking_date}}"
                            readonly>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Time Slot</label>
                        <input type="text" class="form-control" name="time_slot" value="{{$data->time_slot}}"
                        readonly>
                    </div>
                    <!-- <div class="form-group col-md-6">
                        <label for="inputState">Duration</label>
                        <select id="inputState" class="form-control" name="duration">
                            <option selected value="{{$data->duration}}">{{$data->duration}}</option>                           
                            <option value="30 Minutes">30 Minutes</option>
                            <option value="1 Hour">1 Hour</option>
                            <option value="2 Hours">2 Hours</option>
                            <option value="24 Hours">24 Hours</option>
                        </select>
                    </div> -->
                </div>
                <input type="text" class="form-control" name="user_id" value="{{$data->user_id}}" readonly hidden>
                <input type="text" class="form-control" name="service_id" value="{{$data->service_id}}" readonly hidden>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputState">Payment Status</label>
                        <select id="inputState" class="form-control" name="payment_status">
                            <option selected value="{{$data->payment_status}}">{{$data->payment_status}}</option>
                            <option value="Upaid">Upaid</option>
                            <option value="Paid">Paid</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputState">Completion</label>
                        <select id="inputState" class="form-control" name="complete_status">
                            <option selected value="{{$data->complete_status}}">{{$data->complete_status}}</option>
                            <option value="In Progress">In Progress</option>
                            <option value="Completed">Completed</option>
                        </select>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary mt-2" style="float: right;">Update Booking</button>
            </form>
        </div>
    </div>
</div>
@endsection