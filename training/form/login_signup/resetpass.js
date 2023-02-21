$(document).ready(function () {
    
    $("#vForm").validate({
        rules: {
           
            password: {
                required: true

            },


        },
        messages: {
            
            password: {
                required: "password is required"
            }



        },

        submitHandler:function(form){
            console.log("cilxked");

            
            
            let ps = $("#password").val();
            
            mydata = {password:ps};
            //console.log(mydata);
            $.ajax({
                url:'changpass.php',
                method :"POST",
                data : JSON.stringify(mydata),
                success: function (data){
                    let t = (data.split("</html>")[1].trim());
                    
                    console.log(t);
                   
                    if(t == 1){

                        window.location ='login.php';
                       
                    }
                    else{
                        
                        
                        $("#p1").html("<b>"+data+"</b>");
                    }
                    
                },
            })

        }
        
    });


});    