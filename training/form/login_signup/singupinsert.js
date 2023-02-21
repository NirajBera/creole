$(document).ready(function () {
    
    
        $("#vForm").validate({
            rules: {
                email: {
                    required: true,
                    email: true
                },
                name: {
                    required: true,
                    minlength: 4
                    
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
                name: {
                    required: "enter 4 digit frist",
                    minlength: jQuery.validator.format("min 4 digit must required")

                },
                password: {
                    required: "password is required"
                }



            },

            submitHandler:function(form){
                console.log("cilxked");

                let na = $("#name").val();
                let em = $("#email").val();
                let ps = $("#password").val();
                
                mydata = {name:na,email:em,password:ps};
                //console.log(mydata);
                $.ajax({
                    url:"singupinsert.php",
                    method :"POST",
                    data : JSON.stringify(mydata),
                    success: function (data){
                        $("#p1").html("<b>"+data+"</b>");
                        
                    },
                })

            }
            // onsubmit: false
            //qonfocusout: true
            //onkeyup: false,
            //onclick: false
        });

   
});    