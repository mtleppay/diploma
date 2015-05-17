@extends('layouts.main')
@section('content')



    <div class="container glavnyi">

        <table class = "table1" width= "1014">
            <tr>
                <td colspan = "2" class = "appendix">Appendix 3</td>
            </tr>

            <tr>
                <td colspan = "2" class = "minutes"><b>MINUTES № <span class = "minutesSpan">{{$user->minutes}}</span></b></td>
            </tr>
            <tr>
                <td colspan = "2" class = "meetingOf"><b>Meeting of the State Examination Commission</b></td>
            </tr>
            <tr>
                <td colspan = "2" class = "date">Date: <<<span style = "text-decoration: underline">{{$user->date}}</span>>>
                    {{--<span style = "text-decoration: underline">May</span> 2015 from--}}
                    {{--<span style = "text-decoration: underline">15</span> from--}}
                    {{--<span style = "text-decoration: underline">14:00</span> till--}}
                    {{--<span style = "text-decoration: underline">17:00</span>--}}
                </td>
            </tr>

            <tr>
                <td colspan = "2" class = "attendees">Agenda: the award of the bachelor academic degree and/or confer the qualification to the student who has passed all state examinations and defended the final thesis (project).</td>
            </tr>
            <tr>
                <td colspan = "2" class = "attendees">Attendees: </td>
            </tr>
            <tr>
                <td colspan = "2" class = "attendees">Chairperson of the State Examination Commission </td>
            </tr>
            <tr>
                <td colspan = "2" class = "attendeesInfo">Atymtayeva Lyazzat Bakhytovna</td>
            </tr>
            <tr>
                <td colspan = "2" style = "text-align: center"><i>(lastname, first name, patronymic)</i></td>
            </tr>
            <tr>
                <td colspan = "2">Members of the Commission:</td>
            </tr>
            <tr>
                <td colspan = "2" style = "text-align: center;border-bottom: 2px solid black">Serbin V. V.</td>
            </tr>
            <tr>
                <td colspan = "2" style = "text-align: center"><i>(lastname, first name, patronymic)</i></td>
            </tr>
            <tr>
                <td colspan = "2" style = "text-align: center;border-bottom: 2px solid black">Satybaldiyeva R. Zh.</td>
            </tr>
            <tr>
                <td colspan = "2" style = "text-align: center"><i>(lastname, first name, patronymic)</i></td>
            </tr>
            <tr>
                <td colspan = "2" style = "text-align: center;border-bottom: 2px solid black">Moldagulova A. N.</td>
            </tr>
            <tr>
                <td colspan = "2" style = "text-align: center"><i>(lastname, first name, patronymic)</i></td>
            </tr>
            <tr>
                <td colspan = "2" style = "text-align: center;border-bottom: 2px solid black">Kuandykov A. A.</td>
            </tr>
            <tr>
                <td colspan = "2" style = "text-align: center"><i>(lastname, first name, patronymic)</i></td>
            </tr>
            <tr>
                <td colspan = "2" style = "text-align: center;border-bottom: 2px solid black">Omarov B. S.</td>
            </tr>
            <tr>
                <td colspan = "2" style = "text-align: center"><i>(lastname, first name, patronymic)</i></td>
            </tr>
            <tr>
                <td colspan = "2" style = "text-align: center;border-bottom: 2px solid black">Orazbekov S. K.</td>
            </tr>
            <tr>
                <td colspan = "2" style = "text-align: center"><i>(lastname, first name, patronymic)</i></td>
            </tr>
            <tr>
                <td colspan = "2" style = "text-align: center;border-bottom: 2px solid black">Syrymbayeva A. M.</td>
            </tr>
            <tr>
                <td colspan = "2" style = "text-align: center"><i>(lastname, first name, patronymic)</i></td>
            </tr>
            <tr>
                <td colspan = "2" style = "text-align: center;border-bottom: 2px solid black">Saimassayeva Sh.M.</td>
            </tr>
            <tr>
                <td colspan = "2" style = "text-align: center"><i>(lastname, first name, patronymic)</i></td>
            </tr>
            <tr>
                <td colspan = "2">Student:__________________________________{{$user->lastName}}&nbsp{{$user->firstName[0]}}______________________________________________</td>
            </tr>
            <tr>
                <td colspan = "2" style = "text-align: center"><i>(lastname, first name, patronymic)</i></td>
            </tr>
            <tr>
                <td colspan = "2">passed all state examinations and defended the final thesis (project) with the </td>
            </tr>
            <tr>
                <td colspan = "2">grades:____________________________________{{$user->ocenkaZaGosy}}&nbsp,&nbsp{{$user->ocenkaTotal}}_________________________________________________</td>
            </tr>
            <tr>
                <td colspan = "2" style = "text-align: center"><i>(the subjects, final thesis (project)</i></td>
            </tr>
            <tr>
                <td colspan = "2" style = "text-align: center;border-bottom: 2px solid black">12/05/2015 &nbsp,&nbsp{{$user->date}}</td>
            </tr>
            <tr>
                <td colspan = "2" style = "text-align: center"><i>(the grade according to the Alphabetic Grading Scale, date of examinations))</i></td>
            </tr>
            <tr>
                <td colspan = "2">Members admitted that the student passed all state examinations covered by the curriculum and defended the final thesis (project).</td>
            </tr>
            <tr>
                <td colspan = "2">Members awarded the student ________________________{{$user->lastName}}&nbsp{{$user->firstName[0]}}_____________________________</td>
            </tr>
            <tr>
                <td colspan = "2" style = "text-align: center"><i>(lastname, initials)</i></td>
            </tr>
            <tr>
                <td colspan = "2">the qualification_____________bachelor______________in the major</td>
            </tr>
            <tr>
                <td colspan = "2" style = "text-align: center;border-bottom: 2px solid black">5B070300 - Information systems</td>
            </tr>
            <tr>
                <td colspan = "2" style = "text-align: center"><i>(major and major code)</i></td>
            </tr>
            <tr>
                <td colspan = "2" style = "padding-top: 90px">Notes of the State Examination Commission Members:</td>
            </tr>
            <tr>
                <td colspan ="2" class = "option3">.</td>
            </tr>
            <tr>
                <td colspan ="2" class = "option4">.</td>
            </tr>
            <tr>
                <td colspan ="2" class = "option5">.</td>
            </tr>
            <tr>
                <td colspan ="2" class = "option5">.</td>
            </tr>
            <tr>
                <td colspan = "2">to award Diploma of Higher Education_______________ordinary degree________________</td>
            </tr>
            <tr>
                <td colspan = "2" style = "text-align: center"><i>(ordinary or ordinary degree)</i></td>
            </tr>
            <tr>
                <td colspan ="2" style = "padding-top: 10px"><b>Chairperson</b></td>
            </tr>

            <tr>
                <td colspan = "2" class = "signes">Signed: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp _________________________  Atymtayeva L.B.</td>
            </tr>
            <tr>
                <td colspan ="2"><b>Members of the Commission</b></td>
            </tr>
            <tr>
                <td colspan = "2" class = "signes">Signed: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp _________________________  Serbin V.V.</td>
            </tr>
            <tr>
                <td colspan = "2" class = "signes"> &nbsp&nbsp
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp_________________________  Satybaldiyeva D. Zh.</td>
            </tr>
            <tr>
                <td colspan = "2" class = "signes"> &nbsp&nbsp
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp_________________________  Moldagulova A. N.</td>
            </tr>
            <tr>
                <td colspan = "2" class = "signes"> &nbsp&nbsp
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp_________________________  Kuandykov A.A.</td>
            </tr>
            <tr>
                <td colspan = "2" class = "signes"> &nbsp&nbsp
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp_________________________  Omarov B.S.</td>
            </tr>
            <tr>
                <td colspan = "2" class = "signes"> &nbsp&nbsp
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp_________________________  Orazbekov S.K.</td>
            </tr>
            <tr>
                <td colspan ="2"><b>Secretary</b></td>
            </tr>
            <tr>
                <td colspan = "2" class = "signes">Signed: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp _________________________  Syrymbayeva A.M.</td>
            </tr>
            <tr>
                <td colspan = "2" class = "signes"> &nbsp&nbsp
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp_________________________  Saimassayeva Sh.M.</td>
            </tr>
        </table>


        <br/>
        <br/>
        <br/><br/>


</div>

@stop