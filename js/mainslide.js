$(document).on("mouseover", ".menucenter a", function () {
    $(".menufome").slideDown(300);
});
$(document).on("mouseleave", ".menufome", function () {
    if (!$(this).hasClass(".menufome")) {
        $(".menufome").slideUp(300);
    }
});

// $(document).ready(function () {
//     $("menucenter").mouseover(function () {
//         $(".menufome").stop().slideDown();
//     });
//     $(".menucenter").mouseleave(function () {
//         $(".menufome").stop().slideUp();
//     });
// });
