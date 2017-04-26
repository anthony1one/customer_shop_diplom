@extends('main')

@section('title', 'Главная')

@section('jumbotron')

    <div class="jumbotron">
        <h1 align="center"><b>#CUSTOMERSHOP</b></h1>
        <br>
        <h2 align="center">Добро пожаловать в магазин Customer Shop!</h2>
        <br><br>
        <div class="container">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <hr>
            <blockquote class="blockquote-reverse">
                Назначение философии не в умозрительных догадках и построениях картины мира, а в раскрытии того, как людям следует жить, чем руководствоваться, как оказывать воздействие на других и на самого себя. Повседневная жизнь человека – это искусство. Основное познание должно быть направлено на себя, на деятельность своей души по поиску истины и смысла жизни.
                <footer>Сократ</footer>
            </blockquote>

            <br>
            <p><a href="/about" class="btn btn-primary btn-lg">Узнать о нас больше &raquo;</a></p>
        </div>
    </div>
    
@endsection

@section('content')
    
    <h1 align="center">#АКЦИИ</h1><br>
    <p align="center">
        <a href="#">
            <img class=img-responsive" src="img/main/main-1.png" id="main_img">
        </a>
    </p>
    <nav aria-label="...">
        <ul class="pager">
        <li><button class="btn btn-primary" id="prev_main_img"><span class="glyphicon glyphicon-chevron-left"></span></button></li>
        <li><button class="btn btn-primary" id="next_main_img"><span class="glyphicon glyphicon-chevron-right"></button></li>
      </ul>
    </nav>      

    <div class="row row-centered">
        <hr>
        <h1>#СЕРВИС</h1><br>
        <div class="col-md-3 col-centered">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title"><span class="glyphicon glyphicon-home"> Доставка</h3>
              </div>
              <div class="panel-body">
                Ультраскоростная доставка до 24 часов по Москве и до 48 часов по Московской области!
              </div>
            </div>
        </div>
        <div class="col-md-3 col-centered">
            <div class="panel panel-danger">
              <div class="panel-heading">
                <h3 class="panel-title"><span class="glyphicon glyphicon-remove-circle"> Никакого хамства</span></h3>
              </div>
              <div class="panel-body">
                В сети наших магазинов работают только сотрудники прошедшие наш <b>тест на адекватность!</b>
              </div>
            </div>
        </div>
        <div class="col-md-3 col-centered">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title"><span class="glyphicon glyphicon-wrench"> Ремонт</span></h3>
              </div>
              <div class="panel-body">
                Что-то сломалось? Не отремонтировали за 72 часа? Не беда! Поменяем на новое! 
              </div>
            </div>
        </div>  
    </div>
    
    <div class="row row-centered">
        <hr>
        <h1>#РАБОТА</h1>
        <h2>Ищешь <b>интерессную работу</b> с карьерным ростом?</h2>
        <div class="col-md-10 col-md-offset-1">
            <div class="panel-group" id="panel-work">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <button class="btn btn-primary btn-block" data-toggle="collapse" data-parent="#panel-work" data-target="#work1">Почему работать у нас интерессно?</button>
                    </div>
                    <div id="work1" class="collapse">
                        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <button class="btn btn-primary btn-block" data-toggle="collapse" data-parent="#panel-work" data-target="#work2">Могу ли я рассчитывать на карьерный рост?</button>
                    </div>
                    <div id="work2" class="collapse">
                        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <button class="btn btn-primary btn-block" data-toggle="collapse" data-parent="#panel-work" data-target="#work3">Разве так бывает, что работа и интересна и хорошо оплачиваема?</button>
                    </div>
                    <div id="work3" class="collapse">
                        <div class="panel-body">
                            Да, <b>у нас бывает</b>.
                            <hr>
                            Чтобы не быть многословными, предлагаем тебе оставить свой номер телефона
                            <br>
                            <b>Ты сам лично сможешь задать все вопросы нашему HR-менеджеру</b>
                            <hr>
                            <form class="form-horizontal">
                                <div class="form-group">
                                    <label for="name" class="control-label col-md-4">Имя</label>
                                    <div class="col-md-4">
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="phone" class="control-label col-md-4">Телефон</label>
                                    <div class="col-md-4">
                                        <input type="text" name="phone" class="form-control">
                                    </div>
                                </div>
                                <input type="submit" class="btn btn-success" name="">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr>
    <div class="row row-centered">
        <div class="col-md-4 col-centered">
        <span class="glyphicon glyphicon-envelope" style="font-size: 20px"></span>
            Подпишитесь на нас чтобы получать уведомления!
        </div>
        <div class="col-md-4 col-centered">
            <form class="form-inline">
                <div class="form-group">
                    <label for="email"> </label>
                    <input type="email" id="name" name="email" class="form-control" placeholder="Введите email">
                </div>
                <button class="btn btn-primary">Отправить</button>
            </form>
        </div>
    </div>

@endsection