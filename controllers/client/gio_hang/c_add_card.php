<?php
if (isset($_SESSION['email'])) {
    if (isset($_POST['add_cart']) && ($_POST['add_cart'])) {
        $id = $_POST['id'];
        $ten_sp = $_POST['ten_sp'];
        $gia_sp = $_POST['gia_sp'];
        $soluong = $_POST['so_luong'];
        $thanhtien = $soluong * $gia_sp;

        $spadd = [$id, $ten_sp, $gia_sp, $soluong, $thanhtien];
        array_push($_SESSION['myCart'], $spadd);
        include "./views/client/gio_hang/v_gio_hang.php";
    }else{
        include "./views/client/gio_hang/v_gio_hang.php";
    }
} else {
    echo '<script>alert("Vui lòng đăng nhập!")</script>';
    header('Location: ./views/v_login.php');
}
