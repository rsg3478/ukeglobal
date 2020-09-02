// 리스트 체크박스 이벤트
$(document).ready(function(){

    $("input[type='checkbox']").click(function(){

        let check_no = $(this).val();
        let true_false = null;

        if($(this).is(":checked")){

            if (confirm ( '게시글을 등록 하시겠습니까?') == true) {
                true_false = 1;
                check_true_false_confirm(true_false,check_no);
            }else {
                this.checked = false;
            }

        }else{

            if (confirm ( '게시글을 내리시겠습니까?') == true) {
                true_false = 0;
                check_true_false_confirm(true_false,check_no);
            }else {
                this.checked = true;            
            }

        }
    });
});


//ajax 전송
function check_true_false_confirm(true_false,check_no) {

    $.ajax({
        type: 'post',
        url: './connection/board_checkbox_true_false.php',
        data: {
            no : check_no,
         check : true_false
        },
        //dataType : 'json',
        error: function (xhr, status, error) {
            alert("error:" + error);
        },
        success: function (data) {
            console.log(data)
        }
    });
    
}



