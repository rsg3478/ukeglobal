
// 리스트 체크박스 이벤트
$(document).ready(function(){
    let check_confirm = null;
    let val = null;
    $("input[type='checkbox']").change(function(){
        if($(this).is(":checked")){
            check_confirm = confirm("게시글을 등록 하시겠습니까?");
            if(check_confirm == true){
                val = 1;
                check_val_1_confirm(val)
            }
        }else{
            check_confirm = confirm("게시글을 내리시겠습니까?");
            if(check_confirm == true){
                val = 0;
                check_val_0_confirm(val)
            }
        }
    });
});


// 체크시 val = 1 ajax로 해당 글 게시글 등록
function check_val_1_confirm(val){   
    $(this).val(val);
    true_false(val)
}

// 체크해제시 val = 0 ajax로 해당 글 게시글 내림
function check_val_0_confirm(val){    
    $(this).val(val);
    true_false(val)
}


function true_false(val) {
       //console.log(val);

/*     $.ajax({
        type: 'post',
        url: './connection/board_checkbox_true_false',
        data: "true_false="+val,
        //dataType : 'json',
        error: function (xhr, status, error) {
            alert("error:" + error);
        },
        success: function (data) {
            //console.log(data)
        }
    }); */

}