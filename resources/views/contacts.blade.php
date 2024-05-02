@extends('welcome')
@section('content')
    <div class="container my-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb p-3 bg-body-tertiary rounded-3">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Главная</a></li>
                <li class="breadcrumb-item"><a href="{{route('about')}}">Админисрация</a></li>
                <li class="breadcrumb-item active" aria-current="page">Контакты и реквизиты</li>
            </ol>
        </nav>
    </div>
    <div class="container mt-3 bg-white py-5 rounded-5">
        <h1>Контакты и реквизиты</h1>
        <div class="container m-5 mx-auto p-2">
            <table class="mx-auto p-2">
                <th class="mx-5 px-5" colspan="2"><h2>Контакты</h2></th>
                <tr>
                    <td class="px-5 py-2">Наименование организации</td>
                    <td class="px-5 py-2">Муниципальный район Зианчуринский район Республики Башкортостан</td>
                </tr>
                <tr>
                    <td class="px-5 py-2">Юридический адрес</td>
                    <td class="px-5 py-2">453380, Республика Башкортостан, Зианчуринский район, с. Исянгулово, ул.
                        Советская,
                        д. 3
                    </td>
                </tr>
                <tr>
                    <td class="px-5 py-2">Почтовый адрес</td>
                    <td class="px-5 py-2">453380, Республика Башкортостан, Зианчуринский район, с. Исянгулово, ул.
                        Советская,
                        д. 3
                    </td>
                </tr>
                <tr>
                    <td class="px-5 py-2">Телефон приемной</td>
                    <td class="px-5 py-2">+7(347)852-14-16</td>
                </tr>
                <tr>
                    <td class="px-5 py-2">Телефон канцелярии</td>
                    <td class="px-5 py-2">+7(347)852-14-15</td>
                </tr>
                <tr>
                    <td class="px-5 py-2">Факс</td>
                    <td class="px-5 py-2">+7(347)852-14-15</td>
                </tr>
                <tr>
                    <td class="px-5 py-2">Email</td>
                    <td class="px-5 py-2">
                        <green>adm17@bashkortostan.ru</green>
                    </td>
                </tr>
                <tr>
                    <td class="px-5 py-2">Режим работы</td>
                    <td class="px-5 py-2">Понедельник- Пятница: 09.00-18.00
                        Обед: 13:00-14:00
                        Выходные дни: Суббота, Воскресенье.
                    </td>
                </tr>
            </table>
        </div>
        <div class="container m-5 mx-auto p-2">
            <table class="mx-auto p-2">
                <th class="mx-5 px-5" colspan="2"><h2>Платёжные реквизиты</h2></th>
                <tr>
                    <td class="px-5 py-2">ИНН</td>
                    <td class="px-5 py-2">0222006638</td>
                </tr>
                <tr>
                    <td class="px-5 py-2">КПП</td>
                    <td class="px-5 py-2">022201001</td>
                </tr>
                <tr>
                    <td class="px-5 py-2">ОГРН</td>
                    <td class="px-5 py-2">1050201713836</td>
                </tr>
                <tr>
                    <td class="px-5 py-2">ОКПО</td>
                    <td class="px-5 py-2">01689564</td>
                </tr>
                <tr>
                    <td class="px-5 py-2">ОКАТО</td>
                    <td class="px-5 py-2">80226816000</td>
                </tr>
                <tr>
                    <td class="px-5 py-2">ОКТМО</td>
                    <td class="px-5 py-2">80626416</td>
                </tr>
                <tr>
                    <td class="px-5 py-2">Банк</td>
                    <td class="px-5 py-2">
                        <green>ГРКЦ НБ Банка России</green>
                    </td>
                </tr>
                <tr>
                    <td class="px-5 py-2">БИК</td>
                    <td class="px-5 py-2">048073001</td>
                </tr>
                <tr>
                    <td class="px-5 py-2">Расчетный счет</td>
                    <td class="px-5 py-2">40101810100000010001</td>
                </tr>
            </table>
        </div>
    </div>
@endsection
