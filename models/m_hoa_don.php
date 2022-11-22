<?php
    // 

    function tongtien()
{
    $tong = 0;
    foreach ($_SESSION['myCart'] as $key => $cart) {
        $ttien = $cart[2] * $cart[3];
        $tong += $ttien;
    }
    return $tong;
}

function insert_khachhang($ho_ten, $gioi_tinh, $ngay_sinh, $dia_chi, $sdt, $email, $ghi_chu)
{
    $sql = "insert into khach_hang(ten_kh,gioi_tinh,ngay_sinh,dia_chi,sdt,email,ghi_chu) values('$ho_ten', '$gioi_tinh', '$ngay_sinh', '$dia_chi', '$sdt','$email','$ghi_chu')";
    return pdo_execute_lastinsertid($sql);
}

function insert_hoadon($ngaydathang, $id_khachhang,$gia_tien, $pttt, $tinh_trang)
{
    $sql = "insert into hoa_don(ngay_hd,id_kh,gia_tien,thanh_toan,tinh_trang) values('$ngaydathang', '$id_khachhang', '$gia_tien', '$pttt', '$tinh_trang')";
    return pdo_execute_lastinsertid($sql);
}

function insert_ct_hoadon($id_hoadon, $cart0, $cart3, $cart2)
{
    $sql = "insert into ct_hoa_don(id_hd,id_sp, so_luong,don_gia) values('$id_hoadon', '$cart0', '$cart3', '$cart2')";
    return pdo_execute_lastinsertid($sql);
}
// 

function loadall_hoadon(){
    $sql = "select * from `hoa_don` order by id_hd desc";
    $listhoadon = pdo_query($sql);
    return $listhoadon;
}
function loadone_hoadon($id){
    $sql = "select * from `hoa_don` where id_hd=" . $id;
    $hd = pdo_query_one($sql);
    return $hd;
}
function delete_hoadon($id){
    $sql = "delete from `hoa_don` where id_hd=" . $id;
    pdo_execute($sql);
}
function load_ct_hoadon($id){
    $sql = "select san_pham.ten_sp, san_pham.don_gia, san_pham.hinh, khach_hang.ten_kh, khach_hang.dia_chi, khach_hang.sdt, khach_hang.email, ct_hoa_don.so_luong, ngay_hd, gia_tien from ct_hoa_don
    inner join hoa_don on hoa_don.id_hd = ct_hoa_don.id_hd
    inner join san_pham on san_pham.id_sp = ct_hoa_don.id_sp
    inner join khach_hang on khach_hang.id_kh = hoa_don.id_kh
    where hoa_don.id_hd =" .$id; 
    $ct_hoadon = pdo_query($sql);
    return $ct_hoadon;
}
?>