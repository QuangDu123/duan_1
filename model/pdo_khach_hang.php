<?php
require_once 'pdo.php';
    function khach_hang_insert($user, $pass, $ho_ten, $dia_chi, $sdt, $email, $cmnd, $ngay_sinh, $gioi_tinh, $hinh_anh, $vai_tro, $ma_loai_kh){
        $sql = "INSERT INTO thong_tin_ca_nhan (user, pass, ho_ten, dia_chi, sdt, email, cmnd, ngay_sinh, gioi_tinh, hinh_anh, vai_tro, ma_loai_kh) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
        pdo_execute($sql,$user, $pass, $ho_ten, $dia_chi, $sdt, $email, $cmnd, $ngay_sinh, $gioi_tinh, $hinh_anh, $vai_tro, $ma_loai_kh);
    }
    function khach_hang_update($pass, $ho_ten, $dia_chi, $sdt, $email, $cmnd, $ngay_sinh, $gioi_tinh, $hinh_anh,$vai_tro, $ma_loai_kh,$user){
        $sql = "UPDATE thong_tin_ca_nhan SET pass=?, ho_ten=?, dia_chi=?, sdt=?, email=?, cmnd=?, ngay_sinh=?, gioi_tinh=?, hinh_anh=?,vai_tro=?, ma_loai_kh=? WHERE user=?";
        pdo_execute($sql, $pass, $ho_ten,$dia_chi,$sdt, $email, $cmnd, $ngay_sinh, $gioi_tinh, $hinh_anh,$vai_tro, $ma_loai_kh,$user);
    }
    function khach_hang_delete( $user){
        $sql = "DELETE FROM thong_tin_ca_nhan  WHERE user=?";
        if(is_array($user)){
            foreach ($user as $ma) {
                pdo_execute($sql, $ma);
            }
        }
        else{
            pdo_execute($sql, $user);
        }
    }
    function khach_hang_selectall(){
        $sql = "SELECT * FROM thong_tin_ca_nhan";
        return pdo_query($sql);
    }
    function khach_hang_select_by_id($user){
        $sql = "SELECT * FROM thong_tin_ca_nhan WHERE user=?";
        return pdo_query_one($sql, $user);
    }
?>