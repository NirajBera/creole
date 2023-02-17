$(document).ready(function () {
    $("#btn1").click(function(){
        location.href('/singup.php');
    });

    
    $("#vForm").validate({
        rules: {
            email: {
                required: true,
                email: true
            },
            password: {
                required: true

            },


        },
        messages: {
            email: {
                required: "enter your email here",
                email: "you enter this for mate abc@gmail.com"
            },
            password: {
                required: "password is required"
            }



        },

        submitHandler:function(form){
            console.log("cilxked");

            
            let em = $("#email").val();
            let ps = $("#password").val();
            
            mydata = {email:em,password:ps};
            //console.log(mydata);
            $.ajax({
                url:"checklogin.php",
                method :"POST",
                data : JSON.stringify(mydata),
                success: function (data){
                    $("#p1").html("<b>"+data+"</b>");
                    
                },
            })

        }
        
    });

   

});    