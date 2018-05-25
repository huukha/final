<?php

?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Xuka Photo</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <!-- Custom styles for this template -->
    <!-- <link href="css/agency.css" rel="stylesheet"> -->

  </head>

  <body id="page-top">

  	<div>
  		<a href='#' data-toggle='modal' data-target='#login-modal'><i class='fa fa-sign-in' aria-hidden='true'></i> Đăng nhập</a>
  		<a href='#' data-toggle='modal' data-target='#signup-modal'><i class='fa fa-user-plus' aria-hidden='true'></i> Đăng ký</a>
  	</div>

    <!-- Modal Login -->
    <div id="login-modal" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <form id="login-form" method="POST" action="<?php  $_SERVER["PHP_SELF"] ?>">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Đăng nhập</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
              <div id="error">
                <!-- Hiển thị lỗi -->
              </div>
              <div class="form-group">
                <label for="username">Tài khoản</label>
                <input type="text" class="form-control" name="username" id="username" maxlength="30" placeholder="Nhập tài khoản" required>
              </div>
              <div class="form-group">
                <label for="password">Mật khẩu</label>
                <input type="password" class="form-control" name="password" id="password" maxlength="30" placeholder="Nhập mật khẩu" required>
              </div>
              <!-- <div class="checkbox">
                <label><input type="checkbox" checked> Nhớ tài khoản</label>
              </div> -->
              <button type="submit" class="btn btn-success btn-block" id="btn-login">Đăng nhập</button>
            </div>
            <div class="modal-footer">
              <span><a href="#" data-toggle="modal" data-target="#signup-modal" onclick="resetFormSU()">Đăng ký</a> tài khoản</span>
            </div>
          </div>
        </form>
      </div>
    </div>
    <!-- Modal Signup -->
    <div id="signup-modal" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <form id="signup-form" method="POST" action="<?php  $_SERVER["PHP_SELF"] ?>">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Đăng ký</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
              <div id="errorsu">
                <!-- Hiển thị lỗi -->
              </div>
              <div class="form-group">
                <label for="fullname">Họ tên</label>
                <input type="text" class="form-control" name="fullname" id="fullname" maxlength="50" placeholder="Nhập họ tên" required>
              </div>
              <div class="form-group">
                <label for="usernamesu">Tài khoản</label>
                <input type="text" class="form-control" name="usernamesu" id="usernamesu" maxlength="30" placeholder="Nhập tài khoản" required>
              </div>
              <div class="form-group">
                <label for="passwordsu">Mật khẩu</label>
                <div class="input-group">
                  <input type="password" class="form-control" name="passwordsu" id="passwordsu" maxlength="30" placeholder="Nhập mật khẩu mới" required>
                  <span class="input-group-addon" id="showpass"><i class="fa fa-eye" aria-hidden="true"></i></span>
                </div>
              </div>
              <div class="form-group">
              <div class="input-group">
                <input type="password" class="form-control" name="repassword" id="repassword" maxlength="30" placeholder="Nhập lại mật khẩu" required>
                <span class="input-group-addon" id="showpass2"><i class="fa fa-eye" aria-hidden="true"></i></span>
              </div>
              </div>
              <!-- <label class="switch">
                <input type="checkbox" onclick="showPass2()">
                <span class="slider round" data-toggle="showpass" data-placement="right" title="Hiện mật khẩu"></span>
              </label>
              <div class="checkbox">
                <label><input type="checkbox" checked> Nhớ tài khoản</label>
              </div> -->
              <button type="submit" class="btn btn-warning btn-block" id="btn-signup">Đăng ký</button>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger btn-block" id="reset-btn" onclick="resetFormSU()">Nhập lại</button>
            </div>
          </div>
        </form>
      </div>
    </div>

    <!-- Modal Alert-->
    <div id="alert-modal" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title"><i class="fa fa-hand-peace-o" aria-hidden="true"></i> Welcome to HK Store</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <p id="content"></p>
            <p>Bấm vào <a href="#" data-toggle="modal" data-target="#login-modal">đây</a> để đăng nhập</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-info" data-dismiss="modal">Đóng</button>
          </div>
        </div>
      </div>        
    </div>
</body>



    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<script src="js/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


<script src="js/js-login.js"></script>

