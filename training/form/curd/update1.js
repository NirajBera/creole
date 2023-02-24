$(document).ready(function () {
    
    $.validator.addMethod("filesize", function(value, element, param) {
        return this.optional(element) || (element.files[0].size <= param);
    }, "File size must be less than {0} bytes.");

    $("#vForm").validate({
        rules: {
            email: {
                required: true,
                email: true
            },
            number: "required",
            name: {
                required: true,
                minlength: 4
                
            },
           
            gender:{
                required: true
            },
            image:{
                required: true,
                extension: "jpe?g|png",
                filesize:1048576
                
            }


        },
        messages: {
            email: {
                required: "enter your email here",
                email: "you enter this for mate abc@gmail.com"
            },
            number: {
                required: "enter your 10 digit number",
                minlength: jQuery.validator.format("10 digit must required"),
                maxlength: jQuery.validator.format("enter max 10 digit only")
            },
            name: {
                required: "enter 4 digit frist",
                minlength: jQuery.validator.format("min 4 digit must required")

            },
           
            gender: {
                required: "gender is required"
            },
            image: {
                required: "image is required",
                extension:"Please select only png and jpg files",
                filesize:"Image size less then 1 MB"
            }



        },
        submitHandler:function(form){
            
                $.ajax({
                   url:"finalupdate.php",
                   method :"POST",
                   data : new FormData(form),
                   contentType: false,
                   cache: false,
                   processData:false,
                   success: function (data){
                        let t = (data.split("</html>")[1].trim());
                    
                        if(t == 1){
                            // $("#msg").html("<b> Update data successfully </b>");
                            alert("update successfill");
                            window.location ='welcome.php';
                           
                        }
                        else{
                            
                            
                            $("#p1").html("<b>"+data+"</b>");
                        }
                    },
               });

        }
        
    });
});    