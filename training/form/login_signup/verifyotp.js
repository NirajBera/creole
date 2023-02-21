$(document).ready(function () {
    
    $("#vForm").validate({
        rules: {
            otp: {
                required: true,
                
            },
        },
        messages: {
            otp: {
                required: "otp is required",
                
            },

        },

        submitHandler:function(form){
            console.log("cilxked");
            let o = $("#otp").val();
            mydata = {otp:o};
            //console.log(mydata);
            $.ajax({
                url:"checkotp.php",
                method :"POST",
                data : JSON.stringify(mydata),
                success: function (data){
                    let t = (data.split("</html>")[1].trim());
                    console.log(t);
                    if(t == 1){

                        window.location ='resetpass.php';
                       
                    }
                    else{
                        
                        
                        $("#p1").html("<b>"+data+"</b>");
                    }
                    
                },
            })

        }
        // onsubmit: false
        //qonfocusout: true
        //onkeyup: false,
        //onclick: false
    });


});    