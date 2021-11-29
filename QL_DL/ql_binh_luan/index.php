<?php
    require_once '../../model/pdo.php';
    require_once '../../model/pdo_binh_luan.php';
    $dl_bl = [];
    if(isset($_GET['act'])&& ($_GET['act']!="")){
        $act = $_GET['act'];
        switch ($act){
            case 'them':
                if(isset($_POST['btn_submit'])){
                    $ma_binh_luan = $_POST['ma_binh_luan'];
                    $ma_bai_tap = $_POST['ma_bai_tap'];
                    // $ma_khoa_hoc = $_POST['ma_khoa_hoc'];
                    $noi_dung = $_POST['noi_dung_bt'];
                    $ngay_binh_luan = $_POST['ngay_binh_luan'];
                    binh_luan_insert($ma_binh_luan,$ma_bai_tap,$noi_dung,$ngay_binh_luan);
                    $thong_bao= "thêm thành công";
                }
                include 'them.php';
                break;
            case 'danh_sach':
                include 'danh_sach.php';
                break;
            case 'xoa':
                $ma_binh_luan = $_GET['ma_binh_luan'];
                $ma_bai_tap = $_GET['ma_bai_tap'];
                binh_luan_delete($ma_binh_luan);
                include 'chi_tiet.php';
                break;
            case 'chi_tiet':
                // $ma_bai_tap = $_GET['ma_bai_tap'];
                $layDL = thong_ke_binh_luan_chi_tiet();
                print_r($layDL);
                include "chi_tiet.php";
                break;
            case "thoat":
                session_unset();
                header('location: danh_sach.php');
                break;
        }
    }
    else{
        header('location: them.php');
    }
?>