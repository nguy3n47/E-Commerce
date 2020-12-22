<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Account</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('client/css/styleLoveProduct.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('client/css/stylesProfile.css') }}">
  <!--icon-->
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>

</head>

<body>

  <div class="wrapper">
    <!-- silebar left -->
    <div class="sidebar">
      <div class="d-flex justify-content-center align-items-center" style="margin-bottom: 20px;">
        <div class="ms-1" style="margin-right:15px;">

          <!-- avatar -->
          <img class="rounded-circle" width="54" height="54" class="avatar" src="./avatars/profile.jpg">

        </div>
        <div class="ms-1">
          <div class="h5 m-0">
            <!-- Tên người dùng -->
            <!--<?php echo $post['userFullname'] ?>-->UserName
          </div>
        </div>
      </div>

      <!-- Danh sách chức năng-->
      <ul>
        <li class="nav-item">
          <a href="#"><i class="fas fa-user"></i>Thông tin tài khoản</a>
        </li>
        <li>
          <a href="#"><i class="fas fa-map-marker-alt"></i>Địa chỉ</a>
        </li>
        <li class="nav-item">
          <a href="#"><i class="fas fa-unlock-alt"></i>Đổi mật khẩu</a>
        </li>
        <li>
          <a href="#"><i class="fas fa-heart"></i>Sản phẩm yêu thích</a>
        </li>
      </ul>

    </div>

    <!-- main content right (chèn php bắt sự kiện để hiện nội dung phần này)-->


  </div>

  <!-- Script -->
  <script type="text/javascript" src="script.js"></script>

</body>

</html>