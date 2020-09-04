

$(function(){
    $('input:checkbox[name="checkbox"]').each(function() {

        if(this.value == "true"){ //값 비교
    
               this.checked = true; //checked 처리
    
         }
    
    });
});