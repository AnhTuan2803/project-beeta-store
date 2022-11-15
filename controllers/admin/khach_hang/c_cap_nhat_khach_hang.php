<?php 
if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
    $id = $_POST['id'];
    $tenkh = $_POST['tenkh'];
    $emailkh = $_POST['emailkh'];
    $gioitinhkh = $_POST['gioitinhkh'];
    $ngaysinhkh = $_POST['ngaysinhkh'];
    $diachikh = $_POST['diachikh'];
    $sdtkh = $_POST['sdtkh'];
    $ghichukh = $_POST['ghichukh'];
    update_khachhang($id, $tenkh, $emailkh, $gioitinhkh, $ngaysinhkh, $diachikh, $sdtkh, $ghichukh);
    $thongbao = "Cập nhật thành công!";
}
$listkhachhang = loadall_khachhang();
include "../../views/admin/khach_hang/v_danh_sach_khach_hang.php";
?>