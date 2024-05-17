@extends('layouts.appGuests')

@section('content')

<div class="container"></div>
<div class="row row-cols-1 row-cols-md-3 row-cols-xxl-6">
    @forelse ($comics as $comic)
    <div class="col">
        <img src="{{$comic->thumb}}" alt="">
    </div>

    @empty
    <div class="col">
        No comics yet!
    </div>

    @endforelse
</div>
</div>

@endsection