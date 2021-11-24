@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @include('management.inc.sidebar')
            <div class="col-md-8">
                <i class="fas fa-align-justify"></i> Create a Menu
                <a href="/management/menu/create" class="btn btn-success btn-sm float-right"><i class="fas fa-plus"></i>Create Menu</a>
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
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Image</th>
                            <th scope="col">Description</th>
                            <th scope="col">Category</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($menus as $menu)
                        <tr>
                          <td>{{$menu->id}}</td>
                          <td>{{$menu->name}}</td>
                          <td>{{$menu->price}}€</td>
                          <td>
                            <img src="{{asset('menu_images')}}/{{$menu->image}}" alt="{{$menu->name}}" width="60px" height="60px" class="img-thumbnail">
                          </td>
                          <td>{{$menu->description}}</td>
                          <td>{{$menu->category->name}}</td>
                          <td><a href="/management/menu/{{$menu->id}}/edit" class="btn btn-warning">Edit</a></td>
                          <td>
                            <form action="/management/menu/{{$menu->id}}" method="post">
                              @csrf
                              @method('DELETE')
                              <button class="btn btn-danger" onclick="return confirm('Are you sure?')">DELETE</button>
                            </form>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
