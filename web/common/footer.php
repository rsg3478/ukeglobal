<!-- Footer -->
<footer class="footer bg-footer nanumsquare">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <img class="footerlogo" src="<?php echo UKE_IMG_URL?>/footerlogo.png"/>
            <div>
        </div>
        <div class="row">
            <div class="col-lg-8 h-100 text-center text-lg-left my-auto footerfont">
                <ul class="list-inline mb-2">
                    <li class="list-inline-item">
                        <a href="https://open.kakao.com/o/g7JUlx3b">WCC센터</a>
                    </li>
                    <li class="list-inline-item">&#124;</li>
                    <li class="list-inline-item">
                        <a href="https://open.kakao.com/o/ge6p0w3b">UKE센터</a>
                    </li>
                    <li class="list-inline-item">&#124;</li>
                    <li class="list-inline-item">
                        <a href="https://open.kakao.com/o/gvO41w3b">CHC센터 </a>
                    </li>
                    <li class="list-inline-item">&#124;</li>
                    <li class="list-inline-item">
                        <a href="https://open.kakao.com/o/gknUUTec">유케이몰 고객센터</a>
                    </li>
                </ul>
                <div class="normal footerfont105">
                    <p class="mb-4 mb-lg-0">서울시 강남구 도산대로 207 성도빌딩 9층 (우)06026&nbsp;&nbsp;|&nbsp;&nbsp;<a href="https://url.kr/MiU5sR" target="_blank">오시는길</a></p>
                    <p class="mb-4 mb-lg-0">E-mail : <a href="mailto:info@uke.global">info@uke.global</a></p>
                    <p class="mb-4 mb-lg-0">Fax : 02-573-0852</p>
                    <p class="mb-4 mb-lg-0">Tel : <a href='tel:070-4458-5998'>070-4458-5998</a></p>
                    <p class="mb-4 mb-lg-0">Office view : <a href="http://14.49.36.74/workplace02.jpg" target="_blank">http://14.49.36.74/workplace.jpg</a></p>
                    <p class="text-muted small mb-4 mb-lg-0">&copy; koreanchessgame 2020. All Rights Reserved.</p>
                </div>                
            </div>
            <div class="col-lg-4 h-100 text-center text-lg-left my-auto footerfont">
                <p class="mb-4 mb-lg-0">APK 다운받기</p>
                <hr class="footerhr">
                <div class="normal footerfont105">
                    <!-- ㅌ[이블 만ㄷ르기 -->
                    <table class="table table-borderless footerfont">
                        <tbody>
                            <tr>
                                <td><a href="https://wcc-kr.uke.co.kr/home/apk.apk">WCC APK</a></td>
                                <td class="downloadbtn"><a href="https://wcc-kr.uke.co.kr/home/apk.apk"><img src="<?php echo UKE_IMG_URL?>/main/download.png"/></a></td>
                            </tr>
                            <tr>
                                <td><a href="http://www.uke.co.kr/ukewallet.apk">ATM APK</a></td>
                                <td class="downloadbtn"><a href="http://www.uke.co.kr/ukewallet.apk"><img src="<?php echo UKE_IMG_URL?>/main/download.png"/></a></td>
                            </tr>
                            <tr>
                                <td><a href="http://chc.uke.co.kr/home/chc.apk">CHC APK</a></td>
                                <td class="downloadbtn"><a href="http://chc.uke.co.kr/home/chc.apk"><img src="<?php echo UKE_IMG_URL?>/main/download.png"/></a></td>
                            </tr>
                            <tr>
                                <td><a data-toggle="modal" data-target="#button01">GEC APK</a></td>
                                <td class="downloadbtn"><a data-toggle="modal" data-target="#button01"><img src="<?php echo UKE_IMG_URL?>/main/download.png"/></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>    
            </div>
        </div>
    </div>
</footer>

<div class="modal fade" id="button01" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <!-- <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">돈버는 웹툰</h4>
            </div> -->
            <div class="modal-body talign_c">
              서비스준비중
            </div>
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div> -->
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript -->
<!-- <script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="<?php echo UKE_JS_PATH?>/mainslide.js"></script>
<script type="text/javascript" src="https://www.w3schools.com/lib/w3.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="https://dapi.kakao.com/v2/maps/sdk.js?appkey=64ceb0c0da020f1ce81b8ff43391ee70"></script>
<script>

    w3.includeHTML();

    $(window).on("load", function () {
        $(".loading").fadeOut();
    });

    var container = document.getElementById('map');
    var options = {
        center: new kakao.maps.LatLng(37.520396, 127.029105),
        level: 3
    };

    var map = new kakao.maps.Map(container, options);

    // 마커가 표시될 위치입니다 
    var markerPosition  = new kakao.maps.LatLng(37.520396, 127.029105); 

    // 마커를 생성합니다
    var marker = new kakao.maps.Marker({
        position: markerPosition
    });

    // 마커가 지도 위에 표시되도록 설정합니다
    marker.setMap(map);
    var iwContent = '<div style="padding:4px; font-size: 0.94em;">성도빌딩 9층 <a href="https://map.kakao.com/link/to/서울 강남구 도산대로 207,37.520396, 127.029105" style="color:blue" target="_blank">길찾기</a></div>', // 인포윈도우에 표출될 내용으로 HTML 문자열이나 document element가 가능합니다
        iwPosition = new kakao.maps.LatLng(33.450701, 126.570667); //인포윈도우 표시 위치입니다

    // 인포윈도우를 생성합니다
    var infowindow = new kakao.maps.InfoWindow({
        position : iwPosition, 
        content : iwContent 
    });
    
    // 마커 위에 인포윈도우를 표시합니다. 두번째 파라미터인 marker를 넣어주지 않으면 지도 위에 표시됩니다
    infowindow.open(map, marker);

    // $(document).ready(function(){
    //     $('.nav-tabs a').on('shown.bs.tab', function(){
    //         alert('The new tab is now fully shown.');
    //         $(".fouc").show();
    //     });
    // });

    // $(document).ready(function () {
    //     $(".nav-tabs a").click(function () {
    //         $(this).tab('show');
    //     });
        
    //     $('.nav-tabs a').on('shown.bs.tab', function (event) {
    //         var x = $(event.target).text(); // active tab
    //         var y = $(event.relatedTarget).text(); // previous tab
    //         $(".act span").text(x);
    //         $(".prev span").text(y);
    //     });
    // });

    
</script>

</body>

</html>