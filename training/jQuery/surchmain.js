var jq = $.noConflict();

jq(document).ready(function(){

    jq("#table1").on("keyup",function(){
        var value = jq(this).val().toLowerCase();
        jq("#Table1 tr").filter(function(){
            jq(this).toggle(jq(this).text().toLowerCase().indexOf(value)> -1)
        });
    });


    jq("#list1").on("keyup",function(){
        var lvalue = jq(this).val().toLowerCase();
        
        jq("#List1 li").filter(function (){
            jq(this).toggle(jq(this).text().toLowerCase().indexOf(lvalue)>-1);
        });
    });


    jq("#anything").on("keyup",function(){
        var val = jq(this).val().toLowerCase();

        jq("#Id1 *").filter(function(){
            jq(this).toggle(jq(this).text().toLowerCase().indexOf(val)>-1);
        });
    });
});