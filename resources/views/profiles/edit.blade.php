@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Profile Details</div>

                    <div class="card-body">
                        <form action="/profile" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input name="name" type="text" class="form-control" id="name" placeholder="Enter name">
                                @error('name')<small class="text-danger">{{ $message }}</small>@enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input name="email" type="text" class="form-control" id="email" placeholder="Enter email">
                                @error('email')<small class="text-danger">{{ $message }}</small>@enderror
                            </div>
                            <div class="form-group">
                                <label for="first_name">First Name</label>
                                <input name="first_name" type="text" class="form-control" id="first_name" placeholder="Enter your first name">
                                @error('first_name')<small class="text-danger">{{ $message }}</small>@enderror
                            </div>
                            <div class="form-group">
                                <label for="last_name">last Name</label>
                                <input name="last_name" type="text" class="form-control" id="last_name" placeholder="Enter your last name">
                                @error('last_name')<small class="text-danger">{{ $message }}</small>@enderror
                            </div>
                            <div class="form-group">
                                <label for="bio">Summary</label>
                                <input name="bio" type="text" class="form-control" id="bio" placeholder="Enter your summary">
                                @error('bio')<small class="text-danger">{{ $message }}</small>@enderror
                            </div>
                            <br>
                            <div>
                                <button type="submit" class="btn btn-light">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
