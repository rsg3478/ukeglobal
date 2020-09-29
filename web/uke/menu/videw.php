<?php 
include_once($_SERVER['DOCUMENT_ROOT'].'/web/common/header.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/web/common/menu.php');
?>
<img class="bannerimg" src="<?php echo UKE_IMG_URL?>/menu/banner05.png"/>

<section class="bg-white nanumsquare features-margin-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="mx-auto mb-9 my-lg-9">
                    <h4 class="p-1 bolder">Uke 동영상</h4>
                    <hr class="noticehr">
                    <div class="row">
                        <div class="col-lg-3">
                            <a data-toggle="modal" data-target="#visew02">
                                <div class="mainnewsimgbox width100 newshover">
                                    <img class="videobtn" src="<?php echo UKE_IMG_URL?>/menu/playbtn.png" alt="Card image">
                                    <img class="mx-auto d-block img " src="<?php echo UKE_IMG_URL?>/menu/playbtn_back.png" alt="Card image">
                                </div>
                                <div class="card-body">
                                    <p class="ellipsis_multi_one textcenter">WCC가이드</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3">
                            <a data-toggle="modal" data-target="#visew">
                                <div class="mainnewsimgbox width100 newshover">
                                    <img class="videobtn" src="<?php echo UKE_IMG_URL?>/menu/playbtn.png" alt="Card image">
                                    <img class="mx-auto d-block img " src="https://cdn.newsin.co.kr/news/photo/202003/76304_62550_2114.jpg" alt="Card image">
                                </div>
                                <div class="card-body">
                                    <p class="ellipsis_multi_one textcenter">UKE소개</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        include_once('videw_list.php');
    ?>
</section>

<?php 
include_once($_SERVER['DOCUMENT_ROOT'].'/web/common/footer.php');
?>