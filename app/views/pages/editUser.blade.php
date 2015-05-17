@extends('layouts.main')
@section('content')

	<div class = "container">
		<div class = "row">

			<form class="form-horizontal" method = "POST" action = "addProfile">

                <script type="text/javascript">
                    $(function () {
                        $('.datepicker').datepicker();

                    });
                </script>

                {{--<div class="form-group">--}}
                    {{--<label class="col-sm-2 control-label">Дата защиты</label>--}}
                    {{--<div class="col-sm-7">--}}
                        {{--<input type="text" class="form-control datepicker" name = "date" value = '{{ $user['date'] }}'>--}}
                    {{--</div>--}}
                {{--</div>--}}


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
                <label class="col-sm-2 control-label">Патронумик</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name = "patroNumic" value = '{{ $user['patroNumic'] }}'>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Специальность</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name = "major" value = '{{ $user['major'] }}'>
                </div>
            </div>

			  {{--<div class="form-group">--}}
			    {{--<label class="col-sm-2 control-label">Отчество</label>--}}
			    {{--<div class="col-sm-7">--}}
			      {{--<input type="text" class="form-control" name = "thirdName" value = '{{ $user['thirdName'] }}'>--}}
			    {{--</div>--}}
			  {{--</div>--}}

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
			    <div class="col-sm-offset-2 col-sm-10">
			      <button type="submit" class="btn btn-success">Сохранить</button>
			    </div>
			  </div>


			</form>
		</div>
	</div>
@stop