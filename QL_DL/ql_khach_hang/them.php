<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm</title>
    <link rel="stylesheet" href="../../css/style1.css">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>
    <script src="demoValidation.js" type="text/javascript"></script>
<script>
        $().ready(function() {
	$("#form").validate({
		onfocusout: false,
		onkeyup: false,
		onclick: false,
		rules: {
			"user": {
				required: true,
				maxlength: 15
			},
            "ho_ten": {
				required: true,
				maxlength: 8
			},
            "pass": {
				required: true,
				maxlength: 8
			},
            "pass2": {
                required: true,
				equalTo: "#pass",
				minlength: 5
			},
            "sdt": {
				required: true,
                tel: true
			},
            "email": {
				required: true,
				email:true,
			},
			"dia_chi": {
				required: true,
				minlength: 5
			},
            "cmnd": {
				required: true,
				minlength: 5
			},
            "ngay_sinh": {
				required: true,
				minlength: 5
			}
		},
		messages: {
			"user": {
				required: "Vui lòng nhập mã khách hàng",
				maxlength: "Hãy nhập tối đa 15 ký tự"
			},
			"ho_ten": {
				required: "Vui lòng nhập tên khách hàng",
                minlength: "Hãy nhập tối 3 ký tự"
			},
            "pass": {
				required: "Vui lòng nhập password",
				minlength: "Hãy nhập ít nhất 5 ký tự"
			},
			"pass2": {
                required: "Vui lòng xác nhận password",
				equalTo: "Hai password phải giống nhau",
			},
            "email": {
				required: "Vui lòng nhập nhập email",
				email: "Phải nhập đúng Email"
			},
            "sdt": {
				required: "Vui lòng nhập số điện thoại",
                tel: "Hãy nhập đúng sđt"
			}
		}
	});
});
    </script>
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
</style>
<body>
    <div class="boxcenter">
        <div class="row">
            <div class="row frmtitle">
                <h1 class="h1"> THÊM KHÁCH HÀNG</h1>
            </div>
            <?php
            if(isset($thong_bao)){
                echo "<br><br>";
                echo "<h5>$thong_bao</h5>";
            }
            ?>
            <div class="row frmcontent">
                <form action="index.php?act=them" method="POST" id="form" enctype="multipart/form-data">
                   <table >
                    <tr>
                        <th>
                            <div class="row mb10">
                                <b>Tài khoản:</b><br>
                                <input type="text" name="user" id="user" style="margin-top:2% ;">
                            </div>
                            <div class="row mb10">
                                <b>Họ tên:</b><br>
                                <input type="text" name="ho_ten" id="ho_ten"> 
                            </div>
                            <div class="row mb10">
                                <b>Mật Khẩu:</b> <br>
                                <input type="PASSWORD" name="pass" id="pass">
                            </div>
                            <div class="row mb10">
                                <b> Xác Nhận Mật Khẩu:</b><br>
                                <input type="PASSWORD" name="pass2"  id="pass2" style="margin-top:1% ;">
                            </div>
                            <div class="row mb10">
                                <b>Số điện thoại:</b><br>
                                <input type="text" name="sdt"  id="sdt" style="margin-top:1% ;">
                            </div>
                            <div class="row mb10">
                                <b>Email</b><br>
                                <input type="email" name="email" id="email"  style="margin-top:1% ;">
                            </div>
                        </th>
                        <th>
                        <div class="row mb10">
                                <b>Địa chỉ:</b><br>
                                <input type="text" name="dia_chi"  id="dia_chi" style="margin-top:1% ;">
                            </div>
                            <div class="row mb10">
                                <b>CMND/CCCD:</b><br>
                                <input type="text" name="cmnd"  id="cmnd" style="margin-top:1% ;">
                            </div>
                            <div class="row mb10">
                                <b>Ngày sinh:</b><br>
                                <input type="date" name="ngay_sinh"  id="ngay_sinh" style="margin-top:1% ;">
                            </div>

                            <div class="row mb10" >
                                <b>Giới tính</b><br>
                                <input type="radio" name="gioi_tinh" value="nam">Nam
                                <input type="radio" name="gioi_tinh" value="nu">Nữ
                                <input type="radio" name="gioi_tinh" value="khac">Khác
                            </div>
                            <div class="row mb10" >
                                <b>Vai trò:</b><br>
                                <input type="radio" name="vai_tro" value="NV">Nhân viên
                                <input type="radio" name="vai_tro" value="KH">Khách hàng
                            </div>
                            <div class="row mb10">
                                <b> Hình Ảnh:</b><br>
                                <input type="file" name="hinh_anh"  style="margin-top:2% ;">
                            </div>
                            <div class="row mb10" >
                                <b>Mã loại KH:</b><br>
                                <input type="radio" name="ma_loai_kh" value="1">Thành viên
                                <input type="radio" name="ma_loai_kh" value="0">VIP
                            </div>
                        </th>
                    </tr>
                </table><br><br>
                    <div class="row mb10">
                        <button class="btn_submit" type="submit" name="btn_submit">THÊM</button>
                        <a href="index.php?act=danh_sach"><input class="btn_submit" type="button" value="DANH SÁCH"></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>