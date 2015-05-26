@extends('layouts.main')
@section('content')



    <form method = "POST" action = "/students/search">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <div class="form-group">
                        <div class='form-group date'>
                            <input type='text' class="form-control datepicker" name = "date"/>
                            {{--<span class="input-group-addon">--}}
                            {{--<span class="fa fa-calendar">--}}
                            {{--</span>--}}
                            {{--</span>--}}
                        </div>
                    </div>
                </div>
                <script type="text/javascript">


                    $('.datepicker').datepicker({format: 'dd/mm/yyyy'}).on('changeDate', function(){
                        $(this).datepicker('hide');

                    });





                </script>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <center>
                    <button type="submit" class="btn btn-default search-button"><strong>Поиск</strong></button>
                </center>
            </div>
        </div>

    </form>

    <div class = "row" style = "padding-left: 30px;padding-top: 40px">

        <p class = "inline">Нажмите <span type = "button" class="fa-stack fa-lg pencilIcon">
              <i class="fa fa-square-o fa-stack-2x"></i>
              <i class="fa fa-pencil fa-stack-1x"></i>
            </span> чтобы редактировать студента.
        </p>
        <p class = "inline">Нажмите <button class = "btn btn-success"><i class = "fa fa-floppy-o"></i></button> чтобы сохранить студента</p>
        <p class = "inline">Нажмите <button class = "btn btn-info"><i class = "fa fa-print"></i></button> чтобы распечатать отчет</p>
    </div>


    {{--<div class="container">--}}
    <div class = "row" style = "padding-left: 30px;padding-top: 40px">
        <table class="table table-bordered">

            <tr>
                @if(Auth::user()->role == 8)
                <th>Минуты</th>
                @endif
                <th>Дата защиты</th>
                <th>Фамилия</th>
                <th>Имя</th>

                {{--<td>Отчество</td>--}}
                <th>Специальность</th>
                <th>Тема</th>
                <!-- <td>Тема(русс)</td> -->
                <!-- <td>Тема(каз)</td> -->
                <!-- <td>Тема(англ)</td> -->
                <th>Руководитель</th>
                @if(Auth::user()->role == 8)
                    <th>Имя Рецендента</th>
                @endif
                @if(Auth::user()->role == 1 || Auth::user()->role == 8)
                    <th>Вопрос1</th>
                @endif
                @if(Auth::user()->role == 2 || Auth::user()->role == 8)
                    <th>Вопрос2</th>
                @endif
                @if(Auth::user()->role == 3 || Auth::user()->role == 8)
                    <th>Вопрос3</th>
                @endif
                @if(Auth::user()->role == 4 || Auth::user()->role == 8)
                    <th>Вопрос4</th>
                @endif
                @if(Auth::user()->role == 5 || Auth::user()->role == 8)
                    <th>Вопрос5</th>
                @endif
                @if(Auth::user()->role == 6 || Auth::user()->role == 8)
                    <th>Вопрос6</th>
                @endif
                @if(Auth::user()->role == 7 || Auth::user()->role == 8)
                    <th>Вопрос7</th>
                @endif
                @if(Auth::user()->role == 1 || Auth::user()->role == 8)
                    <th>Оценка1</th>
                @endif
                @if(Auth::user()->role == 2 || Auth::user()->role == 8)
                    <th>Оценка2</th>
                @endif
                @if(Auth::user()->role == 3 || Auth::user()->role == 8)
                    <th>Оценка3</th>
                @endif
                @if(Auth::user()->role == 4 || Auth::user()->role == 8)
                    <th>Оценка4</th>
                @endif
                @if(Auth::user()->role == 5 || Auth::user()->role == 8)
                    <th>Оценка5</th>
                @endif
                @if(Auth::user()->role == 6 || Auth::user()->role == 8)
                    <th>Оценка6</th>
                @endif
                @if(Auth::user()->role == 7 || Auth::user()->role == 8)
                    <th>Оценка7</th>
                @endif
                @if(Auth::user()->role == 8)
                    <th>Оценка Руководителя</th>
                @endif
                @if(Auth::user()->role == 8)
                    <th>Оценка Рецендента</th>
                @endif
                <th>Средняя оценка</th>
                <th>Оценка За Госы</th>
                <th style = "vertical-align: middle;text-align: center;">Кнопки</th>




            </tr>

            @foreach($users as $user)
                @if($user->role == 0)




                    {{--<form class="form-horizontal" method = "POST" action = "/students/edit/{{$user->id}}">--}}
                    <tr>
                        @if(Auth::user()->role == 8)
                        <td>
                            <span id = "edit-minutes{{$user->id}}" type = "text" title = "Укажите № минут">{{$user->minutes}}</span>
                        </td>
                        @endif

                        <td>
                            <span id = "edit-date{{$user->id}}" type = "text" title = "Укажите дату      'DD/MM/YYYY'">{{$user->date}}</span>
                        </td>
                        <td>
                            <span id = "edit-lastname{{$user->id}}" type = "text" title = "Укажите вашу фамилию">{{$user->lastName}}</span>
                        </td>
                        <td>
                            <span id = "edit-firstname{{$user->id}}" type = "text" title = "Укажите ваше имя">{{$user->firstName}}</span>
                        </td>

                        {{--<td>{{$user->thirdName}}</td>--}}
                        <td>
                            <span id = "edit-patronumic{{$user->id}}" type = "text" title = "Укажите ваш патронумик">{{$user->patroNumic}}</span>
                            <br/>
                            <span id = "edit-major{{$user->id}}" type = "text" title = "Укажите вашу специальность">{{$user->major}}</span>
                        </td>
                        <td>
                            <table>
                                <tr>
                                    <td>
                                        <span id = "edit-temaRus{{$user->id}}" type = "text" title = "Укажите название темы(русс) ">{{$user->temaRus}}</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span id = "edit-temaKaz{{$user->id}}" type = "text" title = "Укажите название темы(Каз) ">{{$user->temaKaz}}</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span id = "edit-temaEn{{$user->id}}" type = "text" title = "Укажите название темы(Англ) ">{{$user->temaEn}}</span>
                                    </td>
                                </tr>

                            </table>
                        </td>

                        <td>
                            <span id = "edit-rukovoditel{{$user->id}}" type = "text" title = "Укажите руководителя">{{$user->rukovoditel}}</span>
                        </td>
                        @if(Auth::user()->role == 8)
                            <td>
                                <span id = "edit-recendentName{{$user->id}}" type = "text" title = "Укажите рецендента">{{$user->recendentName}}</span>
                            </td>
                        @endif



                        @if(Auth::user()->role == 1 || Auth::user()->role == 8)
                            <td>
                                <span id = "edit-vopros1{{$user->id}}" type = "text" title = "Задайте вопрос">{{$user->vopros1}}</span>
                            </td>
                        @endif

                        @if(Auth::user()->role == 2 || Auth::user()->role == 8)
                            <td>
                                <span id = "edit-vopros2{{$user->id}}" type = "text" title = "Задайте вопрос">{{$user->vopros2}}</span>
                            </td>
                        @endif

                        @if(Auth::user()->role == 3 || Auth::user()->role == 8)
                            <td>
                                <span id = "edit-vopros3{{$user->id}}" type = "text" title = "Задайте вопрос">{{$user->vopros3}}</span>
                            </td>
                        @endif

                        @if(Auth::user()->role == 4 || Auth::user()->role == 8)
                            <td>
                                <span id = "edit-vopros4{{$user->id}}" type = "text" title = "Задайте вопрос">{{$user->vopros4}}</span>
                            </td>
                        @endif

                        @if(Auth::user()->role == 5 || Auth::user()->role == 8)
                            <td>
                                <span id = "edit-vopros5{{$user->id}}" type = "text" title = "Задайте вопрос">{{$user->vopros5}}</span>
                            </td>
                        @endif

                        @if(Auth::user()->role == 6 || Auth::user()->role == 8)
                            <td>
                                <span id = "edit-vopros6{{$user->id}}" type = "text" title = "Задайте вопрос">{{$user->vopros6}}</span>
                            </td>
                        @endif

                        @if(Auth::user()->role == 7 || Auth::user()->role == 8)
                            <td>
                                <span id = "edit-vopros7{{$user->id}}" type = "text" title = "Задайте вопрос">{{$user->vopros7}}</span>
                            </td>
                        @endif

                        @if(Auth::user()->role == 1 || Auth::user()->role == 8)
                            <td>
                                <span id = "edit-ocenka1{{$user->id}}" type = "text" title = "Поставьте оценку">{{$user->ocenka1}}</span>
                            </td>
                        @endif

                        @if(Auth::user()->role == 2 || Auth::user()->role == 8)
                            <td>
                                <span id = "edit-ocenka2{{$user->id}}" type = "text" title = "Поставьте оценку">{{$user->ocenka2}}</span>
                            </td>
                        @endif

                        @if(Auth::user()->role == 3 || Auth::user()->role == 8)
                            <td>
                                <span id = "edit-ocenka3{{$user->id}}" type = "text" title = "Поставьте оценку">{{$user->ocenka3}}</span>
                            </td>
                        @endif

                        @if(Auth::user()->role == 4 || Auth::user()->role == 8)
                            <td>
                                <span id = "edit-ocenka4{{$user->id}}" type = "text" title = "Поставьте оценку">{{$user->ocenka4}}</span>
                            </td>
                        @endif

                        @if(Auth::user()->role == 5 || Auth::user()->role == 8)
                            <td>
                                <span id = "edit-ocenka5{{$user->id}}" type = "text" title = "Поставьте оценку">{{$user->ocenka5}}</span>
                            </td>
                        @endif

                        @if(Auth::user()->role == 6 || Auth::user()->role == 8)
                            <td>
                                <span id = "edit-ocenka6{{$user->id}}" type = "text" title = "Поставьте оценку">{{$user->ocenka6}}</span>
                            </td>
                        @endif

                        @if(Auth::user()->role == 7 || Auth::user()->role == 8)
                            <td>
                                <span id = "edit-ocenka7{{$user->id}}" type = "text" title = "Поставьте оценку">{{$user->ocenka7}}</span>
                            </td>
                        @endif
                        @if(Auth::user()->role == 8)
                            <td>
                                <span id = "edit-ocenkaRukovoditelya{{$user->id}}" type = "text" title = "Поставьте оценку">{{$user->ocenkaRukovoditelya}}</span>
                            </td>
                        @endif
                        @if(Auth::user()->role == 8)
                            <td>
                                <span id = "edit-ocenkaRecendenta{{$user->id}}" type = "text" title = "Поставьте оценку">{{$user->recendentOcenka}}</span>
                            </td>
                        @endif
                        {{--@if($user->ocenka1 != 0 || $user->ocenka2 != 0 || $user->ocenka3 != 0 || $user->ocenka4 != 0 || $user->ocenka5 != 0)--}}
                        <td>
                            <span id = "edit-ocenkaTotal{{$user->id}}" type = "text" title = "Поставьте оценку">{{$user->ocenkaTotal}}</span>
                        </td>
                        {{--@else--}}
                        {{--<td>--}}
                        {{--<span type = "text">-</span>--}}
                        {{--</td>--}}
                        {{--@endif--}}

                        <td>
                            <span id = "edit-ocenkaZaGosy{{$user->id}}" type = "text" title = "Поставьте оценку">{{$user->ocenkaZaGosy}}</span>
                        </td>
                        <td align="baseline">
                            <div style = "display: inline-block;width:130px">
                            <span type = "button" class="fa-stack fa-lg pencilIcon" onclick = "editThisStudent({{$user->id}})">
                              <i class="fa fa-square-o fa-stack-2x"></i>
                              <i class="fa fa-pencil fa-stack-1x"></i>
                            </span>

                                <button onclick = "sentRequest( {{$user->id . ',' . Auth::user()->role}} )" id = "saveButton{{$user->id}}" type="submit" class="btn btn-success"><i class="fa fa-floppy-o"></i></button>
                                @if(Auth::user()->role == 8)
                                <a href = "/students/{{$user['id']}}/reports" type ="button" class = "btn btn-info" target="_blank"><i class="fa fa-print"></i></a>
                                @endif
                            </div>
                        </td>

                        {{--<td><a href = "students/edit/{{$user['id']}}" type="button" class="btn btn-info">Сохранить</a></td>--}}

                    </tr>
                    {{--</form>--}}

                @endif
            @endforeach

        </table>

    </div>







@stop