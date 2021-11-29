<!doctype html>
<html lang="en">

<head>
    <title>Trang chủ</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

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
                                <a class="dropdown-item" href="index.php?act=uudai">Ưu Đãi Hội Viên</a>
                                <a class="dropdown-item" href="#">Hội viên Boss Gym</a>
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
                                <a class="dropdown-item" href="#">Video</a>
                                <a class="dropdown-item" href="#">Dinh Dưỡng</a>
                                <a class="dropdown-item" href="#">Tin Tức & Sự Kiện</a>
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
            <div class="content">
                <h2>CÁC KHÓA HỌC HOT</h2>
                <div class="row g-2">
                    <div class="col-6 khoa_hoc ">
                        <div class="p-3 border bg-light">
                            <div id="accordion">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          <iframe width="300" height="200" src="https://www.youtube.com/embed/Oz8RF_1eGxw"
                          title="YouTube video player" frameborder="0" allow="accelerometer; autoplay;
                          clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      </h5>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                      <div class="card-body">
                        <input type="button" class="btn btn-outline-secondary" value="Chọn">
                        <input type="button" class="btn btn-outline-secondary" value="Chi Tiết"> </div>
                    </div>
                  </div>
                  </div>
                  <p>KHÓA HỌC 1</p>
                </div>
              </div>
              <div class="col-6 khoa_hoc ">
                <div class="p-3 border bg-light">
                  <div id="accordion">
                    <div class="card">
                      <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                          <button class="btn btn-link" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">
                            <iframe width="300" height="200" src="https://www.youtube.com/embed/Oz8RF_1eGxw"
                            title="YouTube video player" frameborder="0" allow="accelerometer; autoplay;
                            clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </h5>
                      </div>
                      <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">nọi đung </div>
                      </div>
                    </div>
                    </div>
                  <p>KHÓA HỌC 2</p>
                </div>
              </div>
              <div class="col-6 khoa_hoc ">
                <div class="p-3 border bg-light">
                  <div id="accordion">
                    <div class="card">
                      <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                          <button class="btn btn-link" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                            <iframe width="300" height="200" src="https://www.youtube.com/embed/Oz8RF_1eGxw"
                            title="YouTube video player" frameborder="0" allow="accelerometer; autoplay;
                            clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </h5>
                      </div>
                      <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">nọi đung </div>
                      </div>
                    </div>
                    </div>
                  <p>KHÓA HỌC 3</p>
                </div>
              </div>
              <div class="col-6 khoa_hoc ">
                <div class="p-3 border bg-light">
                  <div id="accordion">
                  <div class="card">
                    <div class="card-header" id="headingFour">
                      <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                          <iframe width="300" height="200" src="https://www.youtube.com/embed/Oz8RF_1eGxw"
                          title="YouTube video player" frameborder="0" allow="accelerometer; autoplay;
                          clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      </h5>
                    </div>
                    <div id="collapseFour" class="collapse show" aria-labelledby="headingFour" data-parent="#accordion">
                      <div class="card-body">nọi đung </div>
                    </div>
                  </div>
                  </div>
                  <p>KHÓA HỌC 4</p>
                </div>
              </div>
            </div>
        </div>
        <div class="content2">
          <h2>CÁC BÀI TẬP TIÊU BIỂU</h2>
          <div class="row">
            <div class="col-sm bt  ">
              <a href="#"><img src="./img/demo.jfif" alt=""></a>
              <p>tên bài tập</p>
            </div>
            <div class="col-sm bt">
              <a href="#"><img src="./img/demo.jfif" alt=""></a>
              <p>tên bài tập</p>
            </div>
            <div class="col-sm bt">
              <a href="#"><img src="./img/demo.jfif" alt=""></a>
              <p>tên bài tập</p>
            </div>
          </div>
        </div>
        <div class="footer">
          <div class="row">
            <div class="col-sm thongtin  ">
              <h2 style="text-align: left;"></h2>
              <h4>LIÊN KẾT</h4>
              <ul class="thong_tin">
                <li class="thong_tin">Góp ý - Phản hồi</li>
                <li class="thong_tin">Điệu kiện sử dụng </li>
                <li class="thong_tin">Chính sách bảo mật</li>
                <li class="thong_tin">Giải quyết khiếu nại</li>
              </ul>
            </div>
            <div class="col-sm thongtin">
             <h4>KHÓA HỌC</h4>
             <ul class="thong_tin">
              <li class="thong_tin">Yoga</li>
              <li class="thong_tin">giảm căng cơ</li>
              <li class="thong_tin">Tăng cân</li>
              <li class="thong_tin">Giảm cân</li>
            </ul>
            </div>
            <div class="col-sm thongtin">
              <h4>LIÊN HỆ</h4>
              <ul class="thong_tin">
                <li class="thong_tin">SĐT:01471427481</li>
                <li class="thong_tin">Địa chỉ: Nguyễn Văn Linh, Ninh Kiều, TP Cần Thơ</li>
                <li class="thong_tin">Chính sách bảo mật</li>
                <li class="thong_tin">Chính sách giải quyết khiếu nại</li>
              </ul>
            </div>
            <div class="col-sm thongtin">
              <h4>GÓP Ý</h4>
            </div>
          </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>