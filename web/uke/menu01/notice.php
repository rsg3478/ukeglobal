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
                    <div id="accordion">
                        <div class="card">
                            <div class="card-header">
                                <a class="card-link" data-toggle="collapse" href="#collapseOne">
                                    Collapsible Group Item #1
                                </a>
                            </div>
                            <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                    nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                                    Collapsible Group Item #2
                                </a>
                            </div>
                            <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                    nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                                    Collapsible Group Item #3
                                </a>
                            </div>
                            <div id="collapseThree" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                    nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </div>
                            </div>
                        </div>
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