<?php
require_once '../model/pdo.php';
require_once '../model/pdo_khach_hang.php';
    if(isset($_GET['act'])&&($_GET['act']!="")){
        $act = $_GET['act'];
        switch ($act){
            case 'ql_bai_tap':
                include "ql_bai_tap/";
                break;
            case 'ql_khoa_hoc':
                include "ql_khoa_hoc/";
                break; 
            case 'ql_khach_hang':
                include "ql_khach_hang/";
                break;
            default:
            include "layout_admin.php";
            break;    
        }  
    }else{
        include "layout_admin.php";
    }
    

    include_once "layout_admin.php";
?>
