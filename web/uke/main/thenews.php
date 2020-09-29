<section class="bg-skybluewhite nanumsquare">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="mx-auto mb-5 my-lg-5">
                    <h4 class="p-1 bolder">Uke 뉴스</h4>
                    <a class="view_more_btn" >더보기 &#62;</a>
                    <div class="row">
                    <?php 
                    include_once($_SERVER['DOCUMENT_ROOT'].'/data/db_pdo.php');
                    $news_sql = mainpage_news_list();
                    $news_Array = $connect->prepare($news_sql) or die($connect->errorInfo());
                    $news_Array -> execute();

                    while($news=$news_Array->fetch())  {
                        $title=$news["news_title"]; 
                        if(strlen($title)>30){ 
                          $title=str_replace($news["news_title"],mb_substr($news["news_title"],0,30,"utf-8")."...",$news["news_title"]);
                        }  
                    ?>
                        <div class="col-lg-6">
                            <div class="card marginbottom1rem" >
                                <div class="mainnewsimgbox">
                                    <img class="mx-auto d-block" src="<?php echo $news['news_img01']; ?>" alt="Card image">
                                </div>
                                <div class="card-body">
                                    <p class="ellipsis_multi"><a href="./news_w_u.php?no=<?php echo $news['no'];?>"><?php echo $title;?></a></p>
                                    <h6><?php echo $news['news_write_date']; ?></h6>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    </div>
                </div>
            </div>


            <div class="col-lg-6">
                <div class="mx-auto mb-5 my-lg-5">
                    <h4 class="p-1 bolder">Uke 공지사항</h4>
                    <hr class="hr2 hr2_plus">
                    <a class="view_more_btn" >더보기 &#62;</a>


                    <div class="row">
                    
                    <?php 
                    $notice_sql = mainpage_notice_list();
                    $notice_Array = $connect->prepare($notice_sql) or die($connect->errorInfo());
                    $notice_Array -> execute();

                    while($notice=$notice_Array->fetch())  {
                        $content=$notice["notice_content"]; 
                        if(strlen($content)>30){ 
                          $content=str_replace($notice["notice_content"],mb_substr($notice["notice_content"],0,30,"utf-8")."...",$notice["notice_content"]);
                        }  
                    ?>

                    <div class="p-4 main_notice">
                            <h6 class="ellipsis_multi_one fontsize125"><a href="<?php echo $notice['no'];?>"><?php echo $notice["notice_title"]?></a></h6>
                            <p class="mb-0 ellipsis_multi_one"><?php echo $content;?></p>
                            <br>
                            <h6><?php echo $notice['notice_write_date']; ?></h6>
                            <hr class="hr2">
                        </div>
                        
                    <?php } ?>
                    </div>

                </div>
                <!-- <div class="mx-auto mb-5 my-lg-5">
                    <div class="p-3 main_notice">
                        <h6 class="ellipsis_multi_one">공지사항제목공지사항제목공지사항제목공지사항제목공지사항제목공지사항제목공지사항제목</h6>
                        <p class="mb-0 ellipsis_multi">공지사항공지사항공지사항!</p>
                        <h6 class="textright"><small><i>2020.03.04</i></small></h6>
                    </div>
                    <div class="p-3 main_notice">
                        <h6 class="ellipsis_multi_one">공지사항제목</h6>
                        <p class="mb-0 ellipsis_multi">공지사항공지사항공지사항공지사항공지사항공지사항공지사항공지사항공지사항공지사항공지사항공지사항공지사항공지사항공지사항공지사항!</p>
                        <h6 class="textright"><small><i>2020.03.04</i></small></h6>
                    </div>
                    <div class="p-3 main_notice">
                        <h6 class="ellipsis_multi_one">공지사항제목</h6>
                        <p class="mb-0 ellipsis_multi">공지사항공지사항공지사항!</p>
                        <h6 class="textright"><small><i>2020.03.04</i></small></h6>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</section>