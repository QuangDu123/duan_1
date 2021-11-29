<?php
     function insert_hd($user,$ngaytaohd,$gia){
        $sql= "INSERT INTO hoa_don (user,ngay_tao_hd,gia) VALUES ('$user','$ngaytaohd','$gia')";
        pdo_execute($sql);
    }
    function update_hd($user,$ngaytaohd,$gia,$mahd,$makh,$makm){
        $sql=" UPDATE hoa_don set user='".$user."',gia='".$gia."',ma_kh='".$makh."',ma_khuyen_mai='".$makm."',ngay_tao_hd='".$ngaytaohd."' WHERE ma_hd=".$mahd;
            pdo_execute($sql);
    }
    function delete_hd($mahd){
        $sql="DELETE FROM hoa_don WHERE ma_hd=".$mahd;
        pdo_execute($sql);
    }
?>