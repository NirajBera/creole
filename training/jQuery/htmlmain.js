$(document).ready(function () {
                $("#btn1").click(function () {
                    alert("Text: " + $("#test").text());
                });
                $("#btn2").click(function () {
                    alert("HTML: " + $("#test").html());
                });
            


           
                $("#btn3").click(function () {
                    alert("Value: " + $("#input1").val());
                });
           


            
                $("#btn4").click(function () {
                    $("#test1").text("Hello world!");
                });
                $("#btn5").click(function () {
                    $("#test2").html("<b>Hello world!</b>");
                });
                $("#btn6").click(function () {
                    $("#input2").val("the jQuery set ex");
                });
           

           
                $("#btn7").click(function () {
                    $("#href1").attr("href", "https://jquery.com/download/");
                });
           


           
                $("#btn8").click(function () {
                    $(".append1").append(" <b>Appended text</b>.");
                });

                $("#btn9").click(function () {
                    $("#ol1").append("<li>Appended item</li>");
                });
           
           
                $("#btn10").click(function(){
                $(".Prepended1").prepend("<b>Prepended text</b>. ");
                });
                $("#btn11").click(function(){
                $("#ol2").prepend("<li>Prepended item</li>");
                });
           
           
                $("#btn12").click(function(){
                $("#ol3").before("<b>Before insert</b>");
                });
            
                $("#btn13").click(function(){
                $("#ol3").after("<b>After insert</b>");
                });
            
           
                $("#btn14").click(function(){
                $(".p2").remove();
                });

                
                $("#btn15").click(function(){
                    $(".p3").addClass("important blue");
                });
                
                $("#btn16").click(function(){
                    $(".p3").removeClass("important blue");
                });

                $("#btn17").click(function(){
                    $(".p3").toggleClass("important blue");
                });    
                
                $("#btn18").click(function(){
                    $(".p4").css({"background-color": "yellow", "font-size": "200%"});
                  });

                  $("#btn19").click(function(){
                    var txt = "";
                    txt += "Width of div: " + $("#div2").width() + "</br>";
                    txt += "Height of div: " + $("#div2").height() + "</br>";
                    txt += "Inner width of div: " + $("#div2").innerWidth() + "</br>";
                    txt += "Inner height of div: " + $("#div2").innerHeight() + "</br>";
                    txt += "Outer width of div: " + $("#div2").outerWidth() + "</br>";
                    txt += "Outer height of div: " + $("#div2").outerHeight();
                    $("#div2").html(txt);
                  });


                  ///chining
                  $(document).ready(function(){
                    $("button").click(function(){
                      $("#p1").css("color", "red")
                        .slideUp(2000)
                        .slideDown(2000);
                    });
                  });
                  //remove
                  $("button").click(function(){
                    $("p").remove();
                  });

  });