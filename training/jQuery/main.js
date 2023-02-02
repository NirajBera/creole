
    $(document).ready(function () {
        $("button").click(function () {
            $("#test").hide();
        });
    });

    $(document).ready(function () {
        $("button").click(function () {
            $(".test1").hide();
        });
    });


    $(document).ready(function () {
        $("button").click(function () {
            $("ul li:first").hide()
        })
    })

    $(document).ready(function () {
        $("tr:even").css("background-color", "yellow")
        $("tr:odd").css("background-color", "orange")
    })
    //event
    $(document).ready(function () {
        $(".db").dblclick(function () {
            $(this).hide();
        });
    });

    $(document).ready(function () {

        $("#panel").mouseenter(function () {
            $(this).css("background-color", "yellow")
        }),

            $("#panel").mouseleave(function () {
                $(this).css("background-color", "orange")
            }),

            $("#panel").mousedown(function () {
                $(this).css("background-color", "red")
            }),

            $("#panel").mouseup(function () {
                $(this).css("background-color", "green")
            });
    });


    $(document).ready(function () {
        $("input").focus(function () {
            $(this).css("background-color", "orange");
        });
        $("input").blur(function () {
            $(this).css("background-color", "yellow");
        });
    });

    $(document).ready(function () {
        $("#k1").keydown(function () {
            $("#k1").css("background-color", "orange");
        });
        $("#k1").keyup(function () {
            $("#k1").css("background-color", "yellow");
        });
    });

    $(document).ready(function () {
        $("#sel").select(function () {
            alert("you try to select this word!");
        });
    });

    //effect
    $(document).ready(function () {
        $("#hide").click(function () {
            $("#h1").hide();
        });
        $("#show").click(function () {
            $("#h1").show();
        });
    });

    $(document).ready(function () {
        $("#toggle").click(function () {
            $("#h2").toggle();
        });
    });

    $(document).ready(function () {
        $(".f").click(function () {
            $("#pal").fadeIn(1000);
            $("#div1").fadeIn(1000);
            $("#div2").fadeIn(1500);
            $("#div3").fadeIn(2000);
        });
    });

    $(document).ready(function () {
        $(".fl").click(function () {
            $("#pal").fadeOut(1000);
            $("#div1").fadeOut(2300);
            $("#div2").fadeOut(2000);
            $("#div3").fadeOut(1500);
        });
    });

    $(document).ready(function () {
        $(".ft").click(function () {
            $("#div1").fadeToggle(1000);
            $("#div2").fadeToggle(1500);
            $("#div3").fadeToggle(2000);
        });
        
    });


    $(document).ready(function () {
        $("#flip").click(function () {
            $("#panel").slideToggle(3000);
        });
        $("#stop").click(function(){
            $("#panel").stop();
        });
    });

    $(document).ready(function () {
        $("#ani").click(function () {
            $("#box").animate({
                left: '250px',
                opacity: '0.5',
                height: '150px',
                width: '150px'
            });
        });
    });

    $(document).ready(function(){
        $("#ani").click(function(){
        var div = $("#box1");
        div.animate({height: '300px', opacity: '0.4'}, "slow");
        div.animate({width: '300px', opacity: '0.8'}, "slow");
        div.animate({height: '100px', opacity: '0.4'}, "slow");
        div.animate({width: '100px', opacity: '0.8'}, "slow");
        });
    });


    // jQuery html

    $(document).ready(function(){
        $("#btn1").click(function(){
        alert("Text: " + $("#test").text());
        });
        $("#btn2").click(function(){
        alert("HTML: " + $("#test").html());
        });
    });


    $(document).ready(function(){
        $("#btn3").click(function(){
        alert("Value: " + $("#input1").val());
        });
    });


    $(document).ready(function(){
        $("#btn4").click(function(){
        $("#test1").text("Hello world!");
        });
        $("#btn5").click(function(){
        $("#test2").html("<b>Hello world!</b>");
        });
        $("#btn6").click(function(){
        $("#input2").val("the jQuery set ex");
        });
    });