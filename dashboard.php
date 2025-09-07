<!DOCTYPE html>
<html>
<head>
<title>Dashboard Inventory Management System</title>
<link rel="stylesheet" href="style.css">
<script src="https://use.fontawesome.com/0c7a3095b5.js"></script>
</head>
<body>
<div id="dashboardMainContainer">
    <!-- Sidebar -->
    <div class="dashboard_sidebar" id="dashboard_sidebar">
        <h3 class="dashboard_logo" id="dashboard_logo">IM</h3>
        <div class="dashboard_sidebar_user">
            <img src="userimg.png" alt="User image" id="userImage" />
            <span>Gomez</span>
        </div>
        <div class="dashboard_sidebar_menus">
            <ul class="dashboard_menu_lists">
                <li class="menuActive">
                    <a href=""><i class="fa fa-dashboard"></i> <span class="menuText">Dashboard</span></a>
                </li>
                <li class="menuActive">
                    <a href=""><i class="fa fa-bullhorn"></i> <span class="menuText">Campaigns</span></a>
                </li>
                <li class="menuActive">
                    <a href=""><i class="fa fa-doller"></i> <span class="menuText">Revenue Management</span></a>
                </li>
                <li class="menuActive">
                    <a href=""><i class="fa fa-book"></i> <span class="menuText">Account Receivable</span></a>
                </li>
                <li class="menuActive">
                    <a href=""><i class="fa fa-gears"></i> <span class="menuText">Configuration</span></a>
                </li>
                <li class="menuActive">
                    <a href=""><i class="fa fa-line-chart"></i> <span class="menuText">Stats</span></a>
                </li>
                <!-- <li>
                    <a href=""><i class="fa fa-users"></i> <span class="menuText">Users</span></a>
                </li> -->
            </ul>
        </div>
    </div>

    <!-- Content -->
    <div class="dashboard_content_container" id="dashboard_content_container">
        <div class="dashboard_topNav">
            <a href="" id="toggleBtn"><i class="fa fa-navicon"></i></a>
            <a href="" id="logoutBtn"><i class="fa fa-power-off"></i> Log-out</a>
        </div>
        <!-- <div class="dashboard_content">
            <div class="dashboard_content_main">
                <h1>Welcome to Dashboard</h1>
            </div>
        </div> -->
    </div>
</div>

<script>
var sideBarIsOpen = true;

document.getElementById('toggleBtn').addEventListener('click', function(event) {
    event.preventDefault();

    var dashboard_sidebar = document.getElementById('dashboard_sidebar');
    var dashboard_content_container = document.getElementById('dashboard_content_container');
    var dashboard_logo = document.getElementById('dashboard_logo');
    var userImage = document.getElementById('userImage');
    var menuIcons = document.getElementsByClassName('menuText');

    if (sideBarIsOpen) {
        dashboard_sidebar.style.width = '10%';
        dashboard_sidebar.style.transition = '0.3s all';
        dashboard_content_container.style.width = '90%';

        dashboard_logo.style.fontSize = '60px';
        userImage.style.width = '60px';

        for (var i = 0; i < menuIcons.length; i++) {
            menuIcons[i].style.display = 'none';
        }

        document.getElementsByClassName('dashboard_menu_lists')[0].style.textAlign = 'center';
        sideBarIsOpen = false;
    } else {
        dashboard_sidebar.style.width = '20%';
        dashboard_content_container.style.width = '80%';

        dashboard_logo.style.fontSize = '80px';
        userImage.style.width = '80px';

        for (var i = 0; i < menuIcons.length; i++) {
            menuIcons[i].style.display = 'inline-block';
        }

        document.getElementsByClassName('dashboard_menu_lists')[0].style.textAlign = 'left';
        sideBarIsOpen = true;
    }
});
</script>
</body>
</html>
