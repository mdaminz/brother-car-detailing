@extends('admin.adminbase')

@section('content')

<div class="header">
    <h1 class="header-title">
        Manage Messages
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="">Messages</a></li>
            <li class="breadcrumb-item active" aria-current="page">Message Table</li>
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
                            <th>Customer Name</th>
                            <th>Email Address</th>
                            <th>Subject</th>
                            <th style="width: 500px;">Message</th>
                            <th style="width: 40px;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $data)
                            <tr>
                                <td>{{$data->name}}</td>
                                <td>{{$data->email}}</td>
                                <td>{{$data->subject}}</td>
                                <td>{{$data->message}}</td>
                                <td style="text-align: center;" class="table-action">
                                    <a href="{{url('send_mail', $data->id)}}"><i
                                            class="align-middle fa fa-envelope"></i></a>
                                    <a href="{{url('delete_message', $data->id)}}"><i
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