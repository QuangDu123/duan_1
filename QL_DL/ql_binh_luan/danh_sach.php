<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách bình luận</title>
    <link rel="stylesheet" href="../../css//style1.css">
    <link rel="stylesheet" href="../../css//style.css">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>
    <script src="demoValidation.js" type="text/javascript"></script>
</head>
<style>
    .frmcontent {
    padding: 20px 0px;
    margin-top:5% ;
}
    
    .frmdsHH table {
        margin: 0px auto;
        text-align: left;
        width: 100%;
        border-collapse: collapse;
    }
    
    .frmdsHH table th:nth-child(1) {
        width: 8%;
        padding: 20px 20px;
        background-color: #ccc;
    }
    
    .frmdsHH table th:nth-child(2) {
        width: 10%;
        background-color: #ccc;
    }
    
    .frmdsHH table th:nth-child(3) {
        width: 10%;
        background-color: #ccc;
    }
    
    .frmdsHH table th:nth-child(4) {
        width: 10%;
        background-color: #ccc;
    }
    
    .frmdsHH table th:nth-child(5) {
        width:5%;
        background-color: #ccc;
    }
    .frmdsHH table th:nth-child(6) {
        width:5%;
        background-color: #ccc;
    }

    .frmdsHH table td {
        padding: 5px 5px;
        border: 1px #ccc solid;
    }

    .khoinut{
        text-align: center;
    }
</style>

<body>
    <div class="boxcenter">
        <div class="row">
            <div class="row frmtitle">
                <h1 class="h1"> DANH SÁCH BÌNH LUẬN</h1>
            </div>
            <?php
            if(isset($MESSAGE)){
                echo "<br><br>";
                echo "<h5>$MESSAGE</h5>";
            }
            ?>
            <div class="row frmcontent">
                <div class="row mb10 frmdsHH ">
                    <table>
                        <tr>
                            <th>
                                Tên bài tập
                            </th>
                            <th>
                                SL bình luận
                            </th>
                            <th> Chi tiết</th>
                        </tr>

                            <?php
                            require_once '../../model/pdo_binh_luan.php';
                            require_once '../../model/pdo_khach_hang.php';
                            
                            $layDL = thong_ke_binh_luan_vs_bai_tap();
                            foreach($layDL as $key){
                            ?>
                        <tr>
                            <td><?php echo $key['ten_bt'] ?></td>
                            <td><?php echo $key['so_luong'] ?></td>
                            <td>
                                <a href="index.php?act=chi_tiet&ma_bai_tap=<?php echo $key['ma_bai_tap']?>"><input class="nut1" type="button" value="Chi tiết"></a>
                            </td>
                        </tr>
                                <?php }?>
                        
                    </table>
                </div>
                <div class="row mb10 khoinut">
                    <a href="index.php?act=them"><input class="btn_submit" type="button" value="NHẬP THÊM"></a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>