@extends('welcome')
@section('content')
    <div class="container my-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb p-3 bg-body-tertiary rounded-3">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Главная</a></li>
                <li class="breadcrumb-item"><a href="{{route('news')}}">Пресс-центр</a></li>
                <li class="breadcrumb-item active" aria-current="page">События</li>
            </ol>
        </nav>
    </div>
    <div class="container mt-3 bg-white py-5 rounded-5">
        <h1>События</h1>
        <div class="row mt-5 ms-5">
            @foreach($events as $event)
                <div class="col-lg-2">
                    <img src="../storage/{{$event->img}}" class="ico" alt="">
                </div>
                <div class="col-lg-6">
                    <a href="{{route('events.id',['id' => $event->id] )}}"><h5>{{$event->name}}</h5></a>
                </div>
                <hr>
            @endforeach
        </div>
    </div>
@endsection
