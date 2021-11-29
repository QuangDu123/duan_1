<?php
    require_once '../../model/pdo.php';
    require_once '../../model/pdo_khuyen_mai.php';
    $dl_km=[];
    if(isset($_GET['act'])&&($_GET['act']!="")){
        $act = $_GET['act'];
        switch ($act){
            case 'them':
                if(isset($_POST['btn_submit'])){
                    $ma_khuyen_mai = $_POST['ma_khuyen_mai'];
                    $ten_khuyen_mai = $_POST['ten_khuyen_mai'];
                    $ngay_bd = $_POST['ngay_bd'];
                    $ngay_kt = $_POST['ngay_kt'];
                    khuyen_mai_insert($ma_khuyen_mai,$ten_khuyen_mai,$ngay_bd,$ngay_kt);
                    $thong_bao = "Thêm KHUYẾN MÃI thành công!!!";
                }
                else{
                    $thong_bao = "Thêm KHUYẾN MÃI không thành công!!!";
                }
                include 'them.php';
                break;
            case 'sua':
                if(isset($_POST['btn_sua'])){
                    $ma_khuyen_mai = $_POST['ma_khuyen_mai'];
                    $ten_khuyen_mai = $_POST['ten_khuyen_mai'];
                    $ngay_bd = $_POST['ngay_bd'];
                    $ngay_kt = $_POST['ngay_kt'];
                    khuyen_mai_update($ten_khuyen_mai,$ngay_bd,$ngay_kt,$ma_khuyen_mai);
                }
                if(isset($_GET['ma_khuyen_mai'])){
                    $dl_km['km'] = khuyen_mai_selectall();
                    $ma_khuyen_mai = $_GET['ma_khuyen_mai'];
                    $dl_km['km'] = khuyen_mai_select_by_id($ma_khuyen_mai);
                }
                include 'sua.php';
                break;
            case 'danh_sach':
                include 'danh_sach.php';
                break;
            case 'xoa':
                $ma_khuyen_mai = $_GET['ma_khuyen_mai'];
                khuyen_mai_delete($ma_khuyen_mai);
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
?>