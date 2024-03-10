<div class="container mt-5">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('home')}}"><img
                    src="../img/c6a84e9e937eca30ab61ba69b38f9c72_55_73.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Переключатель навигации">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 p-3">
                    <li class="nav-item dropdown p-2">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                           aria-expanded="false">
                            Муниципальный район
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('district')}}">О районе</a></li>
                            <li><a class="dropdown-item" href="{{route('settlements')}}">Городские и сельские
                                    поселения</a></li>
                            <li><a class="dropdown-item" href="{{route('phones')}}">Телефоны района</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown p-2">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                           aria-expanded="false">
                            Администрция
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('about')}}">Об администрции</a></li>
                            <li><a class="dropdown-item" href="{{route('about_structure')}}">Структура</a></li>
                            <li><a class="dropdown-item" href="{{route('isystems')}}">Информационные системы</a></li>
                            <li><a class="dropdown-item" href="{{route('contacts')}}">Контакты и реквезиты</a></li>
                            <li><a class="dropdown-item" href="about:blank#blocked">Старая версия сайта</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown p-2">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                           aria-expanded="false">
                            Совет
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('council')}}">О совете</a></li>
                            <li><a class="dropdown-item" href="{{route('councilstructure')}}">Структура</a></li>
                            <li><a class="dropdown-item" href="{{route('deputies')}}">Депутаты</a></li>
                            <!--  <li><a class="dropdown-item" href="#">Документы совета</a></li> -->
                            <li><a class="dropdown-item" href="#">Контакты и реквезиты</a></li>
                        </ul>
                    </li>
                    <!--<li class="nav-item dropdown p-2">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                           aria-expanded="false">
                            Деятельность
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Услуги, предоставляемые в электронном ввиде</a>
                            </li>
                            <li><a class="dropdown-item" href="#">Архив</a></li>
                            <li><a class="dropdown-item" href="#">Жилищн-комунальное хозяйство</a></li>
                            <li><a class="dropdown-item" href="#">Защита прав потребителя</a></li>
                            <li><a class="dropdown-item" href="#">Культура</a></li>
                            <li><a class="dropdown-item" href="#">Муниципальные услуги</a></li>
                            <li><a class="dropdown-item" href="#">Образование</a></li>
                            <li><a class="dropdown-item" href="#">Предпринимателю и инвестору</a></li>
                            <li><a class="dropdown-item" href="#">Противодействие корупции</a></li>
                            <li><a class="dropdown-item" href="#">Сельское хозяйство</a></li>
                            <li><a class="dropdown-item" href="#">Все виды деятельности</a></li>
                        </ul>
                    </li>-->
                    <!--<li class="nav-item dropdown p-2">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                           aria-expanded="false">
                            Гражданам
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Написать обращение</a></li>
                            <li><a class="dropdown-item" href="#">Вопросы и ответы</a></li>
                        </ul>
                    </li>-->
                    <!-- <li class="nav-item dropdown p-2">
                         <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                             Документы
                         </a>
                         <ul class="dropdown-menu">
                             <li><a class="dropdown-item" href="#">Действующие документы</a></li>
                             <li><a class="dropdown-item" href="#">Проекты документов</a></li>
                             <li><a class="dropdown-item" href="#">Планы</a></li>
                             <li><a class="dropdown-item" href="#">Отчёты</a></li>
                             <li><a class="dropdown-item" href="#">Результаты проверок</a></li>
                             <li><a class="dropdown-item" href="#">Утратевшие силу</a></li>
                             <li><a class="dropdown-item" href="#">Прочие документы</a></li>
                             <li><a class="dropdown-item" href="#">Все документы</a></li>
                         </ul>
                     </li>-->
                    <!--  <li class="nav-item dropdown p-2">
                          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                             aria-expanded="false">
                              Пресс-центр
                          </a>
                          <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Новости</a></li>
                              <li><a class="dropdown-item" href="#">События</a></li>
                              <li><a class="dropdown-item" href="#">Доклад ивыступления</a></li>
                              <li><a class="dropdown-item" href="#">Прямая речь</a></li>
                              <li><a class="dropdown-item" href="#">Фотогалерея</a></li>
                              <li><a class="dropdown-item" href="#">Видеогалерея</a></li>
                              <li><a class="dropdown-item" href="#">Опросы</a></li>
                          </ul>
                      </li>-->
                </ul>
            </div>
        </div>
    </nav>
</div>
