@extends('layouts.appGuests')

@section('content')
<div class="container-fluid bg-dark p-5 text-center">
    <div class="container mt-4">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xxl-6 gy-5 gx-2">
            @forelse ($comics as $comic)
            <div class="bg-dark">
                <img src="{{$comic->thumb}}" alt="Comic {{$comic->id}}" style="height:300px; width:100%;">
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
    <button type="button" class="mt-3 btn btn-primary m-auto px-5">LOAD MORE</button>
</div>

@endsection