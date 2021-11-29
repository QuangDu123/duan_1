<?php
    function insert_loai($tenloai){
        $sql= "INSERT INTO loai_kh(ten_loai) VALUES ('$tenloai')";
        pdo_execute($sql);
    }
    function delete_danhmuc($id){
        $sql="DELETE FROM loai_kh WHERE ma_loai=".$id;
        pdo_execute($sql);
    }
    function loadall_loai(){
        $sql="SELECT * FROM loai_kh order by ma_loai desc";
        $listdanhmuc = pdo_query($sql);
        return $listdanhmuc;
    }
    function loadone_danhmuc($id){
        $sql="SELECT * from loai_kh where ma_loai=".$id;
        $dm=pdo_query_one($sql);
        return $dm;
    }
    function update_danhmuc($id,$tenloai){
        $sql= "UPDATE loai_kh set ten_loai ='".$tenloai."' WHERE ma_loai=".$id;
        pdo_execute($sql);
    }
?>