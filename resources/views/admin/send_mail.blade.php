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
            <li class="breadcrumb-item"><a href="#">Mail</a></li>
            <li class="breadcrumb-item active" aria-current="page">Send Mail to {{$data->email}}</li>
        </ol>
    </nav>
</div>

<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <form action="{{url('mail', $data->id)}}" method="Post">
                @csrf
                <div class="form-group">
                    <label>Greeting</label>
                    <input type="text" class="form-control" value="Hello {{$data->name}}" placeholder="" name="greeting">
                </div>
                <div class="form-group">
                    <label>Mail Body</label>
                    <textarea class="form-control" placeholder="" rows="20" name="mail_body">We have recently updated our privacy policy and need you to verify your account information to ensure uninterrupted service.

To take the necessary action, please follow the link below:
                    </textarea>
                </div>
                <div class="form-group">
                    <label>Action Text</label>
                    <input type="text" class="form-control" placeholder="" name="action_text" value="Verify Your Account">
                </div>
                <div class="form-group">
                    <label>Action URL</label>
                    <input type="text" class="form-control" placeholder="" name="action_url" value="http://127.0.0.1:8000">
                </div>
                <div class="form-group">
                    <label>End Line</label>
                    <textarea class="form-control" placeholder="" rows="5" name="end_line">Best regards,

Jane Smith

Customer Support Manager
                    </textarea>
                </div>
                <button type="submit" class="btn btn-primary mt-2" style="float: right;">Send Mail</button>
            </form>
        </div>
    </div>
</div>
@endsection