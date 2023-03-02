@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $users->name }}</div>

                    <div class="card-body">
                        <ul class="list-group">
                            <div class="col md-4">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/8/85/Logo-Test.png" alt="" width="300" height="200">
                            </div>
                            <li class="list-group-item">ID: <span style="font-weight: bold">{{ $users->id }}</span></li>
                            <li class="list-group-item">Email: <span style="font-weight: bold">{{ $users->email }}</span></li>
                            <li class="list-group-item">First Name: <span style="font-weight: bold">{{ $users->first_name }}</span></li>
                            <li class="list-group-item">Last Name: <span style="font-weight: bold">{{ $users->last_name }}</span></li>
                            <li class="list-group-item">Summary: <span style="font-weight: bold">{{ $users->bio }}</span></li>
                            <li class="list-group-item">Email Verified: <span style="font-weight: bold">{{ $users->email_verified_at }}</span></li>
                            <li class="list-group-item">Password: <span style="font-weight: bold">{{ $users->password }}</span></li>
                            <li class="list-group-item">Token: <span style="font-weight: bold">{{ $users->remember_token }}</span></li>
                            <li class="list-group-item">created_at: <span style="font-weight: bold">{{ $users->created_at }}</span></li>
                            <li class="list-group-item">updated_at: <span style="font-weight: bold">{{ $users->updated_at }}</span></li>
                        </ul>
                        <br>
                        <a class="btn btn-primary" href="/profile/edit">Edit Profile</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
