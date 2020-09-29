
<?php 
include_once($_SERVER['DOCUMENT_ROOT'].'/web/common/header.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/web/common/menu.php');
?>
<img class="bannerimg" src="<?php echo UKE_IMG_URL?>/menu/banner04.png"/>
<?php 
include_once($_SERVER['DOCUMENT_ROOT'].'/web/uke/menu/submenu.php');
?>
<section class="bg-white nanumsquare">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="mx-auto mb-9 my-lg-9">
                    <h4 class="p-1 bolder">오시는길</h4>
                    <div id="map" style="width:100%;height:500px;"></div>
                    <div class="my-lg-4 ml-7">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td>주소</td>
                                    <td>서울시 강남구 도산대로 207 성도빌딩 9층 (우)06026</td>
                                </tr>
                                <tr>
                                    <td>FAX</td>
                                    <td>02-573-0852</td>
                                </tr>
                                <tr>
                                    <td>E-mail</td>
                                    <td>info@uke.global</td>
                                </tr>
                                <tr>
                                    <td>대중교통</td>
                                    <td>압구정역 3번 출구 도보 10분</td>
                                </tr>
                            </tbody>
                            </table>
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
    $("#tab_get_directions").addClass(' active');
</script>