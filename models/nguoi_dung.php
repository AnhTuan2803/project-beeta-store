<?php
    function checkuser($email, $password){
        $sql = "SELECT * FROM `nguoi_dung` WHERE email = '".$email."' AND mat_khau = '".$password."'";
        $acc = pdo_query_one($sql);
        return $acc;
    }
        function dang_ky_tk($name,$user,$email, $password, $ngay_dang_ky){
        $sql = "INSERT INTO `nguoi_dung` ( `ho_ten`, `ten_dang_nhap`, `mat_khau`, `email`, `ngay_dang_ky`) VALUES ('$name', '$user', '$password', '$email', '$ngay_dang_ky')";
        pdo_execute($sql);
    }
?>