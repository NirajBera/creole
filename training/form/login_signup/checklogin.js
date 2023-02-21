$(document).ready(function () {
    
    // $("#btn1").click(function(){
    //     location.href('/singup.php');
    // });

    
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
            let rm = $("#remember").val();
            if($("#remember").is(":checked")){
                mydata = {email:em,password:ps,remember:rm};
            }else{
                let rm = "none";
                mydata = {email:em,password:ps,remember:rm};
            }

            
            //console.log(mydata);
            $.ajax({
                url:"checklogin.php",
                method :"POST",
                data : JSON.stringify(mydata),
                success: function (data){
                    let t = (data.split("</html>")[1].trim());
                    
                    if(t == 1){

                        window.location ='../curd/welcome.php';
                       
                    }
                    else{
                        
                        
                        $("#p1").html("<b>"+data+"</b>");
                    }
                    
                },
            })

        }
        
    });

   

});    