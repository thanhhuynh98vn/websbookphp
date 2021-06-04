<?php
	include('connect/ket_noi.php');
	session_start();
	if(!isset($_SESSION['kiem-tra-dang-nhap'])){
		echo "Bạn không có quyền truy cập trang này";
		echo '<a href="../">về trang chủ</a>';
		exit();
	}
	if(isset($_GET['thoat'])){
		unset($_SESSION['kiem-tra-dang-nhap']);
		header("Location: controls/login.php");
	}
	
?>		



<!DOCTYPE html>
<html>
<head>
	<title>quản trị cửa hàng</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css">
</head>
<body>
	<div id="banner">
		<img class="logo" src="img/logo.png">
		<a class="logo" href="./"> QUẢN TRỊ CỬA HÀNG HUMG-BOOKS</a>
		<a class="right" href="?thoat=true">THOÁT</a>
		<a class="right" href="../">XEM WEB</a>
	</div>
	<div id="cont">
		<div id="menu-doc">
			<ul>
				<li><a href="?p=them-sach-moi">THÊM SÁCH MỚI</a></li>
				<li><a href="?p=danh-muc-sach">KHO SÁCH</a></li>
				<li><a href="?p=quan-ly-don-hang">ĐƠN HÀNG</a></li>
				<li><a href="?p=doi-mat-khau">ĐỔI MẬT KHẨU</a></li>
			</ul>
		</div>
		<div id="dieu-huong">
			<?php
				include('controls/dieu_huong.php');
			?>
		</div>
	</div>
</body>
</html>