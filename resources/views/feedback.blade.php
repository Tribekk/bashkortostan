@extends('welcome')
@section('content')
    <div class="container my-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb p-3 bg-body-tertiary rounded-3">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Главная</a></li>
                <li class="breadcrumb-item"><a href="{{route('news')}}">Пресс-центр</a></li>
                <li class="breadcrumb-item active" aria-current="page">Обратная связь</li>
            </ol>
        </nav>
    </div>
    <div class="container mt-3 bg-white py-5 rounded-5">
        <div class="text-center">
            <img src="{{asset('img/c6a84e9e937eca30ab61ba69b38f9c72_250_333.png')}}" alt="">
            <h1>Заполните форму обратной связи</h1>
        </div>
        <form action="" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-floating">
                <input type="text" class="form-control @error('title') is-invalid @enderror" value="{{old('title')}}" name="title" id="floatingTitle" placeholder="Заголовок" required>
                <label for="floatingTitle" style="color: black">Тема обращения</label>
            </div>
            @error('title')
            <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror

            <div class="form-floating mt-3">
                <select class="form-select" id="floatingSelect" name="destination" aria-label="Floating label select example">
                    <option selected>На усмотрение модератора</option>
                    <option value="1">Глава Республики Башкортостан</option>
                    <option value="2">Правительство Республики Башкортостан</option>
                    <option value="3">Министрество здравоохранения РБ</option>
                </select>
                <label for="floatingSelect">Первичный адресат</label>
            </div>

            <div class="form-floating mt-3">
                <textarea class="form-control" placeholder="Leave a comment here" name="body" id="floatingTextarea2" style="height: 100px" required></textarea>
                <label for="floatingTextarea2">Текст обращения</label>
            </div>

            <div class="mt-3">
                <label for="formFileLg" class="form-label">Вложенные файлы</label>
                <input class="form-control form-control-lg" id="formFileLg" type="file" name="files" multiple>
            </div>

            <div class="form-floating mt-3">
                <input type="text" class="form-control @error('FIO') is-invalid @enderror"  name="FIO" id="floatingFIO" placeholder="FIO" required>
                <label for="floatingFIO" style="color: black">Фамилия Имя Отчество</label>
                @error('FIO')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-floating mt-3">
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email')}}" id="floatingInput" placeholder="name@example.com" required>
                <label for="floatingInput" style="color: black">Email</label>
            </div>
            @error('email')
            <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror

            <button type="submit" class="btn btn-primary mt-3">Отправить</button>
        </form>
    </div>
@endsection
