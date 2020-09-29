<?

// # 쿼리문

function list_count($table){
    return "select count(*) from $table";
}


    function mainpage_notice_list(){
        return "select * from notice_board order by no desc limit 2";
    }

    function notice_home_list() {  
        return "select * from notice_board order by no asc";
    }

    function notice_list($first, $list_size) {  
        return "select * from notice_board order by no desc limit $first, $list_size";
    }

    function notice_content ($Number) {
        return "select * from notice_board where no = $Number;";
    }

    function mainpage_news_list(){
        return "select * from news_board order by no desc limit 2";
    }

    function news_list($first, $list_size) {  
        return "select * from news_board order by no desc limit $first, $list_size";
    }
    
    function news_content ($Number) {
        return "select * from news_board where no = $Number;";
    }

    function popup_list($first, $list_size) {  
        return "select * from popup_board order by no desc limit $first, $list_size";
    }
    
    function popup_content ($Number) {
        return "select * from popup_board where no = $Number;";
    }

    function video_list($first, $list_size) {  
        return "select * from video_board order by no desc limit $first, $list_size";
    }
    
    function video_content ($Number) {
        return "select * from video_board where no = $Number;";
    }

    function notice_insert($title,$content,$start_date,$finish_date,$true_false) {  
    
        $query = "insert into notice_board (
            notice_title,
            notice_content,
            notice_start_date,
            notice_finish_date,
            true_false
          ) values (
          '{$title}',
          '{$content}',
          '{$start_date}',
          '{$finish_date}',
          '{$true_false}'  
          )";
    
          return $query;
    }

    function news_insert($title,$content,$link) {  
    
        $query = "insert into news_board (
            news_title,
            news_content,
            news_link
          ) values (
          '{$title}',
          '{$content}',
          '{$link}'  
          )";
    
          return $query;
    }

    function popup_insert($title,$content,$start_date,$finish_date,$top_position,$left_position) {  
    
        $query = "insert into popup_board (
            popup_title,
            popup_content,
            popup_start_date,
            popup_finish_date,
            popup_top_position,
            popup_left_position
          ) values (
           '{$title}',
           '{$content}',
           '{$start_date}',
           '{$finish_date}',
           '{$top_position}',
           '{$left_position}'
          )";
          
          return $query;
    }


    ?>