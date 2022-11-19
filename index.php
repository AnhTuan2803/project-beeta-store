<?php
session_start();
ob_start();
include "./models/m_pdo.php";
include "./models/m_nguoi_dung.php";
include "./models/m_san_pham.php";
include "./models/m_danh_muc.php";

$sphome = loadall_sanpham_home();
$listsanpham = loadall_sanpham();

if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'shop':
            include "./views/client/layout/header_sub.php";
            include "./views/client/san_pham/v_san_pham.php";
            break;
        case 'sanpham_gird':
            include "./views/client/layout/header_sub.php";
            include "./views/client/san_pham/v_san_pham.php";
            break;
        case 'sanpham_list':
            include "./views/client/layout/header_sub.php";
            include "./views/client/san_pham/v_san_pham_list.php";
            break;
        case 'sanphamct':
            include "./views/client/layout/header_sub.php";
            include "./controllers/client/san_pham/c_san_pham_ct.php";
            break;
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
            include "./views/client/layout/header.php";
            include "./views/client/layout/banner.php";
            include "./views/client/layout/home.php";
            break;
    }
} else {
    include "./views/client/layout/header.php";
    include "./views/client/layout/banner.php";
    include "./views/client/layout/home.php";
}
include "./views/client/layout/footer.php";
