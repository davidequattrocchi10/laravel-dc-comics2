@extends('layouts.appGuests')

@section('content')
<div class="container-fluid bg-dark p-5">
    <div class="container mt-4">
        <div class="row row-cols-1 row-cols-md-3 row-cols-xxl-6">
            @forelse ($comics as $comic)
            <div class="card border-white bg-dark m-1 p-1" style="width: 18rem;">
                <img src="{{$comic->thumb}}" alt="Comic {{$comic->id}}" style="width: 100%; height:85%;">
                <div class="card-title text-white text-center">
                    <h5 class="fst-italic pt-3">{{$comic->title}}</h5>
                </div>
            </div>

            @empty
            <div class="col">
                No comics yet!
            </div>

            @endforelse
        </div>

    </div>
</div>

@endsection