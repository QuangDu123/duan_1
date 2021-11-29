<?php
include '../../model/pdo.php';
include '../../model/pdo_khach_hang.php';
$dl_kh =[];
    if(isset($_GET['act'])&&($_GET['act']!="")){
        $act = $_GET['act'];
        switch ($act){
            case 'them':
                if(isset($_POST['btn_submit'])){
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $ho_ten = $_POST['ho_ten'];
                    $sdt = $_POST['sdt'];
                    $email = $_POST['email'];
                    $cmnd = $_POST['cmnd'];
                    $dia_chi = $_POST['dia_chi'];
                    $ngay_sinh = $_POST['ngay_sinh'];
                    $gioi_tinh = $_POST['gioi_tinh'];
                    $vai_tro = $_POST['vai_tro'];
                    $hinh_anh = $_FILES['hinh_anh']['name'];
                    $ma_loai_kh = $_POST['ma_loai_kh'];
                    $target_dir = "../../img/";
                    save_file('hinh_anh', $target_dir);
                    khach_hang_insert($user, $pass, $ho_ten, $dia_chi, $sdt, $email, $cmnd, $ngay_sinh, $gioi_tinh, $hinh_anh, $vai_tro,$ma_loai_kh);
                    $thong_bao = "Thêm khách hàng thành công!!!!";
                }
                else{
                    $thong_bao = "Thêm khách hàng không thành công!!!!";
                }
                include "them.php";
                break;
            case 'sua':
                if(isset($_POST['btn_sua'])){
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $ho_ten = $_POST['ho_ten'];
                    $sdt = $_POST['sdt'];
                    $email = $_POST['email'];
                    $cmnd = $_POST['cmnd'];
                    $dia_chi = $_POST['dia_chi'];
                    $ngay_sinh = $_POST['ngay_sinh'];
                    $gioi_tinh = $_POST['gioi_tinh'];
                    $vai_tro = $_POST['vai_tro'];
                    $ma_loai_kh = $_POST['ma_loai_kh'];
                    //hình
                    $target_dir = "../../img/";
                        if ($_FILES['hinh_anh']['name'] != '') {
                            $hinh_anh = save_file('hinh_anh', $target_dir);
                        } else {
                            $hinh_anh = imgHangHoa_kh($user);
                        }
                        khach_hang_update($pass, $ho_ten, $dia_chi, $sdt, $email, $cmnd, $ngay_sinh, $gioi_tinh, $hinh_anh,$vai_tro, $ma_loai_kh,$user);
                    // $thong_bao = "Cập nhật thành công";
                }
                if(isset($_GET['user'])){
                    $dl_kh['kh'] = khach_hang_selectall();
                    $user = $_GET['user'];
                    $dl_kh['kh'] = khach_hang_select_by_id($user);
                }
                include "sua.php";
                break; 
            case 'xoa':
                $user = $_GET['user'];
                khach_hang_delete($user);
                include "danh_sach.php";
                break;
            case 'danh_sach':
                include "danh_sach.php";
                break;
            case 'thoat':
                session_unset();
                header('location:them.php');
                break;
        }
    }
    else{
        header('location: them.php');
    }
    // include_once '../layout_admin.php';
?>