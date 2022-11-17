<?php
    function loadall_nguoidung(){
        $sql = "select * from `nguoi_dung` order by id_nd desc";
        $listnguoidung = pdo_query($sql);
        return $listnguoidung;
    }  
    function checkuser($email, $password){
        $sql = "SELECT * FROM `nguoi_dung` WHERE email = '".$email."' AND mat_khau = '".$password."'";
        $acc = pdo_query_one($sql);
        return $acc;
    }
        function dang_ky_tk($name,$user,$email, $password, $ngay_dang_ky){
        $sql = "INSERT INTO `nguoi_dung` ( `ho_ten`, `ten_dang_nhap`, `mat_khau`, `email`, `ngay_dang_ky`) VALUES ('$name', '$user', '$password', '$email', '$ngay_dang_ky')";
        pdo_execute($sql);
    }
    function delete_nguoidung($id){
        $sql = "delete from `nguoi_dung` where id_nd=" . $id;
        pdo_execute($sql);
    }
    
    function loadone_nguoidung($id){
        $sql = "select * from `nguoi_dung` where id_nd=" . $id;
         $nd = pdo_query_one($sql);
         return $nd;
    }

    function update_nguoidung($id,$vai_tro, $ho_ten, $ten_dang_nhap, $mat_khau, $email){
        $sql = "UPDATE `nguoi_dung` SET `id_vai_tro` = '$vai_tro', `ho_ten` = '$ho_ten', `ten_dang_nhap` = '$ten_dang_nhap', `mat_khau` = '$mat_khau', `email` = '$email' WHERE `nguoi_dung`.`id_nd` = $id";
        pdo_execute($sql);
    }
?>