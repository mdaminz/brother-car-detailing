@extends('admin.adminbase')

@section('content')

<div class="header">
    <h1 class="header-title">
        Manage Services
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="">Services</a></li>
            <li class="breadcrumb-item active" aria-current="page">Service Table</li>
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
                            <th style="width: 20%">Service Name</th>
                            <th style="width: 40%">Desciption</th>
                            <th style="width: 10%">Price</th>
                            <th style="width: 10%">Duration</th>
                            <th>Service Image</th>
                            <th style="width: 40px;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $data)
                            <tr>
                                <td>{{$data->name}}</td>
                                <td>{{$data->description}}</td>
                                <td>RM {{$data->price}}</td>
                                <td>{{$data->duration}}</td>
                                <td>
                                    <img style="width: 120px;" src="service/{{$data->image}}" alt="">
                                </td>
                                <td class="table-action">
                                    <a href="{{url('update_service', $data->id)}}"><i
                                            class="align-middle fas fa-fw fa-pen"></i></i></a>
                                    <a href="{{url('delete_service', $data->id)}}"><i
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