<?php
require 'config/database.php';
require 'views/header.php';

$page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';

switch ($page) {

    // Views
    case 'dashboard':
        include 'views/dashboard.php';
        break;

    // User Module
    case 'user/list':
        include 'modules/user/list.php';
        break;

    case 'user/add':
        include 'modules/user/add.php';
        break;

    case 'user/edit':
        include 'modules/user/edit.php';
        break;

    case 'user/delete':
        include 'modules/user/delete.php';
        break;

    // Auth Module
    case 'login':
        include 'modules/auth/login.php';
        break;

    case 'logout':
        include 'modules/auth/logout.php';
        break;

    default:
        echo "<h2>404 - Page Not Found</h2>";
}

require 'views/footer.php';
?>
