 function editStudent(id){
              $("tr").removeAttr("ondblclick");
              document.getElementById("textVopros1"+id).style.display="none";
              document.getElementById("inputVopros1"+id).style.display="block";
              document.getElementById("saveButton"+id).disabled = false;

              document.getElementById("textVopros2"+id).style.display="none";
              document.getElementById("inputVopros2"+id).style.display="block";
              document.getElementById("saveButton"+id).disabled = false;
          }

