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
                    ?>
                        <div class="col-lg-6">
                            <div class="card marginbottom1rem" >
                                <div class="mainnewsimgbox">
                                    <img class="mx-auto d-block img" src="<?php echo $news['news_img01'] ?>" alt="Card image">
                                </div>
                                <div class="card-body">
                                    <p class="ellipsis_multi"><a href="<?php echo $news['no'] ?>"><?php echo $news["news_content"] ?></a></p>
                                    <h6><?php echo $news["news_write_date"] ?></h6>
                                </div>
                            </div>
                        </div>
                        <?php }  ?>
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
                    ?>
                        <div class="p-4 main_news width100">
                            <h6 class="ellipsis_multi_one fontsize125"><?php echo $notice["notice_title"] ?></h6>
                            <div class="mb-0 ellipsis_multi_one"><?php echo $notice["notice_content"] ?></div>
                            <br>
                            <h6><?php echo $notice["notice_write_date"] ?></h6>
                            <hr class="hr2">
                        </div>
                        <?php }  ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>