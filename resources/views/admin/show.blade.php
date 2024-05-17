@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-top">
            <h1>{{$comic->title}}</h1>

        </div>

        <div class="card-body">

            <img src="{{$comic->thumb}}" alt="">

        </div>
    </div>
</div>


@endsection