<?php
require_once 'pdo.php';
$dl_bt=[];
    function bai_tap_insert($ma_bai_tap,$ten_bai_tap,$noi_dung_bt,$ma_khoa_hoc){
        $sql = "INSERT INTO bai_tap (ma_bai_tap,ten_bai_tap,noi_dung_bt,ma_khoa_hoc) VALUES (?,?,?,?)";
        pdo_execute($sql,$ma_bai_tap,$ten_bai_tap,$noi_dung_bt,$ma_khoa_hoc);
    }
    function bai_tap_update($ten_bai_tap,$noi_dung_bt,$ma_khoa_hoc,$ma_bai_tap){
        $sql = "UPDATE bai_tap SET ten_bai_tap=?,noi_dung_bt=?,ma_khoa_hoc=? WHERE ma_bai_tap=?";
        pdo_execute($sql,$ten_bai_tap,$noi_dung_bt,$ma_khoa_hoc,$ma_bai_tap);
    }
    function bai_tap_delete($ma_bai_tap){
        $sql = "DELETE FROM bai_tap  WHERE ma_bai_tap=?";
        if(is_array($ma_bai_tap)){
            foreach ($ma_bai_tap as $ma) {
                pdo_execute($sql, $ma);
            }
        }
        else{
            pdo_execute($sql, $ma_bai_tap);
        }
    }
    function bai_tap_selectall(){
        $sql = "SELECT * FROM bai_tap";
        return pdo_query($sql);
    }
    function bai_tap_select_by_id($ma_bai_tap){
        $sql = "SELECT * FROM bai_tap WHERE ma_bai_tap=?";
        return pdo_query_one($sql, $ma_bai_tap);
    }
    function bai_tap_co_khoa_hoc(){
        $sql = "SELECT bai_tap.ma_bai_tap, bai_tap.ten_bai_tap,
        bai_tap.noi_dung_bt, bai_tap.ma_khoa_hoc, khoa_hoc.ten_khoa_hoc 
        FROM bai_tap, khoa_hoc WHERE bai_tap.ma_khoa_hoc = khoa_hoc.ma_khoa_hoc;";
        return pdo_query($sql);
    }
?>