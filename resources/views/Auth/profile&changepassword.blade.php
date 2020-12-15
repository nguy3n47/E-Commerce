<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Side Navigation Bar</title>
  <link rel="stylesheet" href="../public/client/css/stylesProfile.css">
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>

  <div class="wrapper">
    <div class="sidebar">
      <div class="d-flex justify-content-center align-items-center" style="margin-bottom: 20px;">
        <div class="ms-1" style="margin-right:15px;">
          <img class="rounded-circle" width="54" height="54" class="avatar" src="../public/client/images/avatars/profile.jpg">
        </div>
        <div class="ms-1">
          <div class="h5 m-0">
            <!--<?php echo $post['userFullname'] ?>-->UserName</div>
        </div>
      </div>

      <ul>
        <li><a href="#"><i class="fas fa-user"></i>Thông tin tài khoản</a></li>
        <li><a href="#"><i class="fas fa-money-check-alt"></i></i>Ngân hàng</a></li>
        <li><a href="#"><i class="fas fa-map-marker-alt"></i>Địa chỉ</a></li>
        <li><a href="#"><i class="fas fa-unlock-alt"></i></i>Đổi mật khẩu</a></li>
        <li><a href="#"><i class="fas fa-heart"></i>Sản phẩm yêu thích</a></li>
      </ul>
    </div>
    <div class="main_content">
      <div class="header">
        <h4>
          Thông tin cá nhân
      </h4>
      </div>
      <div class="row">
        <div class="info col-7">
          <form action="" class="form" method="POST">
            <div class="form-group">
              <label for="text">Họ Tên</label>
              <input type="text" id="fullname" class="form-control" required>
            </div>

            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" name="email" id="email" class="form-control" required>
            </div>

            <div class="form-group">
              <label for="text">Số điện thoại</label>
              <input type="text" id="phone" class="form-control" required>
            </div>

            <div>
              <input type="date" id="dt" onchange="mydate1();" hidden />
              <input type="text" id="ndt" onclick="mydate();" hidden />
              <input type="button" class="btn-Date" Value="Date" onclick="mydate();" />
            </div>

            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions"
                style="width:20px;height:20px; margin-right: 10px;" id="inlineRadio1" value="option1">
              <label class="form-check-label" for="inlineRadio1" style="margin-top: 5px;">Nam</label>

              <input class="form-check-input" type="radio" name="inlineRadioOptions"
                style="width:20px;height:20px;margin: 10px;" id="inlineRadio2" value="option2">
              <label class="form-check-label" for="inlineRadio2" style="margin-top: 5px;">Nữ</label>

              <input class="form-check-input" type="radio" name="inlineRadioOptions"
                style="width:20px;height:20px;margin: 10px;" id="inlineRadio3" value="option3">
              <label class="form-check-label" for="inlineRadio3" style="margin-top: 5px;">Khác</label>
            </div>


            <button button type="submit" class="btn btn-primary" style="width:100px;">Cập nhật</button>

        </div>

        <div class="info col-3">
          <section id="about">
            <div class="about container">
              <div class="col-left">
                <div class="about-img">
                  <img src="../public/client/images/avatars/profile.jpg" alt="img">
                </div>
              </div>
            </div>
            <div class="form-group input-img">
              <label for="avatar"></label>
              <input type="file" class="form-control-file" id="avatar" name="avatar">
            </div>
          </section>
        </div>

      </div>
    </div>
    <!--<div class="main_content">
      <div class="header">
        <h4>
          Thay đổi mật khẩu
        </h4>
      </div>

      <div class="change-password">
        <form action="" class="form" method="POST">
          <div class="form-group">
            <label for="password">Mật khẩu cũ</label>
            <input type="password" class="form-control" required>
          </div>

          <div class="form-group">
            <label for="password">Mật khẩu mới</label>
            <input type="password" class="form-control" required>
          </div>

          <div class="form-group">
            <label for="password">Xác nhận mật khẩu mới</label>
            <input type="password" class="form-control" required>
          </div>

          <button button type="submit" class="btn btn-primary" style="width:100px;">Cập nhật</button>

      </div>
      </div>-->
      
    </div>
  </div>


  <script type="text/javascript" src="../public/client/js/product&profile.js"></script>
</body>

</html>