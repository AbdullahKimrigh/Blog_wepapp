@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add Blog Details</div>

                    <div class="card-body">
                        <form action="/blog" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input name="name" type="text" class="form-control" id="name" placeholder="Enter name">
                                @error('name')<small class="text-danger">{{ $message }}</small>@enderror
                            </div>
                            <div class="form-group">
                                <label for="category">Category</label>
                                <input name="category" type="text" class="form-control" id="category" placeholder="Enter Category">
                                @error('category')<small class="text-danger">{{ $message }}</small>@enderror
                            </div>
                            <div class="form-group">
                                <label for="description">The Article</label>
                                <input name="description" type="text" class="form-control" id="description" placeholder="Right your article here">
                                @error('description')<small class="text-danger">{{ $message }}</small>@enderror
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
