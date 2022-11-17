<?php
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

?>