@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @include('management.inc.sidebar')
            <div class="col-md-8">
                <i class="fas fa-align-justify"></i> Create a Menu
                <hr>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="/management/menu" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="menuName">Menu Name</label>
                        <input type="text" name="name" placeholder="Name..." class="form-control">
                        <label for="menuPrice">Price</label>
                        <div class="input-group mb-3">
                            <div class="input-group-pretend">
                                <span class="input-group-text">€</span>
                            </div>
                            <input type="text" name="price" class="form-control" aria-label="Amount">
                            <div class="input-group-pretend">
                                <span class="input-group-text">.00</span>
                            </div>
                        </div>
                        <label for="MenuImage">Image</label>
                        <div class="input-group mb-3">
                            <div class="input-group-pretend">
                                <span class="input-group-text">Upload</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" name="image" class="custome-file-input" id="file01">
                                <label class="custom-file-label" for="file01">Choose file</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Description">Description</label>
                            <input type="text" name="description" class="form-control" placeholder="description">
                        </div>
                        <div class="form-group">
                            <label for="Category">Category</label>
                            <select class="form-control" name="category_id">
                                @foreach ($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <button class="btn btn-success btn-sm">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

