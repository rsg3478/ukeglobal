<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/web/uke/controller/main_videw.php');
?>

<section class="bg-bluewhite nanumsquare features-margin-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="mx-auto mb-5 my-lg-5">
                    <h4 class="p-1 bolder">Uke 동영상</h4>
                    <a class="view_more_btn" >더보기 &#62;</a>
                    <div class="row">
                    <?php 
                   
                    $video_result = main_video_list();

                    while ($video_row = $video_result->fetch(PDO::FETCH_ASSOC)) { 

                    ?>
                        <div class="col-lg-3">
                            <div class="card" >
                                <div class="mainnewsimgbox width80">
                                    <img class="mx-auto d-block img" src="<?php echo $video_row['video_img'] ?>" alt="Card image">
                                </div>
                                <div class="card-body">
                                    <p class="ellipsis_multi_one"><?php echo $video_row["video_title"] ?></p>
                                    <h6><?php echo $video_row["video_write_date"] ?></h6>
                                    <?php echo $video_row["video_link"] ?>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>