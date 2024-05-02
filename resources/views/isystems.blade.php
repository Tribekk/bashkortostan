@extends('welcome')
@section('content')
    <div class="container my-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb p-3 bg-body-tertiary rounded-3">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Главная</a></li>
                <li class="breadcrumb-item"><a href="{{route('about')}}">Админисрация</a></li>
                <li class="breadcrumb-item active" aria-current="page">Информационные системы</li>
            </ol>
        </nav>
    </div>
    <div class="container mt-3 bg-white py-5 rounded-5">
        <h1>Информационные системы</h1>
        <div class="mx-5 mt-5 d-flex">
            <img src="../img/c6a84e9e937eca30ab61ba69b38f9c72_55_73.png" alt="">
            <div>
                <p class="mx-3">Сведения о разработчике программного обеспечения:
                    <green>ООО «БашФин»</green>
                </p>
                <h6 class="mx-3">Автоматизированная информационная система планирования исполнения бюджета Республики
                    Башкортостан
                    «Башфин» (АИС «БашФин»)</h6>
            </div>
        </div>
        <hr>
        <div class="mx-5 d-flex">
            <img src="../img/be4c3e7e311d2d96472ffe4757f58006_136_85.png" alt="">
            <div>
                <p class="mx-3">Сведения о разработчике программного обеспечения:
                    <green>ООО «Электронные офисные системы»</green>
                </p>
                <h6 class="mx-3">Система электронного документооборота «ДЕЛО» (СЭД «ДЕЛО»)</h6>
            </div>
        </div>
        <hr>
        <div class="mx-5 d-flex">
            <img src="../img/c6a84e9e937eca30ab61ba69b38f9c72_55_73.png" alt="">
            <div>
                <p class="mx-3">Сведения о разработчике программного обеспечения:
                    <green>ООО «АйТи. Ведомственные системы»</green>
                </p>
                <h6 class="mx-3">Автоматизированная информационная система «Система обработки запросов» (АИС «СОЗ»)</h6>
            </div>
        </div>
        <hr>
    </div>
@endsection
