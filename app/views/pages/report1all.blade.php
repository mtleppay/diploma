@extends('layouts.main')
@section('content')

    @foreach($users as $user)

    <div class="container glavnyi1all">


        <table class = "table1" width = "1014">
            <tr>
                <td colspan = "2" class = "appendix">Appendix 1</td>
            </tr>

            <tr>
                <td colspan = "2" class = "minutes"><b>MINUTES № <span class = "minutesSpan">{{$user->minutes}}</span></b></td>
            </tr>
            <tr>
                <td colspan = "2" class = "meetingOf"><b>Meeting of the State Examination Commission</b></td>
            </tr>
            <tr>
                <td colspan = "2" class = "date">Date: <<<span style = "text-decoration: underline">12</span>>>
                    <span style = "text-decoration: underline">May</span> 2015 from
                    {{--<span style = "text-decoration: underline">15</span> from--}}
                    <span style = "text-decoration: underline">14:00</span> till
                    <span style = "text-decoration: underline">17:00</span>
                </td>
            </tr>

            <tr>
                <td colspan = "2" class = "attendees">Attendees: Chairperson of the State Examination Commission</td>
            </tr>
            <tr>
                <td colspan = "2" class = "attendeesInfo">Atymtayeva Lyazzat Bakhytovna</td>
            </tr>

            <tr>
                <td colspan = "2">Members of the Commission:</td>
            </tr>
            <tr>
                <td colspan = "2" style = "border-bottom: 2px solid black">Serbin V. V.</td>
            </tr>
            <tr>
                <td colspan = "2" style = "border-bottom: 2px solid black">Satybaldiyeva R. Zh.</td>
            </tr>
            <tr>
                <td colspan = "2" style = "border-bottom: 2px solid black">Moldagulova A. N.</td>
            </tr>
            <tr>
                <td colspan = "2" style = "border-bottom: 2px solid black">Kuandykov A. A.</td>
            </tr>
            <tr>
                <td colspan = "2" style = "border-bottom: 2px solid black">Omarov B. S.</td>
            </tr>
            <tr>
                <td colspan = "2" style = "border-bottom: 2px solid black">Orazbekov S. K.</td>
            </tr>
            <tr>
                <td colspan = "2" style = "border-bottom: 2px solid black">Syrymbayeva A. M.</td>
            </tr>

            <tr>
                <td colspan = "2" style = "border-bottom: 2px solid black">Saimassayeva Sh.M.</td>
            </tr>
            <tr>
                <td colspan = "2" style = "padding-top: 30px;">Agenda: State Examination in the subject of</td>
            </tr>
            <tr>
                <td colspan = "2" style = "border-bottom: 2px solid black">1. Algorithmization and Programming Languages</td>
            </tr>
            <tr>
                <td colspan = "2" style = "border-bottom: 2px solid black">2. Fundamentals of Information Systems</td>
            </tr>
            <tr>
                <td colspan = "2" style = "border-bottom: 2px solid black">3. Architecture of computer systems</td>
            </tr>
            <tr>
                <td colspan = "2" style = "border-bottom: 2px solid black">4. Fundamentals of Information Security</td>
            </tr>
            <tr>
                <td colspan = "2" style = "border-bottom: 2px solid black">5. Computer network</td>
            </tr>
            <tr>
                <td colspan = "2" style = "padding-top: 30px;border-bottom: 2px solid black"> Examinee: {{$user->lastName}}&nbsp{{$user->firstName}} ,5B070300 - Information systems</td>
            </tr>
            <tr>
                <td colspan = "2"><i>(lastname, first name, patronymic, major)</i></td>
            </tr>
            <tr>
                <td colspan = "2" style = "padding-top: 30px;">Questions: (test results of the subjects blocks)</td>
            </tr>
            <tr>
                <td colspan = "2" class = "recommendedToDef">Computer Based Complex test</td>
            </tr>
            <tr>
                <td colspan = "2">1. Members accepted, that the student <span style = "text-decoration: underline">{{$user->lastName}}&nbsp{{$user->firstName[0]}}</span></td>
            </tr>
            <tr>
                <td colspan = "2"><i>(lastname, initials)</i></td>
            </tr>
            <tr>
                <td colspan = "2">passed the State Examination in Algorithmization and Programming Languages,</td>
            </tr>
            <tr>
                <td colspan = "2">Fundamentals of Information Systems, Architecture of computer systems,</td>
            </tr>
            <tr>
                <td colspan = "2">Fundamentals of Information Security and Computer network</td>
            </tr>
            <tr>
                <td colspan = "2" style = "text-align: center"><i>(the subject, major)</i></td>
            </tr>
            <tr>
                <td colspan = "2">with the grade_______________________ <?php
                    if($user->ocenkaZaGosy >= 95){

                        echo 'A';
                    }
                    else if ($user->ocenkaZaGosy >= 90){
                        echo 'A-';
                    }

                    else if ($user->ocenkaZaGosy >= 85){
                        echo 'B+';
                    }

                    else if ($user->ocenkaZaGosy >= 80){
                        echo 'B';
                    }

                    else if ($user->ocenkaZaGosy >= 75){
                        echo 'B-';
                    }

                    else if ($user->ocenkaZaGosy >= 70){
                        echo 'C+';
                    }

                    else if ($user->ocenkaZaGosy >= 65){
                        echo 'C';
                    }

                    else if ($user->ocenkaZaGosy >= 60){
                        echo 'C-';
                    }

                    else if ($user->ocenkaZaGosy >= 55){
                        echo 'D+';
                    }

                    else if ($user->ocenkaZaGosy >= 50){
                        echo 'D';
                    }

                    else echo 'F';
                    ?>({{$user->ocenkaZaGosy}})______________________________</td>
            </tr>
            <tr>
                <td colspan = "2"><i>(according to the Alphabetic Grading Scale)</i></td>
            </tr>
            <tr>
                <td width="390" style="border:none;">2. Members pointed out, that the student</td>
                <td colspan = "2" class = "expertizedBy">{{$user->lastName}}&nbsp{{$user->firstName[0]}}</td>
            </tr>
            <tr>
                <td colspan = "2"><i>(lastname, initials)</i></td>
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
                <td colspan ="2" style = "padding-top: 20px">3. Notes of the State Examination Commission Members</td>
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
    </div>


    @endforeach
@stop