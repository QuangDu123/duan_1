<?php
    require_once '../../model/pdo.php';
    require_once '../../model/pdo_khoa_hoc.php';
    require_once '../../model/pdo_bai_tap.php';
$dl_k_hoc = [];
    if(isset($_GET['act'])&&($_GET['act']!="")){
        $act = $_GET['act'];
        switch ($act){
            case 'them':
                if(isset($_POST['btn_submit'])){
                    $ma_khoa_hoc = $_POST['ma_khoa_hoc'];
                    $ten_khoa_hoc = $_POST['ten_khoa_hoc'];
                    $gia = $_POST['gia'];
                    $ma_bai_tap = $_POST['ma_bai_tap'];
                    khoa_hoc_insert($ma_khoa_hoc,$ten_khoa_hoc,$gia,$ma_bai_tap);
                    $thong_bao = "Thêm KHÓA HỌC thành công!!!";
                }
                else{
                    $thong_bao = "Thêm KHÓA HỌC không thành công!!!";
                }
                include 'them.php';
                break;
            case 'sua': 
                if(isset($_POST['btn_sua'])){
                    $ma_khoa_hoc = $_POST['ma_khoa_hoc'];
                    $ten_khoa_hoc = $_POST['ten_khoa_hoc'];
                    $gia = $_POST['gia'];
                    $ma_bai_tap = $_POST['ma_bai_tap'];
                    khoa_hoc_update($ma_khoa_hoc,$ten_khoa_hoc,$gia,$ma_bai_tap);
                    $thong_bao = "Thêm KHÓA HỌC thành công!!!";
                }
                if(isset($_GET['ma_khoa_hoc'])){
                    $dl_k_hoc['kh'] = khoa_hoc_selectall();
                    $ma_khoa_hoc = $_GET['ma_khoa_hoc'];
                    $dl_k_hoc['kh'] = khoa_hoc_select_by_id($ma_khoa_hoc);
                }
                include 'sua.php';
                break;
            case 'danh_sach':
                include "danh_sach.php";
                break;
            case 'xoa':
                $ma_khoa_hoc = $_GET['ma_khoa_hoc'];
                khoa_hoc_delete($ma_khoa_hoc);
                include 'danh_sach.php';
                break;
            case 'thoat':
                session_unset();
                header('location: them.php');
                break;
        }
    }
    else{
        header('location: them.php');
    }
    // include_once '../layout_admin.php';
?>