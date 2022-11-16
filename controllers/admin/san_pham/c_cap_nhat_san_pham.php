<?php
if(isset($_POST['capnhat'])&& ($_POST['capnhat'])){
    $id_sp = $_POST['id'];
    $ten_sp = $_POST['ten_sp'];
    $don_gia = $_POST['don_gia'];
    $ngay_tao = $_POST['ngay_tao'];
    $mo_ta_ngan = $_POST['mo_ta_ngan'];
    $mo_ta_chi_tiet = $_POST['mo_ta_chi_tiet'];
    $hinh =$_FILES['hinh']['name'];
    $hinhpath = "../../assets/upload/" . $hinh;
    $target_file = $hinhpath . basename($_FILES["hinh"]["name"]);

    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
        // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
    } else {
        // echo "Sorry, there was an error uploading your file.";
    };
    update_sanpham($id_sp, $ten_sp,$mo_ta_ngan, $mo_ta_chi_tiet, $don_gia, $hinh, $ngay_tao);
    $thongbao = "Update Succesfull";
}
$listsanpham = loadall_sanpham();
include "../../views/admin/san_pham/v_danh_sach_san_pham.php";

?>