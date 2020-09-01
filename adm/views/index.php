<!DOCTYPE html>
<html lang="kr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/admin_index.css">
        <link rel="stylesheet" href="../css/board_tool.css">
        <script src="https://kit.fontawesome.com/920b3fa235.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="./nse/js/HuskyEZCreator.js" charset="utf-8"></script>
        <script src="../js/admin_index.js" defer="defer"></script>
        <title>nav_bar</title>
    </head>
    <body>
        <header class="header">
            <div class="header_logo">
                <a href="">UKE_Admin</a>
            </div>

            <ul class="toggle_menu">
                <li>
                    <a href="">Dashboard</a>
                </li>
                <li>
                    <a href="">Admin Profile</a>
                </li>
                <li>
                    <a href="">공지사항</a>
                </li>
                <li>
                    <a href="">뉴스</a>
                </li>
                <li>
                    <a href="">팝업</a>
                </li>
            </ul>

            <ul class="header_Logout">
                <li>
                    <a href="#">Logout</a>
                </li>
            </ul>

            <a href="#" class="header_togleBtn">
                <i class="fas fa-bars"></i>
            </a>

        </header>

        <div class="mainbar">
            <div class="sidebar">
                <ul class="sidebar_menu">
                    <li>
                        <a href="">Dashboard</a>
                    </li>
                    <li>
                        <a href="">Admin Profile</a>
                    </li>
                    <li>
                        <a href="">공지사항</a>
                    </li>
                    <li>
                        <a href="">뉴스</a>
                    </li>
                    <li>
                        <a href="">팝업</a>
                    </li>
                </ul>
            </div>
            <div class="dashboard">

<?php
    include "./board_list.php"
?>

            </div>
        </div>
    </body>
</html>