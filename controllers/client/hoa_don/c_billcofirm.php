<?php
if (isset($_POST['dat_hang'])) {
    if (isset($_SESSION['email'])) $iduser = $_SESSION['email']['id_nd'];
    else $iduser = 0;

    $ho_ten = $_POST['ho_ten'];
    $gioi_tinh = $_POST['gioi_tinh'];
    $ngay_sinh = $_POST['ngay_sinh'];
    $dia_chi = $_POST['dia_chi'];
    $sdt = $_POST['sdt'];
    $email = $_POST['email'];
    $ghi_chu = $_POST['ghi_chu'];
    $pttt = $_POST['pttt'];
    $ngaydathang = date('Y/m/d');

    $tinh_trang = 1;
    $gia_tien = $_POST['gia_tien'];

    $tongtien = tongtien();

    $id_khachhang = insert_khachhang($ho_ten, $gioi_tinh, $ngay_sinh, $dia_chi, $sdt, $email, $ghi_chu);

    $id_hoadon = insert_hoadon($ngaydathang, $id_khachhang, $tongtien, $pttt, $tinh_trang);

    foreach ($_SESSION['myCart'] as $cart) {
        $id_ct_hoadon = insert_ct_hoadon($id_hoadon, $cart[0], $cart[3], $cart[2]);
    }


    // foreach ($_SESSION['myCart'] as $cart) {
    //     insert_cart($_SESSION['user']['id'], $cart[0], $cart[2], $cart[1], $cart[3], $cart[4], $cart[5], $idbill);
    // }
    // $bill = loadone_bill($idbill);
    // $billct = loadall_cart($idbill);
    // $_SESSION['cart'] = [];
    echo '<script>alert("Bạn đã đặt hàng thành công!")</script>';
    include "./views/client/gio_hang/v_gio_hang.php";
}
