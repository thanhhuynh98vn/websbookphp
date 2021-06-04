<?php
	include('../connect/ket_noi.php');
	session_start();
	$dayidSach = "";
	$dayslSach = "";
	$tenKhachHang = $_SESSION['khachHang']['hoTen'];
	$sdtKhachHang = $_SESSION['khachHang']['sdt'];
	$diaChiKhachHang = $_SESSION['khachHang']['diaChi'];
	foreach ($_SESSION['giohang'] as $idSach => $sl) {
		# code...
		$dayidSach = $dayidSach.$idSach.'//';
		$dayslSach = $dayslSach.$sl.'//';
	}
	$tv2 = "INSERT INTO don_hang (tenKhachHang, sdtKhachHang, diaChiKhachHang, dayIdSach, daySoLuong) VALUES ('$tenKhachHang', '$sdtKhachHang', '$diaChiKhachHang', '$dayidSach', '$dayslSach')";
	mysqli_query($conn,$tv2);
	$_SESSION['thanhCong'] = true;
	header("Location: ../?p=thanh-toan-thanh-cong");
// 
 ?>
