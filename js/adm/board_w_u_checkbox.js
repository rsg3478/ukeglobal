//check box 값 변경
$(document).ready(function(){
    $("#check").change(function(){
        if($("#check").is(":checked")){
            $("#check").val(1);
            console.log("1");
        }else{
            $("#check").val(0);
            console.log("0");
        }
    });
});