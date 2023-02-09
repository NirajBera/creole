$(document).ready(function () {
   
    $("#in1").keyup(function(e){

        var val = $("#in1").val();
        var len = val.length;
        var rem = 10-len;

        if(rem > 0 && rem <= 10 || key === "Backspace" ){
          
            $("#sp1").append().text(rem)
        }else{
            $("#p1").append().text("10 latter")
        }
    })

});