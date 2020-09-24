<!-- Navigation -->
<nav class="navbar navbar-light bg-light static-top nanumsquare">
    <div class="container">
        <a class="navbar-brand" href="<?php $_SERVER['DOCUMENT_ROOT']?>/index.php">UKEglobal</a>
        <div class="menucenter">
            <a class="navbar-brand" href="<?php echo UKE_WEB_URL?>/uke/menu01/introduce.php">UKE</a>
            <a class="navbar-brand" href="#">소개</a>
            <a class="navbar-brand" href="#">거래소</a>
            <a class="navbar-brand" href="#">지갑</a>
            <a class="navbar-brand" href="#">쇼핑몰</a>
        </div>
        <!-- <a class="btn btn-primary" href="#">Sign In</a> -->
        <div class="dropdown">
            <button type="button" class="btn btn-outline-warning dropdown-toggle" data-toggle="dropdown"> 한국어 </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">영어</a>
                <a class="dropdown-item" href="#">중국어</a>
                <a class="dropdown-item" href="#">일본어</a>
            </div>
        </div>
    </div>
</nav>
<div class="menufome">
    <div class="fomebox">
        <div class="">
            <a class="navbar-brand" href="<?php echo UKE_WEB_URL?>/uke/menu01/introduce.php"><?php echo $lang['UKE_introduction']; ?></a>
            <a class="navbar-brand" href="<?php echo UKE_WEB_URL?>/uke/menu01/news.php"><?php echo $lang['news']; ?></a>
            <a class="navbar-brand" href="<?php echo UKE_WEB_URL?>/uke/menu01/notice.php"><?php echo $lang['notice']; ?></a>
            <a class="navbar-brand" href="<?php echo UKE_WEB_URL?>/uke/menu01/get_directions.php"><?php echo $lang['way to come']; ?></a>
        </div>
        <div class="">
            <a class="navbar-brand" href="#"><?php echo $lang['video']; ?></a>
            <a class="navbar-brand" href="#"><?php echo $lang['Recommendation system']; ?></a>
        </div>
        <div class="">
            <a class="navbar-brand" href="https://www.uke.co.kr/" target="_blank"><?php echo $lang['exchange']; ?></a>
            <a class="navbar-brand" href="https://www.uke.co.kr/exchange/krw_chc" target="_blank"><?php echo $lang['CHC']; ?></a>
            <a class="navbar-brand" href="https://www.uke.co.kr/exchange/krw_gec" target="_blank"><?php echo $lang['GEC']; ?></a>
            <a class="navbar-brand" href="https://www.uke.co.kr/exchange/krw_mdc" target="_blank"><?php echo $lang['MDC']; ?></a>
        </div>
        <div class="">
            <a class="navbar-brand" href="https://wcc-kr.uke.co.kr/home/" target="_blank"><?php echo $lang['WCC']; ?></a>
            <a class="navbar-brand" href="http://wallet.uke.co.kr/login" target="_blank"><?php echo $lang['ATM']; ?></a>
            <a class="navbar-brand" href="https://chc.uke.co.kr/home/" target="_blank"><?php echo $lang['CHC']; ?></a>
            <a class="navbar-brand" href="https://chc.uke.co.kr/home/" data-toggle="modal" data-target="#button01"><?php echo $lang['GEC']; ?></a>
        </div>
        <div class="">
            <a class="navbar-brand" href="http://uke.center/s_bbs/shop/" target="_blank"><?php echo $lang['Discount shopping mall']; ?></a>
            <a class="navbar-brand" href="https://uke.playhan.com/" target="_blank"><?php echo $lang['UKE shopping mall']; ?></a>
            <a class="navbar-brand" href="http://ukeshop.co.kr/" target="_blank"><?php echo $lang['coin shopping mall']; ?></a>
            <a class="navbar-brand" href="http://ecowellmall.com/bbs/login.php" target="_blank"><?php echo $lang['Eco General Wholesale']; ?></a>
        </div>
    </div>
</div>