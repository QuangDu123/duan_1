<?php
     function insert_khoahoc($tenkh,$gia){
        $sql= "INSERT INTO khoa_hoc(ten_khoa_hoc,gia) VALUES ('$tenkh','$gia')";
        pdo_execute($sql);
    }
    function update_khoahoc($makh,$tenkh,$gia,$hinh,$mabt){
        if($hinh!="")
            $sql=" UPDATE khoa_hoc set  ma_bt='".$mabt."',ten_khoa_hoc='".$tenkh."',img='".$hinh."',noi_dung_bt='".$gia."' WHERE ma_khoa_hoc=".$makh;
        else
        $sql=" UPDATE khoa_hoc set  ma_bt='".$mabt."',ten_khoa_hoc='".$tenkh."',img='".$hinh."',noi_dung_bt='".$gia."' WHERE ma_khoa_hoc=".$makh;
            pdo_execute($sql);
    }
    function delete_khoahoc($makh){
        $sql="DELETE FROM khoa_hoc WHERE ma_khoa_hoc=".$makh;
        pdo_execute($sql);
    }
?>