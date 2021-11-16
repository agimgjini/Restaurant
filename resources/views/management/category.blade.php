@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @include('management.inc.sidebar')
            <div class="col-md-8">
                <i class="fas fa-align-justify"></i> Create a Category
                <a href="/management/category/create" class="btn btn-success btn-sm float-right"><i class="fas fa-plus"></i>Create Category</a>
                <hr>
                @if (Session()->has('status'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        {{Session()->get('status')}}
                    </div>
                @endif
                <table class="tanble table-bordered" width='80%'>
                    @csrf
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Category</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <th scope="row">{{$category->id}}</th>
                                <th>{{$category->name}}</th>
                                <td>
                                    <a href="/management/category/{{$category->id}}/edit" class="btn btn-warning">Edit</a>
                                </td>
                                <td>
                                    <form action="/management/category/{{$category->id}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="DELETE" class="btn btn-danger" onclick="return confirm('Are you sure?')">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$categories->links()}}
            </div>
        </div>
    </div>
@endsection
