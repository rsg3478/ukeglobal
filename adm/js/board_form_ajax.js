function submitContents(elClickedObj) {
// 에디터의 내용이 textarea에 적용됩니다.
oEditors.getById["content"].exec("UPDATE_CONTENTS_FIELD", []);
// 에디터의 내용에 대한 값 검증은 이곳에서 document.getElementById("content").value를 이용해서 처리하면 됩니다.

//form data 를 변수에 저장
let formData = $("form[name=board_nse]").serialize() ;
//console.log(formData);

validate();
form_submit(formData);

}

//유효성 검사
function validate() {    

    if($("#category").val()=="") {
        alert("카테고리를 선택해주세요");
        $("#category").focus();
        return false;
    }

    if($("#title").val()=="") {
        alert("제목을 입력해주세요");
        $("#title").focus();
        return false;
    }

    if($("#content").val()=="<br>") {
        alert("내용을 입력해주세요");
        $("#content").focus();
        return false;
    }

}


//ajax 전송
function form_submit(formData){
$.ajax({
type : 'post',
url : './connection/board_db_insert.php',
data : formData,
//dataType : 'json',
error: function(xhr, status, error){
    alert("error:"+error);
},
success : function(data){
    //console.log(data);
}
});

}