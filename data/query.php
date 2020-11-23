<?

// # 쿼리문

function list_count($table){
    return "select count(*) from $table";
}


function notice_list($first, $list_size) {  
    return "select * from board order by no desc limit $first, $list_size";
    }

    function notice_content ($table, $Number) {
        return "select * from $table where no = $Number;";
    }

    function news_list() {  
        return "select * from board where category='news' order by no limit 0,10;";
    }
    
    function popup_list($first, $list_size) {  
        return "select * from popup order by no desc limit $first, $list_size";
    }
    
    function notice_insert($table,$true_false,$category,$title,$content,$session_id) {  
    
        $query = "insert into `{$table}` (
            true_false,
            category,
            title,
            content,
            id
          ) values (
           '{$true_false}',
           '{$category}',
           '{$title}',
           '{$content}',
           '{$session_id}'  
          )";
    
          return $query;
    }
    
    function popup_insert($table,$title,$content,$session_id,$start_date,$finish_date,$width,$height,$top_position,$left_position) {  
    
        $query = "insert into `{$table}` (
            title,
            content,
            id,
            start_date,
            finish_date,
            width,
            height,
            top_position,
            left_position
          ) values (
           '{$title}',
           '{$content}',
           '{$session_id}',
           '{$start_date}',
           '{$finish_date}',
           '{$width}',
           '{$height}',
           '{$top_position}',
           '{$left_position}'
          )";
          
          return $query;
    }

    ?>