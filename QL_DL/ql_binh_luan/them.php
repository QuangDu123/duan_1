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
			"ma_binh_luan": {
				required: true,
				maxlength: 10
			},
            "ngay_binh_luan": {
				required: true,
			},
            "ma_bai_tap": {
                required: true
			},
            "noi_dung_bt": {
				required: true,
				minlength: 5
			}
		},
		messages: {
			"ma_binh_luan": {
				required: "Vui lòng nhập mã bình luận",
				maxlength: "Hãy nhập tối đa 10 ký tự"
			},
			"ngay_binh_luan": {
				required: "Vui lòng chọn ngày bình luận",
			},
            "ma_bai_tap": {
				required: "Vui lòng nhập mã bài tập",
			},
			"noi_dung_bt": {
                required: "Bắt buộc nhập nội dung bài tập",
				minlength: "Hãy nhập ít nhất 5 ký tự"
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
                <h1 class="h1"> THÊM BÌNH LUẬN</h1>
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
                                <b>Mã bình luận:</b><br>
                                <input type="text" name="ma_binh_luan" id="ma_binh_luan" style="margin-top:2% ;">
                            </div>
                            <div class="row mb10">
                                <b>Ngày bình luận:</b><br>
                                <input type="date" name="ngay_binh_luan" id="ngay_binh_luan" style="margin-top:2% ;">
                            </div>
                            <div class="row mb10">
                                <b> Mã bài tập:</b><br>
                                <select name="ma_bai_tap" class="form-control" id="ma_bai_tap">
                                    <?php
                                    require_once '../../model/pdo_bai_tap.php';
                                    $dl_bt['bt'] = bai_tap_selectall();
                                        print_r($dl_bt['bt']);
                                        foreach($dl_bt['bt'] as $values){
                                            echo '<option value="'.$values['ma_bai_tap'].'">'.$values['ten_bai_tap'].'</option>';
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="row mb10">
                                <b>Nội dung:</b> <br>
                                <input type="text" name="noi_dung_bt" id="noi_dung_bt">
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