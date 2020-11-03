<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/web/uke/controller/thenews.php');
?>

<section class="bg-skybluewhite nanumsquare">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="mx-auto mb-5 my-lg-5">
                    <h4 class="p-1 bolder">Uke 뉴스</h4>
                    <a class="view_more_btn" >더보기 &#62;</a>
                    <div class="row">
                    <?php 
                    
                    $news_result = main_news_list();

                    while ($news_row = $news_result -> fetch(PDO::FETCH_ASSOC)) { 
                    
                    ?>
                        <div class="col-lg-6">
                            <div class="card marginbottom1rem" >
                                <div class="mainnewsimgbox">
                                    <img class="mx-auto d-block img" src="<?php echo $news_row['news_img01'] ?>" alt="Card image">
                                </div>
                                <div class="card-body">
                                    <p class="ellipsis_multi"><a href="<?php echo $news_row['no'] ?>"><?php echo $news_row["news_content"] ?></a></p>
                                    <h6><?php echo $news_row['news_write_date'] ?></h6>
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
                   
                    $notice_result = main_notice_list();

                    while ($notice_row = $notice_result->fetch(PDO::FETCH_ASSOC)) { 

                    ?>
                        <div class="p-4 main_news width100">
                            <h6 class="ellipsis_multi_one fontsize125"><?php echo $notice_row["notice_title"] ?></h6>
                            <div class="mb-0 ellipsis_multi_one"><?php echo $notice_row["notice_content"] ?></div>
                            <br>
                            <h6><?php echo $notice_row['notice_write_date'] ?></h6>
                            <hr class="hr2">
                        </div>
                    </div>                    
                <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>