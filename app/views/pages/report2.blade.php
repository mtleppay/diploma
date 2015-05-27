@extends('layouts.main')
@section('content')



    <div class="container glavnyi">

        <table class = "table1" width= "1014">
            <tr>
                <td colspan = "2" class = "appendix">Appendix 2</td>
            </tr>
            {{--<tr>--}}
                {{--<td colspan = "2" class = "toTheRules">to the Rules of students' continuous rating and </td>--}}
            {{--</tr>--}}
            {{--<tr>--}}
                {{--<td colspan = "2" class = "midEnd"> mid/end-of-term assessment in higher educational institutions</td>--}}
            {{--</tr>--}}
            {{--<tr>--}}
                {{--<td colspan = "2" class = "formLast">form</td>--}}
            {{--</tr>--}}
            <tr>
                <td colspan = "2" class = "minutes"><b>MINUTES № <span class = "minutesSpan">{{$user->minutes}}</span></b></td>
            </tr>
            <tr>
                <td colspan = "2" class = "meetingOf"><b>Meeting of the State Examination Commission</b></td>
            </tr>
            <tr>
                <td colspan = "2" class = "date">Date: <<<span style = "text-decoration: underline">{{$user->date}}</span>>>
                    {{--<span style = "text-decoration: underline">June</span> 20--}}
                    {{--<span style = "text-decoration: underline">13</span> from--}}
                    {{--<span style = "text-decoration: underline">10:00</span> till--}}
                    {{--<span style = "text-decoration: underline">18:00</span>--}}
                </td>
            </tr>
            <tr>
                <td colspan = "2" class = "agenda">Agenda: student’s final thesis (project) presentation </td>
            </tr>
            <tr>
                <td colspan = "2" class = "studentInfo">{{$user->firstName}} {{$user->lastName}}, {{$user->patroNumic}} - {{$user->major}}</td>
            </tr>
            <tr>
                <td colspan = "2" style = "text-align:center">
                    <i>(last name, first name, patronymic, major)</i>
                </td>
            </tr>
            <tr>
                <!-- <td width="300">on</td> -->
                <td width="130" style="border:none">on the topic:</td>
                <td colspan = "2" class = "researchMethods">{{$user->temaEn}}</td>

            </tr>
            <tr>
                <td colspan = "2" class = "attendees">Attendees: Chairperson of the State Examination Commission</td>
            </tr>
            <tr>
                <td colspan = "2" class = "attendeesInfo">Atymtayeva Lyazzat Bakhytovna</td>
            </tr>
            <tr>
                <td colspan = "2" style = "text-align:center"><i>(last name, first name, patronymic)</i></td>
            </tr>
            <tr>
                <td colspan = "2">Members of the Commission:</td>
            </tr>
            <tr>
                <td colspan = "2" style = "border-bottom: 2px solid black"> 1. Serbin V. V.</td>
            </tr>
            <tr>
                <td colspan = "2" style = "border-bottom: 2px solid black"> 2. Satybaldiyeva R. Zh.</td>
            </tr>
            <tr>
                <td colspan = "2" style = "border-bottom: 2px solid black"> 3. Moldagulova A. N.</td>
            </tr>
            <tr>
                <td colspan = "2" style = "border-bottom: 2px solid black"> 4. Kuandykov A. A.</td>
            </tr>
            <tr>
                <td colspan = "2" style = "border-bottom: 2px solid black"> 5. Omarov B. S.</td>
            </tr>
            <tr>
                <td colspan = "2" style = "border-bottom: 2px solid black"> 6. Orazbekov S. K.</td>
            </tr>
            <tr>
                <td colspan = "2" style = "border-bottom: 2px solid black"> 7. Syrymbayeva A.M.</td>
            </tr>
            <tr>
                <td colspan = "2" style = "border-bottom: 2px solid black"> 8. Saimassayeva Sh.M.</td>
            </tr>


            <tr>
                <td colspan = "2" class = "supervised">The final thesis (project) was supervised by</td>
            </tr>
            <tr>
                <td colspan = "2" class = "supervisedInfo">{{$user->rukovoditel}}</td>
            </tr>
            <tr>
                <td colspan = "2" style = "text-align:center"><i>(last name, first name, patronymic, science or academic degree)</i></td>
            </tr>
            <tr>
                <!-- <td width="300">on</td> -->
                <td width="130" style="border:none;">consulted by</td>
                <td colspan = "2" class = "consultedBy">{{$user->rukovoditel}}</td>
            </tr>

            <tr>
                <td colspan = "2" class = "professorIITUsenior">professor, IITU, senior lecturer</td>
            </tr>
            <tr>
                <td colspan = "2" style = "text-align:center"><i>(last name, science or academic degree, place of employment, position)</i></td>
            </tr>
            <tr>
                <td width="130" style="border:none;">expertized by</td>
                <td colspan = "2" class = "expertizedBy">{{$user->recendentName}} </td>
            </tr>
            {{--<tr>--}}
                {{--<td colspan = "2" style = "border-bottom: 2px solid black">Informatics and Management, MOE of RK, Ph.D., Professor</td>--}}
            {{--</tr>--}}
            <tr>
                <td colspan = "2" style = "text-align:center"><i>(last name, science or academic degree, place of employment, position)</i></td>
            </tr>
            <tr>
                <td colspan = "2" style = "padding-left:30px">The following materials were presented to the State Examination commission:</td>
            </tr>
            <tr>
                <td colspan = "2" style = "padding-left:30px">1) the explanatory and calculation report or text of the final thesis consisting of _78_ pages;</td>
            </tr>
            <tr>
                <td colspan = "2" style = "padding-left:30px">2) drawings, charts attached to the final thesis (project) consisting of _8_ pages;</td>
            </tr>
            <tr>
                <td colspan = "2" style = "padding-left:30px">3) the scientific supervisor’s letter of recommendation</td>
            </tr>
            <tr>
                <td colspan = "2" class = "recommendedToDef">recommended to defense</td>
            </tr>
            <tr>
                <td colspan = "2" style = "text-align:center"><i>(to be specified as “recommended to defense”)</i></td>
            </tr>
            <tr>
                <td colspan = "2" style = "padding-left:30px">4) the expertise with grade</td>
            </tr>
            <tr>
                <td colspan = "2" class = "grade">{{$user->recendentOcenka}}</td>
            </tr>
                <td colspan = "2" style = "text-align:center"><i>(the expertise’s grade to be pointed out)</i></td>
            </tr>

        </table>


        <br/>
        <table class = "table2" width= "1014">
            <tr>
                <td colspan = "2" style = "padding-left:30px">After presenting the final thesis (project) the student was asked the following</td>
            </tr>
            <tr>
                <td colspan = "2">questions over the period of  ___15__ minutes:</td>
            </tr>
            <tr>
                <td colspan = "2" class = "voprosNomerOdin">1. Satybaldiyeva  R.Zh. – {{$user->vopros1}}</td>
            </tr>
            <tr>
                <td colspan = "2" style = "text-align:center"><i>(last name and initial of the Commission member and the question asked)</i></td>
            </tr>
            <tr>
                <td colspan = "2" class = "voprosNomerOdin">2. Moldagulova A.N. – {{$user->vopros2}}</td>
            </tr>

            <tr>
                <td colspan = "2" style = "text-align:center"><i>(last name and initial of the Commission member and the question asked)</i></td>
            </tr>
            <tr>
                <td colspan="2" class = "voprosNomerOdin">3.Kuandykov A.A - {{$user->vopros3}} </td>
                <td colspan = "2" class = "question2"></td>
            </tr>
            <tr>
                <td colspan = "2" style = "text-align:center"><i>(last name and initial of the Commission member and the question asked)</i></td>
            </tr>
            <tr>
                <td colspan="2" class = "voprosNomerOdin">4. Omarov B.S - {{$user->vopros4}}</td>
                <td colspan = "2" class = "question3"></td>
            </tr>
            <tr>
                <td colspan = "2" style = "text-align:center"><i>(last name and initial of the Commission member and the question asked)</i></td>
            </tr>
            <tr>
                <td colspan="2" class = "voprosNomerOdin">5. Orazbekov S.K - {{$user->vopros5}}</td>
                <td colspan = "2" class = "question4"></td>
            </tr>
            <tr>
                <td colspan = "2" style = "text-align:center"><i>(last name and initial of the Commission member and the question asked)</i></td>
            </tr>
            <tr>
                <td colspan="2" class = "voprosNomerOdin"   >6. Vasiliy S.V - {{$user->vopros6}}</td>
                <td colspan = "2" class = "question5"></td>
            </tr>
            <tr>
                <td colspan = "2" style = "text-align:center"><i>(last name and initial of the Commission member and the question asked)</i></td>
            </tr>
            <tr>
                <td colspan="2" class = "voprosNomerOdin"   >7. Atymtayeva L.B - {{$user->vopros7}}</td>
                <td colspan = "2" class = "question5"></td>
            </tr>

            <tr>
                <td colspan = "2" style = "text-align:center"><i>(last name and initial of the Commission member and the question asked)</i></td>
            </tr>
            <tr>
                <td colspan = "2" style = "padding-left:30px">Overall performance of the student’s answers</td>
            </tr>
            <tr>
                <td colspan = "2" class = "overall">good</td>
            </tr>
            <tr>
                <td colspan = "2" style = "padding-left:15px">In the course of the final thesis (project) defense the student {{$user->lastName}}&nbsp{{$user->firstName[0]}}.</td>
            </tr>
            <tr>
                <td colspan = "2" style = "text-align:center"><i>(last name, initials)</i></td>
            </tr>
            <tr>
                <td width="100" style="border:none">performed</td>
                <td colspan = "2" class = "performedTo">
                    <?php
                    if($user->ocenkaTotal >= 90){

                         echo 'excellent';
                    }

                    else if ($user->ocenkaTotal >= 75){
                        echo 'good';
                    }

                    else echo 'satisfactory';
                    ?>

                </td>
            </tr>
            <tr>
                <td colspan = "2" style = "text-align:center"><i>(the level of knowledge in a broader and special field)</i></td>
            </tr>
            <tr>
                <td colspan ="2" class = "option1">.</td>
            </tr>
            <tr>
                <td colspan ="2" class = "option2">.</td>
            </tr>
            <tr>
                <td colspan = "2" style = "padding-left:30px"> The members admitted that the student implemented and defended the final</td>
            </tr>
            <tr>
                <td colspan = "2" class = "alphabeticGradingScale">
                    thesis (project) with the grade
                    <?php
                    if($user->ocenkaTotal >= 95){

                        echo 'A';
                    }
                    else if ($user->ocenkaTotal >= 90){
                        echo 'A-';
                    }

                    else if ($user->ocenkaTotal >= 85){
                        echo 'B+';
                    }

                    else if ($user->ocenkaTotal >= 80){
                        echo 'B';
                    }

                    else if ($user->ocenkaTotal >= 75){
                        echo 'B-';
                    }

                    else if ($user->ocenkaTotal >= 70){
                        echo 'C+';
                    }

                    else if ($user->ocenkaTotal >= 65){
                        echo 'C';
                    }

                    else if ($user->ocenkaTotal >= 60){
                        echo 'C-';
                    }

                    else if ($user->ocenkaTotal >= 55){
                        echo 'D+';
                    }

                    else if ($user->ocenkaTotal >= 50){
                        echo 'D';
                    }

                    else echo 'F';
                    ?>
                    ({{$user->ocenkaTotal}})
                </td>
            </tr>
            <tr>
                <td colspan = "2" style = "text-align:center"><i>(according to the Alphabetic Grading Scale)</i></td>
            </tr>
            <tr>
                <td colspan = "2" style = "padding-left:30px"> Notes of the State Examination Commission Members</td>
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
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp_________________________  Satybaldiyeva R. Zh.</td>
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