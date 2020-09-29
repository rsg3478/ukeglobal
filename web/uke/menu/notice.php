<?php 
include_once($_SERVER['DOCUMENT_ROOT'].'/web/common/header.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/web/common/menu.php');
?>
<img class="bannerimg" src="<?php echo UKE_IMG_URL?>/menu/banner03.png"/>
<?php 
include_once($_SERVER['DOCUMENT_ROOT'].'/web/uke/menu/submenu.php');
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
                        <div class="card bordernono">
                            <div class="card-header">
                                <a class="card-link" data-toggle="collapse" href="#collapseOne">
                                    출금시 수수료 공지
                                </a>
                                <a class="notice_view_more_btn" data-toggle="collapse" href="#collapseOne">
                                    <img src="<?php echo UKE_IMG_URL?>/menu/arrow.png" alt="arrow">
                                </a>
                                <p class="noticefont">2020.07.09</p>
                            </div>
                            <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                <div class="card-body">
                                    2020년 3월 1일부터 출금시 아래와 같은 명목으로 출금시 관리수수료는 출금금액의 1%입니다.
                                    <br><br>
                                    - 아 래 -<br>
                                    1. WCC 코인거래활성화시스템 유지보수비<br>
                                    2. 코인 매수대행 수수료<br>
                                    3. 매도수수료<br>
                                    4. 관리수수료.<br><br>

                                    UKE 시설관리팀
                                </div>
                                <hr>
                            </div>
                        </div>
                        <div class="card bordernono">
                            <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                                    금융코인복합 UKE ATM 이용 공지
                                </a>
                                <a class="notice_view_more_btn" data-toggle="collapse" href="#collapseTwo">
                                    <img src="<?php echo UKE_IMG_URL?>/menu/arrow.png" alt="arrow">
                                </a>
                                <p class="noticefont">2020.07.09</p>
                            </div>
                            <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    2020년 3월 1일부터 출금시 아래와 같은 명목으로 출금시 관리수수료는 출금금액의 1%입니다.
                                    <br><br>
                                    - 다 음 -<br>

                                    1. 서비스 시간 : 영업일 기준 10:00~18:00<br>

                                    2. 서비스 장소 : 현재 UKE 본사, 향 후 전국지사<br>

                                    3. 서비스 대상 : UKE 상장코인<br><br>


                                    ◆ 회원여러분의 많은 이용바랍니다.<br>

                                    UKE 시설지원팀


                                </div>
                                <hr>
                            </div>
                        </div>
                        <div class="card bordernono">
                            <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                                    입출금정책 공지사항
                                </a>
                                <a class="notice_view_more_btn" data-toggle="collapse" href="#collapseThree">
                                    <img src="<?php echo UKE_IMG_URL?>/menu/arrow.png" alt="arrow">
                                </a>
                                <p class="noticefont">2020.07.09</p>
                            </div>
                            <div id="collapseThree" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    ◆ 입금정책<br>
                                    1. 일반회원은 UKE 거래소에 입금신청을 해주시기 바랍니다.<br>
                                    2. ★ WCC회원은 (주)유캔자산관리계좌로 입금 후, 반드시 WCC 충전에서 입금신청을 하시기 바랍니다.<br><br>
                                   
                                    ◆ 출금정책<br>
                                    1. 출금신청 시간은 영업일 기준 18:00까지입니다.<br>
                                    2. 출금신청 영업일은 매주 월~금요일입니다.<br>
                                    3. 출금신청은 신청일 기준하여 72시간입니다.<br>
                                    4. 다계정, 다계좌 출금계좌는 하나의 출금계좌로 통일하여 주시기 바랍니다.<br>
                                    5. 출금이후 미지급 해제는 24시간 자동해제 됩니다.<br><br>

                                    ★ 문의 사항은 WCC지갑의 UKE센터를 이용하시기 바랍니다.
                                </div>
                                <hr>
                            </div>
                        </div>
                        <div class="card bordernono">
                            <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapse04">
                                    코인담보대출의 건
                                </a>
                                <a class="notice_view_more_btn" data-toggle="collapse" href="#collapse04">
                                    <img src="<?php echo UKE_IMG_URL?>/menu/arrow.png" alt="arrow">
                                </a>
                                <p class="noticefont">2020.07.09</p>
                            </div>
                            <div id="collapse04" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    ☞ 당사에서는 한국최초로 코인담보대출 시스템을 구축하였습니다.<br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;→ 거래소 코인담보대출 메뉴에서 신청하시기 바랍니다.<br>
                                    ☞ 담보대출 필수사항 : 회원가입→ 해당지갑생성→ 담보제공코인 이동<br><br>
                                   
                                    ◆ 담보대출 가능코인은 다음과 같습니다.<br>

                                    1. 비트코인(BTC) : 년금리 12%, 담보비율(200%)<br>
                                    2. 이더리움(ETH) : 년금리 12%, 담보비율(200%)<br>
                                    3. 명동코인(MDC) : 년금리 12%, 담보비율(200%)<br>
                                    4. 골드바코인(GEC) : 년금리 12%, 담보비율(200%)<br>
                                    5. 기타코인(시스템을 구축하고 있습니다.).끝.<br><br>

                                    많은 이용바랍니다.<br><br>

                                    UKE 금융지원팀
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