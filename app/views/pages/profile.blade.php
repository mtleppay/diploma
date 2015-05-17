@extends('layouts.main')
@section('content')

	<div class = "container-fluid">
		<div class="profiles">
			<div class="row">
				<div class="col-md-8" style = "padding-left: 80px">
					<div class="single-profile-info">
						<div class="row">
							<div class="col-md-12">
								<h2>{{$user->firstName}}</h2>
							</div>
						</div>
						<div class="row">
							<div class="col-md-9">
								<table class="table table-bordered" border="0">
									<tr>
                                        <th>Дата защиты</th>
										<th>Имя</th>
										<th>Фамилия</th>
                                        <th>Патронумик</td>
                                        <th>Специальность</td>
										<th>Тема(русс)</th>
										<th>Тема(каз)</th>
										<th>Тема(англ)</th>
										<th>Руководитель</th>
										<th>Вопрос1</th>
										<th>Вопрос2</th>
										<th>Вопрос3</th>
										<th>Вопрос4</th>
										<th>Вопрос5</th>
                                        <th>Вопрос6</th>
                                        <th>Вопрос7</th>
										<th>Оценка1</th>
                                        <th>Оценка2</th>
                                        <th>Оценка3</th>
                                        <th>Оценка4</th>
                                        <th>Оценка5</th>
                                        <th>Оценка6</th>
                                        <th>Оценка7</th>
                                        <th>Итоговая оценка</th>
                                        <th>Оценка за гос Экзамен</th>

									</tr>
									<tr>
                                        <td>{{$user->date}}</td>
										<td>{{$user->firstName}}</td>
										<td>{{$user->lastName}}</td>
                                        <td>{{$user->patroNumic}}</td>
                                        <td>{{$user->major}}</td>
										<td>{{$user->temaRus}}</td>
										<td>{{$user->temaKaz}}</td>
										<td>{{$user->temaEn}}</td>
										<td>{{$user->rukovoditel}}</td>
										<td>{{$user->vopros1}}</td>
										<td>{{$user->vopros2}}</td>
										<td>{{$user->vopros3}}</td>
										<td>{{$user->vopros4}}</td>
										<td>{{$user->vopros5}}</td>
                                        <td>{{$user->vopros6}}</td>
                                        <td>{{$user->vopros7}}</td>
										<td>{{$user->ocenka1}}</td>
                                        <td>{{$user->ocenka2}}</td>
                                        <td>{{$user->ocenka3}}</td>
                                        <td>{{$user->ocenka4}}</td>
                                        <td>{{$user->ocenka5}}</td>
                                        <td>{{$user->ocenka6}}</td>
                                        <td>{{$user->ocenka7}}</td>
                                        <td>{{$user->ocenkaTotal}}</td>
                                        <td>{{$user->ocenkaZaGosy}}</td>
									</tr>
								</table>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
							<?php
							echo 
							'<form method = "get" action = "/profile/' . Auth::user()->id . '/edit">' .  
							' <input class = "btn btn-primary" type ="submit" value = " Редактировать профаил">' .
							'</form>'
							 ?>
							
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop