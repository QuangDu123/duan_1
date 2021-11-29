<!doctype html>
<html lang="en">

<head>
    <title>Trang chủ</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<style>
   .benefit-list li .num {
    font-size: 47px;
    color: #db2128;
    border: 1px dashed #000;
    border-radius: 50%;
    width: 70px;
    height: 70px;
    display: block;
    text-align: center;
    float: left;
    margin-right: 28px;
}

.cfyc-memberships .gallery p {
    position: relative;
    overflow: hidden;
}

.cfyc-memberships .gallery img {
    margin-bottom: 20px;
}

.cfyc-memberships .gallery .item {
    margin-bottom: 50px;
}

.img-responsive {
    display: block;
    max-width: 100%;
    height: auto;
}

.cfyc-memberships .gallery {
    padding: 2% 0 0;
}

.btn-group-vertical>.btn-group:after, .btn-toolbar:after, .clearfix:after, .container-fluid:after, .container:after, .dl-horizontal dd:after, .form-horizontal .form-group:after, .modal-footer:after, .modal-header:after, .nav:after, .navbar-collapse:after, .navbar-header:after, .navbar:after, .pager:after, .panel-body:after, .row:after {
    clear: both;
}

.col-sm-4 {
    width: 33.33333333%;
}

.cfyc-memberships .gallery p::after {
    content: "";
    height: 2px;
    width: 100%;
    display: block;
    background: #e10000;
    position: absolute;
    top: 24px;
}

.cfyc-memberships .gallery p span {
    color: #676767;
    font-size: 25px;
    text-transform: uppercase;
    margin-bottom: 5px;
    background: #fff;
    padding-right: 25px;
    display: inline-block;
    position: relative;
    z-index: 1;
}
.cool-btn-cta {
    color: #fff;
    background: linear-gradient(to right, #f5f5f5 50%, #333 50%);
    background-size: 200% 100%;
    background-position: right bottom;
    text-transform: uppercase;
    margin: 20px auto;
    padding: 25px 45px 17px;
    border-radius: 5px;
    font-size: 20px;
    display: inline-block;
    font-weight: 400;
    transition: all .4s;
    line-height: 1;
    border: none;
    outline: 0;
}
.col-md-offset-6 {
    margin-left: 50%;
}
.col-md-6 {
    width: 50%;
    float: left;
}
.row {
    margin-right: 40px;
    margin-left: -15px;
    
}
.cfyc-memberships .section-benefit {
    padding-bottom: 60px;
    background: url(img/4.jpg) center top no-repeat #fff;
    background-size: cover;
}

 .row::before {
    display: table;
    content: " ";
}
</style>
<body>
<div class="container" style="text-align: center;">
        <div class="header">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">
                    <img src="./img/4.jpg" alt="logo" style="width:40px;">
                </a>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link menu_chinh" href="index.php">Home</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link menu_chinh" href="index.php?act=gioithieu">Giới thiệu</a>
                        </li>
                        <li class="nav-item active dropdown">
                            <a class="nav-link dropdown-toggle menu_chinh" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Hội Viên
                    </a>
                            <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Hội Viên Doanh Nghiệp</a>
                                <a class="dropdown-item" href="index.php?act=uu_dai">Ưu Đãi Hội Viên</a>
                                <a class="dropdown-item" href="index.php?act=hoi_vien_bg">Hội viên Boss Gym</a>
                            </div>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link menu_chinh" href="index.php?act=gioithieu">Bài tập</a>
                        </li>
                        <li class="nav-item active dropdown">
                            <a class="nav-link dropdown-toggle menu_chinh" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Khóa học
                      </a>
                            <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Yoga</a>
                                <a class="dropdown-item" href="#">Tăng cân</a>
                                <a class="dropdown-item" href="#">Giảm cân</a>
                            </div>
                        </li>

                        <li class="nav-item active">
                            <a class="nav-link menu_chinh" href="index.php?act=lienhe">Góp ý - Liên hệ</a>
                        </li>
                        <li class="nav-item active dropdown">
                            <a class="nav-link dropdown-toggle menu_chinh" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   Blog
                  </a>
                            <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="index.php?act=video">Video</a>
                                <a class="dropdown-item" href="index.php?act=dinhduong">Dinh Dưỡng</a>
                                <a class="dropdown-item" href="index.php?act=tintuc">Tin Tức & Sự Kiện</a>
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav " style="float:right; ">
                        <li style="margin-right: 30px;">
                            <a href=" index.php?act=dangky "> <i class="fas fa-user "></i> Sign Up</a>
                        </li>

                        <li style="margin-right: 30px;"><a href="index.php?act=dangnhap "><span class="glyphicon glyphicon-log-in">&#xe161;</span> Login</a></li>
                        <a href="#"><img src="./img/4.jpg" class="rounded-circle" alt="Cinque Terre" width="35" height="35"> </a>
                    </ul>
                </div>
            </nav>
             <!-- --------------------- -->
             <div class="containerr" style="margin-top:35px">
                <div id="demo" class="carousel slide" data-ride="carousel">
                    <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                        <li data-target="#demo" data-slide-to="1"></li>
                        <li data-target="#demo" data-slide-to="2"></li>
                        <li data-target="#demo" data-slide-to="3"></li>
                    </ul>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/1.jpg" alt="Los Angeles" width="1120" height="450">
                            <div class="carousel-caption">
                                <h3>Los Angeles</h3>
                                <p>We had such a great time in LA!</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/2.jpg" alt="Chicago"  width="1120" height="450">
                            <div class="carousel-caption">
                                <h3>Chicago</h3>
                                <p>Thank you, Chicago!</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/3.jpg" alt="New York"  width="1120" height="450">
                            <div class="carousel-caption">
                                <h3>New York</h3>
                                <p>We love the Big Apple!</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/4.jpg" alt="New York"  width="1120" height="450">
                            <div class="carousel-caption">
                                <h3>New York</h3>
                                <p>We love the Big Apple!</p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div>
            </div>