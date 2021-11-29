<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa</title>
    <link rel="stylesheet" href="../../css//style1.css">
    <link rel="stylesheet" href="../../css//style.css">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>
    <script src="demoValidation.js" type="text/javascript"></script>
</head>
<style>
    .mb10 input[type="text"],
    .mb10 input[type="number"],
    .mb10 input[type="PASSWORD"],
    .mb10 input[type="file"]
    {
        width: 100%;
        margin-top:2% ;
        border-radius: 5px;
        padding: 5px 10px;
        background-color: white;
        border: 1px #ccc solid;
    }
    .frmcontent table {
        width: 80%;
        border-collapse: collapse;
        float: left;
    }
    .frmcontent table th:nth-child(1) {
        margin: 0 auto;
        text-align: center;
        width: 60%;
    }
    .mb10 b{
       float: left;
       }
    .khoinut{
        text-align: center;
    }
</style>
<body>
    <div class="boxcenter">
        <div class="row">
            <div class="row frmtitle">
                <h1 class="h1">CHỈNH SỬA KHÓA HỌC</h1>
            </div>
            <div class="row frmcontent">
                <form action="index.php?act=sua&ma_khoa_hoc=<?php echo  $dl_k_hoc['kh']['ma_khoa_hoc']?>" method="POST" id="form_kh" enctype="multipart/form-data">
                   <table >
                    <tr>
                        <th>
                            <div class="row mb10">
                                <b>Mã khóa học:</b><br>
                                <input type="text" name="ma_khoa_hoc" id="ma_khoa_hoc" value="<?php echo $dl_k_hoc['kh']['ma_khoa_hoc']?>" readonly style="margin-top:2% ;">
                            </div>
                            <div class="row mb10">
                                <b>Tên khóa học:</b><br>
                                <input type="text" name="ten_khoa_hoc" id="ten_khoa_hoc" value="<?php echo $dl_k_hoc['kh']['ten_khoa_hoc']?>" > 
                            </div>
                            <div class="row mb10">
                                <b>Giá:</b> <br>
                                <input type="text" name="gia" id="gia" value="<?php echo $dl_k_hoc['kh']['gia']?>">
                            </div>
                            <div class="row mb10">
                                <b>Mã bài tập:</b> <br>
                                <input type="text" name="ma_bai_tap" id="ma_bai_tap" value="<?php echo $dl_k_hoc['kh']['ma_bai_tap']?>">
                            </div>
                        </th>
                    </tr>
                </table><br><br>
                    <div class="row mb10">
                        <button class="btn_submit" type="submit" name="btn_sua">LƯU</button>
                        <a href="index.php?act=danh_sach"><input class="btn_submit" type="button" value="DANH SÁCH"></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>