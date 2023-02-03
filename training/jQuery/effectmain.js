$(document).ready(function () {
    $("#hide").click(function () {
        $("#h1").hide();
    });
    $("#show").click(function () {
        $("#h1").show();
    });



    $("#toggle").click(function () {
        $("#h2").toggle();
    });



    $(".f").click(function () {
        $("#pal").fadeIn(1000);
        $("#div1").fadeIn(1000);
        $("#div2").fadeIn(1500);
        $("#div3").fadeIn(2000);
    });



    $(".fl").click(function () {
        $("#pal").fadeOut(1000);
        $("#div1").fadeOut(2300);
        $("#div2").fadeOut(2000);
        $("#div3").fadeOut(1500);
    });



    $(".ft").click(function () {
        $("#div1").fadeToggle(1000);
        $("#div2").fadeToggle(1500);
        $("#div3").fadeToggle(2000);
    });





    $("#flip").click(function () {
        $("#panel").slideToggle(3000);
    });
    $("#stop").click(function () {
        $("#panel").stop();
    });



    $("#ani").click(function () {
        $("#box").animate({
            left: '250px',
            opacity: '0.5',
            height: '150px',
            width: '150px'
        });
    });



    $("#ani").click(function () {
        var div = $("#box1");
        div.animate({ height: '300px', opacity: '0.4' }, "slow");
        div.animate({ width: '300px', opacity: '0.8' }, "slow");
        div.animate({ height: '100px', opacity: '0.4' }, "slow");
        div.animate({ width: '100px', opacity: '0.8' }, "slow");
    });
});