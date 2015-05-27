@extends('layouts.main')
@section('content')


    <div class="container">
        <div class="row">
            <a href = "/students/{{$user['id']}}/report1" type ="button" class ="btn btn-info btn-lg" target="_blank">Appendix 1</a>
            <a href = "/students/{{$user['id']}}/report2" type ="button" class ="btn btn-info btn-lg" target="_blank">Appendix 2</a>
            <a href = "/students/{{$user['id']}}/report3" type ="button" class ="btn btn-info btn-lg" target="_blank">Appendix 3</a>
        </div>
    </div>&nbsp

    <div class="container">
        <div class="row">
            <a href = "/students/report1all" type ="button" class ="btn btn-info btn-lg" target="_blank">Appendix 1 (all)</a>
            <a href = "/students/report2all" type ="button" class ="btn btn-info btn-lg" target="_blank">Appendix 2 (all)</a>
            <a href = "/students/report3all" type ="button" class ="btn btn-info btn-lg" target="_blank">Appendix 3 (all)</a>
        </div>
    </div>

@stop