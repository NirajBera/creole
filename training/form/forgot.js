$(document).ready(function () {
    
    $("#vForm").validate({
        rules: {
            email: {
                required: true,
                email: true
            },
        },
        messages: {
            email: {
                required: "enter your email here",
                email: "you enter this for mate abc@gmail.com"
            },

        },

        submitHandler:function(form){
            console.log("cilxked");
            let em = $("#email").val();
            mydata = {email:em};
            //console.log(mydata);
            $.ajax({
                url:"sendotp.php",
                method :"POST",
                data : JSON.stringify(mydata),
                success: function (data){
                    let t = (data.split("</html>")[1].trim());

                    if(t == 1){

                        window.location ='verifyotp.php';
                       
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