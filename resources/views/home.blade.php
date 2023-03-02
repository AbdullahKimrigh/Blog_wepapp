@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a class="btn btn-primary" href="/blog/edit">Add Blog</a>
                </div>
            </div>

            <div class="card mt-4">
                <div class="card-header">Blogs List</div>

                <div class="card-body">
                    <ul class="list-group">
                        @foreach($Blogs as $blog)
                            <li class="list-group-item">
                                <a href="/blog/{{ $blog->id }}">{{ $blog->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
