<!DOCTYPE html>
<html lang="kr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <script src="https://kit.fontawesome.com/920b3fa235.js" crossorigin="anonymous"></script>
        <script src="main.js" defer="defer"></script>
        <title>UKE_Admin</title>
    </head>
    <body>
        <nav class="navbar">
            <div class="navbar_logo">
                <a href="">
                    <i class="fab fa-audible"></i>
                    UKE_Admin
                </a>
            </div>

            <ul class="navbar_Logout">
                <li>
                    <a href="#">Logout</a>
                </li>
            </ul>

            <a href="#" class="navbar_togleBtn">
                <i class="fas fa-bars"></i>
            </a>
        </nav>
        <aside class="side_bar">
            <ul class="navbar_menu">
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li>
                    <a href="#">공지사항</a>
                </li>
                <li>
                    <a href="#">뉴스</a>
                </li>
                <li>
                    <a href="#">팝업</a>
                </li>
            </ul>
        </aside>
    </body>
</html>
</body>
</html>
<style>
:root {
--text-color: #f0f4f5;
--background-color: #263343;
--accent-color: #d49466;
}

body {
margin: 0;
}

a {
text-decoration: none;
color: var(--text-color);
}

.navbar {
display: flex;
justify-content: space-between;
align-items: center;
background-color: var(--background-color);
padding: 8px 12px;
}

.navbar_logo {
font-size: 24px;
color: var(--text-color);
}

.navbar_logo i {
color: var(--accent-color);
}

.side_bar {
  background-color: var(--background-color);
}

.navbar_menu {
display: flex;
flex-direction: column;
list-style: none;
}

.navbar_menu li {
padding: 8px 12px;
}

.navbar_menu li:hover {
background-color: var(--accent-color);
border-radius: 4px;
}

.navbar_Logout {
list-style: none;
color: var(--text-color);
display: flex;
padding: 0;
}

.navbar_Logout li {
padding: 8px 12px;
}

.navbar_Logout li:hover {
background-color: var(--accent-color);
border-radius: 4px;
}

.navbar_togleBtn {
display: none;
position: absolute;
right: 32px;
font-size: 24px;
color: var(--accent-color);
}

@media screen and (max-width: 768px) {
.navbar {
    flex-direction: column;
    align-items: flex-start;
    padding: 8px 24px;
}

.navbar_menu {
    display: none;
    flex-direction: column;
    align-items: center;
    width: 100%;
}

.navbar_menu li {
    width: 100%;
    text-align: center;
}

.navbar_Logout {
    display: none;
    justify-content: center;
    width: 100%;
}

.navbar_togleBtn {
    display: block;
}

.navbar_Logout.active,
.navbar_menu.active {
    display: flex;
}
}
</style>