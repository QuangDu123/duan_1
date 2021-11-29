<?php
require_once 'pdo.php';

    function khuyen_mai_insert($ma_khuyen_mai,$ten_khuyen_mai,$ngay_bd,$ngay_kt){
        $sql = "INSERT INTO khuyen_mai (ma_khuyen_mai,ten_khuyen_mai,ngay_bd,ngay_kt) VALUES (?,?,?,?)";
        pdo_execute($sql,$ma_khuyen_mai,$ten_khuyen_mai,$ngay_bd,$ngay_kt);
    }
    function khuyen_mai_update($ten_khuyen_mai,$ngay_bd,$ngay_kt,$ma_khuyen_mai){
        $sql = "UPDATE khuyen_mai SET ten_khuyen_mai=?,ngay_bd=?,ngay_kt=? WHERE ma_khuyen_mai=?";
        pdo_execute($sql,$ten_khuyen_mai,$ngay_bd,$ngay_kt,$ma_khuyen_mai);
    }
    // function bai_tap_update($ten_bai_tap,$noi_dung_bt,$ma_bai_tap){
    //     $sql = "UPDATE bai_tap SET ten_bai_tap=?,noi_dung_bt=? WHERE ma_bai_tap=?";
    //     pdo_execute($sql,$ten_bai_tap,$noi_dung_bt,$ma_bai_tap);
    // }
    function khuyen_mai_delete($ma_khuyen_mai){
        $sql = "DELETE FROM khuyen_mai  WHERE ma_khuyen_mai=?";
        if(is_array($ma_khuyen_mai)){
            foreach ($ma_khuyen_mai as $ma) {
                pdo_execute($sql, $ma);
            }
        }
        else{
            pdo_execute($sql, $ma_khuyen_mai);
        }
    }
    function khuyen_mai_selectall(){
        $sql = "SELECT * FROM khuyen_mai";
        return pdo_query($sql);
    }
    function khuyen_mai_select_by_id($ma_khuyen_mai){
        $sql = "SELECT * FROM khuyen_mai WHERE ma_khuyen_mai=?";
        return pdo_query_one($sql, $ma_khuyen_mai);
    }
?>