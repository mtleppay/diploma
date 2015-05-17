@extends('layouts.main')
@section('content')

	<div class = "container">
		<div class = "row">

			<form class="form-horizontal" method = "POST" action = "/students/edit/{{$user->id}}">

			  <div class="form-group">
			    <label class="col-sm-2 control-label">Имя</label>
			    <div class="col-sm-7">
			      <input type="text" class="form-control" name = "firstName" value = '{{ $user['firstName'] }}'>
			    </div>
			  </div>

			  <div class="form-group">
			    <label class="col-sm-2 control-label">Фамилия</label>
			    <div class="col-sm-7">
			      <input type="text" class="form-control" name = "lastName" value = '{{ $user['lastName'] }}'>
			    </div>
			  </div>

			  <div class="form-group">
			    <label class="col-sm-2 control-label">Отчество</label>
			    <div class="col-sm-7">
			      <input type="text" class="form-control" name = "thirdName">
			    </div>
			  </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Патронумик</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" name = "patroNumic" value = '{{$user['patroNumic']}}'>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Специальность</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" name = "major" value = '{{ $user['major'] }}'>
                    </div>
                </div>

			  <div class="form-group">
			    <label class="col-sm-2 control-label">Тема(русс)</label>
			    <div class="col-sm-7">
			      <input type="text" class="form-control" name = "temaRus" value = '{{ $user['temaRus'] }}'>
			    </div>
			  </div>

			  <div class="form-group">
			    <label class="col-sm-2 control-label">Тема(каз)</label>
			    <div class="col-sm-7">
			      <input type="text" class="form-control" name = "temaKaz" value = '{{ $user['temaKaz'] }}'>
			    </div>
			  </div>

			  <div class="form-group">
			    <label class="col-sm-2 control-label">Тема(англ)</label>
			    <div class="col-sm-7">
			      <input type="text" class="form-control" name = "temaEn" value = '{{ $user['temaEn'] }}'>
			    </div>
			  </div>

			  <div class="form-group">
			    <label class="col-sm-2 control-label">Руководитель</label>
			    <div class="col-sm-7">
			      <input type="text" class="form-control" name = "rukovoditel" value = '{{ $user['rukovoditel'] }}'>
			    </div>
			  </div>

			  <div class="form-group">
			    <label class="col-sm-2 control-label">Вопрос1</label>
			    <div class="col-sm-7">
			      <input type="text" class="form-control" name = "vopros1" value = '{{ $user['vopros1'] }}'>
			    </div>
			  </div>

			  <div class="form-group">
			    <label class="col-sm-2 control-label">Вопрос2</label>
			    <div class="col-sm-7">
			      <input type="text" class="form-control" name = "vopros2" value = '{{ $user['vopros2'] }}'>
			    </div>
			  </div>

			  <div class="form-group">
			    <label class="col-sm-2 control-label">Вопрос3</label>
			    <div class="col-sm-7">
			      <input type="text" class="form-control" name = "vopros3" value = '{{ $user['vopros3'] }}'>
			    </div>
			  </div>

			  <div class="form-group">
			    <label class="col-sm-2 control-label">Вопрос4</label>
			    <div class="col-sm-7">
			      <input type="text" class="form-control" name = "vopros4" value = '{{ $user['vopros4'] }}'>
			    </div>
			  </div>

			  <div class="form-group">
			    <label class="col-sm-2 control-label">Вопрос5</label>
			    <div class="col-sm-7">
			      <input type="text" class="form-control" name = "vopros5" value = '{{ $user['vopros5'] }}'>
			    </div>
			  </div>

			  <div class="form-group">
			    <label class="col-sm-2 control-label">Оценка</label>
			    <div class="col-sm-7">
			      <input type="text" class="form-control" name = "ocenkaTotal" value = '{{ $user['ocenkaTotal'] }}'>
			    </div>
			  </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Оценка За Госы</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name = "ocenkaZaGosy" value = '{{ $user['ocenkaZaGosy'] }}'>
                </div>
            </div>
			  


			 <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      <button type="submit" class="btn btn-primary">Сохранить</button>
			    </div>
			  </div>


			</form>
		</div>
	</div>
@stop