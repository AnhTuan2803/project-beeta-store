<?php
session_start();
ob_start();
include "./models/m_pdo.php";
include "./models/m_nguoi_dung.php";
include "./views/client/layout/header.php";
if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'dangky':
            include "./controllers/client/tai_khoan/c_dang_ky.php";
            break;
        case 'dangnhap':
            include "./controllers/client/tai_khoan/c_dang_nhap.php";
            break;
        case 'logout':
            session_unset();
            header('Location: ./index.php');
            break;
        default:
            include "./views/client/layout/home.php";
            break;
    }
} else {
    include "./views/client/layout/home.php";
}
include "./views/client/layout/footer.php";
