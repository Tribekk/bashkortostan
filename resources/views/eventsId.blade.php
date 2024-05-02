@extends('welcome')
@section('content')
    <div class="container my-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb p-3 bg-body-tertiary rounded-3">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Главная</a></li>
                <li class="breadcrumb-item"><a href="{{route('news')}}">Пресс-центр</a></li>
                <li class="breadcrumb-item"><a href="{{route('events')}}">События</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$event[0]->name}}</li>
            </ol>
        </nav>
    </div>
    <div class="container mt-3 bg-white py-5 rounded-5">
        <div class="row">
            <div class="col-lg-5">
                <h1>{{$event[0]->name}}</h1>
            </div>
            <div class="col-lg-4">
                <img src="../../storage/{{$event[0]->img}}" alt="">
            </div>
        </div>
        <div class="text-start">
            {!! $event[0]->text !!}
        </div>
    </div>
@endsection
