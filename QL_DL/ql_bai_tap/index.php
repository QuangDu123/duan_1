
<?php 
    require_once '../../model/pdo.php';
    require_once '../../model/pdo_bai_tap.php';
    require_once '../../model/pdo_khoa_hoc.php';
$dl_bt= [];
$dl_k_hoc =[];
    if(isset($_GET['act'])&& ($_GET['act']!="")){
        $act = $_GET['act'];
        switch($act){
        case 'them':
            if(isset($_POST['btn_submit'])){
                $ma_bai_tap= $_POST['ma_bai_tap'];
                $ten_bai_tap= $_POST['ten_bai_tap'];
                $noi_dung_bt= $_POST['noi_dung_bt'];
                $ma_khoa_hoc = $_POST['ma_khoa_hoc'];
                bai_tap_insert($ma_bai_tap,$ten_bai_tap,$noi_dung_bt,$ma_khoa_hoc);
                $thong_bao = "Thêm bài tập thành công!!";
            }
            else{
                $thong_bao = "Thêm bài tập không thành công!!";
            }
            include 'them.php';
            break;
        case 'danh_sach':
            include "danh_sach.php";
            break;
        case 'sua':
            if(isset($_POST['btn_sua'])){
                $ma_bai_tap= $_POST['ma_bai_tap'];
                $ten_bai_tap= $_POST['ten_bai_tap'];
                $noi_dung_bt= $_POST['noi_dung_bt'];
                $ma_khoa_hoc = $_POST['ma_khoa_hoc'];
                bai_tap_update($ten_bai_tap,$noi_dung_bt,$ma_khoa_hoc,$ma_bai_tap);
            }
            if(isset($_GET['ma_bai_tap'])){

                $dl_k_hoc['kh']= khoa_hoc_selectall();
                $ma_bai_tap = $_GET['ma_bai_tap'];
                $dl_bt['btt'] = bai_tap_select_by_id($ma_bai_tap);
            }
            include 'sua.php';
            break;
        case 'xoa':
            $ma_bai_tap = $_GET['ma_bai_tap'];
            bai_tap_delete($ma_bai_tap);
            include 'danh_sach.php';
            break;
        case 'thoat':
            session_unset();
            header('location:index.php?act=them');
            break;
        }
    }
    else{
        include_once 'them.php';
    }
?>