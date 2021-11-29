<?php
    session_start();
    include "model/pdo.php";
    include "view/header.php";

    // if(! isset($_SESSION['myCART'])) $_SESSION['myCART']=[];

    // $spnew=loadall_sanpham_home();
    // $dsdm=loadall_danhmuc();
    // $dstop10=loadall_sanpham_top10();
    if((isset($_GET['act']))&&($_GET['act']!="")){
        $act=$_GET['act'];
        switch ($act){
    //         case 'sanpham':
    //             if(isset($_POST['kyw'])&&($_POST['kyw']!="")){
    //                     $kyw=$_POST['kyw'];
    //             }else{
    //                 $kyw="";
    //             }
    //             if(isset($_GET['iddm'])&&($_GET['iddm']>0)){
    //                 $iddm=$_GET['iddm'];
    //             }else{
    //                 $iddm=0;
    //             }
    //             $dssp=loadall_sanpham($kyw,$iddm);
    //             $tendm=loadone_ten_dm($iddm);
    //             include "view/sanpham.php";
    //             break;
    //         case 'sanphamct':
    //             if(isset($_GET['idsp'])&&($_GET['idsp']>0)){
    //                 $sanpham=loadone_sanpham($_GET['idsp']);
    //                 extract($sanpham);
    //                 $sp_cung_loai=loadone_sanpham_cungloia($idsp,$id);
    //                 include "view/sanphamct.php";
    //             }else{
    //                 include "view/home.php";
    //             }
                
                // break;
            case 'gioithieu':
                include "view/gioithieu.php";
                break;
            case 'lienhe':
                include "view/lienhe.php";
                break;
            case 'gopy':
                include "view/gopy.php";
                break;
            case 'uu_dai':
                include "view/uu_dai.php";
                break;
            case 'hoi_vien_bg':
                include "view/hoivienbg.php";
                break;
            case 'tintuc':
                // include "view/tintuc.php";
                include "view/tin_tuc_sua.php";
                break;
            case 'dinhduong':
                // include "view/dinhduong.php";
                include "view/dinh_duong_sua.php";
                break;
            case 'video':
                include "view/video1.php";
                break;
            case 'thoat':
                session_unset();
               header('location:index.php');
                break;  
            //  case 'addtocart':   
            //         if(isset($_POST['addtocart'])&&($_POST['addtocart'])) {           
            //             $idsp=$_POST['idsp'];
            //             $namesp=$_POST['tensp'];
            //             $gia=$_POST['giasp'];
            //             $soluong=1;
            //             $img=$_POST['hinh'];
            //             $ttien=$soluong * $gia;
            //             $spadd=[$idsp,$namesp,$img,$gia,$soluong,$ttien];
            //             array_push($_SESSION['myCART'],$spadd);
            //         }  
            // include "view/cart/viewcart.php";
            // break;
            // case 'viewCart':   
            //     include "view/cart/viewcart.php";
            //     break;
            // case 'delcart':   
            //     // if(isset($_GET['idCart'])){
            //     //    array_slice($_SESSION['myCART'],$_GET['idCart'],1);
            //     // } else {
            //     //        $_SESSION['myCART']=[];
            //     //     }
            //     //   include "view/cart/viewcart.php";
            //     header('Location:index.php?act=viewcCart');
            //     break;  
               
            case 'dangky':
                // if(isset($_POST['dangky'])&&($_POST['dangky'])){
                //     $email=$_POST['email'];
                //     $user=$_POST['user'];
                //     $pass=$_POST['pass'];
                //     $role=$_POST['vaitro'];
                   

                //     insert_taikhoan($email,$pass,$user,$role);
                //     $thongbao="Đã Đăng Kí Thành Công";
                // }
                include "view/taikhoan/dangki.php";
                break;
            case 'dangnhap':
                // if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
                //         $user=$_POST['user'];
                //         $pass=$_POST['pass'];
                //         $checkuser=checkuser($user,$pass);
                //         if(is_array($checkuser)){
                //             $_SESSION['user']=$checkuser;
                //             // $thongbao="Bạn Đã Đăng Nhập Thành Công";
                //             header('Location:index.php');
                //         }else{
                //             $thongbao="Tài Khoản Không Tồn Tại";
                //         }
                //     }
                    include "view/taikhoan/dangnhap.php";
                    break;
            // case 'edit_taikhoan':
            //     if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
            //             $email=$_POST['email'];
            //             $user=$_POST['user'];
            //             $pass=$_POST['pass'];
            //             $address=$_POST['address'];
            //             $tel=$_POST['tel'];
            //             $idnd=$_POST['idd'];
            //             $role=$_POST['vaitro'];
                       

            //             update_taikhoan($idnd,$user,$pass,$email,$address,$tel,$role);            
            //             $_SESSION['user']=checkuser($user,$pass);         
            //             header('Location:index.php?act=edit_taikhoan');
                                
            //     }
            //     include "view/taikhoan/edit_taikhoan.php";
            //             break;
            // case 'quenmk':
            //     if(isset($_POST['quenmk'])&&($_POST['quenmk'])){
            //     $email=$_POST['email'];
            //     $checkemail=checkemail($email);
            //     if(is_array($checkemail)){
            //         $thongbao="Mật Khẩu là :".$checkemail['pass']."";

            //     }else{
            //         $thongbao="Email không tồn tại";
            //     }
            // }
            //     include "view/taikhoan/quenmk.php";
            //             break;
                                
            default:
                include "view/home.php";
                break;
        }
    }else{
        include "view/home.php";
    }
    
    include "view/footer.php";
?>