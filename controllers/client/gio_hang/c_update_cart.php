<?php
if (isset($_SESSION['email'])) {
    if (isset($_POST['update_cart']) && ($_POST['update_cart'])) {
        // foreach ($_SESSION['myCart'] as $key => $cart) {

        //     $id = $_POST['id'];
        //     $ten_sp = $_POST['ten'];
        //     $gia_sp = $_POST['gia'];
        //     $img_sp = $_POST['img'];
        //     $soluong = $_POST['soluong'];
        //     $thanhtien = $soluong * $gia_sp;

        //     if ($id == $cart[0]) {
        //         $spadd = [$id, $ten_sp, $gia_sp, $soluong, $thanhtien, $img_sp];
        //         array_replace($spadd);
        //         echo '<script>alert("Cập nhật thành công!")</script>';
        //         include "./views/client/gio_hang/v_gio_hang.php";
        //         echo header("refresh: 0");
        //         exit();
        //     }

        // }
    } else {
        include "./views/client/gio_hang/v_gio_hang.php";
    }
} else {
    echo '<script>alert("Vui lòng đăng nhập!")</script>';
    header('Location: ./views/v_login.php');
}
