//$(document).ready(function() {

function editThisStudent(id){

    $('.pencilIcon').removeAttr('onclick');
    //toggle `popup` / `inline` mode
    $.fn.editable.defaults.mode = 'popup';

    //make username editable
    //$('#predprinimatel').editable();

    $('#edit-date'+id).editable();


    //$('#edit-date'+id).datepicker();
    $('#edit-minutes'+id).editable();
    $('#edit-firstname'+id).editable();
    $('#edit-lastname'+id).editable();
    $('#edit-patronumic'+id).editable();
    $('#edit-major'+id).editable();
    $('#edit-temaRus'+id).editable();
    $('#edit-temaKaz'+id).editable();
    $('#edit-temaEn'+id).editable();
    $('#edit-rukovoditel'+id).editable();
    $('#edit-recendentName'+id).editable();
    $('#edit-vopros1'+id).editable();
    $('#edit-vopros2'+id).editable();
    $('#edit-vopros3'+id).editable();
    $('#edit-vopros4'+id).editable();
    $('#edit-vopros5'+id).editable();
    $('#edit-vopros6'+id).editable();
    $('#edit-vopros7'+id).editable();
    $('#edit-ocenka1'+id).editable();
    $('#edit-ocenka2'+id).editable();
    $('#edit-ocenka3'+id).editable();
    $('#edit-ocenka4'+id).editable();
    $('#edit-ocenka5'+id).editable();
    $('#edit-ocenka6'+id).editable();
    $('#edit-ocenka7'+id).editable();
    $('#edit-ocenkaRukovoditelya'+id).editable();
    $('#edit-ocenkaRecendenta'+id).editable();

    //$('#edit-ocenkaTotal'+id).editable();
    $('#edit-ocenkaZaGosy'+id).editable();

}

function isNumber(obj) { return !isNaN(parseFloat(obj)) }


function sentRequest(id , role){

    //if(!isNumber(document.getElementById('edit-ocenka1' + id).innerHTML)){
    //    $('#edit-ocenka1' +id).css("background","red");
    //    //console.log($('#edit-ocenka1' +id).css("background","red"));
    //}





    var data = [];
    //var ocenka1 = document.getElementById('edit-ocenka1'+id).innerHTML;
    //var ocenka2 = document.getElementById('edit-ocenka2'+id).innerHTML;
    //var ocenka3 = document.getElementById('edit-ocenka3'+id).innerHTML;
    //var ocenka4 = document.getElementById('edit-ocenka4'+id).innerHTML;
    //var ocenka5 = document.getElementById('edit-ocenka5'+id).innerHTML;
    //
    //
    //var sum = ocenka1+ocenka2+ocenka3+ocenka4+ocenka5;
    //
    //
    //
    //
    //
    //
    //var totalOcenka = sum/sum.length;
    //
    //console.log(totalOcenka);

    if(role == 1){

        data = {



            "firstName": document.getElementById('edit-firstname' + id).innerHTML,
            "lastName": document.getElementById('edit-lastname' + id).innerHTML,
            "patroNumic": document.getElementById('edit-patronumic' + id).innerHTML,
            "major": document.getElementById('edit-major' + id).innerHTML,
            "temaRus": document.getElementById('edit-temaRus' + id).innerHTML,
            "temaKaz": document.getElementById('edit-temaKaz' + id).innerHTML,
            "temaEn": document.getElementById('edit-temaEn' + id).innerHTML,
            "rukovoditel": document.getElementById('edit-rukovoditel' + id).innerHTML,
            "vopros1": document.getElementById('edit-vopros1' + id).innerHTML,
            "ocenka1": document.getElementById('edit-ocenka1' + id).innerHTML,
            "ocenkaTotal": document.getElementById('edit-ocenkaTotal' + id).innerHTML,
            "ocenkaZaGosy": document.getElementById('edit-ocenkaZaGosy' + id).innerHTML




        };
    }

    else if (role == 2){
        data = {



            "firstName": document.getElementById('edit-firstname' + id).innerHTML,
            "lastName": document.getElementById('edit-lastname' + id).innerHTML,
            "patroNumic": document.getElementById('edit-patronumic' + id).innerHTML,
            "major": document.getElementById('edit-major' + id).innerHTML,
            "temaRus": document.getElementById('edit-temaRus' + id).innerHTML,
            "temaKaz": document.getElementById('edit-temaKaz' + id).innerHTML,
            "temaEn": document.getElementById('edit-temaEn' + id).innerHTML,
            "rukovoditel": document.getElementById('edit-rukovoditel' + id).innerHTML,
            "vopros2": document.getElementById('edit-vopros2' + id).innerHTML,
            "ocenka2": document.getElementById('edit-ocenka2' + id).innerHTML,
            "ocenkaTotal": document.getElementById('edit-ocenkaTotal' + id).innerHTML,
            "ocenkaZaGosy": document.getElementById('edit-ocenkaZaGosy' + id).innerHTML




        };
    }

    else if (role == 3){
        data = {



            "firstName": document.getElementById('edit-firstname' + id).innerHTML,
            "lastName": document.getElementById('edit-lastname' + id).innerHTML,
            "patroNumic": document.getElementById('edit-patronumic' + id).innerHTML,
            "major": document.getElementById('edit-major' + id).innerHTML,
            "temaRus": document.getElementById('edit-temaRus' + id).innerHTML,
            "temaKaz": document.getElementById('edit-temaKaz' + id).innerHTML,
            "temaEn": document.getElementById('edit-temaEn' + id).innerHTML,
            "rukovoditel": document.getElementById('edit-rukovoditel' + id).innerHTML,
            "vopros3": document.getElementById('edit-vopros3' + id).innerHTML,
            "ocenka3": document.getElementById('edit-ocenka3' + id).innerHTML,
            "ocenkaTotal": document.getElementById('edit-ocenkaTotal' + id).innerHTML,
            "ocenkaZaGosy": document.getElementById('edit-ocenkaZaGosy' + id).innerHTML




        };
    }

    else if (role == 4){
        data = {



            "firstName": document.getElementById('edit-firstname' + id).innerHTML,
            "lastName": document.getElementById('edit-lastname' + id).innerHTML,
            "patroNumic": document.getElementById('edit-patronumic' + id).innerHTML,
            "major": document.getElementById('edit-major' + id).innerHTML,
            "temaRus": document.getElementById('edit-temaRus' + id).innerHTML,
            "temaKaz": document.getElementById('edit-temaKaz' + id).innerHTML,
            "temaEn": document.getElementById('edit-temaEn' + id).innerHTML,
            "rukovoditel": document.getElementById('edit-rukovoditel' + id).innerHTML,
            "vopros4": document.getElementById('edit-vopros4' + id).innerHTML,
            "ocenka4": document.getElementById('edit-ocenka4' + id).innerHTML,
            "ocenkaTotal": document.getElementById('edit-ocenkaTotal' + id).innerHTML,
            "ocenkaZaGosy": document.getElementById('edit-ocenkaZaGosy' + id).innerHTML




        };
    }
    else if (role == 5) {
        data = {


            "firstName": document.getElementById('edit-firstname' + id).innerHTML,
            "lastName": document.getElementById('edit-lastname' + id).innerHTML,
            "patroNumic": document.getElementById('edit-patronumic' + id).innerHTML,
            "major": document.getElementById('edit-major' + id).innerHTML,
            "temaRus": document.getElementById('edit-temaRus' + id).innerHTML,
            "temaKaz": document.getElementById('edit-temaKaz' + id).innerHTML,
            "temaEn": document.getElementById('edit-temaEn' + id).innerHTML,
            "rukovoditel": document.getElementById('edit-rukovoditel' + id).innerHTML,
            "vopros5": document.getElementById('edit-vopros5' + id).innerHTML,
            "ocenka5": document.getElementById('edit-ocenka5' + id).innerHTML,
            "ocenkaTotal": document.getElementById('edit-ocenkaTotal' + id).innerHTML,
            "ocenkaZaGosy": document.getElementById('edit-ocenkaZaGosy' + id).innerHTML


        };
    }

    else if (role == 6) {
        data = {


            "firstName": document.getElementById('edit-firstname' + id).innerHTML,
            "lastName": document.getElementById('edit-lastname' + id).innerHTML,
            "patroNumic": document.getElementById('edit-patronumic' + id).innerHTML,
            "major": document.getElementById('edit-major' + id).innerHTML,
            "temaRus": document.getElementById('edit-temaRus' + id).innerHTML,
            "temaKaz": document.getElementById('edit-temaKaz' + id).innerHTML,
            "temaEn": document.getElementById('edit-temaEn' + id).innerHTML,
            "rukovoditel": document.getElementById('edit-rukovoditel' + id).innerHTML,
            "vopros6": document.getElementById('edit-vopros6' + id).innerHTML,
            "ocenka6": document.getElementById('edit-ocenka6' + id).innerHTML,
            "ocenkaTotal": document.getElementById('edit-ocenkaTotal' + id).innerHTML,
            "ocenkaZaGosy": document.getElementById('edit-ocenkaZaGosy' + id).innerHTML


        };
    }

    else if (role == 7) {
        data = {


            "firstName": document.getElementById('edit-firstname' + id).innerHTML,
            "lastName": document.getElementById('edit-lastname' + id).innerHTML,
            "patroNumic": document.getElementById('edit-patronumic' + id).innerHTML,
            "major": document.getElementById('edit-major' + id).innerHTML,
            "temaRus": document.getElementById('edit-temaRus' + id).innerHTML,
            "temaKaz": document.getElementById('edit-temaKaz' + id).innerHTML,
            "temaEn": document.getElementById('edit-temaEn' + id).innerHTML,
            "rukovoditel": document.getElementById('edit-rukovoditel' + id).innerHTML,
            "vopros7": document.getElementById('edit-vopros7' + id).innerHTML,
            "ocenka7": document.getElementById('edit-ocenka7' + id).innerHTML,
            "ocenkaTotal": document.getElementById('edit-ocenkaTotal' + id).innerHTML,
            "ocenkaZaGosy": document.getElementById('edit-ocenkaZaGosy' + id).innerHTML


        };
    }

    else if (role == 8){
        data = {


            "minutes": document.getElementById('edit-minutes' + id).innerHTML,
            "date": document.getElementById('edit-date' + id).innerHTML,
            "firstName": document.getElementById('edit-firstname' + id).innerHTML,
            "lastName": document.getElementById('edit-lastname' + id).innerHTML,
            "patroNumic": document.getElementById('edit-patronumic' + id).innerHTML,
            "major": document.getElementById('edit-major' + id).innerHTML,
            "temaRus": document.getElementById('edit-temaRus' + id).innerHTML,
            "temaKaz": document.getElementById('edit-temaKaz' + id).innerHTML,
            "temaEn": document.getElementById('edit-temaEn' + id).innerHTML,
            "rukovoditel": document.getElementById('edit-rukovoditel' + id).innerHTML,
            "recendentName": document.getElementById('edit-recendentName' + id).innerHTML,
            "vopros1": document.getElementById('edit-vopros1' + id).innerHTML,
            "vopros2": document.getElementById('edit-vopros2' + id).innerHTML,
            "vopros3": document.getElementById('edit-vopros3' + id).innerHTML,
            "vopros4": document.getElementById('edit-vopros4' + id).innerHTML,
            "vopros5": document.getElementById('edit-vopros5' + id).innerHTML,
            "vopros6": document.getElementById('edit-vopros6' + id).innerHTML,
            "vopros7": document.getElementById('edit-vopros7' + id).innerHTML,
            "ocenka1": document.getElementById('edit-ocenka1' + id).innerHTML,
            "ocenka2": document.getElementById('edit-ocenka2' + id).innerHTML,
            "ocenka3": document.getElementById('edit-ocenka3' + id).innerHTML,
            "ocenka4": document.getElementById('edit-ocenka4' + id).innerHTML,
            "ocenka5": document.getElementById('edit-ocenka5' + id).innerHTML,
            "ocenka6": document.getElementById('edit-ocenka6' + id).innerHTML,
            "ocenka7": document.getElementById('edit-ocenka7' + id).innerHTML,
            "ocenkaTotal": document.getElementById('edit-ocenkaTotal' + id).innerHTML,
            "ocenkaZaGosy": document.getElementById('edit-ocenkaZaGosy' + id).innerHTML,
            "ocenkaRukovoditelya": document.getElementById('edit-ocenkaRukovoditelya' + id).innerHTML,
            "recendentOcenka": document.getElementById('edit-ocenkaRecendenta' + id).innerHTML





        };
    }

    $.post( "/students/edit/"+id, data)
        .done(function( data ) {
            console.log( "Data Loaded: " + data );
            window.location.reload();
        })
        .fail(function() {
                alert( "error" );

        });

    //console.log(document.getElementById('edit-firstname' + id).innerHTML);
}