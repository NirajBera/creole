
$(document).ready(function () {
           
                $("#test").hide();
            
        

       
            $("button").click(function () {
                $(".test1").hide();
            });
       

        
            $("button").click(function () {
                $("ul li:first").hide()
            })
        

       
            $("tr:even").css("background-color", "yellow")
            $("tr:odd").css("background-color", "orange")
});

