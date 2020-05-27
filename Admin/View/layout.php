<!doctype html>
<html>
<head>
        <title>Admin</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link href="../Public/css/admin.css" rel="stylesheet">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
</head>
<body>
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"> Admin</a>
    </div>
    <ul class="nav navbar-nav">
      <li  ><a href="index.php?page=trangchinh">Thống kê</a></li>
      <li><a href="index.php?page=taikhoan">Tài khoản</a></li>
      <li ><a href="index.php?page=sanpham">Sản phẩm</a></li>
      <li><a href="index.php?page=danhmuc">Danh mục</a></li>
      <li><a href="../index.php">Trang chủ</a></li>
    </ul>
  </div>
</nav>
<?php
  if(!isset($VIEWNAME)){
    $VIEWNAME = 'trangchinh.php';
  }
  require_once $VIEWNAME;
?>
</body>
</html>
<script type="text/javascript" src="../Public/js/navbar.js"></script>
