$(document).ready(function () {
    
    $("#dbtn").click(function(){

        console.log("clicked del");
    
        console.log(id);
        // $.ajax({
        //     url:"delete.php",
        //     method :"POST",
        //     data : new FormData(from),
        //     contentType: false,
        //     cache: false,
        //     processData:false,
        //     success: function (data){
        //          let t = (data.split("</html>")[1].trim());
             
        //          if(t == 1){

        //              window.location ='../welcome.php';
                    
        //          }
        //          else{
                     
                     
        //              $("#p1").html("<b>"+data+"</b>");
        //          }
        //      },
        // });
    })
});