@extends('welcome')
@section('content')
    <div class="container my-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb p-3 bg-body-tertiary rounded-3">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Главная</a></li>
                <li class="breadcrumb-item"><a href="{{route('news')}}">Пресс-центр</a></li>
                <li class="breadcrumb-item active" aria-current="page">Ответы</li>
            </ol>
        </nav>
    </div>
    <div class="container mt-3 bg-white py-5 rounded-5">
        <h1>Вопросы граждан</h1>
        @foreach($feedback as $answer)
            <div class="row mt-5">
                <div class="col-lg-8">
                    <div>
                        <h2>{{$answer->title}}</h2>
                        <p>{{$answer->body}}</p>
                        <h2>Ответ :</h2>
                        <p>{!! $answer->message !!}</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div>
                        <p>Дата создания: <i>{{$answer->created_at}}</i></p>
                        <hr>
                        <p>Заявитель: <i>{{$answer->FIO}}</i></p>
                        <hr>
                        <p>Первичный адресат: <i>{{$answer->destination}}</i></p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
