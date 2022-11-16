<?php
<<<<<<< HEAD
if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
    $id = $_POST['id'];
    $iddm = $_POST['iddm'];
    $tensp = $_POST['tensp'];
    $giasp = $_POST['giasp'];
    $motangansp = $_POST['motangansp'];
    $motachitietsp = $_POST['motachitietsp'];
    $hinh = $_FILES['anhsp']['name'];
    $target_dir = "../../assets/uploads/";
    $target_file = $target_dir . basename($_FILES['anhsp']['name']);
    move_uploaded_file($_FILES["anhsp"]["tmp_name"], $target_file);

    update_sanpham($id, $tensp, $giasp, $motangansp, $motachitietsp, $hinh, $iddm);

    echo '<script>alert("Cập nhật sản phẩm thành công!")</script>';
}
$listdanhmuc = loadall_danhmuc();
$listsanpham = loadall_sanpham();
include "../../views/admin/san_pham/v_danh_sach_san_pham.php";
=======
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
>>>>>>> 70f021ea03958174a64b4451a29f3d49f27e0852
