<?php
    function checkuser($email, $password){
        $sql = "SELECT * FROM `nguoi_dung` WHERE email = '".$email."' AND mat_khau = '".$password."'";
        $acc = pdo_query_one($sql);
        return $acc;
    }
?>