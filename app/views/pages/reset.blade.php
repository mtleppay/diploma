@extends('layouts.main')
@section('content')


    <div style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info">
            <div class="panel-heading">
                <center><div class="panel-title">Сменить пароль</div></center>
            </div>
            <div class="panel-body">
                <form class="form-horizontal" method="post" action='/reset/{{Auth::user()->id}}'>
                    <div class="form-group">
                        <label for="password" class="col-md-3 control-label">Старый пароль</label>
                        <div class="col-md-9">
                            <input type="password" class="form-control" name="password" placeholder="Старый пароль">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-md-3 control-label">Новый пароль</label>
                        <div class="col-md-9">
                            <input type="password" class="form-control" name="new_password" placeholder="Повторите пароль">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-md-3 control-label">Повторите пароль</label>
                        <div class="col-md-9">
                            <input type="password" class="form-control" name="confirm_new_password" placeholder="Повторите пароль">
                        </div>
                    </div>

                    <div class="form-group">
                        <!-- Button -->
                        <div class="col-md-offset-3 col-md-9">
                            <button type="submit" class="btn btn-info"><i class="icon-hand-right"></i>Сменить пароль</button>

                        </div>
                    </div>
                </form>
            </div>
        </div>




    </div>
@stop