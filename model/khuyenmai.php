<?php 
      function insert_km($tenkm,$ngaybd,$ngaykt){
        $sql= "INSERT INTO khuyen_mai(ten_khuyen_mai,ngay_bd,ngay_kt) VALUES ('$tenkm','$ngaybd','$ngaykt')";
        pdo_execute($sql);
    }
    function update_km($tenkm,$ngaybd,$ngaykt,$makm){
        $sql=" UPDATE khuyen_mai set ten_khuyen_mai='".$tenkm."',ngay_bd='".$ngaybd."',ngay_kt='".$ngaykt."' WHERE ma_khuyen_mai=".$makm;
            pdo_execute($sql);
    }
    function delete_km($makm){
        $sql="DELETE FROM khuyen_mai WHERE ma_khuyen_mai=".$makm;
        pdo_execute($sql);
    }
?>