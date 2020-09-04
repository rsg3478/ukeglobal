<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin_login</title>
    <link rel="stylesheet" href="/css/main.css">    
    <link rel="stylesheet" href="/css/board.css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="/js/main.js"></script>
</head>
<body>    
<header role="banner">
  <h1>Admin Panel</h1>
  <ul class="utilities">
    <br>
    <li class="users"><a href="#">My Account</a></li>
    <li class="logout warn"><a href="">Log Out</a></li>
  </ul>
</header>

<nav role='navigation'>
  <ul class="main">
    <li class="dashboard"><a href="#">Dashboard</a></li>
    <li class="write"><a href="#">공지사항</a></li>
    <li class="write"><a href="#">뉴스</a></li>
    <li class="write"><a href="#">팝업</a></li>
    <!--
    <li class="edit"><a href="#">Edit Website</a></li>
    <li class="comments"><a href="#">Ads</a></li>
    <li class="users"><a href="#">Manage Users</a></li>
    -->
  </ul>
</nav>
<main>
    <?php
    include("/board.php");
    ?>
</main>
</body>
