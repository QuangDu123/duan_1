<?php
require_once 'pdo.php';
$dl_k_hoc = [];
$dl_k_hoc['kh'] = khoa_hoc_selectall();
    function khoa_hoc_insert($ma_khoa_hoc,$ten_khoa_hoc,$gia,$ma_bai_tap){
        $sql = "INSERT INTO khoa_hoc (ma_khoa_hoc,ten_khoa_hoc,gia,ma_bai_tap) VALUES (?,?,?,?)";
        pdo_execute($sql,$ma_khoa_hoc,$ten_khoa_hoc,$gia,$ma_bai_tap);
    }
    function khoa_hoc_update($ma_khoa_hoc,$ten_khoa_hoc,$gia,$ma_bai_tap){
        $sql = "UPDATE khoa_hoc SET ten_khoa_hoc=?,gia=?,ma_bai_tap=? WHERE ma_khoa_hoc=?";
        pdo_execute($sql,$ten_khoa_hoc,$gia,$ma_bai_tap,$ma_khoa_hoc);
    }
    function khoa_hoc_delete( $ma_khoa_hoc){
        $sql = "DELETE FROM khoa_hoc  WHERE ma_khoa_hoc=?";
        if(is_array($ma_khoa_hoc)){
            foreach ($ma_khoa_hoc as $ma) {
                pdo_execute($sql, $ma);
            }
        }
        else{
            pdo_execute($sql, $ma_khoa_hoc);
        }
    }
    function khoa_hoc_selectall(){
        $sql = "SELECT * FROM khoa_hoc";
        return pdo_query($sql);
    }
    function khoa_hoc_select_by_id($ma_khoa_hoc){
        $sql = "SELECT * FROM khoa_hoc WHERE ma_khoa_hoc=?";
        return pdo_query_one($sql, $ma_khoa_hoc);
    }
    function khoa_hoc_select_by_bai_tap(){
        $sql = "SELECT khoa_hoc.ten_khoa_hoc, bai_tap.ma_bai_tap
        FROM khoa_hoc,bai_tap
        WHERE khoa_hoc.ma_khoa_hoc = bai_tap.ma_khoa_hoc";
        return pdo_execute($sql);
    }
?>