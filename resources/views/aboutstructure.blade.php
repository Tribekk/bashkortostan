@extends('welcome')
@section('content')
    <div class="container my-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb p-3 bg-body-tertiary rounded-3">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Главная</a></li>
                <li class="breadcrumb-item"><a href="{{route('about')}}">Админисрация</a></li>
                <li class="breadcrumb-item active" aria-current="page">Структура</li>
            </ol>
        </nav>
    </div>
    <div class="container mt-3">
        <h1>Структура</h1>
        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3 d-flex" role="search" method="GET">
            <input type="search" class="form-control m-3"
                   @isset($_GET['search_job']) value="{{$_GET['search_job']}}"
                   @endisset placeholder="Найти по должности" aria-label="Search" name="search_job">
            <input type="search" class="form-control m-3"
                   @isset($_GET['search_fio']) value="{{$_GET['search_fio']}}"
                   @endisset placeholder="Найти по ФИО" aria-label="Search" name="search_fio">
            <button type="submit" class="btn btn-outline-light text-bg-dark m-3">Найти</button>
        </form>
        <table class="mx-auto p-2">
            <th class="mx-5 px-5" style="background-color: rgba(155,169,192,0.43)">Сотрудник:</th>
            <th class="mx-5 px-5" style="background-color: rgba(155,169,192,0.43)">Подразделение:</th>
            <th class="mx-5 px-5" style="background-color: rgba(155,169,192,0.43)">Должность:</th>
            <th class="mx-5 px-5" style="background-color: rgba(155,169,192,0.43)">Контактная информация и график
                приёма:
            </th>
            @foreach ($elements as $element)
                <tr>
                    <td class="px-5">
                        <div class="d-flex"><img src="../storage/{{$element->photo}}" alt="">
                            <h5 class="m-3">{{$element->name}}</h5></div>
                    </td>
                    <td class="px-5">
                        <green>{{$element->subdivision}}</green>
                    </td>
                    <td class="px-5">{{$element->job_title}}</td>
                    <td class="px-5">
                        <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M21 10H14.6C14.0399 10 13.7599 10 13.546 9.89101C13.3578 9.79513 13.2049 9.64215 13.109 9.45399C13 9.24008 13 8.96005 13 8.4V5M10 5H17.8C18.9201 5 19.4802 5 19.908 5.21799C20.2843 5.40973 20.5903 5.71569 20.782 6.09202C21 6.51984 21 7.07989 21 8.2V17.8C21 18.9201 21 19.4802 20.782 19.908C20.5903 20.2843 20.2843 20.5903 19.908 20.782C19.4802 21 18.9201 21 17.8 21H6.2C5.07989 21 4.51984 21 4.09202 20.782C3.71569 20.5903 3.40973 20.2843 3.21799 19.908C3 19.4802 3 18.9201 3 17.8V8.2C3 7.07989 3 6.51984 3.21799 6.09202C3.40973 5.71569 3.71569 5.40973 4.09202 5.21799C4.49359 5.01338 5.01165 5.00082 6 5.00005M10 5V4.6C10 4.03995 10 3.75992 9.89101 3.54601C9.79513 3.35785 9.64215 3.20487 9.45399 3.10899C9.24008 3 8.96005 3 8.4 3H7.6C7.03995 3 6.75992 3 6.54601 3.10899C6.35785 3.20487 6.20487 3.35785 6.10899 3.54601C6 3.75992 6 4.03995 6 4.6V5.00005M10 5V15.4C10 15.9601 10 16.2401 9.89101 16.454C9.79513 16.6422 9.64215 16.7951 9.45399 16.891C9.24008 17 8.96005 17 8.4 17H7.6C7.03995 17 6.75992 17 6.54601 16.891C6.35785 16.7951 6.20487 16.6422 6.10899 16.454C6 16.2401 6 15.9601 6 15.4V5.00005M14 14H14.01V13.99H14V14ZM14 17H14.01V17.01H14V17ZM17 17H17.01V17.01H17V17ZM17 14H17.01V14.01H17V14Z"
                                    stroke="#000000" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </g>
                        </svg>
                        <green>{{$element->number}}</green>
                        <br>
                        <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M10 19H6.2C5.0799 19 4.51984 19 4.09202 18.782C3.71569 18.5903 3.40973 18.2843 3.21799 17.908C3 17.4802 3 16.9201 3 15.8V8.2C3 7.0799 3 6.51984 3.21799 6.09202C3.40973 5.71569 3.71569 5.40973 4.09202 5.21799C4.51984 5 5.0799 5 6.2 5H17.8C18.9201 5 19.4802 5 19.908 5.21799C20.2843 5.40973 20.5903 5.71569 20.782 6.09202C21 6.51984 21 7.0799 21 8.2V10M20.6067 8.26229L15.5499 11.6335C14.2669 12.4888 13.6254 12.9165 12.932 13.0827C12.3192 13.2295 11.6804 13.2295 11.0677 13.0827C10.3743 12.9165 9.73279 12.4888 8.44975 11.6335L3.14746 8.09863M14 21L16.025 20.595C16.2015 20.5597 16.2898 20.542 16.3721 20.5097C16.4452 20.4811 16.5147 20.4439 16.579 20.399C16.6516 20.3484 16.7152 20.2848 16.8426 20.1574L21 16C21.5523 15.4477 21.5523 14.5523 21 14C20.4477 13.4477 19.5523 13.4477 19 14L14.8426 18.1574C14.7152 18.2848 14.6516 18.3484 14.601 18.421C14.5561 18.4853 14.5189 18.5548 14.4903 18.6279C14.458 18.7102 14.4403 18.7985 14.405 18.975L14 21Z"
                                    stroke="#000000" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </g>
                        </svg>
                        <green>{{$element->email}}</green>
                        <br>
                        <h6 class="mt-2">График приема:</h6>
                        {{$element->reception}}
                        <div class="mb-3"></div>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
