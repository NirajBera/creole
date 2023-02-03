$(document).ready(function(){


//Ancestors

    $("#btn1").click(function(){
        $("#span1").parent().css("color","red");

    })


    $("#btn2").click(function(){
        $("#span2").parent().css("color","red");

    })



    

    $("#btn3").click(function(){
        $("#span3").parents().css("color","red");

    })


    $("#btn4").click(function(){
        $("#span3").parents("div").css({"color":"green","border":"3px solid green"});
    })



    $("#btn5").click(function(){
        $("#span4").parentsUntil("#div1").css({"color":"red","border":"3px solid red"});
    })

//Descendants

    $("#btn6").click(function(){
        $(".div2").children().css({"color":"red","border":"2px solid red"});
    })


    $("#btn7").click(function(){
        $(".div2").children("p.p1").css({"color":"green","border":"2px solid green"});
    })




    $("#btn8").click(function(){
        $(".div3").find(".span7").css({"color":"red", "border":"2px solid red"})
    })


    $("#btn9").click(function(){
        $(".div3").find("*").css({"color":"green","border":"3px solid green"})
    })

//filtring

    

    $("#btn10").click(function(){
        $(".p3").first().css({"color":"red","border":"2px solid red"});
    })


    $("#btn11").click(function(){
        $(".h").first().css({"color":"green","border":"2px solid green"});
    })

    $("#btn12").click(function(){
        $(".h").last().css({"color":"blue","border":"2px solid blue"});
    })



    $("#btn13").on('click',function(){
        $("p").filter(".p5").css({"color":"green","border":"2px solid green"})
    })


    $("#btn14").on('click',function(){
        $(".p6").not(".p6").css({"color":"red","border":"2px solid red"})
    })
 
    
//sublings    
      

    $("#btn15").click(function(){
        $("#p7").siblings().css({"color":"red","border":"2px solid red"});
    })


    $("#btn16").click(function(){
        $("#p7").siblings("h3").css({"color":"green","border":"2px solid green"});
    })




    $("#btn17").click(function(){
        $("#p8").next().css({"color":"red","border":"2px solid red"});
    })

    $("#btn18").click(function(){
        $(".div5").next().css({"color":"green","border":"2px solid green"});
    })




    $("#btn19").click(function(){
        $("#p9").nextAll().css({"color":"green","border":"2px solid green"});
    })




    $("#btn20").click(function(){
        $("#p10").nextUntil("a").css({"color":"green","border":"2px solid green"})
    })

})