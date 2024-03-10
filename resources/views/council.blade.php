@extends('welcome')
@section('content')
    <div class="container my-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb p-3 bg-body-tertiary rounded-3">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Главная</a></li>
                <li class="breadcrumb-item"><a href="{{route('council')}}">Совет</a></li>
                <li class="breadcrumb-item active" aria-current="page">Контакты и реквизиты</li>
            </ol>
        </nav>
    </div>
    <div class="container mt-3">
        <h1>О совете</h1>

    </div>
@endsection
