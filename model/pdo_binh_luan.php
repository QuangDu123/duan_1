<?php
    require_once 'pdo.php';

    function binh_luan_insert($ma_binh_luan,$ma_bai_tap,$noi_dung,$ngay_binh_luan){
        $sql = "INSERT INTO binh_luan(ma_binh_luan,ma_bai_tap,noi_dung,ngay_binh_luan) VALUES (?,?,?,?)";
        pdo_execute($sql, $ma_binh_luan,$ma_bai_tap,$noi_dung,$ngay_binh_luan);    
    }
    function binh_luan_update($ma_binh_luan,$ma_bai_tap,$noi_dung,$ngay_binh_luan){
        $sql = "UPDATE binh_luan SET (ma_bai_tap=?,noi_dung=?,ngay_binh_luan=? WHERE ma_binh_luan=?";
        pdo_execute($sql, $ma_binh_luan,$ma_bai_tap,$noi_dung,$ngay_binh_luan);
    }
    function binh_luan_delete($ma_binh_luan){
        $sql = "DELETE FROM binh_luan WHERE ma_binh_luan=?";
        if(is_array($ma_binh_luan)){
            foreach ($ma_binh_luan as $ma) {
                pdo_execute($sql, $ma);
            }
        }
        else{
            pdo_execute($sql, $ma_binh_luan);
        }
    }
    
    function binh_luan_select_all(){
        $sql = "SELECT * FROM binh_luan bl ORDER BY ngay_binh_luan";
        return pdo_query($sql);
    }
    function binh_luan_select_by_id($ma_binh_luan){
        $sql = "SELECT * FROM binh_luan WHERE ma_binh_luan=?";
        return pdo_query_one($sql, $ma_binh_luan);
    }
    function binh_luan_exist($ma_binh_luan){
        $sql = "SELECT count(*) FROM binh_luan WHERE ma_binh_luan=?";
        return pdo_query_value($sql, $ma_binh_luan) > 0;
    }
    function binh_luan_selelct_by_bai_tap($ma_bai_tap){
        $sql = "SELECT b.*, bt.ten_bai_tap FROM binh_luan b JOIN bai_tap bt ON bt.ma_bai_tap =b.ma_bai_tap WHERE b.ma_khoa_hoc=?";
        return pdo_query($sql, $ma_bai_tap);
    }
    // ------------------ 
    function thong_ke_binh_luan_vs_bai_tap(){
        $sql = "SELECT bt.ma_bai_tap, bt.ten_bai_tap, COUNT(*) so_luong,  
                bt.ten_bai_tap ten_bt, bt.ma_bai_tap ma_bt,
                bl.ma_binh_luan ma_bl
                FROM binh_luan bl JOIN bai_tap bt 
                ON bl.ma_bai_tap = bt.ma_bai_tap GROUP BY bt.ma_bai_tap, bt.ten_bai_tap
                HAVING so_luong >= 0";
        return pdo_query($sql);
    }
    function thong_ke_binh_luan_chi_tiet(){
        $sql = "SELECT * from binh_luan 
        INNER JOIN bai_tap ON binh_luan.ma_bai_tap = bai_tap.ma_bai_tap";
    }
    // $sql = "SELECT binh_luan.ma_binh_luan, bai_tap.ma_bai_tap, binh_luan.noi_dung, thong_tin_ca_nhan.user, binh_luan.ngay_binh_luan
    // FROM bai_tap, binh_luan, thong_tin_ca_nhan, hoa_don 
    // WHERE binh_luan.ma_bai_tap = bai_tap.ma_bai_tap
    // AND bai_tap.ma_khoa_hoc = hoa_don.ma_khoa_hoc 
    // AND hoa_don.user = thong_tin_ca_nhan.user
    // AND bai_tap.ma_bai_tap = binh_luan.ma_bai_tap";
    // return pdo_query($sql);

?>