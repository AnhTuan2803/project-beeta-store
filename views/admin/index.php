<?php
include "../../models/pdo.php";
include "../../models/danh_muc.php";
include "../../models/san_pham.php";
include "../../models/khach_hang.php";
include "../admin/layout/header.php";
include "../admin/layout/box_left.php";

if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
            // Điều hướng danh mục
        case 'them_danh_muc':
            include "../../controllers/admin/danh_muc/c_them_danh_muc.php";
            break;
        case 'danh_sach_danh_muc':
            include "../../controllers/admin/danh_muc/c_danh_sach_danh_muc.php";
            break;
        case 'xoadm':
            include "../../controllers/admin/danh_muc/c_xoa_danh_muc.php";
            break;
        case 'suadm':
            include "../../controllers/admin/danh_muc/c_sua_danh_muc.php";
            break;
        case 'cap_nhat_danh_muc':
            include "../../controllers/admin/danh_muc/c_cap_nhat_danh_muc.php";
            break;
            // Điều hướng sản phẩm
        case 'them_san_pham':
            include "../../controllers/admin/san_pham/c_them_san_pham.php";
            break;
        case 'danh_sach_san_pham':
            include "../../controllers/admin/san_pham/c_danh_sach_san_pham.php";
            break;
        case 'xoasp':
            include "../../controllers/admin/san_pham/c_xoa_san_pham.php";
            break;
        case 'suasp':
            include "../../controllers/admin/san_pham/c_sua_san_pham.php";
            break;
        case 'cap_nhat_san_pham':
            include "../../controllers/admin/san_pham/c_cap_nhat_san_pham.php";
            break;
            // Điều hướng khách hàng
        case 'danh_sach_khach_hang':
            include "../../controllers/admin/khach_hang/c_danh_sach_khach_hang.php";
            break;
        case 'xoakh':
            include "../../controllers/admin/khach_hang/c_xoa_khach_hang.php";
            break;
        case 'suakh':
            include "../../controllers/admin/khach_hang/c_sua_khach_hang.php";
            break;
        case 'cap_nhat_khach_hang':
            include "../../controllers/admin/khach_hang/c_cap_nhat_khach_hang.php";
            break;
        default:
            include "../admin/layout/home.php";
            break;
    }
} else {
    include "../admin/layout/home.php";
}
include "../admin/layout/footer.php";
