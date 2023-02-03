$(document).ready(function () {
    $(".db").dblclick(function () {
        $(this).hide();
    });
    $("button").click(function () {
        $(".test1").hide();
    });




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




    $("input").focus(function () {
        $(this).css("background-color", "orange");
    });
    $("input").blur(function () {
        $(this).css("background-color", "yellow");
    });



    $("#k1").keydown(function () {
        $("#k1").css("background-color", "orange");
    });
    $("#k1").keyup(function () {
        $("#k1").css("background-color", "yellow");
    });



    $("#sel").select(function () {
        alert("you try to select this word!");
    });
});
