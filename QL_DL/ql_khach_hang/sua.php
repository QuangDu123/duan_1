<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa</title>
    <link rel="stylesheet" href="../../css/style1.css">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>
    <script src="demoValidation.js" type="text/javascript"></script>
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
        width: 100%;
        border-collapse: collapse;
        float: left;
    }
    .frmcontent table th:nth-child(1) {
        width: 40%;
        float: left;
    }
    .frmcontent table th:nth-child(2) {
        width: 40%;
        float: right;
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
                <h1 class="h1">CHỈNH SỬA KHÁCH HÀNG</h1>
            </div>
            <div class="row frmcontent">
                <form action="index.php?act=sua&user=<?php echo  $dl_kh['kh']['user']?>" method="POST" id="form_kh" enctype="multipart/form-data">
                   <table >
                    <tr>
                        <th>
                            <div class="row mb10">
                                <b>Tài khoản:</b><br>
                                <input type="text" name="user" id="user" value="<?php echo $dl_kh['kh']['user']?>" readonly style="margin-top:2% ;">
                            </div>
                            <div class="row mb10">
                                <b>Họ tên:</b><br>
                                <input type="text" name="ho_ten" id="ho_ten" value="<?php echo $dl_kh['kh']['ho_ten']?>"> 
                            </div>
                            <div class="row mb10">
                                <b>Mật Khẩu:</b> <br>
                                <input type="PASSWORD" name="pass" id="pass" value="<?php echo $dl_kh['kh']['pass']?>">
                            </div>
                            <div class="row mb10">
                                <b> Xác Nhận Mật Khẩu:</b><br>
                                <input type="PASSWORD" name="pass2"  id="pass2" value="<?php echo $dl_kh['kh']['pass']?>" style="margin-top:1% ;">
                            </div>
                            <div class="row mb10">
                                <b>Số điện thoại:</b><br>
                                <input type="text" name="sdt"  id="sdt" value="<?php echo $dl_kh['kh']['sdt']?>" style="margin-top:1% ;">
                            </div>
                            <div class="row mb10">
                                <b>Email</b><br>
                                <input type="email" name="email" value="<?php echo $dl_kh['kh']['email']?>"  style="margin-top:1% ;">
                            </div>
                        </th>
                        <th>
                        <div class="row mb10">
                                <b>Địa chỉ:</b><br>
                                <input type="text" name="dia_chi"  id="dia_chi" value="<?php echo $dl_kh['kh']['dia_chi']?>" style="margin-top:1% ;">
                            </div>
                            <div class="row mb10">
                                <b>CMND/CCCD:</b><br>
                                <input type="text" name="cmnd"  id="cmnd" value="<?php echo $dl_kh['kh']['cmnd']?>" style="margin-top:1% ;">
                            </div>
                            <div class="row mb10">
                                <b>Ngày sinh:</b><br>
                                <input type="date" name="ngay_sinh" value="<?php echo $dl_kh['kh']['ngay_sinh']?>"  style="margin-top:1% ;">
                            </div>

                            <div class="row mb10" >
                                <b>Giới tính</b><br>
                                <input type="radio" name="gioi_tinh" value="nam"<?php if($dl_kh['kh']['gioi_tinh']=='nam'){
                                   echo 'checked';} ?>>Nam
                                <input type="radio" name="gioi_tinh" value="nu"<?php if($dl_kh['kh']['gioi_tinh']=='nu'){
                                   echo 'checked';} ?>>Nữ
                                <input type="radio" name="gioi_tinh" value="khac"<?php if($dl_kh['kh']['gioi_tinh']=='khac'){
                                   echo 'checked';} ?>>Khác
                            </div>
                            <div class="row mb10" >
                                <b>Vai trò:</b><br>
                                <input type="radio" name="vai_tro" value="NV"<?php if($dl_kh['kh']['vai_tro']=='NV'){
                                   echo 'checked';} ?>>Nhân viên
                                <input type="radio" name="vai_tro" value="KH"<?php if($dl_kh['kh']['vai_tro']=='KH'){
                                   echo 'checked';} ?>>Khách hàng
                            </div>
                            <div class="row mb10">
                                <b> Hình Ảnh:</b><br>
                                <input type="file" name="hinh_anh"  style="margin-top:2% ;">
                            </div>
                            <div class="row mb10" >
                                <b>Mã loại KH:</b><br>
                                <input type="radio" name="ma_loai_kh" value="1"<?php if($dl_kh['kh']['ma_loai_kh']=='1'){
                                   echo 'checked';} ?>>Thành viên
                                <input type="radio" name="ma_loai_kh" value="0"<?php if($dl_kh['kh']['ma_loai_kh']=='0'){
                                   echo 'checked';} ?>>VIP
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