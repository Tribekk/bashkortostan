@extends('welcome')

@section('content')
    <div class="container my-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb p-3 bg-body-tertiary rounded-3">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Главная</a></li>
                <li class="breadcrumb-item"><a href="{{route('district')}}">Мунципальный район</a></li>
                <li class="breadcrumb-item active" aria-current="page">Телефоны района</li>
            </ol>
        </nav>
    </div>
    <div class="container mt-5 bg-white py-5 rounded-5">
        <h1>Телефоны района</h1>
        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3 d-flex" role="search" method="GET">
            <input type="search" class="form-control m-3"
                   @isset($_GET['search_fileld']) value="{{$_GET['search_fileld']}}"
                   @endisset placeholder="Найти телефон по наименованию" aria-label="Search" name="search_fileld">
            <button type="submit" class="btn btn-outline-light text-bg-dark m-3">Найти</button>
        </form>
        <div class="container m-5 mx-auto p-2">
            <table class="mx-auto p-2">
                <th class="mx-5 px-5" colspan="2">Телефоны доверия</th>
                @foreach ($elements as $element)
                    <tr>
                        <td class="px-5">{{$element->name}}</td>
                        <td class="px-5"><a href="tel:{{$element->number}}">{{$element->number}}</a></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
