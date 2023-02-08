$(document).ready(function () {
   
    $(".btn1").click(function(){
        $("table").find("tr:gt(0)").remove();
        });

});