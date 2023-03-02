@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $blogs[$id]->name }}</div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">Blog Category:<span style="font-weight: bold">{{ $blogs[$id]->category }}</span></li>
                            <li class="list-group-item">{{ $blogs[$id]->description }}</li>
                        </ul>
                    </div>
                    <div class="card-footer">
                        <a class="btn btn-light" href="/home">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
