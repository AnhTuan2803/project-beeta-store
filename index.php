<?php
session_start();
ob_start();
include "./models/pdo.php";
include "./views/client/layout/header.php";
if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        
        // case 'login':
        //     include "./views/login.php";
        //     break;
        case 'dang_xuat':
            session_unset();
            header('Location: ./views/login.php');
            break;
        default:
        include "./views/client/layout/home.php";
    }
}else{
    include "./views/client/layout/home.php";
}
include "./views/client/layout/footer.php";
?>