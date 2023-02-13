$(document).ready(function () {
    $("#submit").click(function (e) {
        e.preventDefault();
        //console.log("cilxked");

        let fn = $("#fname").val();
        let ln = $("#lname").val();
        let em = $("#email").val();
        
        mydata = {fname:fn,lname:ln,email:em};
        //console.log(mydata);
        $.ajax({
            url:"insert.php",
            method :"POST",
            data : JSON.stringify(mydata),
            success: function (data){
                console.log(data);
            },
        })
    });
});    