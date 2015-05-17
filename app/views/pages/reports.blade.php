@extends('layouts.main')
@section('content')


    <div class="container">
        <div class="row">
            <a href = "/students/{{$user['id']}}/report1" type ="button" class ="btn btn-info btn-lg" target="_blank">Appendix 1</a>
            <a href = "/students/{{$user['id']}}/report2" type ="button" class ="btn btn-info btn-lg" target="_blank">Appendix 2</a>
            <a href = "/students/{{$user['id']}}/report3" type ="button" class ="btn btn-info btn-lg" target="_blank">Appendix 3</a>
        </div>
    </div>



@stop