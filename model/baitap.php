 <?php
     function loadall_thongke(){
        $sql="SELECT danhmuc.id as madm, danhmuc.name as tendm, count(sanpham.idsp) as countsp, min(sanpham.gia) as mingia, max(sanpham.gia) as maxgia, avg(sanpham.gia) as avggia" ;
        $sql.=" FROM sanpham left join danhmuc on danhmuc.id=sanpham.id";
        $sql.= " group by danhmuc.id order by danhmuc.id desc";
        $listtk = pdo_query($sql);
        return $listtk;
    }
    function insert_baitap($tenbt,$noidung){
        $sql= "INSERT INTO baitap (ten_bai_tap,noi_dung_bt) VALUES ('$tenbt','$noidung')";
        pdo_execute($sql);
    }
    function update_baitap($mabt,$tenbt,$noidung,$hinh){
        if($hinh!="")
            $sql=" UPDATE baitap set ten_bai_tap='".$tenbt."',img='".$hinh."',noi_dung_bt='".$noidung."' WHERE ma_bai_tap=".$mabt;
        else
        $sql=" UPDATE baitap set ten_bai_tap='".$tenbt."',img='".$hinh."',noi_dung_bt='".$noidung."' WHERE ma_bai_tap=".$mabt;
            pdo_execute($sql);
    }
    function delete_baitap($mabt){
        $sql="DELETE FROM baitap WHERE ma_bai_tap=".$mabt;
        pdo_execute($sql);
    }
    // function loadall_baitap_home(){
    //     $sql="SELECT * FROM sanpham where 1 order by id desc";
    //     $listsanpham = pdo_query($sql);
    //     return $listsanpham;
    // }
?>