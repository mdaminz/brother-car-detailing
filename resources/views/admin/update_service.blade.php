@extends('admin.adminbase')

<base href="/public">
@section('content')

<div class="header">
    <h1 class="header-title">
        Edit Service
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="dashboard-default.html">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="#">Service</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Service</li>
        </ol>
    </nav>
</div>

<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <form action="{{ url('edit_service', $data->id) }}" method="Post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Service Name</label>
                    <input type="text" class="form-control" placeholder="Premium Car Wash" name="name" value="{{$data->name}}">
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" placeholder="The best car wash" rows="20" name="description">{{$data->description}}</textarea>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">Price</label>
                        <input type="number" class="form-control" placeholder="RM 400" name="price" value="{{$data->price}}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputState">Duration</label>
                        <select id="inputState" class="form-control" name="duration">
                            <option selected value="{{$data->duration}}">{{$data->duration}}</option>                           
                            <option value="30 Minutes">30 Minutes</option>
                            <option value="1 Hour">1 Hour</option>
                            <option value="2 Hours">2 Hours</option>
                            <option value="24 Hours">24 Hours</option>
                        </select>
                    </div>
                </div>
                <div class="form-group mb">
                    <label class="form-label">Current Image</label>
                    <div>
                        <img width="250px" src="service/{{$data->image}}" alt="">
                    </div>
                    
                </div>

                <div class="form-group mb">
                    <label class="form-label">Upload Image</label>
                    <div>
                        <input type="file" class="validation-file" name="image">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary mt-2" style="float: right;">Update Service</button>
            </form>
        </div>
    </div>
</div>
@endsection