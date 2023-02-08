$(document).ready(function () {
   
    $("#input").keydown(function(){
        var val = $ ("#input").val();
        var len = val.length
        var rem = 10-length
        if(rem <= 0){
            $("#p1").append().text("10 latter")
        }else{
            $("#sp1").append().text(rem)
        }
    })

});