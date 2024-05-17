@extends('layouts.app')

@section('content')


<div class="container">
    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Image</th>
                    <th scope="col">Price</th>
                    <th scope="col">Sale date</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                <tr class="">
                    <td scope="row">{{$comic->id}}</td>
                    <td><img width="60" src="{{$comic->thumb}}" alt="Image Comic {{$comic->id}}"></td>
                    <td>{{$comic->title}}</td>
                    <td>{{$comic->price}}</td>
                    <td>{{$comic->sale_date}}</td>
                    <td>Action</td>
                </tr>
            </tbody>
            @endforeach
        </table>
        {{$comics->links('vendor.pagination.bootstrap-5')}}

    </div>

</div>
</div>


@endsection