<?php
session_start();
ob_start();
include "view/header.php";
include "model/pdo.php";
include "model/nguoi_dung.php";
if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'dang_xuat':
            session_unset();
            header('Location: dang_nhap.php');
            break;
        default:
            include "view/home.php";
    }
}else{
    include "view/home.php";
}
include "view/footer.php";
?>