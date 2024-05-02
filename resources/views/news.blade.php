@extends('welcome')
@section('content')
    <div class="container my-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb p-3 bg-body-tertiary rounded-3">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Главная</a></li>
                <li class="breadcrumb-item"><a href="{{route('news')}}">Пресс-центр</a></li>
                <li class="breadcrumb-item active" aria-current="page">Новости</li>
            </ol>
        </nav>
    </div>
    <div class="container mt-3 bg-white py-5 rounded-5">
        <h1>Новости</h1>
        <div class="row mt-5 ms-5">
        @foreach($news as $new)
                <div class="col-lg-2">
                    <img src="../storage/{{$new->img}}" class="ico" alt="">
                </div>
                <div class="col-lg-6">
                    <a href="{{route('news.id',['id' => $new->id] )}}"><h5>{{$new->name}}</h5></a>
                </div>
                <hr>
        @endforeach
        </div>
    </div>
@endsection
