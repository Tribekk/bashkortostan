@extends('welcome')
@section('content')
    <div class="container my-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb p-3 bg-body-tertiary rounded-3">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Главная</a></li>
                <li class="breadcrumb-item active" aria-current="page">Администрация</li>
            </ol>
        </nav>
    </div>
    <div class="container mt-5 bg-white py-5 rounded-5">
        <h1>Об Администрации</h1>
        <div class="download m-3">
            <a href="files/polozhenie_ob_administratsii.doc" download>
                <svg fill="#000000" width="20px" height="20px"
                     viewBox="0 0 64 64" version="1.1" xmlns="http://www.w3.org/2000/svg"
                     xml:space="preserve" xmlns:serif="http://www.serif.com/"
                     style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <rect id="Icons" x="-576" y="-128" width="1280" height="800" style="fill:none;"></rect>
                        <g id="Icons1" serif:id="Icons">
                            <g id="Strike"></g>
                            <g id="H1"></g>
                            <g id="H2"></g>
                            <g id="H3"></g>
                            <g id="list-ul"></g>
                            <g id="hamburger-1"></g>
                            <g id="hamburger-2"></g>
                            <g id="list-ol"></g>
                            <g id="list-task"></g>
                            <g id="trash"></g>
                            <g id="vertical-menu"></g>
                            <g id="horizontal-menu"></g>
                            <g id="sidebar-2"></g>
                            <g id="Pen"></g>
                            <g id="Pen1" serif:id="Pen"></g>
                            <g id="clock"></g>
                            <g id="external-link"></g>
                            <g id="hr"></g>
                            <g id="info"></g>
                            <g id="warning"></g>
                            <g id="plus-circle"></g>
                            <g id="minus-circle"></g>
                            <g id="vue"></g>
                            <path id="download"
                                  d="M48.089,52.095l0,4l-32.049,0l0,-4l32.049,0Zm-16.025,-4l-16.024,-16l8.098,0l-0.049,-24l15.975,0l0.048,24l7.977,0l-16.025,16Z">
                            </path>
                            <g id="cog"></g>
                            <g id="logo"></g>
                            <g id="radio-check"></g>
                            <g id="eye-slash"></g>
                            <g id="eye"></g>
                            <g id="toggle-off"></g>
                            <g id="shredder"></g>
                            <g id="spinner--loading--dots-" serif:id="spinner [loading, dots]"></g>
                            <g id="react"></g>
                            <g id="check-selected"></g>
                            <g id="turn-off"></g>
                            <g id="code-block"></g>
                            <g id="user"></g>
                            <g id="coffee-bean"></g>
                            <g id="coffee-beans">
                                <g id="coffee-bean1" serif:id="coffee-bean"></g>
                            </g>
                            <g id="coffee-bean-filled"></g>
                            <g id="coffee-beans-filled">
                                <g id="coffee-bean2" serif:id="coffee-bean"></g>
                            </g>
                            <g id="clipboard"></g>
                            <g id="clipboard-paste"></g>
                            <g id="clipboard-copy"></g>
                            <g id="Layer1"></g>
                        </g>
                    </g>
            </svg>
                Скачать регламентирующий документ</a>
        </div>
        <p>Администрация муниципального района Зианчуринский район Республики Башкортостан –
            исполнительно-распорядительный орган местного самоуправления, наделенный, согласно Уставу муниципального
            района Зианчуринский район Республики Башкортостан, полномочиями по решению вопросов местного значения и
            полномочиями для осуществления отдельных государственных полномочий, переданных органам местного
            самоуправления федеральными законами и законами Республики Башкортостан, и не входящий в систему органов
            государственной власти.</p>
        <div class="container mt-5">
            <h3 class="mb-4">Символика</h3>
            <div class="d-flex">
                <p><img src="img/c6a84e9e937eca30ab61ba69b38f9c72_250_333.png" alt=""></p>
                <div class="m-5">
                    <p><a href="files\gerb_.png" download>Скачать герб в растровом формате</a></p>
                    <p><a href="files\gerb.cdr" download>Скачать герб в векторном формате</a></p>
                    <p><a href="files\norm_2_.png" download>Скачать флаг в растровом формате</a></p>
                    <p><a href="files\norm_2_.png" download>Скачать флаг в векторном формате</a></p>
                </div>
            </div>
            <p><img src="img/670ea36d30a779c3cf05dc4a25129f0c_250_167.png" alt=""></p>
        </div>
        <h3>Полномочия</h3>
        <p>К полномочиям Администрации муниципального района относятся:</p>
        <div class="mt-5">
            <h3>Функции</h3>
            <p>Администрация осуществляет исполнительно-распорядительные функции по предметам ведения муниципального
                района Зианчуринский район Республики Башкортостан в пределах своей компетенции и в своей деятельности
                руководствуется Конституциями
                Российской Федерации и Республики Башкортостан, законодательством Российской Федерации и Республики
                Башкортостан, Уставом муниципального района Зианчуринский район Республики Башкортостан,
                нормативно-правовыми актами Совета муниципального района Зианчуринский район Республики Башкортостан и
                Администрации муниципального района Зианчуринский район Республики Башкортостан, а также настоящим
                Положением.</p>
        </div>
    </div>
@endsection
