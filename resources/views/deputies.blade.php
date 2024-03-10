@extends('welcome')
@section('content')
    <div class="container my-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb p-3 bg-body-tertiary rounded-3">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Главная</a></li>
                <li class="breadcrumb-item"><a href="{{route('council')}}">Совет</a></li>
                <li class="breadcrumb-item active" aria-current="page">Депутаты</li>
            </ol>
        </nav>
    </div>
    <div class="container mt-3">
        <h1>Депутаты</h1>
        <table class="mx-auto p-2 mt-5">
            <th class="mx-5 px-5" style="background-color: rgba(155,169,192,0.43)">Депутат:</th>
            <th class="mx-5 px-5" style="background-color: rgba(155,169,192,0.43)">Партия:</th>
            <th class="mx-5 px-5" style="background-color: rgba(155,169,192,0.43)">Контактная информация:
            </th>
            @foreach ($elements as $element)
                <tr>
                    <td class="px-5">
                        <div class="d-flex"><img src="{{$element->photo}}" alt="">
                            <div>
                                <h5 class="m-3">{{$element->name}}</h5>
                                <p class="m-3 mt-5">Рейтинг: {{$element->rating}}</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-5">{{$element->partia}}</td>
                    <td class="px-5">
                        <green>{{$element->info}}</green>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
