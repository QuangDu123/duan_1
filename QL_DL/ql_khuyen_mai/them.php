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
//         $().ready(function() {
// 	$("#form_kh").validate({
// 		onfocusout: false,
// 		onkeyup: false,
// 		onclick: false,
// 		rules: {
// 			"ma_kh": {
// 				required: true,
// 				maxlength: 15
// 			},
//             "mat_khau": {
// 				required: true,
// 				maxlength: 8
// 			},
//             "mat_khau2": {
//                 required: true,
// 				// equalTo: "#mat_khau",
// 				minlength: 5
// 			},
//             "email": {
// 				required: true,
// 				email:true,
// 			},
// 			"ten_kh": {
// 				required: true,
// 				minlength: 5
// 			}
// 		},
// 		messages: {
// 			"ma_kh": {
// 				required: "Vui lòng nhập mã khách hàng",
// 				maxlength: "Hãy nhập tối đa 15 ký tự"
// 			},
// 			"ten_kh": {
// 				required: "Vui lòng nhập tên khách hàng",
//                 minlength: "Hãy nhập tối 3 ký tự"
// 			},
//             "mat_khau": {
// 				required: "Bắt buộc nhập password",
// 				minlength: "Hãy nhập ít nhất 5 ký tự"
// 			},
// 			"mat_khau2": {
//                 required: "Bắt buộc xác nhận password",
// 				equalTo: "Hai password phải giống nhau",
// 				minlength: "Hãy nhập ít nhất 5 ký tự"
// 			},
//             "email": {
// 				required: "Bắt buộc nhập email",
// 				email: "Phải nhập đúng Email"
// 			}
// 		}
// 	});
// });
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
        margin: 0 auto;
        width: 80%;
        text-align: center;
        border-collapse: collapse;
    }
    .frmcontent table th:nth-child(1) {
        margin: 0 auto;
        text-align: center;
        width: 60%;
    }
    .mb10{
        text-align: center;
    }
    .mb10 b{
        text-align: center;
       float: left;
       }
</style>
<body>
    <div class="boxcenter">
        <div class="row">
            <div class="row frmtitle">
                <h1 class="h1"> THÊM KHUYẾN MÃI</h1>
            </div>
            <?php
            if(isset($thong_bao)){
                echo "<br><br>";
                echo "<h5>$thong_bao</h5>";
            }
            ?>
            <div class="row frmcontent">
                <form action="index.php?act=them" method="POST" id="form_kh" enctype="multipart/form-data">
                   <table >
                    <tr>
                        <th>
                            <div class="row mb10">
                                <b>Mã khuyến mãi:</b><br>
                                <input type="text" name="ma_khuyen_mai" id="ma_khuyen_mai" style="margin-top:2% ;">
                            </div>
                            <div class="row mb10">
                                <b>Tên khuyến mãi:</b><br>
                                <input type="text" name="ten_khuyen_mai" id="ten_khuyen_mai"> 
                            </div>
                            <div class="row mb10">
                                <b>Ngày bắt đầu:</b> <br>
                                <input type="date" name="ngay_bd" id="ngay_bd">
                            </div>
                            <div class="row mb10">
                                <b>Ngày kết thúc:</b> <br>
                                <input type="date" name="ngay_kt" id="ngay_kt">
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