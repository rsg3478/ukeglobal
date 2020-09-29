<?php 
include_once($_SERVER['DOCUMENT_ROOT'].'/web/common/header.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/web/common/menu.php');
?>
<img class="bannerimg" src="<?php echo UKE_IMG_URL?>/menu01/banner03.png"/>
<?php 
include_once($_SERVER['DOCUMENT_ROOT'].'/web/uke/menu01/submenu.php');
?>
<section class="bg-white nanumsquare">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="mx-auto mb-9 my-lg-9">
                    <h4 class="p-1 bolder">공지사항</h4>
                    <hr class="noticehr">
                    <br>
                    <div id="accordion">

                    <?php 
                    include_once($_SERVER['DOCUMENT_ROOT'].'/data/db_pdo.php');
                    $notice_sql = notice_home_list();
                    $notice_Array = $connect->prepare($notice_sql) or die($connect->errorInfo());
                    $notice_Array -> execute();

                    while($notice=$notice_Array->fetch())  {
                        if($notice["no"]  == 4){
                    ?>
                        <div class="card bordernono">
                            <div class="card-header">
                                <a  class="collapsed card-link" data-toggle="collapse" href="#collapse<?php echo $notice["no"] ?>">
                                <?php echo $notice["notice_title"] ?>
                                </a>
                                <a class="notice_view_more_btn" data-toggle="collapse" href="#collapse<?php echo $notice["no"] ?>">
                                    <img src="<?php echo UKE_IMG_URL?>/menu01/arrow.png" alt="arrow">
                                </a>
                                <p class="noticefont"><?php echo $notice["notice_write_date"] ?></p>
                            </div>
                            <div id="collapse<?php echo $notice["no"] ?>" class="collapse show" data-parent="#accordion">
                                <div class="card-body">
                                asdfas
                                </div>
                                <hr>
                            </div>
                        </div>
                        <?php }else{ ?>

                        <div class="card bordernono">
                            <div class="card-header">
                                <a  class="card-link" data-toggle="collapse" href="#collapse<?php echo $notice["no"] ?>">
                                <?php echo $notice["notice_title"] ?>
                                </a>
                                <a class="notice_view_more_btn" data-toggle="collapse" href="#collapse<?php echo $notice["no"] ?>">
                                    <img src="<?php echo UKE_IMG_URL?>/menu01/arrow.png" alt="arrow">
                                </a>
                                <p class="noticefont"><?php echo $notice["notice_write_date"] ?></p>
                            </div>
                            <div id="collapse<?php echo $notice["no"] ?>" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                asdfas
                                </div>
                                <hr>
                            </div>
                        </div>
                        

                    <?php }
                
                } 
                ?>
                       
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php 
include_once($_SERVER['DOCUMENT_ROOT'].'/web/common/footer.php');
?>
<script>
    $("#tab_notice").addClass(' active');
</script>